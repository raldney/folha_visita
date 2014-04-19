<?php

require_once 'Database.interface.php';

class Mysql implements Database {

    private $banco, $localBanco;

    public function getHost() {
        return $this->host;
    }

    public function getUser() {
        return $this->user;
    }

    public function getPass() {
        return $this->pass;
    }

    public function getDb() {
        return $this->db;
    }

    public function setHost($host) {
        $this->host = $host;
    }

    public function setUser($user) {
        $this->user = $user;
    }

    public function setPass($pass) {
        $this->pass = $pass;
    }

    public function setDb($db) {
        $this->db = $db;
    }

    public function __construct($host, $user, $pass, $db) {
        $this->setHost($host);
        $this->setUser($user);
        $this->setPass($pass);
        $this->setDb($db);
        $this->abrir();
    }

    public function abrir() {
        $this->localBanco = sprintf('mysql::host=%s;dbname=%s', $this->getHost(), $this->getDb());
        $this->banco = new PDO($this->localBanco, $this->getUser(), $this->getPass());
    }

    public function fechar() {
        $this->banco = null;
    }

    public function executar($sql) {
        $stmt = $this->banco->prepare($sql);
        $stmt->execute();
        return $stmt;
    }

}
