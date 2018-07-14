<?php

require_once ($_SERVER['DOCUMENT_ROOT'] . '/application/models/model_costumer.php');

class Controller_Main extends Controller
{

	function action_index($id = null)
	{
        $customerModel = new Model_Costumer();
        $items = $customerModel->getItems();

		$this->view->generate('main_view.php', 'template_view.php', $items);
	}

    function action_create()
    {
	    die(123);
    }

}
