<?php

namespace App\DataFixtures;

use App\Entity\Categorie;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class CategorieFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        // $product = new Product();
        // $manager->persist($product);

        $categ = new Categorie;
        $categ->setNom('PS4');
        $manager->persist($categ);

        $categ1 = new Categorie;
        $categ1->setNom('PS5');
        $manager->persist($categ1);

        $categ2 = new Categorie;
        $categ2->setNom('PC');
        $manager->persist($categ2);
        
        $categ3 = new Categorie;
        $categ3->setNom('XBOX');
        $manager->persist($categ3);

        $categ4 = new Categorie;
        $categ4->setNom('SWITCH');
        $manager->persist($categ4);

        $categ5 = new Categorie;
        $categ5->setNom('RPG');
        $manager->persist($categ5);

        $categ6 = new Categorie;
        $categ6->setNom('Action');
        $manager->persist($categ6);

        $categ7 = new Categorie;
        $categ7->setNom('Aventure');
        $manager->persist($categ7);

        $categ8 = new Categorie;
        $categ8->setNom('FPS');
        $manager->persist($categ8);

        $categ9 = new Categorie;
        $categ9->setNom('MMORPG');
        $manager->persist($categ9);

        $categ10 = new Categorie;
        $categ10->setNom('MULTI');
        $manager->persist($categ10);

        $categ11 = new Categorie;
        $categ11->setNom('RTS');
        $manager->persist($categ11);

        $categ12 = new Categorie;
        $categ12->setNom('Hack And Slash');
        $manager->persist($categ12);

        $categ13 = new Categorie;
        $categ13->setNom('Point And Click');
        $manager->persist($categ13);

        $categ14 = new Categorie;
        $categ14->setNom('Course');
        $manager->persist($categ14);
        
        $categ15 = new Categorie;
        $categ15->setNom('Gestion');
        $manager->persist($categ15);
        
        $categ16 = new Categorie;
        $categ16->setNom('Sport');
        $manager->persist($categ16);

        $categ17 = new Categorie;
        $categ17->setNom('Metroid Vania');
        $manager->persist($categ17);

        $manager->flush();
    }
}
