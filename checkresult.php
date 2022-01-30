<?php
include("config.php");

      
                  // A1-75- 100     = 8
                  // B2-70-74       = 7
                  // B3-65-69       = 6
                  // C4-60-64       = 5
                  // C5-55-59       = 4
                  // C6-50-54       = 3
                  // D7-46- 49      = 2
                  // E8-40-45       = 1
                  // F9- 0-39       = 0
$scorePoint = 0;

function addScorepoint($score,$unit){
      switch( $score){
            case "A1": 
                  $GLOBALS['scorePoint']  += (8*$unit);
                  break;
            case "B2": 
                  $GLOBALS['scorePoint']  += (7*$unit);
                  break;
                  
            case "B3": 
                  $GLOBALS['scorePoint']  += (6*$unit);
                  break;
                  
            case "C4": 
                  $GLOBALS['scorePoint']  += (5*$unit);
                  break;
                  
            case "C5": 
                  $GLOBALS['scorePoint']  += (4*$unit);
                  break;
                  
            case "C6": 
                  $GLOBALS['scorePoint']  += (3*$unit);
                  break;
                  
            case "D7": 
                  $GLOBALS['scorePoint']  += (2*$unit);
                  break;
                  
            case "E8": 
                  $GLOBALS['scorePoint']  += (1*$unit);
                  break;
                  
            case "F9": 
                  $GLOBALS['scorePoint']  += (0*$unit);
                  break;
            default:
                  $GLOBALS['scorePoint']  += (0*$unit);

      }
}








session_start();
      $_SESSION['showuser'] = 2;

            $useremail = $_SESSION['login_user'];
            echo  $useremail;
            $sql = "SELECT * FROM `result` WHERE email = '$useremail'";
            		 
            $result = mysqli_query($db,$sql);
           
         if ($result->num_rows > 0) {
            $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
            $allCoursesunit = 3;
                  $_SESSION['english'] = $row['english'];         addScorepoint($_SESSION['english'],$allCoursesunit);
                  $_SESSION['maths'] = $row['maths'];             addScorepoint($_SESSION['maths'],$allCoursesunit);
                  $_SESSION['physics'] = $row['physics'];         addScorepoint($_SESSION['physics'],$allCoursesunit);
                  $_SESSION['chemistry'] = $row['chemistry'];     addScorepoint($_SESSION['chemistry'],$allCoursesunit);
                  $_SESSION['biology'] = $row['biology'];         addScorepoint($_SESSION['biology'],$allCoursesunit);

                  $_SESSION['recomendation'] = $row['Recomendation'];
                  /// calculate average score

                  $_SESSION['averageSore'] = $scorePoint/($allCoursesunit*5);
                  // echo number_format((float)$_SESSION['averageSore'], 2, '.', ''); 
                  
                  header("location:dashboard.php");
            
         } else {
            echo " No record found. ";
         }
      
      ?>