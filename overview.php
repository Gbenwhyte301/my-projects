<?php
include("config.php");
session_start();
      $_SESSION['showuser'] = 1;
      header("location:dashboard.php");
      
      $useremail = $_SESSION['login_user'];
      echo  $useremail;
      // $sql = "SELECT * FROM `persons` WHERE email = '$useremail'";
            $sql = "SELECT * FROM `result` WHERE email = '$useremail'";
                   
      $result = mysqli_query($db,$sql);
     
   if ($result->num_rows > 0) {
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);

      $_SESSION['recomendation'] = $row['Recomendation'];
            // echo  $_SESSION['recomendation'];
            header("location:dashboard.php");
      
   } else {
      echo " No record found. ";
   }

?>