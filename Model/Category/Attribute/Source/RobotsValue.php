<?php
declare(strict_types=1);

namespace Nadeem\MetaContent\Model\Category\Attribute\Source;

class RobotsValue extends \Magento\Eav\Model\Entity\Attribute\Source\AbstractSource
{

    protected $_optionsData;

    /**
     * Constructor
     *
     * @param array $options
     */
    public function __construct(array $options = [])
    {
        $this->_optionsData = $options;
    }

    /**
     * getAllOptions
     *
     * @return array
     */
    public function getAllOptions()
    {
        if (count($this->_optionsData) < 1) {
            $this->_optionsData = [
                ['value' => '1', 'label' => __('INDEX,FOLLOW')],
                ['value' => '2', 'label' => __('NOINDEX,FOLLOW')],
                ['value' => '3', 'label' => __('INDEX,NOFOLLOW')],
                ['value' => '4', 'label' => __('NOINDEX,NOFOLLOW')]
            ];
        }
        return $this->_optionsData;
    }
}

