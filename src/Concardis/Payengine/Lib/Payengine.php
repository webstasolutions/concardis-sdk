<?php declare(strict_types=1);

namespace Concardis\Payengine\Lib;

use Concardis\Payengine\Lib\Internal\Config\MerchantConfiguration;
use Concardis\Payengine\Lib\Internal\Connection\Connection;
use Concardis\Payengine\Lib\Internal\Connection\ConnectionInterface;
use Concardis\Payengine\Lib\Internal\Resource\Customers;
use Concardis\Payengine\Lib\Internal\Resource\PaymentInstruments;
use Concardis\Payengine\Lib\Internal\Resource\Orders;

/**
 * Class PayEngine
 *
 * @package Lib\PayEngine
 */
class Payengine
{
    /**
     * @var Connection
     */
    private Connection $connection;

    /**
     * @var MerchantConfiguration
     */
    private MerchantConfiguration $configuration;

    /**
     * @param MerchantConfiguration $configuration
     */
    function __construct(MerchantConfiguration $configuration)
    {
        $client = new Connection();
        $client->setMerchantConfig($configuration);
        $this->connection = $client;
    }

    /**
     * @param ConnectionInterface $connection
     * @return Payengine
     */
    public function setConnection(ConnectionInterface $connection): self
    {
        $this->connection = $connection;
        return $this;
    }

    /**
     * @param MerchantConfiguration $configuration
     * @return Payengine
     */
    public function setConfiguration(MerchantConfiguration $configuration): self
    {
        $this->configuration = $configuration;
        return $this;
    }

    /**
     * @param null $customerId
     *
     * @return Customers
     * @throws \Exception
     */
    public function customer($customerId = null): Customers
    {
        return new Customers($this->connection, $customerId, null);
    }

    /**
     * @param null $paymentInstrumentId
     *
     * @return PaymentInstruments
     * @throws \Exception
     */
    public function paymentInstruments($paymentInstrumentId = null): PaymentInstruments
    {
        return new PaymentInstruments($this->connection, $paymentInstrumentId, null);
    }

    /**
     * @param null $orderId
     *
     * @return Orders
     * @throws \Exception
     */
    public function orders($orderId = null): Orders
    {
        return new Orders($this->connection, $orderId, null);
    }
}