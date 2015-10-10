<?php
$topdir=realpath(".");
include('smarty/Smarty.class.php');
include('config.php');

$smarty = new Smarty;
$smarty->setTemplateDir($topdir.'/smarty/templates');
$smarty->setCompileDir($topdir.'/smarty/templates_c');
$smarty->setCacheDir($topdir.'/smarty/cache');
$smarty->setConfigDir($topdir.'/smarty/configs');

$smarty->display('tpl/index.html');
// $WEB_BASEPHP="http://acropolis.cs.vu.nl/~spyros/intprog/";
// $WEB_BASECGI="http://mymachine.cs.vu.nl:8001/cgi-bin/";
// $HOTEL_ADDRESS="localhost";
// $HOTEL_PORT=3211;
// $PAPER_ADDRESS="localhost";
// $PAPER_PORT=3222;


?>