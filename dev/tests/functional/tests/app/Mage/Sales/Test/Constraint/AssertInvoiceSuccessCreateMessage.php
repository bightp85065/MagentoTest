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

namespace Mage\Sales\Test\Constraint;

use Mage\Sales\Test\Page\Adminhtml\SalesOrderView;
use Magento\Mtf\Constraint\AbstractConstraint;

/**
 * Assert success invoice create message is displayed on order view page.
 */
class AssertInvoiceSuccessCreateMessage extends AbstractConstraint
{
    /* tags */
    const SEVERITY = 'low';
    /* end tags */

    /**
     * Text value to be checked.
     */
    const SUCCESS_CREATE_MESSAGE = 'The invoice has been created.';

    /**
     * Assert that success message present after create invoice.
     *
     * @param SalesOrderView $salesOrderView
     * @return void
     */
    public function processAssert(SalesOrderView $salesOrderView)
    {
        \PHPUnit_Framework_Assert::assertEquals(
            self::SUCCESS_CREATE_MESSAGE,
            $salesOrderView->getMessagesBlock()->getSuccessMessages()
        );
    }

    /**
     * Returns a string representation of the object
     *
     * @return string
     */
    public function toString()
    {
        return 'Success invoice create message is present.';
    }
}
