<?php declare(strict_types=1);

namespace Concardis\Payengine\Lib\Models\Request\Orders;

use Concardis\Payengine\Lib\Internal\AbstractClass\AbstractModel;

/**
 * Class ReferencingTransaction
 * @package Concardis\Payengine\Lib\Models\Request\Orders
 */
class ReferencingTransaction extends AbstractModel
{

    /**
     * @var integer|null
     */
    private ?int $initialAmount = null;

    /**
     * @var string
     */
    private string $currency = '';

    /**
     * @var string
     */
    private string $description = '';

    /**
     * @var array|null
     */
    private ?array $basket = null;

    /**
     * @return int
     */
    public function getInitialAmount(): int
    {
        return $this->initialAmount;
    }

    /**
     * @param int $initialAmount
     * @return ReferencingTransaction
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
     * @return ReferencingTransaction
     */
    public function setCurrency(string $currency): self
    {
        $this->currency = $currency;
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
     * @return ReferencingTransaction
     */
    public function setDescription(string $description): self
    {
        $this->description = $description;
        return $this;
    }

    /**
     * @return array|null
     */
    public function getBasket(): ?array
    {
        return $this->basket;
    }

    /**
     * @param array $basket
     * @return ReferencingTransaction
     */
    public function setBasket(array $basket)
    {
        $this->basket = $basket;
        return $this;
    }

}