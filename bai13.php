<?php
/*
 Write a class called 'Logger' with a static property called 'logCount' that keeps track of the number of log messages. Implement a static method to log a message.
*/

class Logger {
    public static $logCount = 0;

    public function log($message) {
        echo $message."</br>";
        self::$logCount++;
    }

    public function getTotalLog() {
        return self::$logCount;
    }
}

$logger1 = new Logger;
$logger1->log("Tin nhắn 1");
$logger1->log("Tin nhắn 2");
$logger1->log("Tin nhắn 3");

echo $logger1->getTotalLog();