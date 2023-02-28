<?php 

    namespace larava\controllers;
    use larava\core\Controller;
    
    class HomeController extends Controller{
        //Action
        public $sanpham;
        public function __construct(){
            $this->sanpham=$this->Model('ProductModel');
        }
        public function index(){        
            $list=$this->sanpham::all();       
            $this->View("home/index",$list);     
        }
    }
    
?>