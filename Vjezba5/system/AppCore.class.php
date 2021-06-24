<?php

require("core.functions.php");
require ("util/RequestHandler.class.php");
class AppCore
{
    protected $dbObj;
    public function __construct()
    {
        $this->dbObj = $this->initDB();
        RequestHandler::handle();
    }
    public function handleException(SystemException $e) {
        return $e->show();
    }
    public function initDB() {
        return new MySQLiDatabase();
    }
    public static function getDB() {
        $appCore = new self();
        return $appCore->dbObj;
    }
}
