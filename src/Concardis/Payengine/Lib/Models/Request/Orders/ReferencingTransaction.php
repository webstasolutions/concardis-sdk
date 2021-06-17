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
     * @var integer
     */
    private int $initialAmount;

    /**
     * @var string
     */
    private string $currency;

    /**
     * @var string
     */
    private string $description;

    /**
     * @var array
     */
    private array $basket;

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
     * @return array
     */
    public function getBasket(): array
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