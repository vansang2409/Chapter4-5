<?php
namespace Magenest\Movie\Model\Resource;

class Setvalues implements \Magento\Framework\Option\ArrayInterface
{
    public function toOptionArray()
        {
            return [
                    ['value' => 'hide', 'label' => __('hide magenest actor')],
                    ['value' => 'show', 'label' => __(' show magenest actor')]
                    ];
        }
}