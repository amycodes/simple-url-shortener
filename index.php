<?php

if ($_SERVER["REQUEST_METHOD"] == "GET") {
  // collect value of input field
  echo $_SERVER['PATH_INFO'];
}