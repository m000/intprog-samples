<?php
$topdir=realpath(".");

include('smarty/Smarty.class.php');
$smarty = new Smarty;
$smarty->setTemplateDir($topdir.'/smarty/templates');
$smarty->setCompileDir($topdir.'/smarty/templates_c');
$smarty->setCacheDir($topdir.'/smarty/cache');
$smarty->setConfigDir($topdir.'/smarty/configs');

$smarty->display('tpl/index.html');



?>