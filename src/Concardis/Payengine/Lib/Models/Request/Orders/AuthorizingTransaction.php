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
     * @var \Concardis\Payengine\Lib\Models\Request\Orders\Payment\Payment
     */
    private Payment\Payment $payment;

    /**
     * @var string
     */
    private string $product;

    /**
     * @var Async
     */
    private Async $async;

    /**
     * @return \Concardis\Payengine\Lib\Models\Request\Orders\Payment\Payment
     */
    public function getPayment(): Payment\Payment
    {
        return $this->payment;
    }

    /**
     * @param \Concardis\Payengine\Lib\Models\Request\Orders\Payment\Payment $payment
     * @return AuthorizingTransaction
     */
    public function setPayment(Payment\Payment $payment): self
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
     * @return Async
     */
    public function getAsync(): Async
    {
        return $this->async;
    }

    /**
     * @param Async $async
     * @return AuthorizingTransaction
     */
    public function setAsync(Async $async): self
    {
        $this->async = $async;
        return $this;
    }

}