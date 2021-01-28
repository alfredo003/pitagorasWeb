<?php
namespace app\controller;
use app\core\Controller;

class PagesController extends Controller{
     
     public function home()
     {
       $this->load('theme_user/main',[
        'name'=>'IPNamibe'
       ]);
  
     }

   
 
}