<?php

declare(strict_types=1);

/*
 * This file is part of janmarkuslanger/AnimalShelterBundle.
 *
 * (c) Jan-Markus Langer
 *
 * @license LGPL-3.0-or-later
 */

namespace Janmarkuslanger\AnimalShelterBundle\DependencyInjection;

use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Extension\Extension;
use Symfony\Component\DependencyInjection\Loader\YamlFileLoader;

class JanmarkuslangerAnimalShelterExtension extends Extension
{
    public function load(array $configs, ContainerBuilder $container): void
    {
        $loader = new YamlFileLoader($container, new FileLocator(__DIR__.'/../Resources/config'));
        $loader->load('services.yml');
    }
}
