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

namespace Phalcon\Test\Unit\Security;

use UnitTester;

/**
 * Class SetDICest
 *
 * @package Phalcon\Test\Unit\Security
 */
class SetDICest
{
    /**
     * Tests Phalcon\Security :: setDI()
     *
     * @param UnitTester $I
     *
     * @author Phalcon Team <team@phalconphp.com>
     * @since  2018-11-13
     */
    public function securitySetDI(UnitTester $I)
    {
        $I->wantToTest("Security - setDI()");
        $I->skipTest("Need implementation");
    }
}
