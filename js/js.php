<?php

  @session_start();
  $path_global = '/var/www/html/common/pi/global/';

  $files = array($path_global.'js/modernizr-2.8.3-respond-1.4.2.min.js',
    '/var/www/html/viajarws/js/jquery-3.5.1.js',
    '/var/www/html/viajarws/js/bootstrap.bundle.js',
    '/var/www/html/viajarws/js/main.js');

  // Headers
  header("Pragma: public");
  header('Content-type: text/javascript');
  // $offset = 60 * 60 * 24; // Cache for a day
  // header ('Cache-Control: max-age='.$offset.', must-revalidate');
  // header ('Expires: '.gmdate("D, d M Y H:i:s", time() + $offset).' GMT');

  // Minify
  function minify($buffer)
  {
    // remove comments
    $buffer = preg_replace('!/\*[^*]*\*+([^/][^*]*\*+)*/!', '', $buffer);
    // remove tabs, spaces, newlines, etc.
    // $buffer = str_replace(array("\r\n", "\r", "\n", "\t", '  ', '    ', '    '), '', $buffer);
    $buffer = str_replace(array(', ', ' {', '} ', '{ ', ' }', ': ', '; '), array(',', '{', '}', '{', '}', ':', ';'), $buffer);
    return $buffer;
  }

  // Include JS files
  $js = '';
  foreach ($files as $file) {
    $js .= minify(file_get_contents($file));
  }

  ob_start("ob_gzhandler");
  echo $js;
  ob_end_flush();
