<?php declare(strict_types=1);

namespace Concardis\Payengine\Lib\Internal\Resource\Customers;

use Concardis\Payengine\Lib\Internal\AbstractClass\AbstractModel;
use Concardis\Payengine\Lib\Internal\AbstractClass\AbstractResource;
use Concardis\Payengine\Lib\Internal\Constants\Api;
use Concardis\Payengine\Lib\Internal\Interfaces\Getable;
use Concardis\Payengine\Lib\Internal\Interfaces\Postable;
use Concardis\Payengine\Lib\Models\Response\Customers\Persona;
use Concardis\Payengine\Lib\Models\Response\ListWrapper;

/**
 * Class Personas
 * @package Concardis\Payengine\Lib\Internal\Resource\Customers
 */
class Personas extends AbstractResource implements Postable, Getable
{

    /**
     * @var string
     */
    protected string $resourcePath = Api::RESOURCE_CUSTOMERS_PERSONAS;

    /**
     * @param array|AbstractModel $data
     *
     * @return Persona
     * @throws \Concardis\Payengine\Lib\Internal\Exception\PayengineResourceException
     */
    public function post(array|AbstractModel $data): Persona
    {
        /**
         * @var $result Persona
         */
        $result = parent::post($data);

        return $result;
    }

    /**
     * @param array|null $queryParams
     *
     * @return \Concardis\Payengine\Lib\Models\Response\ListWrapper|Persona
     * A list of Personas if $queryParams provided or one Persona
     * if called with ID set, if personaId is set $queryParams will be ignored.
     * @throws \Exception
     */
    public function get(?array $queryParams = null): ListWrapper|Persona
    {
        return parent::get($queryParams);
    }

    /**
     * @return Persona
     */
    protected function getResponseModel(): Persona
    {
        return new Persona();
    }
}