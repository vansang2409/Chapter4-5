<?php

namespace Magenest\Movie\Controller\Adminhml;

class Movierating extends \Magento\Framework\App\Action\Action
{

    public function execute()
    {

        $this->_eventManager->dispatch('Movie_change_rating', [$this->getRequest()->getParams()]);

    }
}