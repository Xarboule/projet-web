<?php

namespace AppBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use AppBundle\Entity\Circuit;

class LoadCircuitData extends AbstractFixture implements OrderedFixtureInterface
{
	public function load(ObjectManager $manager)
	{		
		$circuit = new Circuit();
		$circuit->setDescription('Star Wars');
		$circuit->setPaysDepart('Tatooine');
		$circuit->setVilleDepart('Chez Oncle Owen');
		$circuit->setVilleArrivee('Etoile de la mort');
		//$circuit->setDureeCircuit(4);
		$manager->persist($circuit);
		
		$this->addReference('starwars-circuit', $circuit);
		
		$circuit = new Circuit();
		$circuit->setDescription("Destruction de l'Anneau");
		$circuit->setPaysDepart('Comté');
		$circuit->setVilleDepart('Cul-de-sac');
		$circuit->setVilleArrivee('Mordor');
		//$circuit->setDureeCircuit(4);
		$manager->persist($circuit);
		
		$this->addReference('anneau-circuit', $circuit);
		
		$circuit = new Circuit();
		$circuit->setDescription('Retour vers le futur');
		$circuit->setPaysDepart('USA');
		$circuit->setVilleDepart('Hill Valley');
		$circuit->setVilleArrivee('Hill Valley');
		//$circuit->setDureeCircuit(2);
		$manager->persist($circuit);
		
		$this->addReference('retourfutur-circuit', $circuit);
		
		$circuit = new Circuit();
		$circuit->setDescription('Jurassic Park');
		$circuit->setPaysDepart('Costa Rica');
		$circuit->setVilleDepart('Isla Nublar');
		$circuit->setVilleArrivee('Isla Nublar');
		//$circuit->setDureeCircuit(4);
		$manager->persist($circuit);
		
		$this->addReference('jurassic-circuit', $circuit);
		
		$manager->flush();
	}
	
	public function getOrder()
	{
		// the order in which fixtures will be loaded
		// the lower the number, the sooner that this fixture is loaded
		return 1;
	}
}
// (1, 'Andalousie', 'Espagne', 'Grenade', 'Séville', 4),
// (2, 'VietNam', 'VietNam', 'Hanoi', 'Hô Chi Minh', 4),
// (3, 'Ile de France', 'France', 'Paris', 'Paris', 2),
// (4, 'Italie', 'Italie', 'Milan', 'Rome', 4);