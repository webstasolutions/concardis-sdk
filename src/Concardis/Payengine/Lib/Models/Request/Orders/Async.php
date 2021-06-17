<?php declare(strict_types=1);

namespace Concardis\Payengine\Lib\Models\Request\Orders;

use Concardis\Payengine\Lib\Internal\AbstractClass\AbstractModel;

/**
 * Class Async
 * @package Concardis\Payengine\Lib\Models\Request\Orders
 */
class Async extends AbstractModel
{

    /**
     * @var string
     */
    private string $successUrl;

    /**
     * @var string
     */
    private string $failureUrl;

    /**
     * @var string
     */
    private string $cancelUrl;

    /**
     * @return string
     */
    public function getSuccessUrl(): string
    {
        return $this->successUrl;
    }

    /**
     * @param string $successUrl
     * @return Async
     */
    public function setSuccessUrl(string $successUrl): self
    {
        $this->successUrl = $successUrl;
        return $this;
    }

    /**
     * @return string
     */
    public function getFailureUrl(): string
    {
        return $this->failureUrl;
    }

    /**
     * @param string $failureUrl
     * @return Async
     */
    public function setFailureUrl(string $failureUrl): self
    {
        $this->failureUrl = $failureUrl;
        return $this;
    }

    /**
     * @return string
     */
    public function getCancelUrl(): string
    {
        return $this->cancelUrl;
    }

    /**
     * @param string $cancelUrl
     * @return Async
     */
    public function setCancelUrl(string $cancelUrl): self
    {
        $this->cancelUrl = $cancelUrl;
        return $this;
    }

}