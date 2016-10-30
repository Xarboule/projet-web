<?php

namespace AppBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use AppBundle\Entity\Etape;

class LoadEtapeData extends AbstractFixture implements OrderedFixtureInterface
{
	public function load(ObjectManager $manager)
	{
		$circuit=$this->getReference('starwars-circuit');
		
		$etape = new Etape();
		$etape->setNumeroEtape(1);
		$etape->setVilleEtape("Alderaan");
		$etape->setNombreJours(1);
		$circuit->addEtape($etape);
		
		$manager->persist($etape);
		
		$etape = new Etape();
		$etape->setNumeroEtape(2);
		$etape->setVilleEtape("Cantina");
		$etape->setNombreJours(2);
		$circuit->addEtape($etape);
		$manager->persist($etape);
		
		$etape = new Etape();
		$etape->setNumeroEtape(3);
		$etape->setVilleEtape("Faucon Millenium");
		$etape->setNombreJours(1);
		$circuit->addEtape($etape);
		$manager->persist($etape);

		$circuit=$this->getReference('anneau-circuit');
		
		$etape = new Etape();
		$etape->setNumeroEtape(1);
		$etape->setVilleEtape("Auberge du Poney fringuant");
		$etape->setNombreJours(1);
		$circuit->addEtape($etape);
		$manager->persist($etape);
		
		
		$etape = new Etape();
		$etape->setNumeroEtape(3);
		$etape->setVilleEtape("Fendeval");
		$etape->setNombreJours(1);
		$circuit->addEtape($etape);
		$manager->persist($etape);
		
		$etape = new Etape();
		$etape->setNumeroEtape(4);
		$etape->setVilleEtape("Mines de la Moria");
		$etape->setNombreJours(1);
		$circuit->addEtape($etape);
		$manager->persist($etape);
		
		$etape = new Etape();
		$etape->setNumeroEtape(2);
		$etape->setVilleEtape("Montagne du Destin");
		$etape->setNombreJours(1);
		$circuit->addEtape($etape);
		$manager->persist($etape);
		
		$circuit=$this->getReference('retourfutur-circuit');
		
		$etape = new Etape();
		$etape->setNumeroEtape(1);
		$etape->setVilleEtape("Passé");
		$etape->setNombreJours(1);
		$circuit->addEtape($etape);
		$manager->persist($etape);
		
		$etape = new Etape();
		$etape->setNumeroEtape(2);
		$etape->setVilleEtape("Futur");
		$etape->setNombreJours(1);
		$circuit->addEtape($etape);
		$manager->persist($etape);
		
		$circuit=$this->getReference('jurassic-circuit');
		
		$etape = new Etape();
		$etape->setNumeroEtape(1);
		$etape->setVilleEtape("Diplodocus");
		$etape->setNombreJours(1);
		$circuit->addEtape($etape);
		$manager->persist($etape);
		
		$etape = new Etape();
		$etape->setNumeroEtape(2);
		$etape->setVilleEtape("Steganosaure");
		$etape->setNombreJours(1);
		$circuit->addEtape($etape);
		$manager->persist($etape);
		
		$etape = new Etape();
		$etape->setNumeroEtape(3);
		$etape->setVilleEtape("Velociraptor");
		$etape->setNombreJours(1);
		$circuit->addEtape($etape);
		$manager->persist($etape);
		
		$etape = new Etape();
		$etape->setNumeroEtape(4);
		$etape->setVilleEtape("T-Rex");
		$etape->setNombreJours(1);
		$circuit->addEtape($etape);
		$manager->persist($etape);
		
		$manager->flush();
	}

	public function getOrder()
	{
		// the order in which fixtures will be loaded
		// the lower the number, the sooner that this fixture is loaded
		return 3;
	}
}

// (1, 1, 'Grenade', 1),
// (1, 2, 'Cordoue', 2),
// (1, 3, 'Séville', 1),
// (2, 1, 'Hanoï', 1),
// (2, 2, 'Dà Nang', 1),
// (2, 3, 'Hôi An', 1),
// (2, 4, 'Hô Chi Minh', 2),
// (3, 1, 'Versailles', 1),
// (3, 2, 'Paris', 1),
// (4, 1, 'Florence', 2),
// (4, 2, 'Sienne', 1),
// (4, 3, 'Pise', 1),
// (4, 4, 'Rome', 2);