<?php

class Application_Model_DbTable_Orders extends Zend_Db_Table_Abstract {

    protected $_db;
    protected $_name = 'orders';
    protected $_id = 'orders';
    protected $_cust_id = 'orders';
    protected $_order_id = 'orders';
    protected $_rep = 'orders';
    protected $_sku = 'orders';
    protected $_picture = 'orders';
    protected $_notes = 'orders';
    protected $_price = 'orders';
    protected $_order_date = 'orders';
    protected $_cut_status = 'orders';
    protected $_sewer_name = 'orders';
    protected $_sewer_comments = 'orders';
    protected $_sewing_status = 'orders';
    protected $_date_started = 'orders';
    protected $_date_finished = 'orders';
    protected $_serial_number = 'orders';
    protected $_checked = 'orders';
    protected $_item_status = 'orders';
    protected $_order_status = 'orders';

    public function getRepByOrderId($orderNumber) {

        $q = $this->select()
                ->from('orders')
                ->where('order_id=?', $orderNumber);
        $row = $this->fetchRow($q)->toArray();

        return $row;
    }

}
