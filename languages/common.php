<?php
if(ISSET($_GET['lang'])){
  $lang                 = $_GET['lang'];
  $_SESSION['lang']     = $lang;
  setcookie('lang', $lang, time() + (3600 * 24 * 30));
}else if(ISSET($_SESSION['lang'])){
  $lang                 = $_SESSION['lang'];
}else if(ISSET($_COOKIE['lang'])){
  $lang                 = $_COOKIE['lang'];
}else{
    $lang               = 'es';
  }

switch ($lang){
  case 'en':
    $idioma             = "es";
    $lang_file          = 'lang.en.php';
    $id_lang            = 2;
  break;
  case 'es':
    $idioma             = "en";
    $lang_file          = 'lang.es.php';
    $id_lang            = 1;
  break;

  default:
    $idioma            = "en";
    $lang_file          = 'lang.es.php';
    $id_lang            = 1;
}
require_once($lang_file);
switch ($lang){
  case 'en':
    $txt_seleccionado   = LANG_IDIOMA_ES;
  break;
  case 'es':
    $txt_seleccionado   = LANG_IDIOMA_EN;
  break;

  default:
    $txt_seleccionado   = LANG_IDIOMA_EN;
}