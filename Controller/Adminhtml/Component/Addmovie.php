<?php

namespace Magenest\Movie\Controller\Adminhtml\Component;

use Magento\Framework\Controller\ResultFactory;
use \Magento\Backend\App\Action ;
class Addmovie extends Action
{
    const ADMIN_RESOURCE = 'Index';

    protected $resultPageFactory;
    protected $contactFactory;
 //   protected $_resource;
    public function __construct(
        \Magento\Backend\App\Action\Context $context,
        \Magento\Framework\View\Result\PageFactory $resultPageFactory
    )
    {
        $this->resultPageFactory = $resultPageFactory;
       // $this->_resource = $resource;
        parent::__construct($context);
    }


    public function execute()
    {
        $resultRedirect = $this->resultRedirectFactory->create();
        $data = $this->getRequest()->getParams();
//        print_r($data);
        if ($data != null) {
            $moviename = $data['newmovie']['moviename'];
            $Description = $data['newmovie']['moviedescription'];
            $rating = $data['newmovie']['movierating'];
            $director = $data['newmovie']['directorid'];
            if ($moviename != null || $Description != null || $rating != null) {
//                $connection = $this->_resource->getConnection(\Magento\Framework\App\ResourceConnection::DEFAULT_CONNECTION);
//            $customTable = $connection->getTableName('magenest_movie');
//            $allField = $connection->fetchOne("SELECT count(*) FROM ".$customTable."WHERE='".$moviename."'"); //magento2 is database name
            $subscription = $this->_objectManager->create('Magenest\Movie\Model\Movie');
            $subscription->setName($moviename);
            $subscription->setDescription($Description);
            $subscription->setRating($rating);
            $subscription->setDirector_id($director);
            $subscription->save();
            $this->messageManager->addSuccess(__('Successfully saved the item.'));
            }
            else {
                $this->messageManager->addError(__('Request null'));
            }


            return $resultRedirect->setPath('*/*/index');

        }
    }
}