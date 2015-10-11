<?php
// Initialize Smarty.
$topdir=realpath(".");
include('smarty/Smarty.class.php');
$smarty = new Smarty;
$smarty->setTemplateDir($topdir.'/smarty/templates');
$smarty->setCompileDir($topdir.'/smarty/templates_c');
$smarty->setCacheDir($topdir.'/smarty/cache');
$smarty->setConfigDir($topdir.'/smarty/configs');

// Load config and assign it to Smarty variables.
include('config.php');
$smarty->assign('phpbase', $WEB_BASEPHP);
$smarty->assign('cgibase', $WEB_BASECGI);
$smarty->assign('hoteladdress', $HOTEL_ADDRESS);
$smarty->assign('hotelport', $HOTEL_PORT);
$smarty->assign('paperaddress', $PAPER_ADDRESS);
$smarty->assign('paperport', $PAPER_PORT);

// Display page.
$smarty->display('tpl/index.html');
?>