<?php
  session_start();
  if($_SESSION['id']){
      echo "goon";
  }else{
      echo "logout";
  }


?>