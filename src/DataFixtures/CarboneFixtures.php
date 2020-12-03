<?php

namespace App\DataFixtures;

use App\Entity\CarboneImpact;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class CarboneFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $product = new CarboneImpact();
        $product->setName('foot');
        $product->setScore(10);
        $manager->persist($product);

        $product = new CarboneImpact();
        $product->setName('bycicle');
        $product->setScore(8);
        $manager->persist($product);

        $product = new CarboneImpact();
        $product->setName('public');
        $product->setScore(5);
        $manager->persist($product);

        $product = new CarboneImpact();
        $product->setName('solarcream');
        $product->setScore(-3);
        $manager->persist($product);

        $product = new CarboneImpact();
        $product->setName('cigarette');
        $product->setScore(-5);
        $manager->persist($product);

        $product = new CarboneImpact();
        $product->setName('auto');
        $product->setScore(-5);
        $manager->persist($product);

        $product = new CarboneImpact();
        $product->setName('plasticbag');
        $product->setScore(-10);
        $manager->persist($product);

        $manager->flush();
    }
}
