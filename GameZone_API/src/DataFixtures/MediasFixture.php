<?php

namespace App\DataFixtures;

use App\Entity\Medias;
use App\Repository\ProduitRepository;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Persistence\ObjectManager;

class MediasFixture extends Fixture implements DependentFixtureInterface
{
    public function __construct(ProduitRepository $produitRepository)
    {
        $this->produitRepository = $produitRepository;
    }

    public function load(ObjectManager $manager): void
    {
        // $product = new Product();
        // $manager->persist($product);

        
        $produit = $this->produitRepository->findOneBy(array('nom'=>"Assassin's Creed Valhalla"));
        $med = new Medias;
        $med->setNom('Affiche')
        ->settype('Image')
        ->setLien('https://image.jeuxvideo.com/medias/158826/1588264397-5261-jaquette-avant.jpg')
        ->setProduit($produit);
        $manager->persist($med);

        $med1 = new Medias;
        $med1->setNom('Trailer')
        ->settype('Video')
        ->setLien('https://www.youtube.com/embed/B7JZcPQg-gA')
        ->setProduit($produit);
        $manager->persist($med1);

        $med2 = new Medias;
        $med2->setNom('Image1')
        ->settype('Image')
        ->setLien('https://image.jeuxvideo.com/medias/163473/1634731266-7360-capture-d-ecran.jpg')
        ->setProduit($produit);
        $manager->persist($med2);

        $med3 = new Medias;
        $med3->setNom('Image2')
        ->settype('Image')
        ->setLien('https://image.jeuxvideo.com/medias/163473/1634731266-375-capture-d-ecran.jpg')
        ->setProduit($produit);
        $manager->persist($med3);

        $med4 = new Medias;
        $med4->setNom('Image3')
        ->settype('Image')
        ->setLien('https://image.jeuxvideo.com/medias/163473/1634731266-375-capture-d-ecran.jpg')
        ->setProduit($produit);
        $manager->persist($med4);

        $produit1 = $this->produitRepository->findOneBy(array('nom'=>"Cyberpunk 2077"));
        $med5 = new Medias;
        $med5->setNom('Affiche')
        ->settype('Image')
        ->setLien('https://image.jeuxvideo.com/medias/156043/1560426635-4266-jaquette-avant.jpg')
        ->setProduit($produit1);
        $manager->persist($med5);

        $produit2 = $this->produitRepository->findOneBy(array('nom'=>"Shin Megami Tensei V"));
        $med6 = new Medias;
        $med6->setNom('Affiche')
        ->settype('Image')
        ->setLien('https://image.jeuxvideo.com/medias/163604/1636037252-5188-jaquette-avant.gif')
        ->setProduit($produit2);
        $manager->persist($med6);

        $produit3 = $this->produitRepository->findOneBy(array('nom'=>"Forza Horizon 5"));
        $med7 = new Medias;
        $med7->setNom('Affiche')
        ->settype('Image')
        ->setLien('https://image.jeuxvideo.com/medias/163187/1631865000-7055-jaquette-avant.jpg')
        ->setProduit($produit3);
        $manager->persist($med7);

        $produit4 = $this->produitRepository->findOneBy(array('nom'=>"Jurassic World Evolution 2"));
        $med8 = new Medias;
        $med8->setNom('Affiche')
        ->settype('Image')
        ->setLien('https://image.jeuxvideo.com/medias/163336/1633356069-9512-jaquette-avant.jpg')
        ->setProduit($produit4);
        $manager->persist($med8);

        $produit5 = $this->produitRepository->findOneBy(array('nom'=>"FIFA 22"));
        $med9 = new Medias;
        $med9->setNom('Affiche')
        ->settype('Image')
        ->setLien('https://image.jeuxvideo.com/medias/163154/1631541998-5162-jaquette-avant.jpg')
        ->setProduit($produit5);
        $manager->persist($med9);

        $produit6 = $this->produitRepository->findOneBy(array('nom'=>"Far Cry 6"));
        $med10 = new Medias;
        $med10->setNom('Affiche')
        ->settype('Image')
        ->setLien('https://image.jeuxvideo.com/medias/163161/1631607413-3853-jaquette-avant.jpg')
        ->setProduit($produit6);
        $manager->persist($med10);

        $produit7 = $this->produitRepository->findOneBy(array('nom'=>"Metroid Dread"));
        $med11 = new Medias;
        $med11->setNom('Affiche')
        ->settype('Image')
        ->setLien('https://image.jeuxvideo.com/medias/163299/1632989749-6428-jaquette-avant.gif')
        ->setProduit($produit7);
        $manager->persist($med11);

        $produit8 = $this->produitRepository->findOneBy(array('nom'=>"Disciples : Liberation"));
        $med12 = new Medias;
        $med12->setNom('Affiche')
        ->settype('Image')
        ->setLien('https://image.jeuxvideo.com/medias/163525/1635249385-3971-jaquette-avant.gif')
        ->setProduit($produit8);
        $manager->persist($med12);

        $produit9 = $this->produitRepository->findOneBy(array('nom'=>"Darkest Dungeon II"));
        $med13 = new Medias;
        $med13->setNom('Affiche')
        ->settype('Image')
        ->setLien('https://image.jeuxvideo.com/medias/163161/1631606227-3863-jaquette-avant.gif')
        ->setProduit($produit9);
        $manager->persist($med13);

        $produit10 = $this->produitRepository->findOneBy(array('nom'=>"Age of Empires IV"));
        $med14 = new Medias;
        $med14->setNom('Affiche')
        ->settype('Image')
        ->setLien('https://image.jeuxvideo.com/medias/163214/1632143636-6808-jaquette-avant.jpg')
        ->setProduit($produit10);
        $manager->persist($med14);

        $produit11 = $this->produitRepository->findOneBy(array('nom'=>"Pathfinder : Wrath of the Righteous"));
        $med15 = new Medias;
        $med15->setNom('Affiche')
        ->settype('Image')
        ->setLien('https://s3.gaming-cdn.com/images/products/5894/orig/pathfinder-wrath-of-the-righteous-pc-mac-jeu-steam-cover.jpg')
        ->setProduit($produit11);
        $manager->persist($med15);

        $produit12 = $this->produitRepository->findOneBy(array('nom'=>"Tales of Arise"));
        $med16 = new Medias;
        $med16->setNom('Affiche')
        ->settype('Image')
        ->setLien('https://image.jeuxvideo.com/medias/163299/1632990683-9071-jaquette-avant.gif')
        ->setProduit($produit12);
        $manager->persist($med16);

        $produit13 = $this->produitRepository->findOneBy(array('nom'=>"Deathloop"));
        $med17 = new Medias;
        $med17->setNom('Affiche')
        ->settype('Image')
        ->setLien('https://image.jeuxvideo.com/medias/163129/1631286887-1809-jaquette-avant.jpg')
        ->setProduit($produit13);
        $manager->persist($med17);


        $produit14 = $this->produitRepository->findOneBy(array('nom'=>"Kena : Bridge of Spirits"));
        $med18 = new Medias;
        $med18->setNom('Affiche')
        ->settype('Image')
        ->setLien('https://image.jeuxvideo.com/medias/163214/1632142889-7692-jaquette-avant.jpg')
        ->setProduit($produit14);
        $manager->persist($med18);

        $produit15 = $this->produitRepository->findOneBy(array('nom'=>"Diablo II : Resurrected"));
        $med19 = new Medias;
        $med19->setNom('Affiche')
        ->settype('Image')
        ->setLien('https://image.jeuxvideo.com/medias/163293/1632926824-300-jaquette-avant.gif')
        ->setProduit($produit15);
        $manager->persist($med19);

        $produit16 = $this->produitRepository->findOneBy(array('nom'=>"New World"));
        $med20 = new Medias;
        $med20->setNom('Affiche')
        ->settype('Image')
        ->setLien('https://image.jeuxvideo.com/medias/159403/1594028554-187-jaquette-avant.jpg')
        ->setProduit($produit16);
        $manager->persist($med20);

        $produit17 = $this->produitRepository->findOneBy(array('nom'=>"Astria Ascending"));
        $med21 = new Medias;
        $med21->setNom('Affiche')
        ->settype('Image')
        ->setLien('https://image.jeuxvideo.com/medias/163361/1633614374-6944-jaquette-avant.gif')
        ->setProduit($produit17);
        $manager->persist($med21);

        $produit18 = $this->produitRepository->findOneBy(array('nom'=>"Monster Hunter Stories 2 : Wings of Ruin"));
        $med22 = new Medias;
        $med22->setNom('Affiche')
        ->settype('Image')
        ->setLien('https://image.jeuxvideo.com/medias/162549/1625489277-7213-jaquette-avant.jpg')
        ->setProduit($produit18);
        $manager->persist($med22);

        // $produit19 = $this->produitRepository->findOneBy(array('nom'=>""));
        // $med23 = new Medias;
        // $med23->setNom('Affiche')
        // ->settype('Image')
        // ->setLien('')
        // ->setProduit($produit19);
        // $manager->persist($med23);

        $produit20 = $this->produitRepository->findOneBy(array('nom'=>"The Great Ace Attorney Chronicles"));
        $med24 = new Medias;
        $med24->setNom('Affiche')
        ->settype('Image')
        ->setLien('https://image.jeuxvideo.com/medias/162514/1625140136-2699-jaquette-avant.png')
        ->setProduit($produit20);
        $manager->persist($med24);

        $produit21 = $this->produitRepository->findOneBy(array('nom'=>"Unbound : Worlds Apart"));
        $med25 = new Medias;
        $med25->setNom('Affiche')
        ->settype('Image')
        ->setLien('https://image.jeuxvideo.com/medias/163214/1632138085-9618-jaquette-avant.jpg')
        ->setProduit($produit21);
        $manager->persist($med25);

        $produit22 = $this->produitRepository->findOneBy(array('nom'=>"Cyberpunk 2077-Cyberpunk 2077 V Homme"));
        $med26 = new Medias;
        $med26->setNom('Affiche')
        ->settype('Image')
        ->setLien('https://m.media-amazon.com/images/I/61Qw-KEMj+L._AC_SL1312_.jpg')
        ->setProduit($produit22);
        $manager->persist($med26);

        $produit23 = $this->produitRepository->findOneBy(array('nom'=>"The Legend of Zelda: Breath of the Wild Zelda"));
        $med27 = new Medias;
        $med27->setNom('Affiche')
        ->settype('Image')
        ->setLien('https://m.media-amazon.com/images/I/612KI3W+zjL._AC_SL1209_.jpg')
        ->setProduit($produit23);
        $manager->persist($med27);

        $produit24 = $this->produitRepository->findOneBy(array('nom'=>"'Collection Super Mario' - Bowser+Mario+Peach (Tenues de mariage)"));
        $med28 = new Medias;
        $med28->setNom('Affiche')
        ->settype('Image')
        ->setLien('https://m.media-amazon.com/images/I/41OLeuMibeL._AC_.jpg')
        ->setProduit($produit24);
        $manager->persist($med28);

        $produit25 = $this->produitRepository->findOneBy(array('nom'=>"Sonic Le Herisson"));
        $med29 = new Medias;
        $med29->setNom('Affiche')
        ->settype('Image')
        ->setLien('https://m.media-amazon.com/images/I/61a5S1yz-wL._AC_SL1500_.jpg')
        ->setProduit($produit25);
        $manager->persist($med29);

        $produit26 = $this->produitRepository->findOneBy(array('nom'=>"Assassin's Creed IV Black Flag Edward Kenway"));
        $med30 = new Medias;
        $med30->setNom('Affiche')
        ->settype('Image')
        ->setLien('https://m.media-amazon.com/images/I/61SfpyaPtuL._AC_SL1024_.jpg')
        ->setProduit($produit26);
        $manager->persist($med30);

        $produit27 = $this->produitRepository->findOneBy(array('nom'=>"Lot de 2 peluches, Mario et Yoshi"));
        $med31 = new Medias;
        $med31->setNom('Affiche')
        ->settype('Image')
        ->setLien('https://m.media-amazon.com/images/I/71F8Vjdi2ZL._AC_SL1200_.jpg')
        ->setProduit($produit27);
        $manager->persist($med31);

        $manager->flush();
    }

    public function getDependencies()
    {
        return [ProduitFixtures::class];
    }
}
