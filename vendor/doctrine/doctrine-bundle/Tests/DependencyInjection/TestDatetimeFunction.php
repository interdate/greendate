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

use Doctrine\ORM\Query\AST\Functions\FunctionNode;
use Doctrine\ORM\Query\SqlWalker;
use Doctrine\ORM\Query\Parser;

class TestDatetimeFunction extends FunctionNode
{
    public function getSql(SqlWalker $sqlWalker)
    {
        return '';
    }

    public function parse(Parser $parser)
    {
        return '';
    }
}
