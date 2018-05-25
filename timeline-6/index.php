<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>timeline</title>
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="https://netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href=".css/style.css">
      <link rel="stylesheet" href="css/style.css">


</head>

<body>
 <?php
        require "../config.php";

        $sql = "SELECT id,diadiem,mota,hinhanh,nam FROM story ";
        $result = mysqli_query($conn, $sql);
        ?>
  <div id="wrapper" class="active">  
 <div id="sidebar-wrapper">
        <ul id="sidebar_menu" class="sidebar-nav">
           <li class="sidebar-brand"><a id="menu-toggle" href="#">Menu<span id="main_icon" class="glyphicon glyphicon-align-justify"></span></a></li>
        </ul>
       <ul class="sidebar-nav" id="sidebar">
          <li><a href="../index.php">Index</span></a></li>
          <li><a href="./MeetOurTeam.php">MeetTeam</span></a></li>
          <li><a href="../Upload/index.php">Uploadpage</span></a></li>
          <li><a href="./index.php">TimeLine</span></a></li>
        </ul>
      </div>

<div class="timeline-container" id="timeline-1">
  <div class="timeline-header">
    <h2 class="timeline-header__title">TIMELINE</h2>
    <h3 class="timeline-header__subtitle">TEAM5</h3>
  </div>
  <div class="timeline">
    <?php

        require "../config.php";

        $sql = "SELECT id,diadiem,mota,hinhanh,nam FROM story ";
        $result = mysqli_query($conn, $sql);
         if(!$result){
          die('Can\'t not query data');
        }
        if (mysqli_num_rows($result) > 0) {
           while($row = mysqli_fetch_assoc($result)) {
    echo '<div class="timeline-item" data-text="FATHER OF THE TURKS">';
      echo   '<div class="timeline__content"><img class="timeline__img" src="../'.$row["hinhanh"].'"/>';
        echo '<h2 class="timeline__content-title">'.$row["nam"].'</h2><br>';
        echo '<p class="timeline__content-desc">'.$row["mota"].'<</p>';
      echo '</div>';
    echo '</div>';
     }
        } else {
            echo "0 results";
        }

        mysqli_close($conn);
    ?>
  </div>

<div class="demo-footer"><a href="http://www.turkishnews.com/Ataturk/life.htm" target="_blank">Source/Kaynak</a></div>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js'></script>
 
  <script src='https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.4.2/js/swiper.min.js'></script>
    <script  src="js/index.js"></script>
</body>
</html>
