<?php

//FALTA REVISAR SI ES DOMINIO PRIVADO  @@

class Contenido
{

  public static final $PATH = "/var/www/html/viajarws/";

  public $header;
  public $footer;

  function __construct()
  {

    $this->header = new Header();

  }

}
