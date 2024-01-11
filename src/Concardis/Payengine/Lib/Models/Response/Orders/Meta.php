<?php declare(strict_types=1);

namespace Concardis\Payengine\Lib\Models\Response\Orders;

use Concardis\Payengine\Lib\Internal\AbstractClass\AbstractResponseModel;

/**
 * Class Meta
 * @package Concardis\Payengine\Lib\Models\Response\Orders
 */
class Meta extends AbstractResponseModel
{

    /**
     * @var string|null
     * relevant for RatePAY
     */
    private ?string $riskIdentId = null;

    /**
     * @var integer|null
     * relevant for RatePAY Installment
     */
    private ?int $totalAmount = null;

    /**
     * @var integer|null
     * relevant for RatePAY Installment
     */
    private ?int $numberOfRates = null;

    /**
     * @var integer|null
     * relevant for RatePAY Installment
     */
    private ?int $rate = null;

    /**
     * @var integer|null
     * relevant for RatePAY Installment
     */
    private ?int $lastRate = null;

    /**
     * @var float|null
     * relevant for RatePAY Installment
     */
    private ?float $interestRate = null;

    /**
     * @var integer|null
     * relevant for RatePAY Installment
     */
    private ?int $paymentFirstDay = null;

    /**
     * @var string|null
     * relevant for RatePAY Installment
     */
    private ?string $descriptor = null;

    /**
     * @return string|null
     */
    public function getRiskIdentId(): ?string
    {
        return $this->riskIdentId;
    }

    /**
     * @param string $riskIdentId
     * @return Meta
     */
    public function setRiskIdentId(string $riskIdentId): self
    {
        $this->riskIdentId = $riskIdentId;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getTotalAmount(): ?int
    {
        return $this->totalAmount;
    }

    /**
     * @param int $totalAmount
     * @return Meta
     */
    public function setTotalAmount(int $totalAmount): self
    {
        $this->totalAmount = $totalAmount;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getNumberOfRates(): ?int
    {
        return $this->numberOfRates;
    }

    /**
     * @param int $numberOfRates
     * @return Meta
     */
    public function setNumberOfRates(int $numberOfRates): self
    {
        $this->numberOfRates = $numberOfRates;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getRate(): ?int
    {
        return $this->rate;
    }

    /**
     * @param int $rate
     * @return Meta
     */
    public function setRate(int $rate): self
    {
        $this->rate = $rate;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getLastRate(): ?int
    {
        return $this->lastRate;
    }

    /**
     * @param int $lastRate
     * @return Meta
     */
    public function setLastRate(int $lastRate): self
    {
        $this->lastRate = $lastRate;
        return $this;
    }

    /**
     * @return float|null
     */
    public function getInterestRate(): ?float
    {
        return $this->interestRate;
    }

    /**
     * @param float $interestRate
     * @return Meta
     */
    public function setInterestRate(float $interestRate): self
    {
        $this->interestRate = $interestRate;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getPaymentFirstDay(): ?int
    {
        return $this->paymentFirstDay;
    }

    /**
     * @param int $paymentFirstDay
     * @return Meta
     */
    public function setPaymentFirstDay(int $paymentFirstDay): self
    {
        $this->paymentFirstDay = $paymentFirstDay;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getDescriptor(): ?string
    {
        return $this->descriptor;
    }

    /**
     * @param string $descriptor
     * @return Meta
     */
    public function setDescriptor(string $descriptor): self
    {
        $this->descriptor = $descriptor;
        return $this;
    }
}
