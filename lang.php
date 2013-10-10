<?php
  if ($_SERVER["HTTP_ACCEPT_LANGUAGE"] == "es")
    header("location: index.es.php");
  else 
    header("location: index.php");
?>