<?php
namespace App\classes;
class Product{
    public $products =[];
    public function __construct(){
        $this->products =[
            0=>[
                "id"=>1,
                "name"=>"New Red T-Shairt",
                "price"=>"100",
                'description'=>"Red T-Shairt",
                'image'=>"assets/img/1.jpg"
            ],
            1=>[
                "id"=>2,
                "name"=>"New blue T-Shairt",
                "price"=>"100",
                'description'=>"blue T-Shairt",
                'image'=>"assets/img/2.jpg"
            ],
            2=>[
                "id"=>3,
                "name"=>"New green T-Shairt",
                "price"=>"100",
                'description'=>"Green T-Shairt",
                'image'=>"assets/img/3.jpg"
            ],
            3=>[
                "id"=>4,
                "name"=>"New black T-Shairt",
                "price"=>"100",
                'description'=>"Black T-Shairt",
                'image'=>"assets/img/3.jpg"
            ],
        ];
    }
    public function getAllProduct(){
        return $this->products; 
    }
}