<?php
namespace AppBundle\DataFixtures\ORM;


use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use AppBundle\Entity\Questions;


class LoadQuestions implements FixtureInterface
{
    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $manager)
    {
        $question1 = new Questions();
        $question1->setQuestion('question1');

        $question2 = new Questions();
        $question2->setQuestion('question2');

        $question3 = new Questions();
        $question3->setQuestion('question3');

        $question4 = new Questions();
        $question4->setQuestion('question4');

        $question5 = new Questions();
        $question5->setQuestion('question5');


        $manager->persist($question1);
        $manager->persist($question2);
        $manager->persist($question3);
        $manager->persist($question4);
        $manager->persist($question5);
        $manager->flush();

    }
}