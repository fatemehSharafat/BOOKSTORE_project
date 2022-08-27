<?php

class SubscribeController extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function insertEmail()
    {
        try {
            $email = $_POST['email'];
            $query = $this->modelDb->getEmail($email);
            if (empty($query)) {
                $this->modelDb->insertEmail($email);
                echo 1;
            }else{
                echo 2;
            }
        } catch (Exception $e) {
            echo 0;
        }
    }

}
