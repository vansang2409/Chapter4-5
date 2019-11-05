<?php
namespace Magenest\Movie\Block\Adminhtml;
use Magenest\Movie\Model\MovieFactory;
use Magento\Framework\View\Element\Template;
use Magento\Framework\View\Element\Template\Context;

class Numofmodule extends \Magento\Framework\View\Element\Template
{
    protected $fullModuleList;
    protected $moduleManager;
    public function __construct(
    Context $context,
    MovieFactory $test, \Magento\Framework\App\ResourceConnection $resource,
    \Magento\Framework\Module\FullModuleList $fullModuleList,
    \Magento\Framework\Module\Manager $moduleManager,
    \Magento\Customer\Model\ResourceModel\Customer\CollectionFactory $customersCollectionFactory,
    \Magento\Sales\Model\ResourceModel\Order\CollectionFactory $orderCollectionFactory,
    \Magento\Sales\Model\Order\InvoiceRepository $invoicecollection,
    \Magento\Sales\Model\ResourceModel\Order\Creditmemo\CollectionFactory $creditmemoCollection,
    \Magento\Catalog\Model\ResourceModel\Product\CollectionFactory $productCollectionFactory
) {
    $this->_connection = $resource->getConnection();
    $this->_test = $test;
    parent::__construct($context);
    $this->fullModuleList = $fullModuleList;
    $this->moduleManager = $moduleManager;
    $this->customersCollectionFactory = $customersCollectionFactory;
    $this->orderCollectionFactory = $orderCollectionFactory;
    $this->invoicecollection=$invoicecollection;
    $this->creditmemoCollection = $creditmemoCollection;
    $this->productCollectionFactory = $productCollectionFactory;
}

    public function numofmodule()
    {

        $allModules = $this->fullModuleList->getAll();
        $listOfModules = [0,1];
        $listOfModules[0]=0;
        $listOfModules[1]=0;
        foreach ($allModules as $key => $value) {

            $data = explode('_', $key);
            if ($data[0]==='Magento'){
                $listOfModules[0]++;
            }else{
                $listOfModules[1]++;
            }


        }
        return $listOfModules;
    }
    public function customers()
    {
        $customers=$this->customersCollectionFactory->create();
        return count($customers);
    }
    public function products()
    {
        $products=$this->productCollectionFactory->create();
        return count($products);
    }
    public function Orders()
    {
        $orders=$this->orderCollectionFactory -> create();
        return count($orders);
    }
    public function Invoices()
    {
        $invoices=$this->invoicecollection->create();
        return count($invoices);
    }
    public function Creditmemos()
    {
        $creditmemo=$this->creditmemoCollection->create();
        return count($creditmemo);
    }

}