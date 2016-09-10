<?php
namespace App\Controller;

use App\Model\BillModel;

class BillController extends BaseController
{
    public $model;
    public $result;

    /**
     * inherited methods and call __construct from parent class
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * return json array with all bill details
     */
    public function getBillDetails()
    {
        $bill = new BillModel('http://safe-plains-5453.herokuapp.com/bill.json');
        print $this->returnJson($bill->getBill('bill.json'));
    }
}
