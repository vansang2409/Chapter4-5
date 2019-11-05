<?php
namespace  Magenest\Movie\Ui\Component\Listing\Column;

use \Magento\Framework\View\Element\UiComponent\ContextInterface;
use \Magento\Framework\View\Element\UiComponentFactory;
use \Magento\Ui\Component\Listing\Columns\Column;
use \Magento\Framework\Api\SearchCriteriaBuilder;

class Numofmodule extends Column
{
    protected $_searchCriteria;
    protected $_reviewFactory;
    public function __construct(ContextInterface $context,
                                UiComponentFactory $uiComponentFactory,
                                SearchCriteriaBuilder $criteria,
                                array $components = [], array $data = [],
                                \Magento\Review\Model\ReviewFactory $reviewFactory)
    {
        $this->_searchCriteria  = $criteria;
        $this->_reviewFactory = $reviewFactory;
        parent::__construct($context, $uiComponentFactory, $components, $data);
    }
    public function prepareDataSource(array $dataSource)
    {

        if (isset($dataSource['data']['items'])) {
            foreach ($dataSource['data']['items'] as & $item) {}
            $item[$this->getData('name')] ='1';
        }

        return $dataSource;
    }

}