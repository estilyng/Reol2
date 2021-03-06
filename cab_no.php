<?php
$include = '../';
session_start();
require("../db.php");
require("_class/_class_header_reol.php");
require($include.'sisdoc_debug.php');
//require($include.'sisdoc_security.php');

/* Mensagens padrao do sistema */
require("../_class/_class_message.php");
$LANG = 'pt_BR';
$file = "../messages/msg_".$LANG.".php";
if (file_exists($file)) { require($file); } else { echo 'Message not found. '.$file; exit; }

$hd = new header;
require('db_journal.php');

require($include."sisdoc_security.php");
security();

$hd->user_name = $_COOKIE['nw_user_nome'];
$hd->user_id = $_COOKIE['nw_log'];
$hd->user_login = $_COOKIE['user_login'];
?>