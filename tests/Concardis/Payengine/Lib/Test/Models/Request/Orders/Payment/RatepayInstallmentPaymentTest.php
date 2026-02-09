<?php

namespace Concardis\Payengine\Lib\Test\Models\Request\Orders\Payment;

require_once __DIR__ . "/../../../../../../../../../autoload.php";

use \Concardis\Payengine\Lib\Models\Request\Orders\Payment\Payment;
use \PHPUnit\Framework\TestCase;

class RatepayInstallmentPaymentTest extends TestCase
{
    /**
     * @test
     */
    public function toArray() {
        $ratepayInstallmentPayment = new Payment();
        $ratepayInstallmentPayment->setRiskIdentId('riskidentid');
        $ratepayInstallmentPayment->setNumberOfRates(3);
        $ratepayInstallmentPayment->setRate(100);
        $ratepayInstallmentPayment->setLastRate(50);
        $ratepayInstallmentPayment->setInterestRate(5.5);
        $ratepayInstallmentPayment->setTotalAmount(350);

        $ratepayInstallmentPaymentSetter = new Payment();
        $ratepayInstallmentPaymentSetter->setRatepayInstallment(
            'riskidentid', 100, 5.5, 3,
            350, 50
        );

        $actual = $ratepayInstallmentPayment->__toArray();
        $actualSetter = $ratepayInstallmentPaymentSetter->__toArray();
        $expected = array(
            'riskIdentId' => "riskidentid",
            'numberOfRates' => 3,
            'rate' => 100,
            'lastRate' => 50,
            'interestRate' => 5.5,
            'totalAmount' => 350
        );

        $this->assertEquals($expected, $actual);
        $this->assertEquals($expected, $actualSetter);
    }

    /**
     * @test
     */
    public function toArrayWithBankData() {
        $ratepayInstallmentPayment = new Payment();
        $ratepayInstallmentPayment->setRiskIdentId('riskidentid');
        $ratepayInstallmentPayment->setNumberOfRates(3);
        $ratepayInstallmentPayment->setRate(100);
        $ratepayInstallmentPayment->setLastRate(50);
        $ratepayInstallmentPayment->setInterestRate(5.5);
        $ratepayInstallmentPayment->setTotalAmount(350);
        $ratepayInstallmentPayment->setAccountHolder('accountholder');
        $ratepayInstallmentPayment->setBankName('bankname');
        $ratepayInstallmentPayment->setBic('bic');
        $ratepayInstallmentPayment->setIban('iban');

        $ratepayInstallmentPaymentSetter = new Payment();
        $ratepayInstallmentPaymentSetter->setRatepayInstallmentWithBankData(
            'riskidentid', 'iban', 'bic', 'accountholder', 'bankname',
            100, 5.5, 3,
            350, 50
        );

        $actual = $ratepayInstallmentPayment->__toArray();
        $actualSetter = $ratepayInstallmentPaymentSetter->__toArray();
        $expected = array(
            'riskIdentId' => "riskidentid",
            'numberOfRates' => 3,
            'rate' => 100,
            'lastRate' => 50,
            'interestRate' => 5.5,
            'totalAmount' => 350,
            'accountHolder' => "accountholder",
            'bankName' => "bankname",
            'bic' => "bic",
            'iban' => "iban"
        );

        $this->assertEquals($expected, $actual);
        $this->assertEquals($expected, $actualSetter);
    }

    /**
     * @test
     */
    public function toArrayWithPaymentInstrument() {
        $ratepayInstallmentPayment = new Payment();
        $ratepayInstallmentPayment->setRiskIdentId('riskidentid');
        $ratepayInstallmentPayment->setNumberOfRates(3);
        $ratepayInstallmentPayment->setRate(100);
        $ratepayInstallmentPayment->setLastRate(50);
        $ratepayInstallmentPayment->setInterestRate(5.5);
        $ratepayInstallmentPayment->setTotalAmount(350);
        $ratepayInstallmentPayment->setPaymentInstrumentId('paymentinstrumentid');

        $ratepayInstallmentPaymentSetter = new Payment();
        $ratepayInstallmentPaymentSetter->setRatepayInstallmentWithPaymentInstrument(
            'riskidentid', 'paymentinstrumentid',
            100, 5.5, 3,
            350, 50
        );

        $actual = $ratepayInstallmentPayment->__toArray();
        $actualSetter = $ratepayInstallmentPaymentSetter->__toArray();
        $expected = array(
            'riskIdentId' => "riskidentid",
            'numberOfRates' => 3,
            'rate' => 100,
            'lastRate' => 50,
            'interestRate' => 5.5,
            'totalAmount' => 350,
            'paymentInstrumentId' => "paymentinstrumentid"
        );

        $this->assertEquals($expected, $actual);
        $this->assertEquals($expected, $actualSetter);
    }

}
