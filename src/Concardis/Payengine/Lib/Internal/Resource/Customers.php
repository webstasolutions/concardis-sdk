<?php declare(strict_types=1);

namespace Concardis\Payengine\Lib\Internal\Resource;

use Concardis\Payengine\Lib\Internal\AbstractClass\AbstractModel;
use Concardis\Payengine\Lib\Internal\AbstractClass\AbstractResource;
use Concardis\Payengine\Lib\Internal\Constants\Api;
use Concardis\Payengine\Lib\Internal\Constants\ErrorCodes;
use Concardis\Payengine\Lib\Internal\Interfaces\Getable;
use Concardis\Payengine\Lib\Internal\Interfaces\Patchable;
use Concardis\Payengine\Lib\Internal\Interfaces\Postable;
use Concardis\Payengine\Lib\Internal\Resource\Customers\Addresses;
use Concardis\Payengine\Lib\Internal\Resource\Customers\CustomerPaymentInstruments;
use Concardis\Payengine\Lib\Internal\Resource\Customers\Personas;
use Concardis\Payengine\Lib\Models\Response\Customer;
use Concardis\Payengine\Lib\Models\Response\ListWrapper;

/**
 * Class Customers
 * @package Concardis\Payengine\Lib\Internal\Resource
 */
class Customers extends AbstractResource implements Postable, Patchable, Getable
{
    /**
     * @var string
     */
    protected string $resourcePath = Api::RESOURCE_CUSTOMERS;

    /**
     * @param array|AbstractModel $data
     *
     * @return Customer
     * @throws \Concardis\Payengine\Lib\Internal\Exception\PayEngineResourceException
     */
    public function post(array|AbstractModel $data): Customer
    {
        /**
         * @var $result Customer
         */
        $result = parent::post($data);

        return $result;
    }

    /**
     * @param array|AbstractModel $data
     *
     * @return Customer
     * @throws \Concardis\Payengine\Lib\Internal\Exception\PayEngineResourceException
     */
    public function patch(array|AbstractModel $data): Customer
    {
        /**
         * @var $result Customer
         */
        $result = parent::patch($data);

        return $result;
    }

    /**
     * @param array|null $queryParams
     *
     * @return \Concardis\Payengine\Lib\Models\Response\ListWrapper|Customer
     * A list of Customers if $queryParams provided or one Customer
     * if called with ID set, if customerId is set $queryParams will be ignored.
     * @throws \Exception
     */
    public function get(?array $queryParams = null): ListWrapper|Customer
    {
        return parent::get($queryParams);
    }

    /**
     * @param string|null $id
     *
     * @return Addresses
     * @throws \Exception
     */
    public function addresses(?string $id = null): Addresses
    {
        if (!isset($this->resourceId)) {
            throw new \Exception(ErrorCodes::SDK_CUSTOMERID_MISSING);
        }
        return new Addresses($this->connection, $id, $this->resourcePathWithId);
    }

    /**
     * @param string|null $id
     *
     * @return CustomerPaymentInstruments
     * @throws \Exception
     */
    public function paymentInstruments(?string $id = null): CustomerPaymentInstruments
    {
        if (!isset($this->resourceId)) {
            throw new \Exception(ErrorCodes::SDK_CUSTOMERID_MISSING);
        }
        return new CustomerPaymentInstruments($this->connection, $id, $this->resourcePathWithId);
    }

    /**
     * @param string|null $id
     *
     * @return Personas
     * @throws \Exception
     */
    public function personas(?string $id = null): Personas
    {
        if (!isset($this->resourceId)) {
            throw new \Exception(ErrorCodes::SDK_CUSTOMERID_MISSING);
        }
        return new Personas($this->connection, $id, $this->resourcePathWithId);
    }

    /**
     * @return Customer
     */
    protected function getResponseModel(): Customer
    {
        return new Customer();
    }
}