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
     * @var Async
     */
    private Async $async;

    /**
     * @var array
     */
    private array $allowedProducts;

    /**
     * @var string
     */
    private string $transactionType;

    /**
     * @return mixed
     */
    public function getAsync(): mixed
    {
        return $this->async;
    }

    /**
     * @param mixed $async
     * @return Order
     */
    public function setAsync(mixed $async): self
    {
        $this->async = $async;
        return $this;
    }

    /**
     * @return array
     */
    public function getAllowedProducts(): array
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