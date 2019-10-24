<?php
namespace Magenest\Movie\Observer;
use Magento\Framework\Event\Observer
    ;
use Magento\Framework\Event\ObserverInterface;
class Changefirstname implements ObserverInterface
{
//    protected $_customerRepositoryInterface;
//
//    public function __construct(
//        \Magento\Customer\Api\CustomerRepositoryInterface $customerRepositoryInterface
//    ) {
//        $this->_customerRepositoryInterface = $customerRepositoryInterface;
//    }

    public function execute(\Magento\Framework\Event\Observer $observer)
    {

                    $customer = $observer->getEvent()->getCustomer();
                    $customer->setData('firstname','magenest');
//                    $customer->save();



    }
}