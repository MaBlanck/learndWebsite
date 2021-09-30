<?php
session_start();
session_regenerate_id();
define('APP_ROOT', dirname(__DIR__) . '/');
define('PATH_ROOT', $_SERVER['DOCUMENT_ROOT'] . '/');
