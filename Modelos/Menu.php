<?php namespace Modelos;

class Menu{

  public $code;
  public $parent;
  public $name;
  public $alias;
  public $title;
  public $description;
  public $icon;
  public $modules;
  public $list;
  public $visible;
  public $header;
  public $image;
  public $content;
  public $link_to;
  public $gallery;
  public $pub_date;
  public $unpub_date;
  public $create_date;
  public $lastModDate;
  public $author;



  public $linesOrder;

public function __construct(){

}

public function RenderMenu(){
  //Exporta o visualiza el menú según la maquetación o vista.
}

public function generateRawMenu(){
  //devuelve un menú con todos sus hijos en JSON o como objeto.
}
public function giveMeOneMenu($menu){
  //devuelve un menú con todos sus hijos en JSON o como objeto.
}

public function __destruct(){

}



}



 ?>
