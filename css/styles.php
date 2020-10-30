<?php

  // CSS files to compress
  $files = array(
    '/var/www/html/viajarws/css/bootstrap.css',
    '/var/www/html/viajarws/css/main.css',
  );

  // Headers
  header('Content-type: text/css');
  // $offset = 60 * 60 * 24; // Cache for a day
  // header ('Cache-Control: max-age='.$offset.', must-revalidate');
  // header ('Expires: '.gmdate("D, d M Y H:i:s", time() + $offset).' GMT');

  // Minify
  function minify($buffer)
  {
    // remove comments
    $buffer = preg_replace('!/\*[^*]*\*+([^/][^*]*\*+)*/!', '', $buffer);
    // remove tabs, spaces, newlines, etc.
    $buffer = str_replace(array("\r\n", "\r", "\n", "\t", '  ', '    ', '    '), '', $buffer);
    $buffer = str_replace(array(', ', ' {', '} ', '{ ', ' }', ': ', '; '), array(',', '{', '}', '{', '}', ':', ';'), $buffer);
    return $buffer;
  }

  // Include CSS files
  $css = '';
  foreach ($files as $file) {
    if (is_readable($file)) {
      $css .= minify(file_get_contents($file));
    }
  }
  ob_start("ob_gzhandler");
  echo($css);
  ob_end_flush();
