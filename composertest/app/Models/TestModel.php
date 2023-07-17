<?php

namespace App\Models;

class TestModel
{
    private $text = 'hello world'; 

    public function getHello(){ //外からアクセスできるpublic
        return $this->text;
    }
}