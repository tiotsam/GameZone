<?php


namespace App\Services;

use App\Entity\User;
use App\Repository\UserRepository;
use Doctrine\ORM\EntityManagerInterface;
use Exception;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class SecurityServices {

    public function __construct( UserPasswordHasherInterface $userPasswordHasher, EntityManagerInterface $manager,UserRepository $userRep)
    {
        $this->userPasswordHasher = $userPasswordHasher;
        $this->manager = $manager;
        $this->userRep = $userRep;
    }

    public function register( $email , $prenom , $nom , $pass )
    {

        $user = new User;

        if(empty($email)){
            throw new Exception("L'email doit être renseigné");
        }
        
        if(empty($prenom)){
            throw new Exception("Le prénom doit être renseigné");
        }

        if(empty($nom)){
            throw new Exception("Le nom doit être renseigné");
        }

        if(empty($pass)){
            throw new Exception("Le mot de passe doit être renseigné");
        }


        if( filter_var($email, FILTER_VALIDATE_EMAIL ))
        {
            
            if($this->userRep->findOneBy(['email' => $email]))
            {
                throw new Exception("L'adresse mail : ".$email.' existe déjà');
            }
            else
            {
                $user->setEmail($email);
                $user->setPrenom($prenom);
                $user->setNom($nom);
                $user->setRoles(['ROLE_USER']);
                $user->setPassword($this->userPasswordHasher->hashPassword($user,plainPassword:$pass));
                
                $this->manager->persist($user);
                $this->manager->flush();
            }
        }
        else
        {
            throw new Exception('Veuillez entrer une adresse mail valide.');
        }
    }
}