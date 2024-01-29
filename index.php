<?php
require 'vendor/autoload.php'; // Composer's autoloader

$smarty = new Smarty();
$smarty->setTemplateDir('templates/'); // Set your template directory
$smarty->setCompileDir('templates_c/'); // Set your compile directory

$title = 'My Smarty Project';
$content = 'Hello, Smarty World!';

$smarty->assign('title', $title);
$smarty->assign('content', $content);

$smarty->display('index.tpl');