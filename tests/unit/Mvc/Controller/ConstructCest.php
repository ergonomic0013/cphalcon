<?php
declare(strict_types=1);

/**
 * This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalconphp.com>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */

namespace Phalcon\Test\Unit\Mvc\Controller;

use UnitTester;

/**
 * Class ConstructCest
 *
 * @package Phalcon\Test\Unit\Mvc\Controller
 */
class ConstructCest
{
    /**
     * Tests Phalcon\Mvc\Controller :: __construct()
     *
     * @param UnitTester $I
     *
     * @author Phalcon Team <team@phalconphp.com>
     * @since  2018-11-13
     */
    public function mvcControllerConstruct(UnitTester $I)
    {
        $I->wantToTest("Mvc\Controller - __construct()");
        $I->skipTest("Need implementation");
    }
}
