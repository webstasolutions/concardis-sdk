<?php declare(strict_types=1);

namespace Concardis\Payengine\Lib\Models\Request\Orders;

use Concardis\Payengine\Lib\Internal\AbstractClass\AbstractModel;

/**
 * Class Item
 * @package Concardis\Payengine\Lib\Models\Request\Orders
 */
class Item extends AbstractModel
{

    /**
     * @var string
     */
    private string $name;

    /**
     * @var string
     */
    private string $articleNumber;

    /**
     * @var integer
     */
    private int $totalPrice;

    /**
     * @var integer
     */
    private int $totalPriceWithTax;

    /**
     * @var integer
     */
    private int $unitPrice;

    /**
     * @var integer
     */
    private int $unitPriceWithTax;

    /**
     * @var integer
     */
    private int $tax;

    /**
     * @var integer
     */
    private int $quantity;

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return Item
     */
    public function setName(string $name): self
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return string
     */
    public function getArticleNumber(): string
    {
        return $this->articleNumber;
    }

    /**
     * @param string $articleNumber
     * @return Item
     */
    public function setArticleNumber(string $articleNumber): self
    {
        $this->articleNumber = $articleNumber;
        return $this;
    }

    /**
     * @return int
     */
    public function getTotalPrice(): int
    {
        return $this->totalPrice;
    }

    /**
     * @param int $totalPrice
     * @return Item
     */
    public function setTotalPrice(int $totalPrice): self
    {
        $this->totalPrice = $totalPrice;
        return $this;
    }

    /**
     * @return int
     */
    public function getTotalPriceWithTax(): int
    {
        return $this->totalPriceWithTax;
    }

    /**
     * @param int $totalPriceWithTax
     * @return Item
     */
    public function setTotalPriceWithTax(int $totalPriceWithTax): self
    {
        $this->totalPriceWithTax = $totalPriceWithTax;
        return $this;
    }

    /**
     * @return int
     */
    public function getUnitPrice(): int
    {
        return $this->unitPrice;
    }

    /**
     * @param int $unitPrice
     * @return Item
     */
    public function setUnitPrice(int $unitPrice): self
    {
        $this->unitPrice = $unitPrice;
        return $this;
    }

    /**
     * @return int
     */
    public function getUnitPriceWithTax(): int
    {
        return $this->unitPriceWithTax;
    }

    /**
     * @param int $unitPriceWithTax
     * @return Item
     */
    public function setUnitPriceWithTax(int $unitPriceWithTax): self
    {
        $this->unitPriceWithTax = $unitPriceWithTax;
        return $this;
    }

    /**
     * @return int
     */
    public function getTax(): int
    {
        return $this->tax;
    }

    /**
     * @param int $tax
     * @return Item
     */
    public function setTax(int $tax): self
    {
        $this->tax = $tax;
        return $this;
    }

    /**
     * @return int
     */
    public function getQuantity(): int
    {
        return $this->quantity;
    }

    /**
     * @param int $quantity
     * @return Item
     */
    public function setQuantity(int $quantity): self
    {
        $this->quantity = $quantity;
        return $this;
    }

}