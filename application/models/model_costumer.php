<?php

class Model_Costumer extends Model
{
    public function getItems()
    {
        return $this->bd->query('SELECT * from costumes');
    }

    public function getItem($id)
    {
        return $this->bd->query("SELECT * from costumes WHERE id = $id", PDO::FETCH_ASSOC);
    }

}

