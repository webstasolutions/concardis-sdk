<?php declare(strict_types=1);

namespace Concardis\Payengine\Lib\Models\Response;

use Concardis\Payengine\Lib\Internal\AbstractClass\AbstractResponseModel;
use Concardis\Payengine\Lib\Models\Response\Customers\Address;
use Concardis\Payengine\Lib\Models\Response\Customers\Persona;

class Customer extends AbstractResponseModel
{
    /**
     * @var array
     */
    protected array $subModels = array(
        'addresses' => Address::class,
        'personas' => Persona::class,
        'paymentInstruments' => PaymentInstrument::class
    );

    /**
     * @var string|null
     */
    private ?string $customerId = null;

    /**
     * @var string|null
     */
    private ?string $email = null;

    /**
     * @var string|null
     */
    private ?string $merchantCustomerId = null;

    /**
     * @var array|null
     */
    private ?array $addresses = null;

    /**
     * @var array|null
     */
    private ?array $personas = null;

    /**
     * @var array|null
     */
    private ?array $paymentInstruments = null;

    /**
     * @return string|null
     */
    public function getCustomerId(): ?string
    {
        return $this->customerId;
    }

    /**
     * @param string|null $customerId
     * @return self
     */
    public function setCustomerId(?string $customerId): self
    {
        $this->customerId = $customerId;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getEmail(): ?string
    {
        return $this->email;
    }

    /**
     * @param string|null $email
     * @return self
     */
    public function setEmail(?string $email): self
    {
        $this->email = $email;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getMerchantCustomerId(): ?string
    {
        return $this->merchantCustomerId;
    }

    /**
     * @param string|null $merchantCustomerId
     * @return self
     */
    public function setMerchantCustomerId(?string $merchantCustomerId): self
    {
        $this->merchantCustomerId = $merchantCustomerId;
        return $this;
    }

    /**
     * @return array|null
     */
    public function getAddresses(): ?array
    {
        return $this->addresses;
    }

    /**
     * @param array|null $addresses
     * @return self
     */
    public function setAddresses(?array $addresses): self
    {
        $this->addresses = $addresses;
        return $this;
    }

    /**
     * @return array|null
     */
    public function getPersonas(): ?array
    {
        return $this->personas;
    }

    /**
     * @param array|null $personas
     * @return self
     */
    public function setPersonas(?array $personas): self
    {
        $this->personas = $personas;
        return $this;
    }

    /**
     * @return array|null
     */
    public function getPaymentInstruments(): ?array
    {
        return $this->paymentInstruments;
    }

    /**
     * @param array|null $paymentInstruments
     * @return self
     */
    public function setPaymentInstruments(?array $paymentInstruments): self
    {
        $this->paymentInstruments = $paymentInstruments;
        return $this;
    }
}
