<?php namespace Modelos;

class Itemlist{
  public $code;
  public $title;
  public $description;
  public $content;
  public $create_date;
  public $author;
  public $lastAuthor;
  public $pub_date;
  public $unpub_date;
  public $image;
  public $lastModDate;
  public $parent;
  public $otherFields;
  public $listconfig;
  public $pub_fields;
  public $intro_fields;
  public $parent_title;
  public $linked;
  public $estado;

  public function __construct($codigo){
    $con = new Conexion;
    $query = "SELECT code FROM lists";
    $codes_list = $con->consultaRetorno($query);
    //print_r($codes_list);
    foreach ($codes_list as $key => $value) {
        $todayRightNow = date('Y-m-d H:i:s');
        $query_date = " (unpub_date NOT BETWEEN CAST('1900-01-01 20:00:00' AS DATETIME)
        AND CAST('".$todayRightNow."' AS DATETIME) OR unpub_date IS NULL)
        AND (pub_date  BETWEEN CAST('1900-01-01 20:00:00' AS DATETIME)
        AND CAST('".$todayRightNow."' AS DATETIME)) ";



      $query = "SELECT code,title,description,pub_date,unpub_date,lastModDate,image,author FROM {$value['code']} WHERE code = '{$codigo}' AND".$query_date;

      //echo "<br>".$query."<br>";
      $dataout = $con->consultaRetorno($query);

      if ($dataout){
        $this->parent = $value['code'];
        //echo $this->parent;
        $query = "SELECT * FROM lists WHERE code = '{$this->parent}'";
        foreach ($dataout[0] as $key => $value) {
          $this->$key = $value;
          // code...
        }
        $dataout = $con->consultaRetorno($query);
        $this->pub_fields = $dataout[0]["pub_fields"];
        $this->intro_fields = $dataout[0]["intro_fields"];
        $this->parent_title = $dataout[0]["title"];
        if ($dataout[0]["linked"] == "x" || $dataout[0]["linked"] == true || $dataout[0]["linked"] == "X" ){$this->linked = true;  }else{$this->linked = false;}
        //if($this->linked){echo "Se creará enlace";}else{echo "no tendrá enlace";}; echo "<br>";
        print_r($dataout);
         break;
       }



      // code...
    }
    if (!$dataout){echo "<br>El elemento: ".$codigo." no existe o no está publicado<br>";}

  }
  public function rawItem(){
    //este método devuelve los datos en JSON o como un objeto

  }
  public function showItem($vista = "estandar"){

    switch ($vista) {
      case 'estandar':

      if ($this->linked): ?>
      <a href="<?php $this->generarEnlace(); ?>" >
      <?php endif ?>
      <img src="<?= $this->image; ?>" alt="<?= $this->title; ?>"  >
      <h3><?=$this->title?></h3>
      <?php

        // code...


      if ($this->linked): ?></a>
  <?php endif;
        break;
      case 'primeroImagen':
        //code
        break;
      case 'completa':
          // code...
        break;
      case 'soloImagen': ?>
      <img src="<?= $this->image; ?>" alt="<?= $this->title; ?>"  >

  <?        // code...
        break;

      default:
        // code...
        break;
    }

    //$vista debe definir la maquetación y el estilo con el que se muestra el ítem


  }
  public function mostrar_intro($codigo){
    //Muestra los elementos de introducción del ítem

  }
  private function generarEnlace(){
    return "";
  }



  public function __destruct(){

  }




}






 ?>
