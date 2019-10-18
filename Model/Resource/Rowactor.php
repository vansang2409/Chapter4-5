<?php
namespace Magenest\Movie\Model\Resource;
use Magento\Framework\App\Config\Value;

class Rowactor extends Value
{

    public function _afterLoad(){
        $connection = $this->_resource->getConnection(\Magento\Framework\App\ResourceConnection::DEFAULT_CONNECTION);
        $customTable = $connection->getTableName('magenest_actor');
        /* you can change your magento dabase name below */
        $allField=$this->getValue();
        $allField = $connection->fetchOne("SELECT count(*) FROM ".$customTable); //magento2 is database name
        $this->setValue($allField) ;
    }
    protected function _getElementHtml(AbstractElement $element)
    {
        $element->setDisabled('disabled');
        return $element->getElementHtml();

    }
}