<?php declare(strict_types=1);

namespace Concardis\Payengine\Lib\Internal\Config;

/**
 * Class MerchantConfiguration
 * @package Concardis\Payengine\Lib\Internal\Config
 */
class MerchantConfiguration
{
    /**
     * @var string
     */
    private string $merchantId;

    /**
     * @var string
     */
    private string $apiKey;

    /**
     * @var boolean
     */
    private bool $isLiveMode;

    /**
     * @var string
     */
    private string $endpoint;

    /**
     * @return string
     */
    public function getAuthorizationHeader(): string
    {
        return base64_encode($this->merchantId . ":" . $this->apiKey);
    }

    /**
     * @return string
     */
    public function getMerchantId(): string
    {
        return $this->merchantId;
    }

    /**
     * @param string $merchantId
     * @return MerchantConfiguration
     */
    public function setMerchantId(string $merchantId): self
    {
        $this->merchantId = $merchantId;
        return $this;
    }

    /**
     * @return string
     */
    public function getApiKey(): string
    {
        return $this->apiKey;
    }

    /**
     * @param string $apiKey
     * @return MerchantConfiguration
     */
    public function setApiKey(string $apiKey): self
    {
        $this->apiKey = $apiKey;
        return $this;
    }

    /**
     * @return bool
     */
    public function isIsLiveMode(): bool
    {
        return $this->isLiveMode;
    }

    /**
     * @param bool $isLiveMode
     * @return MerchantConfiguration
     */
    public function setIsLiveMode(bool $isLiveMode): self
    {
        $this->isLiveMode = $isLiveMode;
        return $this;
    }

    /**
     * @return string
     */
    public function getEndpoint(): string
    {
        return $this->endpoint;
    }

    /**
     * @param string $endpoint
     * @return MerchantConfiguration
     */
    public function setEndpoint(string $endpoint): self
    {
        $this->endpoint = $endpoint;
        return $this;
    }

}