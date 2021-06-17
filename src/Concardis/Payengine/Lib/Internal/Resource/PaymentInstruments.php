<?php declare(strict_types=1);

namespace Concardis\Payengine\Lib\Internal\Resource;

use Concardis\Payengine\Lib\Internal\AbstractClass\AbstractModel;
use Concardis\Payengine\Lib\Internal\AbstractClass\AbstractResource;
use Concardis\Payengine\Lib\Internal\AbstractClass\AbstractResponseModel;
use Concardis\Payengine\Lib\Internal\Constants\Api;
use Concardis\Payengine\Lib\Internal\Interfaces\Getable;
use Concardis\Payengine\Lib\Internal\Interfaces\Patchable;
use Concardis\Payengine\Lib\Internal\Interfaces\Postable;
use Concardis\Payengine\Lib\Models\Response\ListWrapper;
use Concardis\Payengine\Lib\Models\Response\PaymentInstrument;

/**
 * Class PaymentInstruments
 * @package Concardis\Payengine\Lib\Internal\Resource
 */
class PaymentInstruments extends AbstractResource implements Postable, Getable, Patchable
{
    /**
     * @var string
     */
    protected string $resourcePath = Api::RESOURCE_PAYMENTINSTRUMENT;

    /**
     * @param array|AbstractModel $data
     *
     * @return PaymentInstrument
     * @throws \Concardis\Payengine\Lib\Internal\Exception\PayengineResourceException
     */
    public function post(array|AbstractModel $data): PaymentInstrument
    {
        /**
         * @var $result PaymentInstrument
         */
        $result = parent::post($data);

        return $result;
    }

    /**
     * @param array|AbstractModel $data
     *
     * @return PaymentInstrument
     * @throws \Concardis\Payengine\Lib\Internal\Exception\PayengineResourceException
     */
    public function patch(array|AbstractModel $data): PaymentInstrument
    {
        /**
         * @var $result PaymentInstrument
         */
        $result = parent::patch($data);

        return $result;
    }

    /**
     * @param null $queryParams
     *
     * @return \Concardis\Payengine\Lib\Models\Response\ListWrapper|PaymentInstrument
     * A list of PaymentInstrument if $queryParams provided or one PaymentInstrument
     * if called with ID set, if paymentInstrumentId is set $queryParams will be ignored.
     * @throws \Exception
     */
    public function get($queryParams = null): ListWrapper|AbstractResponseModel
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