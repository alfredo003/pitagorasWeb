<?php

namespace app\controller;

use app\core\Controller;
use app\model\FaleConoscoModel;
use app\classes\Input;
/**
 * Undocumented class
 */
class FaleConoscoController extends Controller
{
  private $faleConoscoModel;
 private $d;
  public function __construct()
  {
    $this->faleConoscoModel = new FaleConoscoModel();
  }

  public function insert()
  {

   $params = $this->getInput();
    if (!$this->validate($params, false)) {
      echo json_encode("empty");
      die();
    }
     
     if(!$this->faleConoscoModel->insert($params)){
      echo json_encode("error1");
      die();
    }
    echo json_encode("success");

  }



  public function getInput()
  {
    return (object)[
      'id'   => Input::get('id', FILTER_SANITIZE_NUMBER_INT),
      'fullname' => Input::post('fullname'),
      'email' => Input::post('email'),
      'message' => Input::post('message'),
    ];
  }

  public function validate(Object $params, bool $validateId = true)
  {
    if ($validateId && $params->id <= 0)
      return false;

    if (strlen($params->fullname) < 3)
      return false;

    return true;
  }
}
