<?php

class CostumerModel extends Model
{
    public function getItems()
    {
        return $this->bd->query('SELECT * from costumes');
    }
}
