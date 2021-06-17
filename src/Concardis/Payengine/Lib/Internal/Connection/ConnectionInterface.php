<?php declare(strict_types=1);

namespace Concardis\Payengine\Lib\Internal\Connection;

/**
 * Interface ConnectionInterface
 * @package Concardis\Payengine\Lib\Internal\Connection
 */
interface ConnectionInterface
{
    /**
     * @param string $path
     * @param array $payload
     * @return mixed
     */
    public function post(string $path, array $payload): mixed;

    /**
     * @param string $path
     * @param array $payload
     * @return mixed
     */
    public function patch(string $path, array $payload): mixed;

    /**
     * @param string $path
     * @return mixed
     */
    public function delete(string $path): mixed;

    /**
     * @param string $path
     * @param array $queryParams
     * @return mixed
     */
    public function get(string $path, array $queryParams = []): mixed;

}