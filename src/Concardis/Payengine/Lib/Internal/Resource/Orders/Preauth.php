<?php declare(strict_types=1);

namespace Concardis\Payengine\Lib\Internal\Resource\Orders;

use Concardis\Payengine\Lib\Internal\AbstractClass\AbstractModel;
use Concardis\Payengine\Lib\Internal\AbstractClass\AbstractResource;
use Concardis\Payengine\Lib\Internal\Constants\Api;
use Concardis\Payengine\Lib\Internal\Interfaces\Postable;
use Concardis\Payengine\Lib\Models\Response\Order;

/**
 * Class Preauth
 * @package Concardis\Payengine\Lib\Internal\Resource\Orders
 */
class Preauth extends AbstractResource implements Postable
{
    protected string $resourcePath = Api::RESOURCE_ORDERS_PREAUTH;

    /**
     * @param array|AbstractModel $data
     *
     * @return Order
     * @throws \Concardis\Payengine\Lib\Internal\Exception\PayEngineResourceException
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