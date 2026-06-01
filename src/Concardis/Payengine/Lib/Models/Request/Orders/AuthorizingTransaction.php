<?php declare(strict_types=1);

namespace Concardis\Payengine\Lib\Models\Request\Orders;

use Concardis\Payengine\Lib\Models\Request\AbstractClass\AbstractOrder;

/**
 * Class AuthorizingTransaction
 * @package Concardis\Payengine\Lib\Models\Request\Orders
 */
class AuthorizingTransaction extends AbstractOrder
{

    /**
     * @var \Concardis\Payengine\Lib\Models\Request\Orders\Payment\Payment|null
     */
    private ?Payment\Payment $payment = null;

    /**
     * @var string
     */
    private string $product = '';

    /**
     * @var Async|null
     */
    private ?Async $async = null;

    /**
     * @return \Concardis\Payengine\Lib\Models\Request\Orders\Payment\Payment|null
     */
    public function getPayment(): ?Payment\Payment
    {
        return $this->payment;
    }

    /**
     * @param \Concardis\Payengine\Lib\Models\Request\Orders\Payment\Payment|null $payment
     * @return AuthorizingTransaction
     */
    public function setPayment(?Payment\Payment $payment): self
    {
        $this->payment = $payment;
        return $this;
    }

    /**
     * @return string
     */
    public function getProduct(): string
    {
        return $this->product;
    }

    /**
     * @param string $product
     * @return AuthorizingTransaction
     */
    public function setProduct(string $product): self
    {
        $this->product = $product;
        return $this;
    }

    /**
     * @return Async|null
     */
    public function getAsync(): ?Async
    {
        return $this->async;
    }

    /**
     * @param Async|null $async
     * @return AuthorizingTransaction
     */
    public function setAsync(?Async $async): self
    {
        $this->async = $async;
        return $this;
    }

}
