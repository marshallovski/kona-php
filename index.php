<?php
require('./kona/kona.php');

// you can change your theme in config.php

$kona = new Kona();

// element, page, file type (optional for PHP files)
$head = $kona->load('head', 'home');
$body = $kona->load('body', 'home', 'html');

$kona->execute(
  $head,
  $body,

  // head attributes (optional)
  'class="js" data-head="true"'
);