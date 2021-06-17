<?php declare(strict_types=1);

namespace Concardis\Payengine\Lib\Models\Request\Orders\Payment;

use Concardis\Payengine\Lib\Internal\AbstractClass\AbstractModel;
use Concardis\Payengine\Lib\Models\Request\Orders\Mandate;

/**
 * Class Payment
 * @package Concardis\Payengine\Lib\Models\Request\Orders\Payment
 */
class Payment extends AbstractModel
{
    /**
     * @var string
     */
    private string $accountHolder;

    /**
     * @var string
     */
    private string $bankName;

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
    private string $paymentInstrumentId;

    /**
     * SEPA mandate
     *
     * @var Mandate
     */
    private Mandate $mandate;

    /**
     * @var int
     */
    private int $numberOfRates;

    /**
     * @var integer
     */
    private int $rate;

    /**
     * @var integer
     */
    private int $lastRate;

    /**
     * @var float
     */
    private float $interestRate;

    /**
     * @var integer
     */
    private int $totalAmount;

    /**
     * @var string
     */
    private string $riskIdentId;

    /**
     * @var string
     */
    private string $cardNumber;

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
    private string $expiryYear;

    /**
     * @var string
     */
    private string $expiryMonth;

    /**
     * @return string
     */
    public function getAccountHolder(): string
    {
        return $this->accountHolder;
    }

    /**
     * @param string $accountHolder
     * @return Payment
     */
    public function setAccountHolder(string $accountHolder): self
    {
        $this->accountHolder = $accountHolder;
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
     * @return Payment
     */
    public function setBankName(string $bankName): self
    {
        $this->bankName = $bankName;
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
     * @return Payment
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
     * @return Payment
     */
    public function setIban(string $iban): self
    {
        $this->iban = $iban;
        return $this;
    }

    /**
     * @return string
     */
    public function getPaymentInstrumentId(): string
    {
        return $this->paymentInstrumentId;
    }

    /**
     * @param string $paymentInstrumentId
     * @return Payment
     */
    public function setPaymentInstrumentId(string $paymentInstrumentId): self
    {
        $this->paymentInstrumentId = $paymentInstrumentId;
        return $this;
    }

    /**
     * @return Mandate
     */
    public function getMandate(): Mandate
    {
        return $this->mandate;
    }

    /**
     * @param Mandate $mandate
     * @return Payment
     */
    public function setMandate(Mandate $mandate): self
    {
        $this->mandate = $mandate;
        return $this;
    }

    /**
     * @return string
     */
    public function getRiskIdentId(): string
    {
        return $this->riskIdentId;
    }

    /**
     * @param string $riskIdentId
     * @return Payment
     */
    public function setRiskIdentId(string $riskIdentId): self
    {
        $this->riskIdentId = $riskIdentId;
        return $this;
    }

    /**
     * @return int
     */
    public function getNumberOfRates(): int
    {
        return $this->numberOfRates;
    }

    /**
     * @param int $numberOfRates
     * @return Payment
     */
    public function setNumberOfRates(int $numberOfRates): self
    {
        $this->numberOfRates = $numberOfRates;
        return $this;
    }

    /**
     * @return int
     */
    public function getRate(): int
    {
        return $this->rate;
    }

    /**
     * @param int $rate
     * @return Payment
     */
    public function setRate(int $rate): self
    {
        $this->rate = $rate;
        return $this;
    }

    /**
     * @return int
     */
    public function getLastRate(): int
    {
        return $this->lastRate;
    }

    /**
     * @param int $lastRate
     * @return Payment
     */
    public function setLastRate(int $lastRate): self
    {
        $this->lastRate = $lastRate;
        return $this;
    }

    /**
     * @return float
     */
    public function getInterestRate(): float
    {
        return $this->interestRate;
    }

    /**
     * @param float $interestRate
     * @return Payment
     */
    public function setInterestRate(float $interestRate): self
    {
        $this->interestRate = $interestRate;
        return $this;
    }

    /**
     * @return int
     */
    public function getTotalAmount(): int
    {
        return $this->totalAmount;
    }

    /**
     * @param int $totalAmount
     * @return Payment
     */
    public function setTotalAmount(int $totalAmount): self
    {
        $this->totalAmount = $totalAmount;
        return $this;
    }

    /**
     * @return string
     */
    public function getCardNumber(): string
    {
        return $this->cardNumber;
    }

    /**
     * @param string $cardNumber
     * @return Payment
     */
    public function setCardNumber(string $cardNumber): self
    {
        $this->cardNumber = $cardNumber;
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
     * @return Payment
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
     * @return Payment
     */
    public function setVerification(string $verification): self
    {
        $this->verification = $verification;
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
     * @return Payment
     */
    public function setExpiryYear(string $expiryYear): self
    {
        $this->expiryYear = $expiryYear;
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
     * @return Payment
     */
    public function setExpiryMonth(string $expiryMonth): self
    {
        $this->expiryMonth = $expiryMonth;
        return $this;
    }

    /**
     * @param string $cardHolder
     * @param string $cardNumber
     * @param string $verfication
     * @param string $expiryMonth
     * @param string $expiryYear
     * @return Payment
     */
    public function setCreditcard(
        string $cardHolder,
        string $cardNumber,
        string $verfication,
        string $expiryMonth,
        string $expiryYear
    ): self {
        $this->setCardHolder($cardHolder);
        $this->setCardNumber($cardNumber);
        $this->setVerification($verfication);
        $this->setExpiryMonth($expiryMonth);
        $this->setExpiryYear($expiryYear);
        return $this;
    }

    /**
     * @param string $paymentInstrumentId
     * @return Payment
     */
    public function setCreditcardWithPaymentInstrument(string $paymentInstrumentId): self
    {
        $this->setPaymentInstrumentId($paymentInstrumentId);
        return $this;
    }


    /**
     * @param string $riskIdentId
     * @param string $iban
     * @param string $bic
     * @param string $accountHolder
     * @param string $bankName
     * @return Payment
     */
    public function setRatepayDirectDebit(
        string $riskIdentId,
        string $iban,
        string $bic,
        string $accountHolder,
        string $bankName
    ): self {
        $this->setRiskIdentId($riskIdentId);
        $this->setIban($iban);
        $this->setBic($bic);
        $this->setAccountHolder($accountHolder);
        $this->setBankName($bankName);
        return $this;
    }

    /**
     * @param string $riskIdentId
     * @param string $paymentInstrumentId
     * @return Payment
     */
    public function setRatepayDirectDebitWithPaymentInstrument(string $riskIdentId, string $paymentInstrumentId): self
    {
        $this->setRiskIdentId($riskIdentId);
        $this->setPaymentInstrumentId($paymentInstrumentId);
        return $this;
    }

    /**
     * @param string $riskIdentId
     * @param string $iban
     * @param string $bic
     * @param string $accountHolder
     * @param string $bankName
     * @param integer $rate
     * @param float $interestRate
     * @param integer $numberOfRates
     * @param integer $totalAmount
     * @param integer $lastRate
     * @return Payment
     */
    public function setRatepayInstallmentWithBankData(
        string $riskIdentId,
        string $iban,
        string $bic,
        string $accountHolder,
        string $bankName,
        int $rate,
        float $interestRate,
        int $numberOfRates,
        int $totalAmount,
        int $lastRate
    ): self {
        $this->setRiskIdentId($riskIdentId);
        $this->setIban($iban);
        $this->setBic($bic);
        $this->setAccountHolder($accountHolder);
        $this->setBankName($bankName);
        $this->setRate($rate);
        $this->setInterestRate($interestRate);
        $this->setNumberOfRates($numberOfRates);
        $this->setTotalAmount($totalAmount);
        $this->setLastRate($lastRate);
        return $this;
    }

    /**
     * @param string $riskIdentId
     * @param string $paymentInstrumentId
     * @param integer $rate
     * @param float $interestRate
     * @param integer $numberOfRates
     * @param integer $totalAmount
     * @param integer $lastRate
     * @return Payment
     */
    public function setRatepayInstallmentWithPaymentInstrument(
        string $riskIdentId,
        string $paymentInstrumentId,
        int $rate,
        float $interestRate,
        int $numberOfRates,
        int $totalAmount,
        int $lastRate
    ): self {
        $this->setRiskIdentId($riskIdentId);
        $this->setPaymentInstrumentId($paymentInstrumentId);
        $this->setRate($rate);
        $this->setInterestRate($interestRate);
        $this->setNumberOfRates($numberOfRates);
        $this->setTotalAmount($totalAmount);
        $this->setLastRate($lastRate);
        return $this;
    }

    /**
     * @param string $riskIdentId
     * @param integer $rate
     * @param float $interestRate
     * @param integer $numberOfRates
     * @param integer $totalAmount
     * @param integer $lastRate
     * @return Payment
     */
    public function setRatepayInstallment(
        string $riskIdentId,
        int $rate,
        float $interestRate,
        int $numberOfRates,
        int $totalAmount,
        int $lastRate
    ): self {
        $this->setRiskIdentId($riskIdentId);
        $this->setRate($rate);
        $this->setInterestRate($interestRate);
        $this->setNumberOfRates($numberOfRates);
        $this->setTotalAmount($totalAmount);
        $this->setLastRate($lastRate);
        return $this;
    }

    /**
     * @param string $riskIdentId
     * @return Payment
     */
    public function setRatepayInvoice(string $riskIdentId): self
    {
        $this->setRiskIdentId($riskIdentId);
        return $this;
    }

    /**
     * @param Mandate $mandate
     * @param string $iban
     * @param string $bic
     * @param string $accountHolder
     * @param string $bankName
     * @return Payment
     */
    public function setSepa(Mandate $mandate, string $iban, string $bic, string $accountHolder, string $bankName): self
    {
        $this->setMandate($mandate);
        $this->setIban($iban);
        $this->setBic($bic);
        $this->setAccountHolder($accountHolder);
        $this->setBankName($bankName);
        return $this;
    }

    /**
     * @param Mandate $mandate
     * @param string $paymentInstrumentId
     * @return Payment
     */
    public function setSepaWithPaymentInstrument(Mandate $mandate, string $paymentInstrumentId): self
    {
        $this->setMandate($mandate);
        $this->setPaymentInstrumentId($paymentInstrumentId);
        return $this;
    }
}