<?php
namespace AppBundle\DataFixtures\ORM;


use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use AppBundle\Entity\TrueAnswers;


class LoadTrueAnswers implements FixtureInterface
{
    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $manager)
    {
        $answer1 = new TrueAnswers();
        $answer1->setAnswer('answer1');

        $answer2 = new TrueAnswers();
        $answer2->setAnswer('answer2');

        $answer3 = new TrueAnswers();
        $answer3->setAnswer('answer3');

        $answer4 = new TrueAnswers();
        $answer4->setAnswer('answer4');

        $answer5 = new TrueAnswers();
        $answer5->setAnswer('answer5');


        $manager->persist($answer1);
        $manager->persist($answer2);
        $manager->persist($answer3);
        $manager->persist($answer4);
        $manager->persist($answer5);
        $manager->flush();

    }
}