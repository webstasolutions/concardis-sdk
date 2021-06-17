<?php declare(strict_types=1);

namespace Concardis\Payengine\Lib\Internal\Resource\Customers;

use Concardis\Payengine\Lib\Internal\AbstractClass\AbstractResource;
use Concardis\Payengine\Lib\Internal\Constants\Api;
use Concardis\Payengine\Lib\Internal\Interfaces\Deleteable;
use Concardis\Payengine\Lib\Internal\Interfaces\Getable;
use Concardis\Payengine\Lib\Internal\Interfaces\Postable;
use Concardis\Payengine\Lib\Models\Response\PaymentInstrument;

/**
 * Class CustomerPaymentInstruments
 * @package Concardis\Payengine\Lib\Internal\Resource\Customers
 */
class CustomerPaymentInstruments extends AbstractResource implements Postable, Deleteable, Getable
{
    /**
     * @var string
     */
    protected string $resourcePath = Api::RESOURCE_CUSTOMERS_PAYMENTINSTRUMENTS;

    /**
     * @param $data
     *
     * @return PaymentInstrument
     * @throws \Concardis\Payengine\Lib\Internal\Exception\PayengineResourceException
     */
    public function post($data): PaymentInstrument
    {
        /**
         * @var $result PaymentInstrument
         */
        $result = parent::post($data);

        return $result;
    }

    /**
     * @return mixed
     * @throws \Concardis\Payengine\Lib\Internal\Exception\PayengineResourceException
     */
    public function delete(): mixed
    {
        return parent::delete();
    }

    /**
     * @param null $queryParams
     *
     * @return \Concardis\Payengine\Lib\Models\Response\ListWrapper|PaymentInstrument
     * A list of PaymentInstruments if $queryParams provided or one PaymentInstrument
     * if called with ID set, if paymentInstrumentId is set $queryParams will be ignored.
     * @throws \Exception
     */
    public function get($queryParams = null): \Concardis\Payengine\Lib\Models\Response\ListWrapper|PaymentInstrument
    {
        return parent::get($queryParams);
    }

    /**
     * @return PaymentInstrument
     */
    protected function getResponseModel(): PaymentInstrument
    {
        return new PaymentInstrument();
    }
}