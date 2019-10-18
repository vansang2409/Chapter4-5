<?php
namespace Magenest\Movie\Controller\Adminhtml\System\Config;

use \Magento\Catalog\Model\Product\Visibility;

class Reload extends \Magento\Backend\App\Action
{
    protected $_logger;

    public function __construct(
        \Magento\Backend\App\Action\Context $context,
        \Psr\Log\LoggerInterface $logger
    )
    {
        $this->_logger = $logger;
        parent::__construct($context);
    }

    public function execute()
    {
        $this->_logger->debug('Sync Starts!!');
        // Code to perform specific action    }
    }
}