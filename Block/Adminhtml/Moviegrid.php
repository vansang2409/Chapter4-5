<?php
namespace Magenest\Movie\Block\Adminhtml;
class Moviegrid extends \Magento\Backend\Block\Widget\Grid\Container
{
    protected function _construct()
    {
        $this->_blockGroup = 'Magenest_Movie';
        $this->_controller = 'adminhtml_system';
        parent::_construct();
    }
}