
<?php
  $name = isset($_POST["name"]) ? $_POST["name"] : "";
  $age = isset($_POST["age"]) ? $_POST["age"] : "";
?>
<?
  $name = $_POST["name"]; 
  $age = $_POST["age"]; 
  ?>
Well, <?=$name?>, you will be <?=$age+1?> next year!
