<?php
declare(strict_types=1);

namespace Nadeem\MetaContent\Model\Product\Attribute\Source;

class ProductRobotsValue extends \Magento\Eav\Model\Entity\Attribute\Source\AbstractSource
{

    /**
     * getAllOptions
     *
     * @return array
     */
    public function getAllOptions()
    {
        $this->_options = [
            ['value' => '1', 'label' => __('INDEX,INDEX')],
            ['value' => '2', 'label' => __('INDEX,NOFOLLOW')],
            ['value' => '3', 'label' => __('NOINDEX,FOLLOW')],
            ['value' => '4', 'label' => __('NOINDEX,NOFOLLOW')]
        ];
        return $this->_options;
    }
}
