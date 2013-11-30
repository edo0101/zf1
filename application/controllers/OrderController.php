<?php

class OrderController extends Zend_Controller_Action
{
    protected $orders;
    public function init()
    {
        /* Initialize action controller here */
        $this->orders=new Application_Model_DbTable_Orders;
    }

    public function indexAction()
{
   
        $this->view->var=  $this->orders->getRepByOrderId('110815042608');


}
}
