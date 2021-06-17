<?php declare(strict_types=1);

namespace Concardis\Payengine\Lib\Internal\Constants;

/**
 * Class TransactionStatus
 * @package Concardis\Payengine\Lib\Internal\Constants
 */
class TransactionStatus
{
    public const CREATED = "CREATED";
    public const PENDING = "PENDING";
    public const IN_PROGRESS = "IN_PROGRESS";
    public const OK = "OK";
    public const SUCCESS = "SUCCESS";
    public const FAILURE = "FAILURE";
    public const DECLINED = "DECLINED";
    public const ABORTED = "ABORTED";
    public const EXPIRED = "EXPIRED";
}