<?php
namespace Magenest\Movie\Model;

//use Magenest\Movie\Model\ResourceModel\Employee\CollectionFactory;
use Magento\Ui\DataProvider\AbstractDataProvider;

class DataProvider extends \Magento\Ui\DataProvider\AbstractDataProvider
{
    /**
     * @param string $name
     * @param string $primaryFieldName
     * @param string $requestFieldName
     * @param CollectionFactory $employeeCollectionFactory
     * @param array $meta
     * @param array $data
     */
    public function __construct(
        $name,
        $primaryFieldName,
        $requestFieldName,
        array $data = []
    ) {
        parent::__construct($name, $primaryFieldName, $requestFieldName, $data);
    }
    /**
     * Get data
     *
     * @return array
     */
    public function addFilter(\Magento\Framework\Api\Filter $filter)
    {
        return null;
    }
    public function getData()
    {
        return [];
    }
}