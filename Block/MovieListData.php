<?php

namespace Magenest\Movie\Block;

use Magento\Framework\View\Element\Template\Context;
use Magenest\Movie\Model\MovieFactory;
/**
 * Test List block
 */
class MovieListData extends \Magento\Framework\View\Element\Template
{
    public function __construct(
        Context $context,
        MovieFactory $test, \Magento\Framework\App\ResourceConnection $resource
    ) {
        $this->_connection = $resource->getConnection();
        $this->_test = $test;
        parent::__construct($context);
    }

    public function _prepareLayout()
    {
        $this->pageConfig->getTitle()->set(__('Magenest Movie Module List Page'));

        return parent::_prepareLayout();
    }

    public function getTestCollection()
    {
        $test = $this->_test->create();
        $collection = $test->getCollection();
        return $collection;
    }


    protected $_connection;


        public function getTableMovie()
        {
            $myTable = $this->_connection->getTableName('magenest_movie');
            $sql = $this->_connection->select()->from(
                ["tn" => $myTable]
            );
            $result = $this->_connection->fetchAll($sql);
            return $result;
        }
    public function getTableActor()
    {
        $myTable = $this->_connection->getTableName('magenest_actor');
        $sql = $this->_connection->select()->from(
            ["tn" => $myTable]
        );
        $result = $this->_connection->fetchAll($sql);
        return $result;
    }
    public function getTableDirector()
    {
        $myTable = $this->_connection->getTableName('magenest_director');
        $sql = $this->_connection->select()->from(
            ["tn" => $myTable]
        );
        $result = $this->_connection->fetchAll($sql);
        return $result;
    }
}