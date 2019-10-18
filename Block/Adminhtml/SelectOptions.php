<?php
namespace Magenest\Movie\Block\Adminhtml;

class SelectOptions extends \Magento\Config\Block\System\Config\Form\Field {

    public function __construct(
        \Magento\Backend\Block\Template\Context $context, array $data = []
    ) {
        parent::__construct($context, $data);
    }

    protected function _getElementHtml(\Magento\Framework\Data\Form\Element\AbstractElement $element) {
        $value = $element->getData('value');

        if ($value==1){
         return '<script type="text/javascript">
           require(["jquery"], function ($) {
                $(document).ready(function () {
                    $(".hide-this").each(function(){
                        $(this).closest("tr").hide(); // Can also use .remove() to remove the field completely
                    })
                });
            });
        </script>';

        }
    }
}