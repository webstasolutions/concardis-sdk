<?php declare(strict_types=1);

namespace Concardis\Payengine\Lib\Internal\Resource\Customers;

use Concardis\Payengine\Lib\Internal\AbstractClass\AbstractModel;
use Concardis\Payengine\Lib\Internal\AbstractClass\AbstractResource;
use Concardis\Payengine\Lib\Internal\Constants\Api;
use Concardis\Payengine\Lib\Internal\Interfaces\Getable;
use Concardis\Payengine\Lib\Internal\Interfaces\Postable;
use Concardis\Payengine\Lib\Models\Response\Customers\Address;
use Concardis\Payengine\Lib\Models\Response\ListWrapper;

/**
 * Class Addresses
 * @package Concardis\Payengine\Lib\Internal\Resource\Customers
 */
class Addresses extends AbstractResource implements Postable, Getable
{
    /**
     * @var string
     */
    protected string $resourcePath = Api::RESOURCE_CUSTOMERS_ADDRESSES;

    /**
     * @param array|AbstractModel $data
     *
     * @return Address
     * @throws \Concardis\Payengine\Lib\Internal\Exception\PayengineResourceException
     */
    public function post(array|AbstractModel $data): Address
    {
        /**
         * @var $result Address
         */
        $result = parent::post($data);

        return $result;
    }

    /**
     * @param array|null $queryParams
     *
     * @return \Concardis\Payengine\Lib\Models\Response\ListWrapper|Address
     * A list of Address if $queryParams provided or one Address
     * if called with ID set, if addressId is set $queryParams will be ignored.
     * @throws \Exception
     */
    public function get(?array $queryParams = null): ListWrapper|Address
    {
        return parent::get($queryParams);
    }

    /**
     * @return Address
     */
    protected function getResponseModel(): Address
    {
        return new Address();
    }
}