<?php declare(strict_types=1);

namespace Concardis\Payengine\Lib\Internal\Constants;

/**
 * Class Api
 * @package Concardis\Payengine\Lib\Internal\Constants
 */
class Api
{
    public const API_ENDPOINT_PROD = "https://api.payengine.de/v1";
    public const API_ENDPOINT_TEST = "https://apitest.payengine.de/v1";

    public const RESOURCE_ORDERS = "/orders";
    public const RESOURCE_ORDERS_DEBIT = "/debit";
    public const RESOURCE_ORDERS_PREAUTH = "/preauth";
    public const RESOURCE_ORDERS_TRANSACTIONS = "/transactions";
    public const RESOURCE_ORDERS_TRANSACTIONS_REFUND = "/refund";
    public const RESOURCE_ORDERS_TRANSACTIONS_CAPTURE = "/capture";
    public const RESOURCE_ORDERS_TRANSACTIONS_CANCEL = "/cancel";

    public const RESOURCE_CUSTOMERS = "/customers";
    public const RESOURCE_CUSTOMERS_PERSONAS = "/personas";
    public const RESOURCE_CUSTOMERS_ADDRESSES = "/addresses";
    public const RESOURCE_CUSTOMERS_PAYMENTINSTRUMENTS = "/payment-instruments";

    public const RESOURCE_PAYMENTINSTRUMENT = "/payment-instruments";

}