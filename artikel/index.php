<?php


require 'top.php';
require 'menu.php';
require 'nyartikel.php';
require 'bottom.php';
require 'artiklar.php';

if ( isset($_GET['page']) &&  $_GET['page'] == "nyartikel"){

  top();
  menu();
  nyartikel();
  bottom();
}else{


  top();
  menu();
  artiklar();
  bottom();



}








?>
