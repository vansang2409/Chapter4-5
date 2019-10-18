<?php

namespace Magenest\Movie\Block\Adminhtml\Config;

use Magento\Framework\App\Config\ScopeConfigInterface;

use Magento\Config\Block\System\Config\Form\Field;
use Magento\Backend\Block\Template\Context;
use Magento\Framework\Data\Form\Element\AbstractElement;

class Reload extends Field
{
    protected $_template = 'Magenest_Movie::system/config/button/button.phtml';

    public function __construct(
        \Magento\Backend\Block\Template\Context $context,
        array $data = []
    )
    {
        parent::__construct($context, $data);
    }

    public function render(\Magento\Framework\Data\Form\Element\AbstractElement $element)
    {
        $element->unsScope()->unsCanUseWebsiteValue()->unsCanUseDefaultValue();
        return parent::render($element);
    }

    protected function _getElementHtml(\Magento\Framework\Data\Form\Element\AbstractElement $element)
    {
        return $this->_toHtml();
    }

    public function getAjaxUrl()
    {
        return $this->getUrl('magenest\adminhtml\system\config\reload');
    }

    public function getButtonHtml()
    {
        $button = $this->getLayout()->createBlock(
            'Magento\Backend\Block\Widget\Button'
        )->setData(
            [
                'id' => 'btnid',
                'label' => __('Reload'),
                'on_click' =>'setLocation(\'http://m232.local/admin/admin/system_config/\')',
            ]
        );

        return $button->toHtml();
    }

}