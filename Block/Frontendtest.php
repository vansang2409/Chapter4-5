<?php
namespace Magenest\Movie\Block;
use Magento\Framework\View\Element\Template;

class Frontendtest   extends Template
{

//    protected function _construct()
//    {
//        parent::_construct();
//
//        $this->buttonList->add('Test',[
//            'label' => __('Test')
//        ]);
//    }
    public function Title()
    {

        return "Modal Test";
    }

    public function Button()
    {
        return [
            'label' => __('Hello'),
            'class' => 'save primary',
            'type' =>'submit',
            'onclick'=>'alert(" Hello World ")',
            'data_attribute' => [
                'mage-init' => ['button' => ['event' => 'save']],
                'form-role' => 'save',
            ],
            'sort_order' => 10,
        ];
    }
}