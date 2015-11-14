<?php namespace AppBundle\Model;


class UserModel
{

    private $em;
    private $securityContext;
    private $session;


    public function __construct($em, $securityContext, $session)
    {
        $this->em = $em;
        $this->securityContext;
        $this->session = $session;
    }

    public function createUser($data)
    {
        if ($this->isUserExist($data['username'])) {
            throw new \Exception(__FUNCTION__ . ' USER_EXIST');
        }

        $this->em->getRepository('AdventureTimeBundle:User')->createUser($data);

        return 1;
    }

    public function isUserExist($username)
    {
        return (bool)$this->em->getRepository('AppBundle:User')->findOneByUsername($username);
    }

    public function getUser()
    {
        $username = $this->session->get('username');
        return $this->em->getRepository('AppBundle:User')->findOneByUsername($username);

    }
}