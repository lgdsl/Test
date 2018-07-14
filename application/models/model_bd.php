<?php

class Model_Bd extends Model
{
    private $user;

    private $password;

    public function __construct()
    {
        $this->user = 'root';
        $this->password = 'BdfY0707';
    }

    public function connect()
    {
        try {
            return new PDO('mysql:host=localhost;dbname=warframe', $this->user, $this->password);
        } catch (PDOException $exception) {
            print_r($exception->getMessage());
            die('asd');
        }
    }
}
