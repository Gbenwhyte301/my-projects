<?php
session_start();
      $_SESSION['showuser'] = 2;
      header("location:dashboard.php");
      // die();
      ?>