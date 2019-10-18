<?php
namespace Magenest\Movie\Block\Adminhtml\Config;

use Magento\Framework\View\Element\UiComponent\Control\ButtonProviderInterface;

class Savebutton implements ButtonProviderInterface
{
    /**
     * @return array
     */
    public function getButtonData()
    {
        return [
            'label' => __('Save movie'),
            'class' => 'save primary',
            'data_attribute' => [
                'mage-init' => ['button' => ['event' => 'save']],
                'form-role' => 'save',
            ],
            'sort_order' => 90,
        ];
    }
    public function getSaveUrl()
    {
        return $this->getUrl('*/*/addmovie', []) ;
    }
}