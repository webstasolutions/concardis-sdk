<?php declare(strict_types=1);

namespace Concardis\Payengine\Lib\Models\Request;

use Concardis\Payengine\Lib\Models\Request\AbstractClass\AbstractOrder;
use Concardis\Payengine\Lib\Models\Request\Orders\Async;

/**
 * Class Order
 * @package Concardis\Payengine\Lib\Models\Request
 */
class Order extends AbstractOrder
{
    /**
     * @var Async|null
     */
    private ?Async $async = null;

    /**
     * @var array|null
     */
    private ?array $allowedProducts = null;

    /**
     * @var string
     */
    private string $transactionType = '';

    /**
     * @return Async|null
     */
    public function getAsync(): ?Async
    {
        return $this->async;
    }

    /**
     * @param Async|null $async
     * @return Order
     */
    public function setAsync(?Async $async): self
    {
        $this->async = $async;
        return $this;
    }

    /**
     * @return array|null
     */
    public function getAllowedProducts(): ?array
    {
        return $this->allowedProducts;
    }

    /**
     * @param array $allowedProducts
     * @return Order
     */
    public function setAllowedProducts(array $allowedProducts): self
    {
        $this->allowedProducts = $allowedProducts;
        return $this;
    }

    /**
     * @return string
     */
    public function getTransactionType(): string
    {
        return $this->transactionType;
    }

    /**
     * @param string $transactionType
     * @return Order
     */
    public function setTransactionType(string $transactionType): self
    {
        $this->transactionType = $transactionType;
        return $this;
    }
}