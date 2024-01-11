<?php declare(strict_types=1);

namespace Concardis\Payengine\Lib\Models\Response;

use Concardis\Payengine\Lib\Internal\AbstractClass\AbstractResponseModel;

/**
 * Class PaymentInstrument
 * @package Concardis\Payengine\Lib\Models\Response
 */
class PaymentInstrument extends AbstractResponseModel
{

    /**
     * @var string
     */
    private string $paymentInstrumentId;

    /**
     * @var string|null
     */
    private ?string $merchantPaymentInstrumentId;

    /**
     * @var string|null
     */
    private ?string $product = null;

    /**
     * @var boolean
     */
    private bool $recurring;

    /**
     * @var array
     */
    private array $attributes;

    /**
     * @var  string
     */
    private string $origin;

    /**
     * @var  string
     */
    private string $type;

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

    /**
     * @return string
     */
    public function getMerchantPaymentInstrumentId(): string
    {
        return $this->merchantPaymentInstrumentId;
    }

    /**
     * @param string|null $merchantPaymentInstrumentId
     * @return PaymentInstrument
     */
    public function setMerchantPaymentInstrumentId(?string $merchantPaymentInstrumentId): self
    {
        $this->merchantPaymentInstrumentId = $merchantPaymentInstrumentId;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getProduct(): ?string
    {
        return $this->product;
    }

    /**
     * @param string $product
     * @return PaymentInstrument
     */
    public function setProduct(string $product): self
    {
        $this->product = $product;
        return $this;
    }

    /**
     * @return bool
     */
    public function isRecurring(): bool
    {
        return $this->recurring;
    }

    /**
     * @param bool $recurring
     * @return PaymentInstrument
     */
    public function setRecurring(bool $recurring): self
    {
        $this->recurring = $recurring;
        return $this;
    }

    /**
     * @return array
     */
    public function getAttributes(): array
    {
        return $this->attributes;
    }

    /**
     * @param array $attributes
     * @return PaymentInstrument
     */
    public function setAttributes(array $attributes): self
    {
        $this->attributes = $attributes;
        return $this;
    }

    /**
     * @return string
     */
    public function getOrigin(): string
    {
        return $this->origin;
    }

    /**
     * @param string $origin
     * @return PaymentInstrument
     */
    public function setOrigin(string $origin): self
    {
        $this->origin = $origin;
        return $this;
    }

    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @param string $type
     * @return PaymentInstrument
     */
    public function setType(string $type): self
    {
        $this->type = $type;
        return $this;
    }
}
