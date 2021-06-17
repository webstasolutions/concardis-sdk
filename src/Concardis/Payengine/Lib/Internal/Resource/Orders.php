<?php declare(strict_types=1);

namespace Concardis\Payengine\Lib\Internal\Resource;

use Concardis\Payengine\Lib\Internal\AbstractClass\AbstractModel;
use Concardis\Payengine\Lib\Internal\AbstractClass\AbstractResource;
use Concardis\Payengine\Lib\Internal\Constants\Api;
use Concardis\Payengine\Lib\Internal\Constants\ErrorCodes;
use Concardis\Payengine\Lib\Internal\Interfaces\Getable;
use Concardis\Payengine\Lib\Internal\Interfaces\Patchable;
use Concardis\Payengine\Lib\Internal\Interfaces\Postable;
use Concardis\Payengine\Lib\Internal\Resource\Orders\Debit;
use Concardis\Payengine\Lib\Internal\Resource\Orders\Preauth;
use Concardis\Payengine\Lib\Internal\Resource\Orders\Transactions;
use Concardis\Payengine\Lib\Models\Response\ListWrapper;
use Concardis\Payengine\Lib\Models\Response\Order;

/**
 * Class Orders
 * @package Concardis\Payengine\Lib\Internal\Resource
 */
class Orders extends AbstractResource implements Postable, Patchable, Getable
{
    /**
     * @var string
     */
    protected string $resourcePath = Api::RESOURCE_ORDERS;

    /**
     * @param array|\Concardis\Payengine\Lib\Internal\AbstractClass\AbstractModel $data
     *
     * @return Order
     * @throws \Concardis\Payengine\Lib\Internal\Exception\PayengineResourceException
     */
    public function post(array|AbstractModel $data): Order
    {
        /**
         * @var $result Order
         */
        $result = parent::post($data);

        return $result;
    }

    /**
     * @param array|AbstractModel $data
     *
     * @return Order
     * @throws \Concardis\Payengine\Lib\Internal\Exception\PayengineResourceException
     */
    public function patch(array|AbstractModel $data): Order
    {
        /**
         * @var $result Order
         */
        $result = parent::patch($data);

        return $result;
    }

    /**
     * @param null $queryParams
     *
     * @return \Concardis\Payengine\Lib\Models\Response\ListWrapper|Order
     * A list of Orders if $queryParams provided or one Order
     * if called with ID set, if orderId is set $queryParams will be ignored.
     * @throws \Exception
     */
    public function get($queryParams = null): ListWrapper|Order
    {
        return parent::get($queryParams);
    }

    /**
     * @return Debit
     * @throws \Exception
     */
    public function debit(): Debit
    {
        return new Debit($this->connection, null, $this->resourcePath);
    }

    /**
     * @return Preauth
     * @throws \Exception
     */
    public function preauth(): Preauth
    {
        return new Preauth($this->connection, null, $this->resourcePath);
    }

    /**
     * @param string|null $id
     *
     * @return Transactions
     * @throws \Exception
     */
    public function transactions(string $id = null): Transactions
    {
        if(!isset($this->resourceId)){
            throw new \Exception(ErrorCodes::SDK_ORDERID_MISSING);
        }

        return new Transactions($this->connection, $id, $this->resourcePathWithId);
    }

    /**
     * @return Order
     */
    protected function getResponseModel(): Order
    {
        return new Order();
    }
}