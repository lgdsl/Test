<?php

require_once ($_SERVER['DOCUMENT_ROOT'] . '/application/models/model_images.php');

class Controller_Images extends Controller
{

    function action_warframes($images = null)
    {
        $imagesModel = new Model_Images();
        $item = $imagesModel->getItems($images);

        $this->view->generate('images_view.php', 'images_view.php', $item);
    }
}