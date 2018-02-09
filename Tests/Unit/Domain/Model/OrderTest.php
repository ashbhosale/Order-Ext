<?php
namespace OrderExt\Orderext\Tests\Unit\Domain\Model;

/**
 * Test case.
 *
 * @author Aishwarya,Mayank <mayank.khurana@hof-university.de>
 */
class OrderTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \OrderExt\Orderext\Domain\Model\Order
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \OrderExt\Orderext\Domain\Model\Order();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function getSendernameReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getSendername()
        );
    }

    /**
     * @test
     */
    public function setSendernameForStringSetsSendername()
    {
        $this->subject->setSendername('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'sendername',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getSenderaddressReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getSenderaddress()
        );
    }

    /**
     * @test
     */
    public function setSenderaddressForStringSetsSenderaddress()
    {
        $this->subject->setSenderaddress('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'senderaddress',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getOrderpickupdateReturnsInitialValueForDateTime()
    {
        self::assertEquals(
            null,
            $this->subject->getOrderpickupdate()
        );
    }

    /**
     * @test
     */
    public function setOrderpickupdateForDateTimeSetsOrderpickupdate()
    {
        $dateTimeFixture = new \DateTime();
        $this->subject->setOrderpickupdate($dateTimeFixture);

        self::assertAttributeEquals(
            $dateTimeFixture,
            'orderpickupdate',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getOrderdetailsReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getOrderdetails()
        );
    }

    /**
     * @test
     */
    public function setOrderdetailsForStringSetsOrderdetails()
    {
        $this->subject->setOrderdetails('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'orderdetails',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getReceivernameReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getReceivername()
        );
    }

    /**
     * @test
     */
    public function setReceivernameForStringSetsReceivername()
    {
        $this->subject->setReceivername('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'receivername',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getReceiveraddressReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getReceiveraddress()
        );
    }

    /**
     * @test
     */
    public function setReceiveraddressForStringSetsReceiveraddress()
    {
        $this->subject->setReceiveraddress('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'receiveraddress',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getOrderdeliverydateReturnsInitialValueForDateTime()
    {
        self::assertEquals(
            null,
            $this->subject->getOrderdeliverydate()
        );
    }

    /**
     * @test
     */
    public function setOrderdeliverydateForDateTimeSetsOrderdeliverydate()
    {
        $dateTimeFixture = new \DateTime();
        $this->subject->setOrderdeliverydate($dateTimeFixture);

        self::assertAttributeEquals(
            $dateTimeFixture,
            'orderdeliverydate',
            $this->subject
        );
    }
}
