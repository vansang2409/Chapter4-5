<?php
namespace Magenest\Movie\Observer;
use Magento\Framework\Event\Observer
    ;
use Magento\Framework\Event\ObserverInterface;
class Changeratingmovie implements ObserverInterface
{


    public function execute(\Magento\Framework\Event\Observer $observer)
    {
        $this->_eventManager->dispatch('Movie_change_rating',[$this->getRequest()->getParams()]);
        $customer = $observer->getEvent()->getNewmovie();
        $customer->setData('movierating','0');

    }
}