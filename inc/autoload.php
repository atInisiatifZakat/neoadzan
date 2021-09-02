<?php

require_once __DIR__ . '/../vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/..');

$dotenv->load();

$dotenv->required(['DB_HOSTNAME', 'DB_NAME', 'DB_USERNAME', 'DB_PASSWORD']);