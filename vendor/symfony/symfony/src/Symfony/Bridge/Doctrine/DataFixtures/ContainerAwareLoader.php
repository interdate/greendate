<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Bridge\Doctrine\DataFixtures;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\DataFixtures\Loader;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;

/**
 * DQL data fixtures loader that injects the service container into
 * fixture objects that implement ContainerAwareInterface.
 *
 * Note: Use of this class requires the DQL data fixtures extension, which
 * is a suggested dependency for Symfony.
 */
class ContainerAwareLoader extends Loader
{
    /**
     * @var ContainerInterface
     */
    private $container;

    /**
     * Constructor.
     *
     * @param ContainerInterface $container A ContainerInterface instance
     */
    public function __construct(ContainerInterface $container)
    {
        $this->container = $container;
    }

    /**
     * {@inheritdoc}
     */
    public function addFixture(FixtureInterface $fixture)
    {
        if ($fixture instanceof ContainerAwareInterface) {
            $fixture->setContainer($this->container);
        }

        parent::addFixture($fixture);
    }
}
