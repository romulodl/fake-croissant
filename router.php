<?php

//homepage
if (strpos($_SERVER['REQUEST_URI'], 'pages/12580') !== false) {
  header('Content-Type: application/json');
  echo file_get_contents(__DIR__ . '/pages/homepage.json');
}
