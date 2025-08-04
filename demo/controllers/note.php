<?php

$config = require('config.php');
$db = new Database($config['database'], 'root', 'Yy-96746766');

$heading = 'Current Note';
$currentUserId = 1;

$note = $db->query('select * from notes where id = :id', [
    'id' => $_GET['id']
])->fetch();

if (! $note) {
    abort();
}

if ($note['user_id'] !== $currentUserId) {
    abort(Response::FORBIDDEN);
}

require 'views/note.view.php';
