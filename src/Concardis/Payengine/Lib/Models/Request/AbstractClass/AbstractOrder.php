<?php declare(strict_types=1);

namespace Concardis\Payengine\Lib\Models\Request\AbstractClass;

use Concardis\Payengine\Lib\Internal\AbstractClass\AbstractModel;
use Concardis\Payengine\Lib\Internal\Util\DateTimeHelper;
use DateTime;

/**
 * Class AbstractOrder
 * @package Concardis\Payengine\Lib\Models\Request\AbstractClass
 */
class AbstractOrder extends AbstractModel
{

    /**
     * @var int
     */
    protected int $terms;

    /**
     * @var integer
     */
    protected int $privacy;

    /**
     * @var string
     */
    protected string $merchantOrderId = '';

    /**
     * @var string
     */
    protected string $description = '';

    /**
     * @var string
     */
    protected string $statementDescription = '';

    /**
     * @var integer
     */
    protected int $initialAmount;

    /**
     * @var string
     */
    protected string $currency;

    /**
     * @var array
     */
    protected array $basket;

    /**
     * @var string
     */
    protected string $customer;

    /**
     * @var string
     */
    protected string $persona;

    /**
     * @var string
     */
    protected string $billingAddress;

    /**
     * @var string
     */
    protected string $shippingAddress;

    /**
     * @var string
     */
    protected string $ipAddress = '';

    /**
     * @var string
     */
    protected string $channel;

    /**
     * @var string
     */
    protected string $source;

    /**
     * @return int
     */
    public function getTerms(): int
    {
        return $this->terms;
    }

    /**
     * $terms can be one of these types:
     * DateTime, integer, float, string
     *
     * Unless it is DateTime, it has to be a valid Timestamp
     *
     * @param float|int|string|DateTime $terms
     * @throws \Exception
     */
    public function setTerms(float|int|string|DateTime $terms)
    {
        $dateTime = DateTimeHelper::convertNumericToDateTime($terms);

        $this->terms = DateTimeHelper::getMillisecondFromDateTime($dateTime);
    }

    /**
     * @return int
     */
    public function getPrivacy(): int
    {
        return $this->privacy;
    }

    /**
     * $privacy can be one of these types:
     * DateTime, integer, float, string
     *
     * Unless it is DateTime, it has to be a valid Timestamp
     * @param float|int|string|DateTime $privacy
     * @throws \Exception
     */
    public function setPrivacy(float|int|string|DateTime $privacy)
    {
        $dateTime = DateTimeHelper::convertNumericToDateTime($privacy);

        $this->privacy = DateTimeHelper::getMillisecondFromDateTime($dateTime);
    }

    /**
     * @return string
     */
    public function getMerchantOrderId(): string
    {
        return $this->merchantOrderId;
    }

    /**
     * @param string $merchantOrderId
     * @return AbstractOrder
     */
    public function setMerchantOrderId(string $merchantOrderId): self
    {
        $this->merchantOrderId = $merchantOrderId;
        return $this;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @param string $description
     * @return AbstractOrder
     */
    public function setDescription(string $description): self
    {
        $this->description = $description;
        return $this;
    }

    /**
     * @return string
     */
    public function getStatementDescription(): string
    {
        return $this->statementDescription;
    }

    /**
     * @param string $statementDescription
     * @return AbstractOrder
     */
    public function setStatementDescription(string $statementDescription): self
    {
        $this->statementDescription = $statementDescription;
        return $this;
    }

    /**
     * @return int
     */
    public function getInitialAmount(): int
    {
        return $this->initialAmount;
    }

    /**
     * @param int $initialAmount
     * @return AbstractOrder
     */
    public function setInitialAmount(int $initialAmount): self
    {
        $this->initialAmount = $initialAmount;
        return $this;
    }

    /**
     * @return string
     */
    public function getCurrency(): string
    {
        return $this->currency;
    }

    /**
     * @param string $currency
     * @return AbstractOrder
     */
    public function setCurrency(string $currency): self
    {
        $this->currency = $currency;
        return $this;
    }

    /**
     * @return array
     */
    public function getBasket(): array
    {
        return $this->basket;
    }

    /**
     * @param array $basket
     * @return AbstractOrder
     */
    public function setBasket(array $basket): self
    {
        $this->basket = $basket;
        return $this;
    }

    /**
     * @return string
     */
    public function getCustomer(): string
    {
        return $this->customer;
    }

    /**
     * @param string $customer
     * @return AbstractOrder
     */
    public function setCustomer(string $customer): self
    {
        $this->customer = $customer;
        return $this;
    }

    /**
     * @return string
     */
    public function getPersona(): string
    {
        return $this->persona;
    }

    /**
     * @param string $persona
     * @return AbstractOrder
     */
    public function setPersona(string $persona): self
    {
        $this->persona = $persona;
        return $this;
    }

    /**
     * @return string
     */
    public function getBillingAddress(): string
    {
        return $this->billingAddress;
    }

    /**
     * @param string $billingAddress
     * @return AbstractOrder
     */
    public function setBillingAddress(string $billingAddress): self
    {
        $this->billingAddress = $billingAddress;
        return $this;
    }

    /**
     * @return string
     */
    public function getShippingAddress(): string
    {
        return $this->shippingAddress;
    }

    /**
     * @param string $shippingAddress
     * @return AbstractOrder
     */
    public function setShippingAddress(string $shippingAddress): self
    {
        $this->shippingAddress = $shippingAddress;
        return $this;
    }

    /**
     * @return string
     */
    public function getIpAddress(): string
    {
        return $this->ipAddress;
    }

    /**
     * @param string $ipAddress
     * @return AbstractOrder
     */
    public function setIpAddress(string $ipAddress): self
    {
        $this->ipAddress = $ipAddress;
        return $this;
    }

    /**
     * @return string
     */
    public function getChannel(): string
    {
        return $this->channel;
    }

    /**
     * @param string $channel
     * @return AbstractOrder
     */
    public function setChannel(string $channel): self
    {
        $this->channel = $channel;
        return $this;
    }

    /**
     * @return string
     */
    public function getSource(): string
    {
        return $this->source;
    }

    /**
     * @param string $source
     * @return AbstractOrder
     */
    public function setSource(string $source): self
    {
        $this->source = $source;
        return $this;
    }

}