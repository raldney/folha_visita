<?php
require_once "Smarty/libs/Smarty.class.php";
$smarty = new Smarty();
$smarty->config_dir = "Smarty/config";
$smarty->cache_dir = "Smarty/cache";
$smarty->template_dir = "Smarty/template";
$smarty->compile_dir = "Smarty/template_c";
