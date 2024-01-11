<?php declare(strict_types=1);

namespace Concardis\Payengine\Lib\Internal\Connection;

use \Curl\Curl;

use \Concardis\Payengine\Lib\Internal\Config\MerchantConfiguration;
use \Concardis\Payengine\Lib\Internal\Constants\Api;
use \Concardis\Payengine\Lib\Internal\Exception\PayEngineResourceException;
use JetBrains\PhpStorm\Pure;

/**
 * Class Connection
 * @package Concardis\Payengine\Lib\Internal\Connection
 */
class Connection implements ConnectionInterface
{

    /**
     * @var MerchantConfiguration
     */
    private MerchantConfiguration $merchantConfig;

    /**
     * @var Curl
     */
    private Curl $curl;

    /**
     * @param Curl|null $curl
     */
    public function __construct(Curl $curl = null)
    {
        if (is_null($curl)) {
            $this->curl = new Curl();
        } else {
            $this->curl = $curl;
        }
    }

    /**
     * Set default Header to curl wrapper
     */
    private function setDefaultHeader(): void
    {
        $this->curl->setHeader('Authorization', 'Basic ' . $this->getMerchantConfig()->getAuthorizationHeader());
        $this->curl->setHeader('Content-Type', 'application/json');
    }

    /**
     * @return MerchantConfiguration
     */
    public function getMerchantConfig(): MerchantConfiguration
    {
        return $this->merchantConfig;
    }

    /**
     * @param MerchantConfiguration $merchantConfig
     * @return Connection
     */
    public function setMerchantConfig(MerchantConfiguration $merchantConfig): self
    {
        $this->merchantConfig = $merchantConfig;
        return $this;
    }

    /**
     * @return string
     */
    #[Pure] protected function getEndpoint(): string
    {
        $mode = Api::API_ENDPOINT_TEST;
        if ($this->merchantConfig->isIsLiveMode()) {
            $mode = Api::API_ENDPOINT_PROD;
        }

        if (!is_null($this->merchantConfig->getEndpoint())) {
            $mode = $this->merchantConfig->getEndpoint();
        }
        return $mode;
    }

    /**
     * @param string $path
     * @param array $payload
     *
     * @return mixed
     * @throws PayEngineResourceException
     */
    public function post(string $path, array $payload): mixed
    {
        $this->setDefaultHeader();
        $resourceEndpoint = $this->getEndpoint() . $path;

        $payload = json_encode($payload);

        $this->curl->post($resourceEndpoint, $payload);

        $this->checkSuccess($resourceEndpoint, $payload);

        return json_decode($this->curl->response, true);
    }

    /**
     * @param string $path
     * @param array $payload
     *
     * @return mixed
     * @throws PayEngineResourceException
     */
    public function patch(string $path, array $payload): mixed
    {
        $this->setDefaultHeader();
        $resourceEndpoint = $this->getEndpoint() . $path;
        $payload = json_encode($payload);
        $this->curl->patch($resourceEndpoint, $payload, true);

        $this->checkSuccess($resourceEndpoint, $payload);

        return json_decode($this->curl->response, true);
    }

    /**
     * @param string $path
     *
     * @return mixed
     * @throws PayEngineResourceException
     */
    public function delete(string $path): mixed
    {
        $this->setDefaultHeader();
        $resourceEndpoint = $this->getEndpoint() . $path;
        $this->curl->delete($resourceEndpoint);

        $this->checkSuccess($resourceEndpoint);

        return json_decode($this->curl->response, true);
    }

    /**
     * @param string $path
     * @param array $queryParams
     *
     * @return mixed
     * @throws PayEngineResourceException
     */
    public function get(string $path, array $queryParams = []): mixed
    {
        $url = $this->getEndpoint() . $path;
        if (count($queryParams) > 0) {
            $url .= '?' . http_build_query($queryParams);
        }

        $url = preg_replace('/(%5B[0-9]%5D)/', '', $url);

        $this->setDefaultHeader();
        $this->curl->get($url, []);

        $this->checkSuccess($url);

        return json_decode($this->curl->response, true);
    }

    /**
     * @param string $url
     * @param string|null $payload
     * @return bool
     * @throws PayEngineResourceException
     */
    private function checkSuccess(string $url, ?string $payload = null): bool
    {
        if (!$this->curl->isSuccess()) {
            $requestException = new PayEngineResourceException(
                $this->curl->error_message ?? '',
                $this->curl->http_status_code
            );

            if (!empty($payload)) {
                $requestException->setPayload($payload);
            }

            $requestException->setResourceEndpoint($url);
            $requestException->setRequestHeaders($this->curl->request_headers ?? []);
            $requestException->setResponseHeader($this->curl->response_headers);
            if (is_string($this->curl->response)) {
                $requestException->setResponseBody($this->curl->response);
            }
            throw $requestException;
        }
        return true;
    }

}
