<?php

namespace App\classes;

class User
{
    public $users = [];

    public function __construct()
    {
        $this->users =[
            0=>[
                'id' =>'Eshan',
                'username' => 'admin',
                'password' => '111222'
            ],
            1=>['id' =>'Darul',
                'username' => 'admin1',
                'password' => '1112223'],

        ];
    }
    public function getAllUser(){
        return $this->users;


    }
}
