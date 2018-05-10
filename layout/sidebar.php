<?php 
  include ('../../phpScript/startSession.php');
  $link=$_SESSION['position'];
  if($link='lecturer'){
      $link= "../../pages/lecturer/lct.php";
  }else if($link='student'){
      $link="../../pages/student/std.php";
  }
?>

<div class="w3-light-grey w3-bar-block w3-padding" style="height:100%;width:25%;position:absolute">
    <span>You are logged in as</span>
    <br><br>
    <span><strong><?php echo $_SESSION['userID']?></strong></span>
    <br>
    <span><strong><?php echo $_SESSION['name']?></strong></span>
    <br>
    <hr style="height:3px" class="w3-theme-l3">
    <img src="../../img/profile.png" alt="" id="profilepict"><br>
    <a href="<?php echo $link ?>" class="w3-bar-item w3-button"><i class="fa fa-home" aria-hidden="true"></i>  HOME</a> 
    <a href="#" class="w3-bar-item w3-button"><i class="fa fa-list-ul" aria-hidden="true"></i>  MY COURSES</a> 
    <a href="#" class="w3-bar-item w3-button"><i class="fa fa-user" aria-hidden="true"></i> MY PROFILE</a> 
    <a href="../../index.php" class="w3-bar-item w3-button"><i class="fa fa-power-off" aria-hidden="true"></i> LOG OUT</a> 
</div>