<?php
$nome = "root";
$local = "localhost";
$senha='';
$db = 'login';

mysql_connect($local,$nome,$senha) or die ('Falha na conexão com o banco de dados');
mysql_select_db($db) or die ('Banco de dados não encontrado');

	