<?php
declare(strict_types=1);

namespace Nadeem\MetaContent\Model\Product\Attribute\Source;

class ProductMetaEnable extends \Magento\Eav\Model\Entity\Attribute\Source\AbstractSource
{

    /**
     * getAllOptions
     *
     * @return array
     */
    public function getAllOptions()
    {
        $this->_options = [
        ['value' => '0', 'label' => __('No')],
        ['value' => '1', 'label' => __('Yes')]
        ];
        return $this->_options;
    }
}