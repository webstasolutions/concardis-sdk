<?php declare(strict_types=1);

namespace Concardis\Payengine\Lib\Models\Request;

use Concardis\Payengine\Lib\Internal\AbstractClass\AbstractModel;

/**
 * Class Customer
 * @package Concardis\Payengine\Lib\Models\Request
 */
class Customer extends AbstractModel
{
    /**
     * Email of the customer
     * @var string
     */
    private string $email;

    /**
     * Id for this customer on your System
     * @var string
     */
    private string $merchantCustomerId;

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * @param string $email
     * @return Customer
     */
    public function setEmail(string $email): self
    {
        $this->email = $email;
        return $this;
    }

    /**
     * @return string
     */
    public function getMerchantCustomerId(): string
    {
        return $this->merchantCustomerId;
    }

    /**
     * @param string $merchantCustomerId
     * @return Customer
     */
    public function setMerchantCustomerId(string $merchantCustomerId): self
    {
        $this->merchantCustomerId = $merchantCustomerId;
        return $this;
    }

}