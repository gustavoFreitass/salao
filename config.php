<?php
    if (!defined('HOST')) define('HOST', 'localhost');
    if (!defined('USER')) define('USER', 'root');
    if (!defined('PASS')) define('PASS', '');
    if (!defined('BASE')) define('BASE', 'sislogin');

    $conn = new mysqli(HOST, USER, PASS, BASE);