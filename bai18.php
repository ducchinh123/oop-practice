<?php

/*
Write a PHP class called 'Logger' that uses the singleton design pattern to ensure only one instance of the class can be created.
*/

class Logger {
    private static $instance;
    private $logs;

    private function __construct(){
        $this->logs = [];
    }


    public static function getInstance() {
        if(self::$instance == null) {
            return self::$instance = new Logger;
        }
        return self::$instance;
    }

    public function log($message) {
        return $this->logs[] = $message;
    }

    public function getLogs() {
        return $this->logs;
    }

}

$logger = Logger::getInstance();
$logger->log("Message 1");
$logger->log("Message 2");
$logger->log("Message 3");
$listLogs = $logger->getLogs();

foreach($listLogs as $log) {
    echo $log."</br>";
}