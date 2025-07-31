<?php

require 'Database.php';
require 'functions.php';
// require 'router.php';

$config = require('config.php');

$db = new Database($config['database'], 'root', 'Yy-96746766');

$posts = $db->query("select * from posts")->fetchAll();

dd($posts);
