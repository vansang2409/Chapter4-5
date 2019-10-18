<?php
namespace Magenest\Movie\Block\Adminhtml\Config;
use Magento\Backend\Block\Widget\Grid as WidgetGrid;
class Movie extends \Magento\Backend\Block\Widget\Grid\Extended
{
    /**
     * @var \Packt\HelloWorld\Model\Resource\Subscription\
    Collection
     */
    protected $_subscriptionCollection;
    /**
     * @param \Magento\Backend\Block\Template\Context
    $context
     * @param \Magento\Backend\Helper\Data $backendHelper
     * @param \Packt\HelloWorld\Model\ResourceModel\
    Subscription\Collection $subscriptionCollection
     * @param array $data
     */
    public function __construct(
        \Magento\Backend\Block\Template\Context $context,
        \Magento\Backend\Helper\Data $backendHelper,
        \Magenest\Movie\Model\Resource\Subscription\Collection $subscriptionCollection,
        array $data = []
    ) {
        $this->_subscriptionCollection = $subscriptionCollection;
        parent::__construct($context, $backendHelper, $data);
        $this->setEmptyText(__('No movie grid Found'));
    }
    /**
     * Initialize the subscription collection
     *
     * @return WidgetGrid
     */
    protected function _prepareCollection()
    {
        $this->setCollection($this->_subscriptionCollection);
        return parent::_prepareCollection();
}
}