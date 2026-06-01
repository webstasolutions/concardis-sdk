<?php declare(strict_types=1);

namespace Concardis\Payengine\Lib\Models\Response\Orders;


use Concardis\Payengine\Lib\Internal\AbstractClass\AbstractResponseModel;
use Concardis\Payengine\Lib\Models\Response\Order;


class Transaction extends AbstractResponseModel
{

    protected array $subModels = array(
        'order' => Order::class,
        'transactions' => Transaction::class,
        'basket' => Item::class
    );

    /**
     * @var string|null
     */
    private ?string $description = null;

    /**
     * @var string|null
     */
    private ?string $type = null;

    /**
     * @var string|null
     */
    private ?string $parentTransaction = null;

    /**
     * @var int|null
     */
    private ?int $canceledAmount = null;

    /**
     * @var string|null
     */
    private ?string $transactionId = null;

    /**
     * @var string|null
     */
    private ?string $currency = null;

    /**
     * @var string|null
     */
    private ?string $status = null;

    /**
     * @var Order|string|array|null
     */
    private Order|string|array|null $order = null;

    /**
     * @var array|null
     */
    private ?array $basket = null;

    /**
     * @var array|null
     */
    private ?array $transactions = null;

    /**
     * @var int|null
     */
    private ?int $refundedAmount = null;

    /**
     * @var int|null
     */
    private ?int $capturedAmount = null;

    /**
     * @var int|null
     */
    private ?int $initialAmount = null;

    /**
     * @var string|null
     */
    private ?string $providerCode = null;

    /**
     * @var string|null
     */
    private ?string $merchantMessage = null;

    /**
     * @return string|null
     */
    public function getType(): ?string
    {
        return $this->type;
    }

    /**
     * @param string|null $type
     * @return self
     */
    public function setType(?string $type): self
    {
        $this->type = $type;
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
     * @param array|null $basket
     * @return self
     */
    public function setBasket(?array $basket): self
    {
        $this->basket = $basket;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }

    /**
     * @param string|null $description
     * @return self
     */
    public function setDescription(?string $description): self
    {
        $this->description = $description;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getParentTransaction(): ?string
    {
        return $this->parentTransaction;
    }

    /**
     * @param string|null $parentTransaction
     * @return self
     */
    public function setParentTransaction(?string $parentTransaction): self
    {
        $this->parentTransaction = $parentTransaction;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getCanceledAmount(): ?int
    {
        return $this->canceledAmount;
    }

    /**
     * @param int|null $canceledAmount
     * @return self
     */
    public function setCanceledAmount(?int $canceledAmount): self
    {
        $this->canceledAmount = $canceledAmount;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getTransactionId(): ?string
    {
        return $this->transactionId;
    }

    /**
     * @param string|null $transactionId
     * @return self
     */
    public function setTransactionId(?string $transactionId): self
    {
        $this->transactionId = $transactionId;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getCurrency(): ?string
    {
        return $this->currency;
    }

    /**
     * @param string|null $currency
     * @return self
     */
    public function setCurrency(?string $currency): self
    {
        $this->currency = $currency;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    /**
     * @param string|null $status
     * @return self
     */
    public function setStatus(?string $status): self
    {
        $this->status = $status;
        return $this;
    }

    /**
     * @return Order|string|array|null
     */
    public function getOrder(): Order|string|array|null
    {
        return $this->order;
    }

    /**
     * @param Order|string|array|null $order
     * @return self
     */
    public function setOrder(Order|string|array|null $order): self
    {
        $this->order = $order;
        return $this;
    }

    /**
     * @return array|null
     */
    public function getTransactions(): ?array
    {
        return $this->transactions;
    }

    /**
     * @param array|null $transactions
     * @return self
     */
    public function setTransactions(?array $transactions): self
    {
        $this->transactions = $transactions;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getRefundedAmount(): ?int
    {
        return $this->refundedAmount;
    }

    /**
     * @param int|null $refundedAmount
     * @return self
     */
    public function setRefundedAmount(?int $refundedAmount): self
    {
        $this->refundedAmount = $refundedAmount;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getCapturedAmount(): ?int
    {
        return $this->capturedAmount;
    }

    /**
     * @param int|null $capturedAmount
     * @return self
     */
    public function setCapturedAmount(?int $capturedAmount): self
    {
        $this->capturedAmount = $capturedAmount;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getInitialAmount(): ?int
    {
        return $this->initialAmount;
    }

    /**
     * @param int|null $initialAmount
     * @return self
     */
    public function setInitialAmount(?int $initialAmount): self
    {
        $this->initialAmount = $initialAmount;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getProviderCode(): ?string
    {
        return $this->providerCode;
    }

    /**
     * @param string|null $providerCode
     * @return self
     */
    public function setProviderCode(?string $providerCode): self
    {
        $this->providerCode = $providerCode;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getMerchantMessage(): ?string
    {
        return $this->merchantMessage;
    }

    /**
     * @param string|null $merchantMessage
     * @return self
     */
    public function setMerchantMessage(?string $merchantMessage): self
    {
        $this->merchantMessage = $merchantMessage;
        return $this;
    }
}
