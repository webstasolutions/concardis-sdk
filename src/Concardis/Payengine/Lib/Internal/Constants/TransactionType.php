<?php declare(strict_types=1);

namespace Concardis\Payengine\Lib\Internal\Constants;

/**
 * Class TransactionType
 * @package Concardis\Payengine\Lib\Internal\Constants
 */
class TransactionType
{
    public const DEBIT = "DEBIT";
    public const PREAUTH = "PREAUTH";
    public const CAPTURE = "CAPTURE";
    public const CANCEL = "CANCEL";
    public const REFUND = "REFUND";
    public const CHARGEBACK = "CHARGEBACK";

}