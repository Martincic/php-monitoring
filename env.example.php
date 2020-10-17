<?php
  $variables = [
      'DB_HOST' => 'localhost',
      'DB_USERNAME' => 'root',
      'DB_PASSWORD' => '',
      'DB_NAME' => 'db_name',
      'DB_PORT' => '3306',
  ];

  foreach ($variables as $key => $value) {
      putenv("$key=$value");
  }
