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

namespace Mage\Sales\Test\TestStep;

use Mage\Customer\Test\Fixture\Customer;
use Mage\Sales\Test\Page\Adminhtml\SalesOrderCreateIndex;
use Magento\Mtf\TestStep\TestStepInterface;

/**
 * Select Customer for Order.
 */
class SelectCustomerOrderStep implements TestStepInterface
{
    /**
     * Sales order create index page.
     *
     * @var SalesOrderCreateIndex
     */
    protected $orderCreateIndex;

    /**
     * Customer fixture.
     *
     * @var Customer
     */
    protected $customer;

    /**
     * @constructor
     * @param SalesOrderCreateIndex $orderCreateIndex
     * @param Customer $customer
     */
    public function __construct(SalesOrderCreateIndex $orderCreateIndex, Customer $customer)
    {
        $this->orderCreateIndex = $orderCreateIndex;
        $this->customer = $customer;
    }

    /**
     * Select Customer for Order.
     *
     * @return void
     */
    public function run()
    {
        $this->orderCreateIndex->getCustomerGrid()->selectCustomer($this->customer);
    }
}
