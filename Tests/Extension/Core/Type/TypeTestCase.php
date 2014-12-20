<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien.potencier@symfony-project.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\Form\Tests\Extension\Core\Type;

use Symfony\Component\Form\Test\TypeTestCase as BaseTypeTestCase;

/**
 * @deprecated Deprecated since version 2.3, to be removed in 3.0. Use Symfony\Component\Form\Test\TypeTestCase instead.
 */
abstract class TypeTestCase extends BaseTypeTestCase
{
    protected function setUp()
    {
        trigger_error('Abstract class "Symfony\Component\Form\Tests\Extension\Core\Type\TypeTestCase" is deprecated since version 2.3 and will be removed in 3.0. Use "Symfony\Component\Form\Test\TypeTestCase" instead.', E_USER_DEPRECATED);
        parent::setUp();
    }
}
