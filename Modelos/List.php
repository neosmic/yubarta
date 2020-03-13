<?php namespace system;

class List{
  public $code;
  public $name;
  public $codifier; //Codificador interno para la creación de la tabla en la DB
  public $title;
  public $fields;
  public $pub_fields;
  public $filterTags;
  public $orderBlock;
  public $pagination;
  public $intro_fields;
  public $cssClass;
  public $orderBy;
  public $linked;
  public $vista;

public function __construct($code){

}
public function rawlist($items){
  //Este método envía los datos como un objeto o como un JSON con los encabezados y filtros predeterminados
}
public function showlist($vista){
  //$vista debe definir la maquetación y el estilo con el que se muestra el listado

}

public function __destruct(){

}



}

  ?>
