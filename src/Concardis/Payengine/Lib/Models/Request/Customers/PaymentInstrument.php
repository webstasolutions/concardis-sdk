<?php declare(strict_types=1);

namespace Concardis\Payengine\Lib\Models\Request\Customers;

use Concardis\Payengine\Lib\Internal\AbstractClass\AbstractModel;

/**
 * Class PaymentInstrument
 * @package Concardis\Payengine\Lib\Models\Request\Customers
 */
class PaymentInstrument extends AbstractModel
{
    /**
     * @var string
     */
    private string $paymentInstrumentId;

    /**
     * @return string
     */
    public function getPaymentInstrumentId(): string
    {
        return $this->paymentInstrumentId;
    }

    /**
     * @param string $paymentInstrumentId
     * @return PaymentInstrument
     */
    public function setPaymentInstrumentId(string $paymentInstrumentId): self
    {
        $this->paymentInstrumentId = $paymentInstrumentId;
        return $this;
    }

}