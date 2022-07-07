<?php

namespace TeslaDethray\Anagrammer;

use Doctrine\ORM\EntityManager;
use League\Container\Container;
use League\Container\ContainerAwareInterface;
use League\Container\ContainerAwareTrait;
use TeslaDethray\Anagrammer\Collections\Alphas;
use TeslaDethray\Anagrammer\Collections\Words;
use TeslaDethray\Anagrammer\Friends\EntityManagerAwareInterface;
use TeslaDethray\Anagrammer\Friends\EntityManagerAwareTrait;
use TeslaDethray\Anagrammer\Models\Alpha;
use TeslaDethray\Anagrammer\Models\Word;

/**
 * Class Anagrammer
 * @package TeslaDethray\Anagrammer
 */
class Anagrammer implements ContainerAwareInterface, EntityManagerAwareInterface
{
    use ContainerAwareTrait;
    use EntityManagerAwareTrait;

    /**
     * Anagrammer constructor.
     */
    public function __construct(EntityManager $entity_manager)
    {
        $this->setEntityManager($entity_manager);
        $this->configureContainer();
    }

    /**
     * @return void
     */
    protected function configureContainer() : void
    {
        $container = new Container();

        $container->share('container', $container);
        $container->inflector(ContainerAwareInterface::class)
            ->invokeMethod('setContainer', ['container',]);

        $container->share('entity_manager', $this->getEntityManager());
        $container->inflector(EntityManagerAwareInterface::class)
            ->invokeMethod('setEntityManager', ['entity_manager',]);

        $container->add(Alphas::class);
        $container->add(Alpha::class);
        $container->add(Words::class);
        $container->add(Word::class);

        $this->setContainer($container);
    }
}
