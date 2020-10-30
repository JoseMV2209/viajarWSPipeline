<?php

  @session_start();

  $title = $og_title = 'Pipeline Software - Orbis - Software de Gesti&oacute;n Comercial para Agencias de Viajes';
  $meta_description = $og_description = 'Pipeline Software, soluciones inform&aacute;ticas para Agencias de Viajes. ORBIS, el mejor software de Gesti&oacute;n Comercial para Agencias de Viajes.';
  $og_image = 'https://www.pipeline.es/img_facebook/pipeline_software.gif';
  $og_type = 'website';
  $og_url= 'https://www.pipeline.es/';


  require_once("/var/www/html/viajarws/templates/header.htm");

  require_once("/var/www/html/viajarws/templates/content.htm");

  require_once("/var/www/html/viajarws/templates/footer.htm");
?>
