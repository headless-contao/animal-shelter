<?php

declare(strict_types=1);

/*
 * This file is part of janmarkuslanger/AnimalShelterBundle.
 *
 * (c) Jan-Markus Langer
 *
 * @license LGPL-3.0-or-later
 */

namespace Janmarkuslanger\AnimalShelterBundle\Tests;

use Janmarkuslanger\AnimalShelterBundle\JanmarkuslangerAnimalShelterBundle;
use PHPUnit\Framework\TestCase;

class JanmarkuslangerAnimalShelterBundleTest extends TestCase
{
    public function testCanBeInstantiated(): void
    {
        $bundle = new JanmarkuslangerAnimalShelterBundle();

        $this->assertInstanceOf('Janmarkuslanger\AnimalShelterBundle\JanmarkuslangerAnimalShelterBundle', $bundle);
    }
}
