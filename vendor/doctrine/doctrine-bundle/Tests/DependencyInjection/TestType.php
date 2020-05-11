<?php

/*
 * This file is part of the DQL Bundle
 *
 * The code was originally distributed inside the Symfony framework.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 * (c) DQL Project, Benjamin Eberlei <kontakt@beberlei.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Doctrine\Bundle\DoctrineBundle\Tests\DependencyInjection;

use Doctrine\DBAL\Platforms\AbstractPlatform;

class TestType extends \Doctrine\DBAL\Types\Type
{
    public function getName()
    {
        return 'test';
    }

    public function getSQLDeclaration(array $fieldDeclaration, AbstractPlatform $platform)
    {
        return '';
    }
}
