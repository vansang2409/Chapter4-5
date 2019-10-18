<?php
namespace Magenest\Movie\Model\Resource\Subscription;
/**
 * Sub Coll
 */
class Collection extends
    \Magento\Framework\Model\ResourceModel\Db\Collection\
    AbstractCollection {
    /**
     * Initialize resource collection
     *
     * @return void
     */
    public function _construct() {
        $this->_init('Magenest\Movie\Model\Sc',
            'Magenest\Movie\Model\Resource\Subscription');
    }
}