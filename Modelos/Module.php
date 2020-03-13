<?php namespace Modelos;

class Module{

  public $code;
  public $name;
  public $title;
  public $list;
  public $item_count;
  public $filterBy;
  public $order_direction;
  public $intro_fields;
  public $cssClass;
  public $showTitle;
  public $content;

  public function __construct($code){

  }
  public function showModule($vista = "ninguna"){
      //$vista debe definir la maquetación y el estilo con el que se muestra el listado
  }


  public function __destruct(){

  }








}



 ?>
