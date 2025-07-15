<?php
namespace App\classes;
use App\classes\Product;
class Home
{
    public $product,$products,$singleProduct ;
    public function __construct()
    {
        session_start();
    }
    public function index()
    {

        $this->product = new Product();
        $this->products = $this->product->getAllProduct();
        return view('home',['products'=>$this->products]);
    }
    public function about()
    {
        return view('about');
    }
    public function contact()
    {
        return view('contact');
    }
    public function detail($id)
    {
        $this->product = new Product();
        $this->products= $this->product->getAllProduct();
        foreach ($this->products as $product) {
            if($product['id']==$id){
                $this->singleProduct = $product;
            }
        }
        return view('detail',['product'=>$this->singleProduct ]);
    }
    public function calculator()
    {
        return view('calculator');
    }
    public function series()
    {
        return view('series');
    }
    public function login()
    {
        return view('login');
    }
    public function logout()
    {
        session_start();
        unset($_SESSION['id']);
        unset($_SESSION['name']);
        header("Location:web.php?page=home");
    }
    public function dasbroad()
    {
        
        if(isset($_SESSION['id']))
        {
            return view('dasbroad');
        }
        else
        {
            header("Location:web.php?page=login&&message=You are not logged in");
        }

    }
} 