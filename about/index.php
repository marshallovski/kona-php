<?php
require('../kona/kona.php');

$kona = new Kona();

// element, page, file type (optional for PHP files)
$head = $kona->load('head', 'about', 'html');
$body = $kona->load('body', 'about', 'html');

$kona->execute(
  $head,
  $body,

  // head attributes (optional)
  'class="js" data-head="true"'
);