<?php
namespace Magenest\Movie\Model\Resource;

use Magento\Framework\App\Config\Value;

class Directorid extends Value implements \Magento\Framework\Option\ArrayInterface
{

    public function toOptionArray()
    {
        $connection = $this->_resource->getConnection(\Magento\Framework\App\ResourceConnection::DEFAULT_CONNECTION);
        $customTable = $connection->getTableName('magenest_director');
        /* you can change your magento dabase name below */
//        $allField=$this->getValue();
        $allField = $connection->fetchAll("SELECT * FROM ".$customTable); //magento2 is database name
         foreach ($allField as $key=>$data){
             $values[] = array(
                 'value'     => $data['director_id'],
                 'label'     => __($data['name'])
             );
        }
         return $values;
    }

}