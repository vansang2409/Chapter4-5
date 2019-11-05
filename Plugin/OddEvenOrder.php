<?php
namespace Magenest\Movie\Plugin;
use Magento\Framework\View\Element\UiComponent\ContextInterface;
use Magento\Framework\View\Element\UiComponentFactory;
use Magento\Ui\Component\Listing\Columns\Column;
use Magento\Framework\UrlInterface;
use \Magento\Sales\Api\Data\OrderInterface;




class OddEvenOrder extends Column
{

    public function __construct(
        \Magento\Framework\View\Element\UiComponent\ContextInterface $context,
        \Magento\Framework\View\Element\UiComponentFactory $uiComponentFactory,
        array $components = [],
        array $data = []
    ){
        parent::__construct($context, $uiComponentFactory, $components, $data);
    }

    public function prepareDataSource(array $dataSource) {
        if (isset($dataSource['odd_even'])) {

            $dataSource['odd_even']="<h4>Test</h4>";
//            foreach ($dataSource['data']['config']['items'] as & $item) {
//
//                //$item['yourcolumn'] is column name
//                $item['Odd/Even'] = "<h4>Test</h4>"; //Here you can do anything with actual data
//
//            }
        }

        return $dataSource;
    }

}