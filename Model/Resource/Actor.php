<?php
namespace Magenest\Movie\Model\Resource;

class Actor extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{
    public function _construct()
    {
        $this->_init('magenest_actor', 'actor_id');
    }
}