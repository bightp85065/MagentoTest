<?php
/**
 * Magento
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@magento.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade Magento to newer
 * versions in the future. If you wish to customize Magento for your
 * needs please refer to http://www.magento.com for more information.
 *
 * @category    Tests
 * @package     Tests_Functional
<<<<<<< HEAD
 * @copyright  Copyright (c) 2006-2017 X.commerce, Inc. and affiliates (http://www.magento.com)
=======
 * @copyright  Copyright (c) 2006-2016 X.commerce, Inc. and affiliates (http://www.magento.com)
>>>>>>> abac84b257ee62410b0c3e44090ff665e94a2d54
 * @license    http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */

namespace Mage\Install\Test\Block;

use Magento\Mtf\Block\Block;

/**
 * Continue block.
 */
class ContinueDownloadBlock extends Block
{
    /**
     * Continue button selector.
     *
     * @var string
     */
    protected $continueValidation = '#button-validate';

    /**
     * Continue button selector.
     *
     * @var string
     */
    protected $continueDeploy = '#button-deploy';

    /**
     * Continue button selector.
     *
     * @var string
     */
    protected $continueDownload = '#button-downloader';

    /**
     * Continue button selector.
     *
     * @var string
     */
    protected $startDownload = '#install_all button[type="submit"]';

    /**
     * Continue Magento installaltion button selector.
     *
     * @var string
     */
    protected $continueMagentoInstallation = '#connect_iframe_success button[type="button"]';

    /**
     * Continue installation.
     *
     * @return void
     */
    public function continueDeploy()
    {
        $this->_rootElement->find($this->continueDeploy)->click();
    }

    /**
     * Continue installation.
     *
     * @return void
     */
    public function continueValidation()
    {
        $this->_rootElement->find($this->continueValidation)->click();
    }

    /**
     * Continue installation.
     *
     * @return void
     */
    public function continueDownload()
    {
        $this->waitForElementVisible($this->continueDownload);
        $this->_rootElement->find($this->continueDownload)->click();
    }

    /**
     * Continue installation.
     *
     * @return void
     */
    public function startDownload()
    {
        $this->_rootElement->find($this->startDownload)->click();
    }

    /**
     * Continue installation.
     *
     * @return void
     */
    public function continueMagentoInstallation()
    {
        $this->waitForElementVisible($this->continueMagentoInstallation);
        $this->_rootElement->find($this->continueMagentoInstallation)->click();
    }
}
