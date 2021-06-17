<?php declare(strict_types=1);

namespace Concardis\Payengine\Lib\Internal\Interfaces;

use Concardis\Payengine\Lib\Internal\AbstractClass\AbstractModel;

/**
 * Interface Postable
 * @package Concardis\Payengine\Lib\Internal\Interfaces
 */
interface Postable
{

    /**
     * @param array|AbstractModel $data
     * @return mixed
     */
    public function post(array|AbstractModel $data): mixed;

}