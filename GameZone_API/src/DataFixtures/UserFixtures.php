<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class UserFixtures extends Fixture
{
    private $userPasswordHasher;

    public function __construct(UserPasswordHasherInterface $userPasswordHasher)
    {
        $this->userPasswordHasher = $userPasswordHasher;
    }

    public function load(ObjectManager $manager): void
    {
        // $product = new Product();
        // $manager->persist($product);
        $userA = new User;
        $userA->setEmail('admin@gamezone.fr');
        $userA->setPrenom('admin');
        $userA->setNom('istrator');
        $userA->setRoles(['ROLE_ADMIN']);
        $userA->setPassword($this->userPasswordHasher->hashPassword($userA,plainPassword:'adminPass'));
        $manager->persist($userA);

        $userB = new User;
        $userB->setEmail('toto@gmail.com');
        $userB->setPrenom('toto');
        $userB->setNom('xico');
        $userB->setRoles(['ROLE_USER']);
        $userB->setPassword($this->userPasswordHasher->hashPassword($userA,plainPassword:'totoPass'));
        $manager->persist($userB);


        $manager->flush();
    }
}
