<?php

class BaseController {

    public $layout;
    public $inputsP;
    public $inputsG;

    /**
     * create base url, layout for application.
     * run sql injection protection for $_GET && $_POST var,
     */
    public function __construct()
    {
        $this->baseUrl = 'http://' . $_SERVER['SERVER_NAME'] . '/public';
        $this->layout  = '../app/view/_main.php';

        // create token
        $_token = $this->createToken();

       if (isset($_GET))
            $this->inputsG = $this->escapeSqlInject($_GET);
       if (isset($_POST))
           $this->inputsP = $this->escapeSqlInject($_POST);
    }

    /**
     * Sql injection method with recursive method
     * @param $in
     * @return mixed
     */
    public function escapeSqlInject($arr)
    {
        foreach ($arr as $key => $val)
        {
            if (is_array($val)) $arr[$key] = $this->escapeSqlInject($val);
            else $arr[$key] = addslashes(htmlspecialchars($val));
        }
        return $arr;
    }

    /**
     * check if request to our server is ajax
     * @return bool
     */
    public function checkIfAjax()
    {
        if(!empty($_SERVER['HTTP_X_REQUESTED_WITH']) || strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
            // safety ajax
            return true;
        } else {
            return false;
        }
    }

    /**
     * crete token for secure all forms in app
     * @return string 'unique' token
     */
    public function createToken()
    {
        $hash = md5(mt_rand(1,1000000) . SALT);
        return $_SESSION['_token'] = $hash;
    }

    /**
     * return json array with appropriate header
     * @param $data json array
     * @return string
     */
    public function returnJson($data)
    {
        header('Content-Type: application/json');
        return json_encode(json_decode($data, true));
    }

}