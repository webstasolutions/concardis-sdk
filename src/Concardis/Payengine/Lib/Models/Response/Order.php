<?php declare(strict_types=1);

namespace Concardis\Payengine\Lib\Models\Response;


use Concardis\Payengine\Lib\Internal\AbstractClass\AbstractResponseModel;
use Concardis\Payengine\Lib\Models\Response\Customers\Address;
use Concardis\Payengine\Lib\Models\Response\Customers\Persona;
use Concardis\Payengine\Lib\Models\Response\Orders\Item;
use Concardis\Payengine\Lib\Models\Response\Orders\Transaction;
use Concardis\Payengine\Lib\Models\Response\Orders\Meta;

class Order extends AbstractResponseModel
{

    protected array $subModels = array(
        'basket' => Item::class,
        'customer' => Customer::class,
        'persona' => Persona::class,
        'billingAddress' => Address::class,
        'shippingAddress' => Address::class,
        'paymentInstrument' => PaymentInstrument::class,
        'transactions' => Transaction::class,
        'meta' => Meta::class,
    );

    /**
     * @var int|null
     */
    private ?int $terms = null;

    /**
     * @var int|null
     */
    private ?int $privacy = null;

    /**
     * @var string|null
     */
    private ?string $orderId = null;

    /**
     * @var string|null
     */
    private ?string $merchantOrderId = null;

    /**
     * @var string|null
     */
    private ?string $paymentProviderTransactionId = null;

    /**
     * @var string|null
     */
    private ?string $description = null;

    /**
     * @var string|null
     */
    private ?string $statementDescription = null;

    /**
     * @var int|null
     */
    private ?int $initialAmount = null;

    /**
     * @var int|null
     */
    private ?int $preauthorizedAmount = null;

    /**
     * @var int|null
     */
    private ?int $capturedAmount = null;

    /**
     * @var int|null
     */
    private ?int $refundedAmount = null;

    /**
     * @var int|null
     */
    private ?int $canceledAmount = null;

    /**
     * @var string|null
     */
    private ?string $currency = null;

    /**
     * @var array|null
     */
    private ?array $basket = null;

    /**
     * @var Customer|string|null
     */
    private Customer|string|null $customer = null;

    /**
     * @var Persona|null
     */
    private ?Persona $persona = null;

    /**
     * @var Address|null
     */
    private ?Address $billingAddress = null;

    /**
     * @var Address|null
     */
    private ?Address $shippingAddress = null;

    /**
     * @var string|null
     */
    private ?string $ipAddress = null;

    /**
     * @var PaymentInstrument|null
     */
    private ?PaymentInstrument $paymentInstrument = null;

    /**
     * @var array|null
     */
    private ?array $transactions = null;

    /**
     * @var string|null
     */
    private ?string $status = null;

    /**
     * @var string|null
     */
    private ?string $redirectUrl = null;

    /**
     * @var string|null
     */
    private ?string $channel = null;

    /**
     * @var string|null
     */
    private ?string $source = null;

    /**
     * @var string|null
     */
    private ?string $product = null;

    /**
     * @var array|null
     */
    private ?array $allowedProducts = null;

    /**
     * @var bool|null
     */
    private ?bool $settled = null;

    /**
     * @var int|null
     */
    private ?int $settlementDate = null;

    /**
     * @var string|null
     */
    private ?string $transactionType = null;

    /**
     * @var Meta|null
     */
    private ?Meta $meta = null;

    /**
     * @return int|null
     */
    public function getTerms(): ?int
    {
        return $this->terms;
    }

    /**
     * @param int|null $terms
     * @return self
     */
    public function setTerms(?int $terms): self
    {
        $this->terms = $terms;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getPrivacy(): ?int
    {
        return $this->privacy;
    }

    /**
     * @param int|null $privacy
     * @return self
     */
    public function setPrivacy(?int $privacy): self
    {
        $this->privacy = $privacy;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getOrderId(): ?string
    {
        return $this->orderId;
    }

    /**
     * @param string|null $orderId
     * @return self
     */
    public function setOrderId(?string $orderId): self
    {
        $this->orderId = $orderId;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getMerchantOrderId(): ?string
    {
        return $this->merchantOrderId;
    }

    /**
     * @param string|null $merchantOrderId
     * @return self
     */
    public function setMerchantOrderId(?string $merchantOrderId): self
    {
        $this->merchantOrderId = $merchantOrderId;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getPaymentProviderTransactionId(): ?string
    {
        return $this->paymentProviderTransactionId;
    }

    /**
     * @param string|null $paymentProviderTransactionId
     * @return self
     */
    public function setPaymentProviderTransactionId(?string $paymentProviderTransactionId): self
    {
        $this->paymentProviderTransactionId = $paymentProviderTransactionId;
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
    public function getStatementDescription(): ?string
    {
        return $this->statementDescription;
    }

    /**
     * @param string|null $statementDescription
     * @return self
     */
    public function setStatementDescription(?string $statementDescription): self
    {
        $this->statementDescription = $statementDescription;
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
     * @return int|null
     */
    public function getPreauthorizedAmount(): ?int
    {
        return $this->preauthorizedAmount;
    }

    /**
     * @param int|null $preauthorizedAmount
     * @return self
     */
    public function setPreauthorizedAmount(?int $preauthorizedAmount): self
    {
        $this->preauthorizedAmount = $preauthorizedAmount;
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
     * @return Customer|string|null
     */
    public function getCustomer(): Customer|string|null
    {
        return $this->customer;
    }

    /**
     * @param Customer|string|null $customer
     * @return self
     */
    public function setCustomer(Customer|string|null $customer): self
    {
        $this->customer = $customer;
        return $this;
    }

    /**
     * @return Persona|null
     */
    public function getPersona(): ?Persona
    {
        return $this->persona;
    }

    /**
     * @param Persona|null $persona
     * @return self
     */
    public function setPersona(?Persona $persona): self
    {
        $this->persona = $persona;
        return $this;
    }

    /**
     * @return Address|null
     */
    public function getBillingAddress(): ?Address
    {
        return $this->billingAddress;
    }

    /**
     * @param Address|null $billingAddress
     * @return self
     */
    public function setBillingAddress(?Address $billingAddress): self
    {
        $this->billingAddress = $billingAddress;
        return $this;
    }

    /**
     * @return Address|null
     */
    public function getShippingAddress(): ?Address
    {
        return $this->shippingAddress;
    }

    /**
     * @param Address|null $shippingAddress
     * @return self
     */
    public function setShippingAddress(?Address $shippingAddress): self
    {
        $this->shippingAddress = $shippingAddress;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getIpAddress(): ?string
    {
        return $this->ipAddress;
    }

    /**
     * @param string|null $ipAddress
     * @return self
     */
    public function setIpAddress(?string $ipAddress): self
    {
        $this->ipAddress = $ipAddress;
        return $this;
    }

    /**
     * @return PaymentInstrument|null
     */
    public function getPaymentInstrument(): ?PaymentInstrument
    {
        return $this->paymentInstrument;
    }

    /**
     * @param PaymentInstrument|null $paymentInstrument
     * @return self
     */
    public function setPaymentInstrument(?PaymentInstrument $paymentInstrument): self
    {
        $this->paymentInstrument = $paymentInstrument;
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
     * @return string|null
     */
    public function getRedirectUrl(): ?string
    {
        return $this->redirectUrl;
    }

    /**
     * @param string|null $redirectUrl
     * @return self
     */
    public function setRedirectUrl(?string $redirectUrl): self
    {
        $this->redirectUrl = $redirectUrl;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getChannel(): ?string
    {
        return $this->channel;
    }

    /**
     * @param string|null $channel
     * @return self
     */
    public function setChannel(?string $channel): self
    {
        $this->channel = $channel;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getSource(): ?string
    {
        return $this->source;
    }

    /**
     * @param string|null $source
     * @return self
     */
    public function setSource(?string $source): self
    {
        $this->source = $source;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getProduct(): ?string
    {
        return $this->product;
    }

    /**
     * @param string|null $product
     * @return self
     */
    public function setProduct(?string $product): self
    {
        $this->product = $product;
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
     * @param array|null $allowedProducts
     * @return self
     */
    public function setAllowedProducts(?array $allowedProducts): self
    {
        $this->allowedProducts = $allowedProducts;
        return $this;
    }

    /**
     * @return bool|null
     */
    public function isSettled(): ?bool
    {
        return $this->settled;
    }

    /**
     * @param bool|null $settled
     * @return self
     */
    public function setSettled(?bool $settled): self
    {
        $this->settled = $settled;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getSettlementDate(): ?int
    {
        return $this->settlementDate;
    }

    /**
     * @param int|null $settlementDate
     * @return self
     */
    public function setSettlementDate(?int $settlementDate): self
    {
        $this->settlementDate = $settlementDate;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getTransactionType(): ?string
    {
        return $this->transactionType;
    }

    /**
     * @param string|null $transactionType
     * @return self
     */
    public function setTransactionType(?string $transactionType): self
    {
        $this->transactionType = $transactionType;
        return $this;
    }

    /**
     * @return Meta|null
     */
    public function getMeta(): ?Meta
    {
        return $this->meta;
    }

    /**
     * @param Meta|null $meta
     * @return self
     */
    public function setMeta(?Meta $meta): self
    {
        $this->meta = $meta;
        return $this;
    }

}
