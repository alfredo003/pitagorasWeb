<?php

namespace app\core;

class RouterCore{

    private $uri;
    private $method;
    private $getArr = [];

    public function __construct()
    {
        $this->initialize();

        require_once ('../app/config/Router.php');
          $this->execute();
    }
       
    private function initialize()
    {
        $this->method= $_SERVER['REQUEST_METHOD'];
        $uri = $_SERVER['REQUEST_URI'];
        
        $ex = explode('/',$uri);

        $uri = $this->normalizeURI($ex);
         
        
        for($i=0; $i < UNSET_URI_COUNT; $i++){
         unset($uri[$i]);
        }

        $this->uri =implode('/',$this->normalizeURI($uri));
        if(DEBUG_URI)
        dd($this->uri);
    }

    private function get($router,$call)
    {
      $this->getArr[] = [
          'router' => $router,
           'call' => $call
      ];
    }
    private function post($router,$call)
    {
      $this->getArr[] = [
          'router' => $router,
           'call' => $call
      ];
    }

    private function execute()
    {
    
        switch($this->method){
            case 'GET':
                $this->executeGet();
                 break;
            case 'POST':
                $this->executePost();
                break;
        }
    }
 
    private function executeGet()
    {
       foreach($this->getArr as $get)
       {
        $r = substr($get['router'],1);

            //echo $r .'-' . $this->uri .'<br>';

        if($r == $this->uri)
        {
    
          if(is_callable($get['call']))
            {
            $get['call']();
            break;
            }else{
                $this->executeController($get['call']);
            }
        }
       }

    }
    
    private function executePost()
    {
       foreach($this->getArr as $get)
       {
        $r = substr($get['router'],1);

            //echo $r .'-' . $this->uri .'<br>';

        if($r == $this->uri)
        {
    
          if(is_callable($get['call']))
            {
            $get['call']();
           return;
            }
                $this->executeController($get['call']);
            
        }
       }

    }

 private function executeController($get)
 {
  
    $ex = explode('@',$get);

    if(!isset($get[0]) || !isset($get[1])){
   (new \app\controller\MessageController)->message('Erro','Sentimos Muito, mas o conteudo que voçê tentou acessar não existe');
        return;
    }

    $cont = 'app\\controller\\'.$ex[0];
   
   if(!class_exists($cont)){
    (new \app\controller\MessageController)->message('Erro','Sentimos Muito, mas o conteudo que voçê tentou acessar não existe');
    return;
   }
    if(!method_exists($cont,$ex[1])){
    (new \app\controller\MessageController)->message('Erro','Sentimos Muito, mas o conteudo que voçê tentou acessar não existe');
    return;
    }
    call_user_func_array([
     new $cont,
     $ex[1]
     ],[]);

    
 }
    


    private function normalizeURI($arr)
    {
        return array_values(array_filter($arr));
    }

}