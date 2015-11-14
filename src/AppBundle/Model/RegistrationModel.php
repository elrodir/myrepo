<?php namespace AppBundle\Model;

use Symfony\Component\Security\Core\SecurityContext;

class RegistrationModel
{
    private $em;
    private $userModel;
    private $session;

    public function __construct($em, $userModel, $session)
    {
        $this->em = $em;
        $this->userModel = $userModel;
        $this->session = $session;
    }
    public function registration($data)
    {
        {
            $this->em->getConnection()->beginTransaction();
            $this->userModel->createUser($data);
            $this->em->flush();
            $this->em->getConnection()->commit();
            $this->session->set('username', $data['username']);
            $this->session->set('password', $data['password']);


            return true;
        }
        function encodePassword($user, $password)
        {
            if (!$this->userModel->isUserExist($user)) {
                throw new \Exception(__FUNCTION__ . ' USER_NOT_EXIST');
            }

            $user = $this->em->getRepository('AppBundle:User')->findOneBypassword($password);
            $password = $this->get('security.password_encoder')->encodePassword($password);
            $user->setPassword($password);
            $this->em->flush();

            return $password;
        }
    }
}
