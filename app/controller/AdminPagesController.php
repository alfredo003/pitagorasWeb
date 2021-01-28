<?php
namespace app\controller;
use app\core\Controller;

class AdminPagesController extends Controller{
     


     public function home()
     {
       $this->load('home/main_admin',[
        'name'=>'IPNamibe'
       ]);
  
     }

     public function login()
     {
       $this->load('login',[
        'name'=>'IPNamibe'
       ]);
  
     }
     
/*
     public function noticias()
     {
       $this->load('noticias/main',[
        'name'=>'IPNamibe'
       ]);
  
     }
     public function cursos()
     {
       $this->load('cursos/main',[
        'name'=>'IPNamibe'
       ]);
  
     }

     public function sobre()
     {
       $this->load('sobre/main',[
        'name'=>'IPNamibe'
       ]);
  
     }
     public function eventos()
     {
       $this->load('eventos/main',[
        'name'=>'IPNamibe'
       ]);
  
     }
     public function matricular()
     {
       $this->load('matricular/main',[
        'name'=>'IPNamibe'
       ]);
  
     }
 */
}