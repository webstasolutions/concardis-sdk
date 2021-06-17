<?php declare(strict_types=1);

namespace Concardis\Payengine\Lib\Internal\Interfaces;

/**
 * Interface Getable
 * @package Concardis\Payengine\Lib\Internal\Interfaces
 */
interface Getable
{
    /**
     * @param array $queryParams
     * @return mixed
     */
    function get(array $queryParams = []): mixed;

}