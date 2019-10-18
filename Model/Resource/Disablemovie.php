<?php
namespace Magenest\Movie\Model\Resource;

use Magento\Framework\App\Config\Value;
use Magento\Framework\Data\Form\Element\AbstractElement;
class Disablemovie extends \Magento\Config\Block\System\Config\Form\Field
{

    protected function _getElementHtml(AbstractElement $element)
    {
        $element->setDisabled('disabled');
        return $element->getElementHtml();

    }


}