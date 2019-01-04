<?php

define("SERVIDOR", "localhost");
define("BANCO", "projeto_erp");
define("USUARIO", "root");
define("SENHA", "");


define('CONTROLLER_PADRAO', 'home');
define('METODO_PADRAO', 'index');
define('NAMESPACE_CONTROLLER', 'app\\controllers\\');

define('URL_BASE', 'http://localhost/erpj/erpj/');
define('URL_IMAGEM', 'http://localhost/erpj/erpj/upload/');

$config_upload["verifica_extensao"] = FALSE;
$config_upload["extensoes"] = array(".gif", ".jpeg", ".png", ".bmp", ".jpg");
$config_upload["verifica_tamanho"] = TRUE;
$config_upload["tamanho"] = 2097152; //2m
$config_upload["caminho_absoluto"] = "../upload/" ;
$config_upload["renomeia"] = true;
