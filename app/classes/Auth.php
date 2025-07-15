<?php

namespace App\classes;
use App\classes\User;
class Auth
{
public $userName,$password,$user, $users, $status;
public function __construct($post)
    {
        $this->userName = $post['username'];
        $this->password = $post['password'];
        $this->status=false;
    }
    public function loginCheck()
    {
        $this->user = new User();
        $this->users = $this->user->getAllUser();
        $this->status=false;
        foreach ($this->users as $user) {

            if($user['username']==$this->userName && $user['password']==$this->password)
            {
                $this->status=true;;
                session_start();
                $_SESSION['id'] = $user['id'];
                $_SESSION['name'] = $user['name'];
            }
        }
        if($this->status==true)
        {
            header('Location:web.php?page=dasbroad');
        }
        else{
            header('Location:web.php?page=login&&message=Invalid username or password');
        }
    }
}
