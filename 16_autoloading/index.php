<?php
// require_once './app/Email.php';
// require_once './app/Person.php';
require_once "./vendor/autoload.php";

// use app\Email;
// use app\Person;

// $email = new Email();
// $email = new Email();
// $email = new Email();

// $person = new Person();

use Monolog\Logger;
use Monolog\Handler\StreamHandler;

// create a log channel
$log = new Logger('name');
$log->pushHandler(new StreamHandler('output.log', Logger::WARNING));

// add records to the log
$log->warning('Foo');
$log->error('Bar');