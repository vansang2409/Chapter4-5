<?php

namespace Magenest\Movie\Controller\Index;
class Insertdata extends \Magento\Framework\App\Action\Action {
public function execute() {
//        $subscription = $this->_objectManager->create('Magenest\Movie\Model\Movie');
//        $subscription->setName('TEST MOVIE');
//        $subscription->setDescription('TEST MOVIE !!!!! @@@@@@');
//        $subscription->setRating('10');
//        $subscription->setDirector_id('1');
//        $subscription->save();
//        $subscription1 = $this->_objectManager->create('Magenest\Movie\Model\Actor');
//        $subscription1->setName('Actor A');
//        $subscription1->save();
//        $subscription2 = $this->_objectManager->create('Magenest\Movie\Model\Actor');
//        $subscription2->setName('Actor B');
//        $subscription2->save();
//        $subscription3 = $this->_objectManager->create('Magenest\Movie\Model\Actor');
//        $subscription3->setName('Actor D');
//        $subscription3->save();
//        $subscription2 = $this->_objectManager->create('Magenest\Movie\Model\Director');
//        $subscription2->setName('Director of TEST MOVIE ');
//        $subscription2->save();
        $this->getResponse()->setBody('success');
  }
}