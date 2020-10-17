<?php
  $variables = [
    'DB_HOST' => 'localhost',
    'DB_USERNAME' => 'root',
    'DB_PASSWORD' => '',
    'DB_NAME' => 'db_name',
    'DB_PORT' => '3306',
    'username' => 'John',
    'password' => 'Doe',
    'key' => '128-bit key here'
];

  foreach ($variables as $key => $value) {
      putenv("$key=$value");
  }
