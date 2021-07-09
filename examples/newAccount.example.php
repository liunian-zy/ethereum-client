<?php
require_once __DIR__ . '/../vendor/autoload.php';

use xtype\Ethereum\Client;
use xtype\Ethereum\Utils;

$client = new Client();

// You can to create an address offline
list($address, $privateKey) = $client->newAccount();

var_dump($address, $privateKey);
