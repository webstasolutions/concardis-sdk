<?php declare(strict_types=1);

namespace Concardis\Payengine\Lib\Internal\Exception;

/**
 * Class PayengineResourceException
 * @package Concardis\Payengine\Lib\Internal\Exception
 */
class PayengineResourceException extends \Exception
{
    /**
     * Resource endpoint of the request
     *
     * @var string
     */
    protected string $resourceEndpoint;

    /**
     * Payload of the request (request body)
     *
     * @var string
     */
    protected string $payload;

    /**
     * Request headers
     *
     * @var array
     */
    protected array $requestHeaders;

    /**
     * Body of the API response
     *
     * @var string
     */
    protected string $responseBody;

    /**
     * Header of the API response
     *
     * @var array
     */
    protected array $responseHeader;

    /**
     * Get resource endpoint of the request
     *
     * @return string
     */
    public function getResourceEndpoint(): string
    {
        return $this->resourceEndpoint;
    }

    /**
     * Set resource endpoint of the request
     *
     * @param string $resourceEndpoint
     * @return PayengineResourceException
     */
    public function setResourceEndpoint(string $resourceEndpoint): self
    {
        $this->resourceEndpoint = $resourceEndpoint;
        return $this;
    }

    /**
     * Get payload of the request (request body)
     *
     * @return string
     */
    public function getPayload(): string
    {
        return $this->payload;
    }

    /**
     * Set payload of the request (request body)
     *
     * @param string $payload
     * @return PayengineResourceException
     */
    public function setPayload(string $payload): self
    {
        $this->payload = $payload;
        return $this;
    }

    /**
     * Get request headers
     *
     * @return array
     */
    public function getRequestHeaders(): array
    {
        return $this->requestHeaders;
    }

    /**
     * Set request headers
     *
     * @param array $requestHeaders
     * @return PayengineResourceException
     */
    public function setRequestHeaders(array $requestHeaders): self
    {
        $this->requestHeaders = $requestHeaders;
        return $this;
    }

    /**
     * Get body of the API response
     *
     * @return string
     */
    public function getResponseBody(): string
    {
        return $this->responseBody;
    }

    /**
     * Set body of the API response
     *
     * @param string $responseBody
     * @return PayengineResourceException
     */
    public function setResponseBody(string $responseBody): self
    {
        $this->responseBody = $responseBody;
        return $this;
    }

    /**
     * Get header of the API response
     *
     * @return array
     */
    public function getResponseHeader(): array
    {
        return $this->responseHeader;
    }

    /**
     * Set header of the API response
     *
     * @param array $responseHeader
     * @return PayengineResourceException
     */
    public function setResponseHeader(array $responseHeader): self
    {
        $this->responseHeader = $responseHeader;
        return $this;
    }
}