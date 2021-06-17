<?php declare(strict_types=1);

namespace Concardis\Payengine\Lib\Internal\Resource\Orders\Transactions;

use Concardis\Payengine\Lib\Internal\AbstractClass\AbstractModel;
use Concardis\Payengine\Lib\Internal\AbstractClass\AbstractResource;
use Concardis\Payengine\Lib\Internal\Constants\Api;
use Concardis\Payengine\Lib\Internal\Interfaces\Postable;
use Concardis\Payengine\Lib\Models\Response\Orders\Transaction;

/**
 * Class Capture
 * @package Concardis\Payengine\Lib\Internal\Resource\Orders\Transactions
 */
class Capture extends AbstractResource implements Postable
{
    /**
     * @var string
     */
    protected string $resourcePath = Api::RESOURCE_ORDERS_TRANSACTIONS_CAPTURE;

    /**
     * @param array|AbstractModel $data
     *
     * @return Transaction
     * @throws \Concardis\Payengine\Lib\Internal\Exception\PayengineResourceException
     */
    public function post(array|AbstractModel $data): Transaction
    {
        /**
         * @var $result Transaction
         */
        $result = parent::post($data);

        return $result;
    }

    /**
     * @return Transaction
     */
    protected function getResponseModel(): Transaction
    {
        return new Transaction();
    }
}