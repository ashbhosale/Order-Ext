<?php
namespace OrderExt\Orderext\Domain\Model;

/***
 *
 * This file is part of the "OrderExt" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 *  (c) 2018 Aishwarya,Mayank <mayank.khurana@hof-university.de>, Hochschule Hof
 *
 ***/

/**
 * Order
 */
class Order extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{
    /**
     * sendername
     *
     * @var string
     */
    protected $sendername = '';

    /**
     * senderaddress
     *
     * @var string
     */
    protected $senderaddress = '';

    /**
     * orderpickupdate
     *
     * @var \DateTime
     */
    protected $orderpickupdate = null;

    /**
     * orderdetails
     *
     * @var string
     */
    protected $orderdetails = '';

    /**
     * receivername
     *
     * @var string
     */
    protected $receivername = '';

    /**
     * receiveraddress
     *
     * @var string
     */
    protected $receiveraddress = '';

    /**
     * orderdeliverydate
     *
     * @var \DateTime
     */
    protected $orderdeliverydate = null;

    /**
     * Returns the sendername
     *
     * @return string $sendername
     */
    public function getSendername()
    {
        return $this->sendername;
    }

    /**
     * Sets the sendername
     *
     * @param string $sendername
     * @return void
     */
    public function setSendername($sendername)
    {
        $this->sendername = $sendername;
    }

    /**
     * Returns the senderaddress
     *
     * @return string $senderaddress
     */
    public function getSenderaddress()
    {
        return $this->senderaddress;
    }

    /**
     * Sets the senderaddress
     *
     * @param string $senderaddress
     * @return void
     */
    public function setSenderaddress($senderaddress)
    {
        $this->senderaddress = $senderaddress;
    }

    /**
     * Returns the orderpickupdate
     *
     * @return \DateTime $orderpickupdate
     */
    public function getOrderpickupdate()
    {
        return $this->orderpickupdate;
    }

    /**
     * Sets the orderpickupdate
     *
     * @param \DateTime $orderpickupdate
     * @return void
     */
    public function setOrderpickupdate(\DateTime $orderpickupdate)
    {
        $this->orderpickupdate = $orderpickupdate;
    }

    /**
     * Returns the orderdetails
     *
     * @return string $orderdetails
     */
    public function getOrderdetails()
    {
        return $this->orderdetails;
    }

    /**
     * Sets the orderdetails
     *
     * @param string $orderdetails
     * @return void
     */
    public function setOrderdetails($orderdetails)
    {
        $this->orderdetails = $orderdetails;
    }

    /**
     * Returns the receivername
     *
     * @return string $receivername
     */
    public function getReceivername()
    {
        return $this->receivername;
    }

    /**
     * Sets the receivername
     *
     * @param string $receivername
     * @return void
     */
    public function setReceivername($receivername)
    {
        $this->receivername = $receivername;
    }

    /**
     * Returns the receiveraddress
     *
     * @return string $receiveraddress
     */
    public function getReceiveraddress()
    {
        return $this->receiveraddress;
    }

    /**
     * Sets the receiveraddress
     *
     * @param string $receiveraddress
     * @return void
     */
    public function setReceiveraddress($receiveraddress)
    {
        $this->receiveraddress = $receiveraddress;
    }

    /**
     * Returns the orderdeliverydate
     *
     * @return \DateTime $orderdeliverydate
     */
    public function getOrderdeliverydate()
    {
        return $this->orderdeliverydate;
    }

    /**
     * Sets the orderdeliverydate
     *
     * @param \DateTime $orderdeliverydate
     * @return void
     */
    public function setOrderdeliverydate(\DateTime $orderdeliverydate)
    {
        $this->orderdeliverydate = $orderdeliverydate;
    }
}
