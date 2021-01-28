<?php
namespace app\controller;
use app\core\Controller;

class MessageController extends Controller{
     
     public function message(string $title ,string $message,$code=4040)
     {
        http_response_code($code);
       $this->load('message/error',[
           'title'=> $title,
           'message' =>$message,
       ]

       );
  
     }
}