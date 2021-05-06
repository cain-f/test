<?php


class testController
{
    public $echo ;

    public function __construct(){
        $this->echo = 123;
    }

    public function a()
    {
        echo $this->echo;
    }
}

$b = a();
echo $b;
