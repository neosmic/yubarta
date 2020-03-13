<?php namespace Modelos;

class General{
  public $site_name;
  public $site_description;
  public $main_language;
  public $apendix;
  public $country;
  public $coin;
  public $favicon;
  public $url_logo;
  public $city;
  public $address;
  public $email_url;
  public $phone;
  public $email_contact;
  public $sntwitter;
  public $snfacebook;
  public $snyoutube;
  public $schema;

  public function __construct($url="index.php"){
    echo "Ha iniciado la página en ".$url."";
    $con = new Conexion;
    $query = "SELECT * FROM general";
    $con->consultaRetorno($query);
  //  print_r($con->consultaRetorno($query));

  }
  public function get_content($content){
    return $this->$$content;
  }


}

 ?>
