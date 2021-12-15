<?php

namespace App\Controller;

use App\Services\SecurityServices;
use Psr\Log\LoggerInterface;
use Doctrine\ORM\EntityManagerInterface;
use Exception;
use PhpParser\Node\Stmt\Catch_;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;


class SecurityController extends AbstractController
{

    private $logger;
    private $service;

    
    public function __construct(LoggerInterface $logger, UserPasswordHasherInterface $userPasswordHasher, EntityManagerInterface $manager, SecurityServices $service)
    {
        $this->logger = $logger;
        $this->userPasswordHasher = $userPasswordHasher;
        $this->EntityManagerInterface = $manager;
        $this->service = $service;
    }

    #[Route('/api/register', name: 'register',methods:['POST'])]
    public function index(Request $request): Response
    {
        try{
            $post = json_decode($request->getContent(),true);
            $this->service->register($post['email'], $post['prenom'] , $post['nom'],$post['password']);
        }
        catch(Exception $e){
            return $this->json($e->getMessage(),500);
        }
        return $this->json('Utilisateur Enregistré');
        
    }

    

    // #[Route('/api/users', name: 'register',methods:['PUT'])]
    // public function update(Request $request): Response
    // {
    //     try{
    //         $post = json_decode($request->getContent(),true);
    //         $this->service->register($post['pseudo'],$post['password']);
    //     }
    //     catch(Exception $e){
    //         return $this->json($e->getMessage(),500);
    //     }
    //     return $this->json('Utilisateur Enregistré');
        
    // }

    /**
     * @Route("/login", name="app_login")
     */
    public function login(AuthenticationUtils $authenticationUtils): Response
    {
        // if ($this->getUser()) {
        //     return $this->redirectToRoute('target_path');
        // }

        // get the login error if there is one
        $error = $authenticationUtils->getLastAuthenticationError();
        // last username entered by the user
        $lastUsername = $authenticationUtils->getLastUsername();

        return $this->render('security/login.html.twig', ['last_username' => $lastUsername, 'error' => $error]);
    }

    /**
     * @Route("/logout", name="app_logout")
     */
    public function logout(): void
    {
        throw new \LogicException('This method can be blank - it will be intercepted by the logout key on your firewall.');
    }
}
