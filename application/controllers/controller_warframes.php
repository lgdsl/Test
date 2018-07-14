<?php

require_once ($_SERVER['DOCUMENT_ROOT'] . '/application/models/model_costumer.php');

class Controller_Warframes extends Controller
{

    function action_index($id = null)
    {
        $customerModel = new Model_Costumer();
        $items = $customerModel->getItems();

        $this->view->generate('warframes_view.php', 'template_view.php', $items);
    }
}