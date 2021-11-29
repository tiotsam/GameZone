<?php

namespace App\DataFixtures;

use App\Entity\Commande;
use App\Repository\UserRepository;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Persistence\ObjectManager;

class CommandeFixtures extends Fixture implements DependentFixtureInterface
{
    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function load(ObjectManager $manager): void
    {
        // $product = new Product();
        // $manager->persist($product);

        $user = $this->userRepository->findOneBy(array('email'=>'toto@gmail.com'));
        $com = new Commande;
        $com->setUser($user)
        ->setAdresseLivraison('France/6 avenue de Laon/02200/Soissons')
        ->setAdressFacturation('France/6 avenue de Laon/02200/Soissons')
        ->setDateCommande(new \DateTime('11/22/2021'))
        ->setStatut('En cours de préparation');
        $manager->persist($com);

        $com1 = new Commande;
        $com1->setUser($user)
        ->setAdresseLivraison("France/15 rue de l'arbre à l'oiseau/02200/Soissons")
        ->setAdressFacturation('France/6 avenue de Laon/02200/Soissons')
        ->setDateCommande(new \DateTime('11/01/2021'))
        ->setStatut('Livré le 03/11/2021');
        $manager->persist($com1);

        

        $manager->flush();
    }

    public function getDependencies()
    {
        return [UserFixtures::class];
    }
    
    
}
