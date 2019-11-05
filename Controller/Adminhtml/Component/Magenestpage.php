<?php
namespace Magenest\Movie\Controller\Adminhtml\Component;
use Magento\Backend\App\Action\Context;
use Magento\Framework\View\Result\PageFactory;
class Magenestpage extends \Magento\Backend\App\Action
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
        $resultPage->setActiveMenu(
            'Magenest_Movie::Magenest_page_sub');
        $resultPage->addBreadcrumb(__('Magenest_page'),
            __('Magenest_page'));
        $resultPage->addBreadcrumb(__('Magenest_page_sub'), __('Magenest_page_sub'));
        $resultPage->getConfig()->getTitle()->prepend(__('Magenest_page_sub'));
        return $resultPage;
    }

}