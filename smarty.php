<?php
require_once "Smarty/libs/Smarty.class.php";
$smarty = new Smarty();
$smarty->config_dir = "config";
$smarty->cache_dir="cache";
$smarty->template_dir = "template";
$smarty->compile_dir= "template_c";