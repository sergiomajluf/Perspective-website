<?php
  if ($_SERVER["HTTP_ACCEPT_LANGUAGE"] == "es")
    header("location: index.es.php");
  if ($_SERVER["HTTP_ACCEPT_LANGUAGE"] == "ES")
    header("location: index.es.php");
  else 
    header("location: index.en.php");
?>