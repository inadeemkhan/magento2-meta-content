<?php
declare(strict_types=1);
/**
* Copyright © 2013-2017 Magento, Inc. All rights reserved.
* See COPYING.txt for license details.
*/

namespace Nadeem\MetaContent\Helper;

use Magento\Framework\App\Helper\AbstractHelper;

class Data extends AbstractHelper
{

    /**
     * @param \Magento\Framework\App\Helper\Context $context
     */
    public function __construct(
        \Magento\Framework\App\Helper\Context $context
    ) {
        parent::__construct($context);
    }

    /**
     * @return bool
     */
    public function isEnabled()
    {
        return true;
    }
}

