<?php
require_once('./kona/kona.php');

$kona = new Kona();

echo $kona->setUTF8();
echo $kona->setViewport();
echo $kona->setTitle('Homepage');

echo $kona->addCSS('base.css');
echo $kona->addCSS('home.css');
echo $kona->addJS('index.js');