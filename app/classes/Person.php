<?php

namespace App\classes;

class Person
{
    public $name;
    public $email;
    public $mobile;

    public function __construct()
    {
        $this->name = "Eshan";
        $this->email = "darul@gmail.com";
        $this->mobile = "01712345678";
    }
    public function index()
    {
        echo "Hello";
    }
    public function create()
    {
        echo "Hello manage";
    }
    public function update()
    {
        echo "Hello update";
    }

}