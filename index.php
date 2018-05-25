<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Team.5 ADP</title>
  
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

  <link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.4.2/css/swiper.min.css'>
<link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Open+Sans:300,400,700,800'>
<link href="https://netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

<script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="https://netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
      <link rel="stylesheet" href="css/style.css">

  
</head>

<body>


<div id="wrapper" class="active">  
 <div id="sidebar-wrapper">
        <ul id="sidebar_menu" class="sidebar-nav">
           <li class="sidebar-brand"><a id="menu-toggle" href="">Menu<span id="main_icon" class="glyphicon glyphicon-align-justify"></span></a></li>
        </ul>
        <ul class="sidebar-nav" id="sidebar">
          <li><a href="./index.php">Index</span></a></li>
          <li><a href="./MeetOurTeam.php">MeetTeam</span></a></li>
          <li><a href="./Upload/index.php">Uploadpage</span></a></li>
          <li><a href="timeline-6/index.php">TimeLine</span></a></li>
            <li><a href="Signin.php">Signin</span></a></li>
              <li><a href="Signout.php">Signout</span></a></li>
        </ul>
      </div>

<div class="container" >

  <h1 class="title">Team-5</h1>
  <div class="timeline">
    <div class="swiper-container">
    <div class="swiper-wrapper">
    <?php
        require "config.php";

        $sql = "SELECT id,diadiem,mota,hinhanh,nam FROM story ";
        $result = mysqli_query($conn, $sql);
         if(!$result){
        	die('Can\'t not query data');
        }

        if (mysqli_num_rows($result) > 0) {
        	 while($row = mysqli_fetch_assoc($result)) {
           // echo '$row'	
     
        echo'<div class="swiper-slide" style="background-image: url('.$row["hinhanh"].');" data-year="'.$row["nam"].'">';
         echo' <div class="swiper-slide-content"><span class="timeline-year">'.$row["nam"].'</span>';
           echo' <h4 class="timeline-title">'.$row["diadiem"].'</h4>';
            echo'<p class="timeline-text">'.$row["mota"].'</p>';
         echo' </div>';
        echo'</div>';

            }
        } else {
            echo "0 results";
        }

        mysqli_close($conn);
    
        ?>
        
        s
      </div>
      
      <div class="swiper-button-prev"></div>
      <div class="swiper-button-next"></div>
      <div class="swiper-pagination"></div>
      
    </div>
  </div>
</div>
</div>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.4.2/js/swiper.min.js'></script>

  

    <script  src="js/index.js"></script>




</body>

</html>
