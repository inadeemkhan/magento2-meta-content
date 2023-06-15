# Mage2 Module Nadeem MetaContent

    ``nadeem/module-metacontent``

 - [Main Functionalities](#markdown-header-main-functionalities)
 - [Installation](#markdown-header-installation)
 - [Configuration](#markdown-header-configuration)
 - [Specifications](#markdown-header-specifications)
 - [Attributes](#markdown-header-attributes)


## Main Functionalities
Magento2 extension to make pages meta robots content NoIndex,NoFollow

## Installation
\* = in production please use the `--keep-generated` option

### Type 1: Zip file

 - Unzip the zip file in `app/code/Nadeem`
 - Enable the module by running `php bin/magento module:enable Nadeem_MetaContent`
 - Apply database updates by running `php bin/magento setup:upgrade`\*
 - Flush the cache by running `php bin/magento cache:flush`

### Type 2: Composer

 - Make the module available in a composer repository for example:
    - private repository `repo.magento.com`
    - public repository `packagist.org`
    - public github repository as vcs
 - Add the composer repository to the configuration by running `composer config repositories.repo.magento.com composer https://repo.magento.com/`
 - Install the module composer by running `composer require nadeem/module-metacontent`
 - enable the module by running `php bin/magento module:enable Nadeem_MetaContent`
 - apply database updates by running `php bin/magento setup:upgrade`\*
 - Flush the cache by running `php bin/magento cache:flush`


## Configuration

 - is_enable (meta_content/general/is_enable)


## Specifications

 - Helper
	- Nadeem\MetaContent\Helper\Data

 - Plugin
	- beforeRenderMetadata - Magento\Framework\View\Page\Config\Renderer > Nadeem\MetaContent\Plugin\Frontend\Magento\Framework\View\Page\Config\Renderer


## Attributes

 - Category - enable_meta (enable_meta)

 - Category - robots_content (robots_content)

