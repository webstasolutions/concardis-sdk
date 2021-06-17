<?php declare(strict_types=1);

namespace Concardis\Payengine\Lib\Models\Request;

use Concardis\Payengine\Lib\Internal\AbstractClass\AbstractModel;

/**
 * Class PaymentInstrument
 * @package Concardis\Payengine\Lib\Models\Request
 */
class PaymentInstrument extends AbstractModel
{

    /**
     * @var string
     */
    private string $cardNumber;

    /**
     * @var string
     */
    private string $accountHolder;

    /**
     * @var string
     */
    private string $cardHolder;

    /**
     * @var string
     */
    private string $verification;

    /**
     * @var string
     */
    private string $merchantPaymentInstrumentId;

    /**
     * @var string
     */
    private string $product;

    /**
     * @var string
     */
    private string $expiryYear;

    /**
     * @var string
     */
    private string $bic;

    /**
     * @var string
     */
    private string $iban;

    /**
     * @var string
     */
    private string $expiryMonth;

    /**
     * @var string
     */
    private string $bankName;

    /**
     * @return string
     */
    public function getCardNumber(): string
    {
        return $this->cardNumber;
    }

    /**
     * @param string $cardNumber
     * @return PaymentInstrument
     */
    public function setCardNumber(string $cardNumber): self
    {
        $this->cardNumber = $cardNumber;
        return $this;
    }

    /**
     * @return string
     */
    public function getAccountHolder(): string
    {
        return $this->accountHolder;
    }

    /**
     * @param string $accountHolder
     * @return PaymentInstrument
     */
    public function setAccountHolder(string $accountHolder): self
    {
        $this->accountHolder = $accountHolder;
        return $this;
    }

    /**
     * @return string
     */
    public function getCardHolder(): string
    {
        return $this->cardHolder;
    }

    /**
     * @param string $cardHolder
     * @return PaymentInstrument
     */
    public function setCardHolder(string $cardHolder): self
    {
        $this->cardHolder = $cardHolder;
        return $this;
    }

    /**
     * @return string
     */
    public function getVerification(): string
    {
        return $this->verification;
    }

    /**
     * @param string $verification
     * @return PaymentInstrument
     */
    public function setVerification(string $verification): self
    {
        $this->verification = $verification;
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
     * @param string $merchantPaymentInstrumentId
     * @return PaymentInstrument
     */
    public function setMerchantPaymentInstrumentId(string $merchantPaymentInstrumentId): self
    {
        $this->merchantPaymentInstrumentId = $merchantPaymentInstrumentId;
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
     * @return PaymentInstrument
     */
    public function setProduct(string $product): self
    {
        $this->product = $product;
        return $this;
    }

    /**
     * @return string
     */
    public function getExpiryYear(): string
    {
        return $this->expiryYear;
    }

    /**
     * @param string $expiryYear
     * @return PaymentInstrument
     */
    public function setExpiryYear(string $expiryYear): self
    {
        $this->expiryYear = $expiryYear;
        return $this;
    }

    /**
     * @return string
     */
    public function getBic(): string
    {
        return $this->bic;
    }

    /**
     * @param string $bic
     * @return PaymentInstrument
     */
    public function setBic(string $bic): self
    {
        $this->bic = $bic;
        return $this;
    }

    /**
     * @return string
     */
    public function getIban(): string
    {
        return $this->iban;
    }

    /**
     * @param string $iban
     * @return PaymentInstrument
     */
    public function setIban(string $iban): self
    {
        $this->iban = $iban;
        return $this;
    }

    /**
     * @return string
     */
    public function getExpiryMonth(): string
    {
        return $this->expiryMonth;
    }

    /**
     * @param string $expiryMonth
     * @return PaymentInstrument
     */
    public function setExpiryMonth(string $expiryMonth): self
    {
        $this->expiryMonth = $expiryMonth;
        return $this;
    }

    /**
     * @return string
     */
    public function getBankName(): string
    {
        return $this->bankName;
    }

    /**
     * @param string $bankName
     * @return PaymentInstrument
     */
    public function setBankName(string $bankName): self
    {
        $this->bankName = $bankName;
        return $this;
    }
}