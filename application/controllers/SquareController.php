<?php

class SquareController extends Zend_Controller_Action {

    public  function indexAction(){
        $form=new Application_Form_Guestbook();
        $this->view->Squareform=$form;

//        if($this->getRequest()->isPost()){
//           if($form->isValid($this->getRequest()->getPost())){
//               $values=$form->getValues();
//               $this->view->formValues=$values;
//           }
//            else {
//                $this->view->messages=$form->getMessages();
//            }
//        }




        if($this->getRequest()->isPost()){
            if($form->isValid($this->getRequest()->getPost())){
                $this->_helper->getHelper('FlashMessenger')
                    ->addMessage('Thank you bro');
                $this->redirect('square/success');
            }
            else {
            }
        }





    }


    public function successAction(){

        if($this->_helper->getHelper('FlashMessenger')->getMessages()){
            $this->view->messages=
                $this->_helper->getHelper('FlashMessenger')->getMessages();
        }
        else {
            echo "Bullshit";
            die();
        }
    }
}