<?php

$exe = simplexml_load_file("SkierLogs.xml");

$pdo = new PDO('mysql:host=127.0.0.1;dbname=DBOblig5', 'root', '');
