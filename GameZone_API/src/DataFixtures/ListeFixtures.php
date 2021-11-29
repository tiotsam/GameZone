<?php

namespace App\DataFixtures;

use App\Entity\Liste;
use App\Repository\CommandeRepository;
use App\Repository\ProduitRepository;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Persistence\ObjectManager;

class ListeFixtures extends Fixture implements DependentFixtureInterface
{
    public function __construct(CommandeRepository $commandeRepository, ProduitRepository $produitRepository)
    {
        $this->commandeRepository = $commandeRepository;
        $this->produitRepository = $produitRepository;
    }

    public function load(ObjectManager $manager): void
    {
        // $product = new Product();
        // $manager->persist($product);

        $list = new Liste;
        $list1 = new Liste;
        $list2 = new Liste;
        $prod = $this->produitRepository->findOneBy(array('nom'=>"Assassin's Creed Valhalla"));
        $prod1 = $this->produitRepository->findOneBy(array('nom'=>"Assassin's Creed IV Black Flag Edward Kenway"));
        $prod2 = $this->produitRepository->findOneBy(array('nom'=>"Metroid Dread"));
        $com = $this->commandeRepository->findOneBy(array('statut'=>'En cours de préparation'));
        $com1 = $this->commandeRepository->findOneBy(array('statut'=>'Livré le 03/11/2021'));

        $list->setProduit($prod)
        ->setCommande($com)
        ->setQuantité(1);
        $manager->persist($list);

        $list1->setProduit($prod1)
        ->setCommande($com)
        ->setQuantité(1);
        $manager->persist($list1);

        $list2->setProduit($prod2)
        ->setCommande($com1)
        ->setQuantité(1);
        $manager->persist($list2);
        
        $manager->flush();
    }

    public function getDependencies()
    {
        return [ProduitFixtures::class,CommandeFixtures::class];
    }
}
