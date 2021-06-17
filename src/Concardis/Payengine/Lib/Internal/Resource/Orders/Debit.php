<?php declare(strict_types=1);

namespace Concardis\Payengine\Lib\Internal\Resource\Orders;

use Concardis\Payengine\Lib\Internal\AbstractClass\AbstractModel;
use Concardis\Payengine\Lib\Internal\AbstractClass\AbstractResource;
use Concardis\Payengine\Lib\Internal\Constants\Api;
use Concardis\Payengine\Lib\Internal\Interfaces\Postable;
use Concardis\Payengine\Lib\Models\Response\Order;

/**
 * Class Debit
 * @package Concardis\Payengine\Lib\Internal\Resource\Orders
 */
class Debit extends AbstractResource implements Postable
{
    /**
     * @var string
     */
    protected string $resourcePath = Api::RESOURCE_ORDERS_DEBIT;

    /**
     * @param array|AbstractModel $data
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
     * @return Order
     */
    protected function getResponseModel(): Order
    {
        return new Order();
    }
}