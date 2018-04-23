<?php
include_once("model/Model.php");

class Controller {
 public $model;
 
 public function __construct()  
    {  
        $this->model = new Model();

    } 
 
 public function invoke()
 {
  
  $reslt = $this->model->getlogin();     // it call the getlogin() function of model class and store the return value of this function into the reslt variable.
  if($reslt == 'log2')
  {
   include 'view/login2.php';
  }
  elseif($reslt == 'log1')
  {
   include 'view/login1.php';
  }
   elseif($reslt == 'log3')
  {
   include 'view/login3.php';
  }
  elseif($reslt == 'log4')
  {
   include '';
  }
  else
  {
   include 'view/login.php';
  }
  
 }
}

?>