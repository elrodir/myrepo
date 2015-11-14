<?php namespace AppBundle\Model;

class QuestionModel
{

    protected $em;

    public function _construct($em)
    {
        $this->em = $em;
    }

    public function getQuestions()
    {
        $data = array();
        $questions = $this->em->getRepository('AppBundle:Questions')->findAll();
        $count = 1;

        foreach($questions as $q) {
            $answer = $this->em->getRepository('AppBundle:UserAnswers')->findByQuestion($q);
            $data[$count] = array(
                'question' => $q->getName(),
            );

            foreach ($answer as $a) {
                $data[$count]['answer'][] = array(
                    'name' =>$a->getName(),
                    'id' => $a->getId(),
                );
            }
            $count++;

        }

        return $data;

    }

    public function processAnswers($answer)
    {
        foreach($answer as $id) {
            $conformity = $this->em->getRepository('AppBundle:TrueAnswers')->findOneByAnswer($id);
            foreach($conformity as $c) {

            }
        }
    }
}
