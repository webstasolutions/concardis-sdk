<?php declare(strict_types=1);

namespace Concardis\Payengine\Lib\Test\Internal\AbstractClass;

require_once __DIR__ . "/../../../../../../../autoload.php";

use Concardis\Payengine\Lib\Internal\Config\MerchantConfiguration;
use Concardis\Payengine\Lib\Internal\Connection\Connection;
use Concardis\Payengine\Lib\Internal\Resource\Customers;
use Concardis\Payengine\Lib\PayEngine;
use PHPUnit\Framework\TestCase;

/**
 * Class AbstractResourceTest
 * @package Concardis\Payengine\Lib\Test\Internal\AbstractClass
 */
class AbstractResourceTest extends TestCase
{
    /**
     * @var PayEngine
     */
    private PayEngine $payEngine;

    public function setUp(): void
    {
        $this->payEngine = new PayEngine(new MerchantConfiguration());
    }

    /**
     * @test
     * @expectedException \Exception
     */
    public function emptyFilterArrayTest_should_fail(){
        $this->payEngine->paymentInstruments()->get([]);
    }

    /**
     * @test
     * @expectedException \Exception
     */
    public function invalidResourceId_should_fail(){
        $this->payEngine->paymentInstruments(1);
    }

    /**
     * @test
     * @expectedException \Exception
     */
    public function numericFilterArrayTest_should_fail(){
        $this->payEngine->paymentInstruments()->get(['test']);
    }

}
