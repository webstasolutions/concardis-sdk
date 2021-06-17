<?php declare(strict_types=1);

namespace Concardis\Payengine\Lib\Models\Request\Customers;

use Concardis\Payengine\Lib\Internal\AbstractClass\AbstractModel;

/**
 * Class CustomerUpdate
 * @package Concardis\Payengine\Lib\Models\Request\Customers
 */
class CustomerUpdate extends AbstractModel
{

    /**
     * Id for this customer on your System
     * @var string
     */
    private string $merchantCustomerId;

    /**
     * @return string
     */
    public function getMerchantCustomerId(): string
    {
        return $this->merchantCustomerId;
    }

    /**
     * @param string $merchantCustomerId
     * @return CustomerUpdate
     */
    public function setMerchantCustomerId(string $merchantCustomerId): self
    {
        $this->merchantCustomerId = $merchantCustomerId;
        return $this;
    }

}