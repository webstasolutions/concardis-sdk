<?php declare(strict_types=1);

namespace Concardis\Payengine\Lib\Internal\Resource\Orders;

use Concardis\Payengine\Lib\Internal\AbstractClass\AbstractModel;
use Concardis\Payengine\Lib\Internal\AbstractClass\AbstractResource;
use Concardis\Payengine\Lib\Internal\Constants\Api;
use Concardis\Payengine\Lib\Internal\Interfaces\Getable;
use Concardis\Payengine\Lib\Internal\Interfaces\Patchable;
use Concardis\Payengine\Lib\Internal\Resource\Orders\Transactions\Cancel;
use Concardis\Payengine\Lib\Internal\Resource\Orders\Transactions\Capture;
use Concardis\Payengine\Lib\Internal\Resource\Orders\Transactions\Refund;
use Concardis\Payengine\Lib\Models\Response\ListWrapper;
use Concardis\Payengine\Lib\Models\Response\Orders\Transaction;

/**
 * Class Transactions
 * @package Concardis\Payengine\Lib\Internal\Resource\Orders
 */
class Transactions extends AbstractResource implements Patchable, Getable
{
    protected string $resourcePath = Api::RESOURCE_ORDERS_TRANSACTIONS;

    /**
     * @param array|AbstractModel $data
     *
     * @return Transaction
     * @throws \Concardis\Payengine\Lib\Internal\Exception\PayengineResourceException
     */
    public function patch(array|AbstractModel $data): Transaction
    {
        /**
         * @var $result Transaction
         */
        $result = parent::patch($data);

        return $result;
    }

    /**
     * @param array|null $queryParams
     *
     * @return \Concardis\Payengine\Lib\Models\Response\ListWrapper|Transaction
     * A list of Transactions if $queryParams provided or one Transaction
     * if called with ID set, if transactionId is set $queryParams will be ignored.
     * @throws \Exception
     */
    public function get(?array $queryParams = null): ListWrapper|Transaction
    {
        return parent::get($queryParams);
    }

    /**
     * @return Refund
     * @throws \Exception
     */
    public function refund(): Refund
    {
        return new Refund($this->connection, null, $this->resourcePathWithId);
    }

    /**
     * @return Capture
     * @throws \Exception
     */
    public function capture(): Capture
    {
        return new Capture($this->connection, null, $this->resourcePathWithId);
    }

    /**
     * @return Cancel
     * @throws \Exception
     */
    public function cancel(): Cancel
    {
        return new Cancel($this->connection, null, $this->resourcePathWithId);
    }

    /**
     * @return Transaction
     */
    protected function getResponseModel(): Transaction
    {
        return new Transaction();
    }
}