<?php
namespace  Magenest\Movie\Ui\Component\Listing\Column;

use \Magento\Sales\Api\OrderRepositoryInterface;
use \Magento\Framework\View\Element\UiComponent\ContextInterface;
use \Magento\Framework\View\Element\UiComponentFactory;
use \Magento\Ui\Component\Listing\Columns\Column;
use \Magento\Framework\Api\SearchCriteriaBuilder;

class Oddeven extends Column
{
        protected $_orderRepository;
        protected $_searchCriteria;

        public function __construct(ContextInterface $context, UiComponentFactory $uiComponentFactory, OrderRepositoryInterface $orderRepository, SearchCriteriaBuilder $criteria, array $components = [], array $data = [])
        {
            $this->_orderRepository = $orderRepository;
            $this->_searchCriteria  = $criteria;
            parent::__construct($context, $uiComponentFactory, $components, $data);
        }

        public function prepareDataSource(array $dataSource)
        {
            if (isset($dataSource['data']['items'])) {
                foreach ($dataSource['data']['items'] as & $item) {

                    $order = $this->_orderRepository->get($item["entity_id"]);
                    $order_id = $order->getEntityId();
                    $status = $order->getData("export_status");

                    if ($order_id % 2 == 0) {
                        $item[$this->getData('name')]  = '<span class="grid-severity-critical"><span>Odd</span></span>';
                    } else {
                        $item[$this->getData('name')]  = '<span class="grid-severity-notice"><span>Even</span></span>';
                    }


                    // $this->getData('name') returns the name of the column so in this case it would return export_status
//                    $item[$this->getData('name')] = $export_status;
                }
            }

           return $dataSource;
        }
}