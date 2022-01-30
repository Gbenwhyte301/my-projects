<?php
session_start();
      $_SESSION['showuser'] = 1;
      header("location:dashboard.php");
      // die();
      ?>