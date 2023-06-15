<?php
declare(strict_types=1);
/**
* Copyright © 2013-2017 Magento, Inc. All rights reserved.
* See COPYING.txt for license details.
*/

namespace Nadeem\MetaContent\Plugin\Frontend\Magento\Framework\View\Page\Config;

class Renderer
{

    public function beforeRenderMetadata(
        \Magento\Framework\View\Page\Config\Renderer $subject
    ) {
        //Your plugin code
        return [];
    }
}

