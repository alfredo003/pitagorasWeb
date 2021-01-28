<?php

namespace app\controller;

use app\core\Controller;
use app\model\SubscreverModel;
use app\classes\Input;
/**
 * Undocumented class
 */
class SubscreverController extends Controller
{
  private $subscreverModel;
  private $d;
  public function __construct()
  {
    $this->subscreverModel = new SubscreverModel();
  }

  public function insert()
  {

   $params = $this->getInput();
    if (!$this->validate($params, false)) {
      echo json_encode("empty");
      die();
    }
     
     if(!$this->subscreverModel->insert($params)){
      echo json_encode("error1");
      die();
    }
    echo json_encode("success");

  }



  public function getInput()
  {
    return (object)[
      'id'   => Input::get('id', FILTER_SANITIZE_NUMBER_INT),
      'email' => Input::post('email'),
    
    ];
  }

  public function validate(Object $params, bool $validateId = true)
  {
    if ($validateId && $params->id <= 0)
      return false;


  }
}
