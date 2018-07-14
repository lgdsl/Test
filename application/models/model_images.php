<?php


class Model_Images extends Model
{
    public function getItems($images)
    {
        return $this->bd->query("SELECT * from costumes WHERE  image = $images", PDO::FETCH_ASSOC);
    }

}
