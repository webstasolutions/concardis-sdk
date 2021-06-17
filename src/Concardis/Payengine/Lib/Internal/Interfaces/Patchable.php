<?php declare(strict_types=1);

namespace Concardis\Payengine\Lib\Internal\Interfaces;

use Concardis\Payengine\Lib\Internal\AbstractClass\AbstractModel;

/**
 * Interface Patchable
 * @package Concardis\Payengine\Lib\Internal\Interfaces
 */
interface Patchable
{
    /**
     * @param array|AbstractModel $data
     * @return mixed
     */
    public function patch(array|AbstractModel $data);

}