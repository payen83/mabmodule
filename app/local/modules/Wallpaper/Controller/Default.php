<?php

class Photo_Frame_Controller_Default extends Core_Controller_Default
{

    public function init()
    {

        parent::init();

        if (!preg_match("/admin_api_account_autologin/", $this->getFullActionName("_"))) {

            $username = $this->getRequest()->getServer("PHP_AUTH_USER");
            $password = $this->getRequest()->getServer("PHP_AUTH_PW");

            $user = new Api_Model_User();
            $user->find($username, "username");
            if (!$user->getId() OR !$user->authenticate($password)) {
                $this->forward("notauthorized");
            }

        }

        return $this;

    }

    public function notauthorizedAction()
    {
        $data = [
            "error" => 1,
            "message" => $this->_("Authentication failed. Please, check the username and/or the password")
        ];
        $this->_sendJson($data);
    }
}
