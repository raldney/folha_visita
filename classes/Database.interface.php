<?php
interface Database{
public function executar($sql);
public function abrir();
public function fechar();
}