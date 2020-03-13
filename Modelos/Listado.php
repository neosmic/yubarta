<?php namespace Modelos;

class Listado{
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
  public $parent; // Un listado puede ser el resultado el ítem de otro listado. ¿Cómo evitar la equivalencia circular? o será posible que cohexistan?
                  // Cómo se resuelven las URL para estos casos?
  public $content;
  public $estado; // Se refiere a si el elemento o listado está publicado, despublicado, eliminado u otro estado adicional.

public function __construct($code){
  $con = new Conexion;
  $query = "SELECT * FROM lists WHERE code = '{$code}' ";
  $out = $con->consultaRetorno($query);
  foreach ($out[0] as $key => $value) {
    //echo $key ." = ". $value . "<br>";
    $this->$key = $value;
    // code...
  }
  //print_r($out);

}
public function cargarContenido( $status, $filter = "", $datafilter = "", $orderBy = "DESC" ){
  $con = new Conexion;
  $query = "SELECT * FROM {$this->code}";

  $out = $con->consultaRetorno($query);
  $this->content = $query[0];
  //print_r($out);
  foreach ($out as $key => $value) {
    //print_r($value);
    echo $key ." = ". $value . "<br>";
    //$this->$key = $value;
    // code...
  }


}
public function mostrarParametro($parametro){
  echo $this->$parametro;
}
public function rawlist($items){
  //Este método envía los datos como un objeto o como un JSON con los encabezados y filtros predeterminados
}
public function showlist($vista = "false"){
  echo "esta es la lista";
  //$vista debe definir la maquetación y el estilo con el que se muestra el listado

}

public function __destruct(){

}



}

  ?>
