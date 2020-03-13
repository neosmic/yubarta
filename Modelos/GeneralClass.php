<?php namespace system;

class GeneralClass{
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
  public $coin;
  public $sntwitter;
  public $snfacebook;
  public $snyoutube;
  public $schema;

  public function __construct($url){

  }
  public function get_content($content){
    return this->$$content;
  }


}

 ?>
