<?php
declare(strict_types=1);

namespace Nadeem\MetaContent\Plugin\Magento\Framework\View\Page\Config;

use Magento\Framework\View\Page\Config as PageConfig;
use Magento\Cms\Model\Template\FilterProvider;
use Magento\Cms\Model\Page;
use Magento\Framework\App\Request\Http;
use Magento\Framework\Registry;
use Magento\Catalog\Model\CategoryFactory;

class Renderer
{
    /**
     * @var PageConfig
     */
    protected $_pageConfig;
    /**
     * @var FilterProvider
     */
    protected $_filterProvider;
    /**
     * @var Page
     */
    protected $_page;
    /**
     * @var Http
     */
    protected $_request;
    /**
     * @var Registry
     */
    protected $_registry;
    /**
     * @var CategoryFactory
     */
    protected $_categoryFactory;
    /**
     *
     * @param PageConfig $pageConfig
     * @param FilterProvider $filterProvider
     * @param Page $page
     * @param Http $request
     * @param Registry $registry
     * @param CategoryFactory $categoryFactory
     */
    public function __construct(
        PageConfig $pageConfig,
        FilterProvider $filterProvider,
        Page $page,
        Http $request,
        Registry $registry,
        CategoryFactory $categoryFactory
    ) {
        $this->_pageConfig = $pageConfig;
        $this->_filterProvider = $filterProvider;
        $this->_page = $page;
        $this->_request = $request;
        $this->_registry = $registry;
        $this->_categoryFactory = $categoryFactory;
    }

    /**
     * Before Render function
     *
     * @param Renderer $subject
     */
    public function beforeRenderMetadata(
        \Magento\Framework\View\Page\Config\Renderer $subject
    ) {
        // Setup meta robots conetent for Category Page
        if ($this->_request->getFullActionName() == 'catalog_category_view') 
        {
            $current_cat_id = $this->_registry->registry('current_category')->getId();
            $categoryData = $this->_categoryFactory->create()->load($current_cat_id);
            $isMetaEnable = (int)$categoryData->getData('is_meta_enable'); 
            $isRobotsNumber = $categoryData->getData('robots_value'); 

            $isRobotsContent = $this->getRobotsContentValue($isRobotsNumber);
            if (!empty($isMetaEnable) && $isMetaEnable == 1) {
                $this->_pageConfig->setMetadata('robots', $isRobotsContent);
            }
        }

        // Setup meta robots conetent for product Page
        if ($this->_request->getFullActionName() == 'catalog_product_view') 
        {
            $currentProduct = $this->_registry->registry('current_product');
            $isMetaEnable = $currentProduct->getData('product_meta_enable'); 
            $isRobotsNumber = $currentProduct->getData('product_robots_value'); 

            $isRobotsContent = $this->getRobotsContentValue($isRobotsNumber);
            if (!empty($isMetaEnable) && $isMetaEnable == 1) {
                $this->_pageConfig->setMetadata('robots', $isRobotsContent);
            }
        }
    }

    /**
     * @return string
     */
    public function getRobotsContentValue ($isRobotsNumber) {
        switch ($isRobotsNumber) {
            case "1":
                $isRobotsNumber = "INDEX,FOLLOW";
                break;
            case "2":
                $isRobotsNumber = "NOINDEX,FOLLOW";
                break;
            case "3":
                $isRobotsNumber = "INDEX,NOFOLLOW";
                break;       
            default:
                $isRobotsNumber = "NOINDEX,NOFOLLOW";
                break;
        }
        return $isRobotsNumber;
    }
}

