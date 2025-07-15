<?php

namespace App\classes;

class Series
{
public $result, $startNumber, $endNumber,$i ;
public function __construct($post){
    $this->startNumber = $post['start_number'];
    $this->endNumber = $post['end_number'];
}
public function index()
{
    for($this->i=$this->startNumber;$this->i<=$this->endNumber;$this->i++){
        $this->result.=$this->i." ";
    }
    header("Location: web.php?page=series&&result=$this->result");;
}

}