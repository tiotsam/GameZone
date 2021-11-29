<?php

namespace App\DataFixtures;

use App\Entity\Produit;
use App\Repository\CategorieRepository;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Persistence\ObjectManager;

class ProduitFixtures extends Fixture implements DependentFixtureInterface
{
    public function __construct(CategorieRepository $categorieRepository)
    {
        $this->categorieRepository = $categorieRepository;
    }

    public function load(ObjectManager $manager): void
    {
        // $product = new Product();
        // $manager->persist($product);

        $categ = $this->categorieRepository->findOneBy(array('nom'=>'PS4'));
        $categ1 = $this->categorieRepository->findOneBy(array('nom'=>'PS5'));
        $categ2 = $this->categorieRepository->findOneBy(array('nom'=>'PC'));
        $categ3 = $this->categorieRepository->findOneBy(array('nom'=>'XBOX'));
        $categ4 = $this->categorieRepository->findOneBy(array('nom'=>'SWITCH'));

        $categ5 = $this->categorieRepository->findOneBy(array('nom'=>'RPG'));
        $categ6 = $this->categorieRepository->findOneBy(array('nom'=>'Action'));
        $categ7 = $this->categorieRepository->findOneBy(array('nom'=>'Aventure'));
        $categ8 = $this->categorieRepository->findOneBy(array('nom'=>'FPS'));
        $categ9 = $this->categorieRepository->findOneBy(array('nom'=>'MMORPG'));
        $categ10 = $this->categorieRepository->findOneBy(array('nom'=>'MULTI'));
        $categ11 = $this->categorieRepository->findOneBy(array('nom'=>'RTS'));
        $categ12 = $this->categorieRepository->findOneBy(array('nom'=>'Hack And Slash'));
        $categ13 = $this->categorieRepository->findOneBy(array('nom'=>'Point And Click'));
        $categ14 = $this->categorieRepository->findOneBy(array('nom'=>'Course'));
        $categ15 = $this->categorieRepository->findOneBy(array('nom'=>'Gestion'));
        $categ16  = $this->categorieRepository->findOneBy(array('nom'=>'Sport'));
        $categ17 = $this->categorieRepository->findOneBy(array('nom'=>'Metroid Vania'));

        $jeux00 = new Produit;
        $jeux00->setNom("Assassin's Creed Valhalla");
        $jeux00->setPrix(34,99);
        $jeux00->setStock(20);
        $jeux00->setType('Jeux');
        $jeux00->setDateSortie(new \DateTime('10/10/2020'));
        $jeux00->setDescription("Assassin's Creed Valhalla est un RPG en monde ouvert se déroulant pendant l'âge des vikings. Vous incarnez Eivor, un viking du sexe de votre choix qui a quitté la Norvège pour trouver la fortune et la gloire en Angleterre. Raids, construction et croissance de votre colonie, mais aussi personnalisation du héros ou de l'héroïne sont au programme de cet épisode.")
        ->addCategory($categ)
        ->addCategory($categ1)
        ->addCategory($categ2)
        ->addCategory($categ3)
        ->addCategory($categ5)
        ->addCategory($categ6)
        ->addCategory($categ7);
        $manager->persist($jeux00);

        $jeux01 = new Produit;
        $jeux01->setNom("Cyberpunk 2077");
        $jeux01->setPrix(19,99);
        $jeux01->setStock(20);
        $jeux01->setType('Jeux');
        $jeux01->setDateSortie(new \DateTime('12/10/2020'));
        $jeux01->setDescription("Cyberpunk 2077 est un jeu de rôle futuriste et dystopique inspiré du jeu de rôle papier du même nom. Dans un monde devenu indissociable de la cybernétique, l'indépendance des robots humanoïdes pose quelques problèmes...")
        ->addCategory($categ)
        ->addCategory($categ1)
        ->addCategory($categ2)
        ->addCategory($categ3)
        ->addCategory($categ5)
        ->addCategory($categ6)
        ->addCategory($categ7)
        ->addCategory($categ8);
        $manager->persist($jeux01);

        $jeux02 = new Produit;
        $jeux02->setNom("Shin Megami Tensei V");
        $jeux02->setPrix(44,99);
        $jeux02->setStock(20);
        $jeux02->setType('Jeux');
        $jeux02->setDateSortie(new \DateTime('11/12/2021'));
        $jeux02->setDescription("Shin Megami Tensei V est un jeu de rôle exclusif à la Nintendo Switch. Le jeu prend place dans un univers post-apocalyptique dans lequel le joueur incarne un étudiant devant faire face à des forces démoniaques dans un Tokyo ravagé.")
        ->addCategory($categ4)
        ->addCategory($categ5)
        ->addCategory($categ7);
        $manager->persist($jeux02);

        $jeux03 = new Produit;
        $jeux03->setNom("Forza Horizon 5");
        $jeux03->setPrix(59,99);
        $jeux03->setStock(20);
        $jeux03->setType('Jeux');
        $jeux03->setDateSortie(new \DateTime('11/09/2021'));
        $jeux03->setDescription("Forza Horizon 5 est un jeu de course en monde ouvert développé par Playground Games. Il prend place dans les villes et magnifiques décors du Mexique. Le jeu propose aussi bien des courses solo que des épreuves compétitives et collaboratives en ligne.")
        ->addCategory($categ3)
        ->addCategory($categ2)
        ->addCategory($categ14)
        ->addCategory($categ16)
        ->addCategory($categ10);
        $manager->persist($jeux03);

        $jeux04 = new Produit;
        $jeux04->setNom("Jurassic World Evolution 2");
        $jeux04->setPrix(59,99);
        $jeux04->setStock(20);
        $jeux04->setType('Jeux');
        $jeux04->setDateSortie(new \DateTime('11/09/21'));
        $jeux04->setDescription("Jurassic World Evolution 2 est un jeu de gestion ancré dans le monde de la célèbre licence aux dinosaures. Par rapport au premier opus, il est possible d'y trouver de nouveaux bâtiments, de nouveaux outils de gestion et créatifs et plus de 75 espèces préhistoriques (dont des reptiles volants et marins). Un mode 'Théorie du chaos' permet de revivre des moments inspirés des films Jurassic Park et World, avec quelques rebondissements.")
        ->addCategory($categ2)
        ->addCategory($categ15);
        $manager->persist($jeux04);

        $jeux05 = new Produit;
        $jeux05->setNom("FIFA 22");
        $jeux05->setPrix(59,99);
        $jeux05->setStock(20);
        $jeux05->setType('Jeux');
        $jeux05->setDateSortie(new \DateTime('10/01/2021'));
        $jeux05->setDescription("FIFA 22 est un jeu de football éditée par Electronic Arts. Comme chaque saison, le jeu offre son lot d'améliorations techniques pour toujours plus de réalisme ainsi que des animations et des comportements toujours plus poussés. Les modes carrière et Ultimate Team disposent également de nouveaux ajouts.")
        ->addCategory($categ)
        ->addCategory($categ1)
        ->addCategory($categ2)
        ->addCategory($categ3)
        ->addCategory($categ4)
        ->addCategory($categ16);
        $manager->persist($jeux05);

        $jeux06 = new Produit;
        $jeux06->setNom("Far Cry 6");
        $jeux06->setPrix(59,99);
        $jeux06->setStock(20);
        $jeux06->setType('Jeux');
        $jeux06->setDateSortie(new \DateTime('10/07/2021'));
        $jeux06->setDescription("Far Cry 6 est un FPS qui se déroule sur l'île tropicale fictive de Yara. Vous incarnez Dani Rojas, un membre de la guérilla locale qui lutte contre le régime oppressif du dictateur du pays, Anton Castillo, qui prépare son fils à prendre sa suite. Pour vous aider dans votre combat, vous pouvez compter sur vos alliés les Amigos et fabriquer vos propres armes et véhicules.")
        ->addCategory($categ)
        ->addCategory($categ1)
        ->addCategory($categ2)
        ->addCategory($categ3)
        ->addCategory($categ6)
        ->addCategory($categ7)
        ->addCategory($categ8);
        $manager->persist($jeux06);

        $jeux07 = new Produit;
        $jeux07->setNom("Metroid Dread");
        $jeux07->setPrix(44,99);
        $jeux07->setStock(20);
        $jeux07->setType('Jeux');
        $jeux07->setDateSortie(new \DateTime('10/08/2021'));
        $jeux07->setDescription("Présenté comme 'Metroid 5', Metroid Dread est le nouvel opus de la célèbre licence de Nintendo, en 2,5D. L'héroïne Samus Aran devra faire face à une nouvelle menace, au sein d'une aventure qui fait beaucoup penser aux premiers épisodes de la série.")
        ->addCategory($categ4)
        ->addCategory($categ17);
        $manager->persist($jeux07);

        $jeux08 = new Produit;
        $jeux08->setNom("Disciples : Liberation");
        $jeux08->setPrix(29,99);
        $jeux08->setStock(20);
        $jeux08->setType('Jeux');
        $jeux08->setDateSortie(new \DateTime('10/21/2021'));
        $jeux08->setDescription("Disciples : Liberation est le nouvel opus de la licence éponyme de RPG stratégique. Explorez les terres déchirées de Nevendaar et changez le destin de cette région tout en affrontant des hordes d'ennemis dans des combats au tour par tour.")
        ->addCategory($categ2)
        ->addCategory($categ5)
        ->addCategory($categ15);
        $manager->persist($jeux08);

        $jeux09 = new Produit;
        $jeux09->setNom("Darkest Dungeon II");
        $jeux09->setPrix(29,99);
        $jeux09->setStock(20);
        $jeux09->setType('Jeux');
        $jeux09->setDateSortie(new \DateTime('10/26/2021'));
        $jeux09->setDescription("Darkest Dungeon II est la suite du célèbre Dungeon-RPG de Red Hook Games. Avec un système de combat et d'exploration revus, cette suite vous emmènera à travers différentes régions où, comme pour son aîné, vous emprunterez des chemins qui vous mèneront à divers affrontements, ou peut-être à des récompenses...")
        ->addCategory($categ2)
        ->addCategory($categ5);
        $manager->persist($jeux09);

        $jeux10 = new Produit;
        $jeux10->setNom("Age of Empires IV");
        $jeux10->setPrix(59,99);
        $jeux10->setStock(20);
        $jeux10->setType('Jeux');
        $jeux10->setDateSortie(new \DateTime('10/28/2021'));
        $jeux10->setDescription("Age of Empires IV sur PC est un jeu de stratégie qui appartient à la célèbre saga de stratégie. Il vous sera possible de prendre part à des batailles historiques avec des armées possédant leurs propres caractéristiques.")
        ->addCategory($categ2)
        ->addCategory($categ11)
        ->addCategory($categ10);
        $manager->persist($jeux10);

        $jeux11 = new Produit;
        $jeux11->setNom("Pathfinder : Wrath of the Righteous");
        $jeux11->setPrix(59,99);
        $jeux11->setStock(20);
        $jeux11->setType('Jeux');
        $jeux11->setDateSortie(new \DateTime('09/02/2021'));
        $jeux11->setDescription("Pathfinder : Wrath of the Righteous est une adaptation du jeu de rôle papier Pathfinder qui est développéé par Owlcat Games. Le joueur incarne un héro qui se bat contre l'invasion des hordes de démons sur les terres de Golarion maintenant connues sous le nom de Plaie du Monde.")
        ->addCategory($categ2)
        ->addCategory($categ5)
        ->addCategory($categ15);
        $manager->persist($jeux11);

        $jeux12 = new Produit;
        $jeux12->setNom("Tales of Arise");
        $jeux12->setPrix(59,99);
        $jeux12->setStock(20);
        $jeux12->setType('Jeux');
        $jeux12->setDateSortie(new \DateTime('09/10/2021'));
        $jeux12->setDescription("Tales of Arise est un jeu de rôle s'ajoutant à la longue liste des Tales of. Le monde de Tales of Arise est constitué de deux planètes : Dahna et Rena. La planète Rena exerce une oppression terrible sur sa voisine, et Alphen, lassé de tout cela, décide de libérer son peuple de cette servitude.")
        ->addCategory($categ)
        ->addCategory($categ1)
        ->addCategory($categ2)
        ->addCategory($categ3)
        ->addCategory($categ5)
        ->addCategory($categ6)
        ->addCategory($categ7);
        $manager->persist($jeux12);
        
        $jeux13 = new Produit;
        $jeux13->setNom("Deathloop");
        $jeux13->setPrix(59,99);
        $jeux13->setStock(20);
        $jeux13->setType('Jeux');
        $jeux13->setDateSortie(new \DateTime('09/14/2021'));
        $jeux13->setDescription("Deathloop est le nouveau jeu de Arkane Lyon, le studio à l'origine de la série Dishonored. L'histoire se passe sur l'île de Blackreef, qui oppose deux assassins, Colt et Julianna. Le premier souhaite briser le cycle sans fin dans lequel il est enfermé tandis que la seconde semble s'épanouir dans cette boucle.")
        ->addCategory($categ1)
        ->addCategory($categ6)
        ->addCategory($categ8)
        ->addCategory($categ10);
        $manager->persist($jeux13);

        $jeux14 = new Produit;
        $jeux14->setNom("Kena : Bridge of Spirits");
        $jeux14->setPrix(19,99);
        $jeux14->setStock(20);
        $jeux14->setType('Jeux');
        $jeux14->setDateSortie(new \DateTime('10/10/2021'));
        $jeux14->setDescription("Bridge of Spirits est un jeu d'aventure vous plongeant dans un monde de magie. Vous y incarnez Kena, une aventurière qui entreprend un périple afin de découvrir les secrets d'une communauté cachée près d'un temple sacré...")
        ->addCategory($categ1)
        ->addCategory($categ2)
        ->addCategory($categ3)
        ->addCategory($categ7);
        $manager->persist($jeux14);

        $jeux15 = new Produit;
        $jeux15->setNom("Diablo II : Resurrected");
        $jeux15->setPrix(59,99);
        $jeux15->setStock(20);
        $jeux15->setType('Jeux');
        $jeux15->setDateSortie(new \DateTime('09/23/2021'));
        $jeux15->setDescription("Diablo II : Resurrected est la remasterisation du hack'n'slash culte Diablo II et de son extension Lord of Destruction. Cette version remise aux goûts présente de nouveaux graphismes ultra détaillés, des cinématiques retravaillées et une bande son améliorée, tandis que le gameplay et les systèmes du jeu d’origine sont identiques à ceux de l’époque.")
        ->addCategory($categ2)
        ->addCategory($categ3)
        ->addCategory($categ4)
        ->addCategory($categ1)
        ->addCategory($categ5)
        ->addCategory($categ12);
        $manager->persist($jeux15);

        $jeux16 = new Produit;
        $jeux16->setNom("New World");
        $jeux16->setPrix(59,99);
        $jeux16->setStock(20);
        $jeux16->setType('Jeux');
        $jeux16->setDateSortie(new \DateTime('09/28/2021'));
        $jeux16->setDescription("Sculptez votre propre destin dans New World, un jeu massivement multijoueur en monde ouvert, situé sur une terre maudite, un monde en évolution selon les saisons, la météo, et l'heure de la journée. Regroupez vous pour traquer des monstres et bâtir des civilisations florissantes, ou pour survivre face à des terreurs surnaturelles et des bandits meurtriers.")
        ->addCategory($categ2)
        ->addCategory($categ9);
        $manager->persist($jeux16);

        $jeux17 = new Produit;
        $jeux17->setNom("Astria Ascending");
        $jeux17->setPrix(59,99);
        $jeux17->setStock(20);
        $jeux17->setType('Jeux');
        $jeux17->setDateSortie(new \DateTime('09/30/2021'));
        $jeux17->setDescription("Astria Ascending est un RPG évoqué comme étant une réinvention du jeu Zodiac : Orcanon Odyssey, sorti en 2015 sur mobile. Le jeu mêle fantaisie et science-fiction. Kazushige Nojima, auteur de plusieurs épisodes des Final Fantasy, s'occupe de son scénario.")
        ->addCategory($categ1)
        ->addCategory($categ2)
        ->addCategory($categ3)
        ->addCategory($categ4)
        ->addCategory($categ5);
        $manager->persist($jeux17);

        $jeux18 = new Produit;
        $jeux18->setNom("Monster Hunter Stories 2 : Wings of Ruin");
        $jeux18->setPrix(44,99);
        $jeux18->setStock(20);
        $jeux18->setType('Jeux');
        $jeux18->setDateSortie(new \DateTime('07/09/2021'));
        $jeux18->setDescription("Suite directe de son prédécesseur sorti sur 3DS, Monster Hunter Stories 2 : Wings of Ruin est un RPG sur Switch. Faisant partie de la série spin-off de la licence de Capcom, ce nouveau titre propose des combats au tour par tour et un système de lien avec les monstres. Le jeu propose également des bonus pour ceux qui ont joué au nouvel opus de la série principale : Monster Hunter Rise.")
        ->addCategory($categ4)
        ->addCategory($categ5);
        $manager->persist($jeux18);

        $jeux19 = new Produit;
        $jeux19->setNom("The Great Ace Attorney Chronicles");
        $jeux19->setPrix(9,99);
        $jeux19->setStock(20);
        $jeux19->setType('Jeux');
        $jeux19->setDateSortie(new \DateTime('07/27/2021'));
        $jeux19->setDescription("The Great Ace Attorney Chronicles est une collection des visual novels The Great Ace Attorney : Adventures et The Great Ace Attorney 2 : Resolve, tous deux disponibles uniquement au Japon jusqu’à maintenant. Un doublage anglais est également disponible pour la première fois. Se déroulant à la fin du 19e siècle, pendant la période Meiji au Japon et l'ère victorienne en Angleterre, les deux softs demanderont aux joueurs d'endosser le rôle d'un avocat de la défense. Celui-ci devra rechercher des preuves, plaider au tribunal et s'assurer d'un jugement impartial.")
        ->addCategory($categ4)
        ->addCategory($categ2)
        ->addCategory($categ3)
        ->addCategory($categ13);
        $manager->persist($jeux19);

        $jeux20 = new Produit;
        $jeux20->setNom("Unbound : Worlds Apart");
        $jeux20->setPrix(19,99);
        $jeux20->setStock(20);
        $jeux20->setType('Jeux');
        $jeux20->setDateSortie(new \DateTime('10/10/2021'));
        $jeux20->setDescription("Unbound : Worlds Apart est un jeu d'aventure et un plateformer prenant la forme d'un metroidvania. Soli, un petit mage, voyage entre les mondes pour tenter de comprendre ce qui a ravagé le sien. Il utilise des portails qui peuvent changer la gravité ou simplement les décors, créant des énigmes environnementales à résoudre pour progresser.")
        ->addCategory($categ2)
        ->addCategory($categ7);
        $manager->persist($jeux20);

        $goodies = new Produit;
        $goodies->setNom("Cyberpunk 2077-Cyberpunk 2077 V Homme");
        $goodies->setPrix(19,99);
        $goodies->setStock(20);
        $goodies->setType('Figurine');
        $goodies->setDateSortie(new \DateTime('01/10/2021'));
        $goodies->setDescription("Figurine Homme V Cyberpunk 2077 , Produit sous Licence officielle , Matière: pvc , Hauteur 24 cm");
        $manager->persist($goodies);

        $goodies1 = new Produit;
        $goodies1->setNom("The Legend of Zelda: Breath of the Wild Zelda");
        $goodies1->setPrix(19,99);
        $goodies1->setStock(20);
        $goodies1->setType('amiibo');
        $goodies1->setDateSortie(new \DateTime('10/10/2017'));
        $goodies1->setDescription("You can use amiibo on your Wii U by tapping them to the NFC touchpoint on the Wii U GamePad.You can also use amiibo on your New Nintendo 3DS and New Nintendo 3DS XL by tapping them to the NFC area on the bottom screen. Alternatively, using the NFC Reader/Writer Accessory you can use amiibo on your Nintendo 2DS, Nintendo 3DS and Nintendo 3DS XL. amiibo are also compatible with the Nintendo Switch");
        $manager->persist($goodies1);


        $goodies2 = new Produit;
        $goodies2->setNom("'Collection Super Mario' - Bowser+Mario+Peach (Tenues de mariage)");
        $goodies2->setPrix(269,95);
        $goodies2->setStock(20);
        $goodies2->setType('amiibo');
        $goodies2->setDateSortie(new \DateTime('10/10/2017'));
        $goodies2->setDescription("Est compatible avec Nintendo Wii U, Nintendo Switch et Nintendo 3DS");
        $manager->persist($goodies2);


        $goodies3 = new Produit;
        $goodies3->setNom("Sonic Le Herisson");
        $goodies3->setPrix(29,99);
        $goodies3->setStock(20);
        $goodies3->setType('Figurine');
        $goodies3->setDateSortie(new \DateTime('10/10/2015'));
        $goodies3->setDescription("Figurine de votre personnage préféré pour maintenir et charger votre manette ou smartphone , Livré avec un câble micro-USB de 2M , 20 cm de hauteur");
        $manager->persist($goodies3);


        $goodies4 = new Produit;
        $goodies4->setNom("Assassin's Creed IV Black Flag Edward Kenway")
        ->setPrix(109,99)
        ->setStock(20)
        ->setType('Figurine')
        ->setDateSortie(new \DateTime('10/10/2013'))
        ->setDescription("Figurine Edward Kenway , Matière: pvc , Hauteur 28 cm");
        $manager->persist($goodies4);

        $goodies5 = new Produit;
        $goodies5->setNom("Lot de 2 peluches, Mario et Yoshi")
        ->setPrix(34,99)
        ->setStock(20)
        ->setType('Peluche')
        ->setDateSortie(new \DateTime('10/10/2018'))
        ->setDescription("Peluche Mario Hauteur 30 cm , Peluche Yoshi Hauteur 27 cm");
        $manager->persist($goodies5);

        $manager->flush();
    }

    public function getDependencies()
    {
        return [CategorieFixtures::class];
    }
}
