<?php

namespace Magenest\Movie\Block\Adminhtml\Rowcount;
/**
 * Test List block
 */
use Magento\Framework\Data\Form\Element\AbstractElement;

class Disabled extends \Magento\Config\Block\System\Config\Form\Field
{

    protected function _getElementHtml(AbstractElement $element)
    {
       $element->setDisabled('disabled');
        return $element->getElementHtml();

    }
//    public function getElementHtml()
//    {
//        $html = '';
//        $html .= '<input id="time_condition" type="hidden" name="' . $this->getName() . '" value="' . time() . '" />';
//        $html .= <<<EndHTML
//        <script type="text/javascript">
//        Event.observe(\$('carriers_tablerate_condition_name'), 'change', checkConditionName.bind(this));
//        function checkConditionName(event)
//        {
//            var conditionNameElement = Event.element(event);
//            if (conditionNameElement && conditionNameElement.id) {
//                \$('time_condition').value = '_' + conditionNameElement.value + '/' + Math.random();
//            }
//        }
//        </script>
//EndHTML;
//        $html .= parent::getElementHtml();
//        return $html;
//    }

}