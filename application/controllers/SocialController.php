<?php

class SocialController extends Zend_Controller_Action
{

    public function init()
    {
        /* Initialize action controller here */
    }

    public function indexAction()
{
   
// action body
   $this->view->current_date_and_time = date('M d, Y - H:i:s');
    
   $user_mapper = new Application_Model_UserMapper();
   $user = $user_mapper->getUserById(1);
   $user->email = 'new_email@test.local';
   $user_mapper->save($user);


}
}
