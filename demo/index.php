<?php

require 'Database.php';
require 'functions.php';
// require 'router.php';

$config = require('config.php');

$db = new Database($config['database'], 'root', 'Yy-96746766');

$id = $_GET['id'];

$query = "select * from posts where id = :id";

$posts = $db->query($query, [':id' => $id])->fetch();

dd($posts);
