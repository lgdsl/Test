<?php

require_once 'application/models/model_bd.php';

class Model
{
    public $bd;

    public function __construct()
    {
        $bd = new model_bd();
        $this->bd = $bd->connect();
    }
	
	/*
		Модель обычно включает методы выборки данных, это могут быть:
			> методы нативных библиотек pgsql или mysql;
			> методы библиотек, реализующих абстракицю данных. Например, методы библиотеки PEAR MDB2;
			> методы ORM;
			> методы для работы с NoSQL;
			> и др.
	*/

	// метод выборки данных
	public function get_data()
	{
		// todo
	}
}