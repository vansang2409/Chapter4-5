<?php
namespace Magenest\Movie\Controller\Adminhtml\System;
use Magento\Backend\App\Action\Context;
use Magento\Framework\View\Result\PageFactory;
class Moviegrid extends \Magento\Backend\App\Action
{
    protected $resultPageFactory;
    public function __construct(
        Context $context,
        PageFactory $resultPageFactory
    ) {
        parent::__construct($context);
        $this->resultPageFactory = $resultPageFactory;
    }
    public function execute()
    {
        $resultPage = $this->resultPageFactory->create();
        $resultPage->setActiveMenu('Magenest_Movie::movie_grid');
        $resultPage->addBreadcrumb(__('Movie'),__('Movie'));
        $resultPage->addBreadcrumb(__('Manage Movie'), __('Manage Movie'));
        $resultPage->getConfig()->getTitle()->prepend(__('Movie_grid'));
       return $resultPage;
    }
    protected function _isAllowed()
    {
        return $this->_authorization->isAllowed('Magenest_Movie::movie_grid');
    }
}