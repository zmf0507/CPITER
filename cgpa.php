<?php

$x = $_POST['cgpa'];
$met = $_POST['method'];
if($met==1)
{


$percent  = 20*$x*$x*$x;
$a = 380;

$y = $a*$x*$x;
$percent = $percent - $y;
$z = 2725*$x;
$perce = $percent + $z;
$w = 1690;
$perc  = $perce - $w;

$per = $perc/84;
}
else if($met==2)
{
  $per = 0.5;
  $percent = $x-$per;
  $per = $percent*10;
}
else {
  $e = 9.5;
  $per = $x*$e;
}
$hun = 100;
$per = round($per,2);
 ?>

 <!DOCTYPE html>
 <html>
<head>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/1.11.8/semantic.min.css"/>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/1.11.8/semantic.min.js"></script>
              <link rel="stylesheet" type="text/css" href="cgpa.css">
                <link href="loader.css" rel="stylesheet"/>
</head>

<body>
  <div class="se-pre-con"></div>

  <div class="main" id="zak">
  <div  class="ui attached message blue">
  <div class="header">
    Welcome to CPITER
  </div>
  <p>Is it more than expected?</p>
  </div>
<div class="ui attached message white">
<div style="margin-left:5%; margin-bottom:3%;"><h2>You got <?php
echo $per;
 ?>%</h2></div>
 <div class="progress" style="  margin-left: 5%;
 width: 90%;
 height: 50px;
 background-color: #2ecc71;
 border-radius: 4px;

">
   <div class="green" style="width:<?php echo $per; ?>%; float: left; text-align: center; line-height: 50px;  height: 50px; vertical-align: middle;">
     <h2 style="line-height: 50px; font-size:25px;"><?php
     echo $per;
      ?>%</h2>
   </div>
<div class="red" style="width:<?php echo $hun-$per; ?>%; float : right; background-color:#e74c3c; height:50px;   border-top-right-radius: 4px;   border-bottom-right-radius: 4px;">
  </div>
 </div>
 </div>
 <div class="ui bottom attached warning message">
   <span><i class="icon star"></i><a href="https://github.com/zmf0507" target = "_blank"> Star this project on Github</a>  </span<span><i class="icon pencil"></i>Coded by <a href="https://www.linkedin.com/in/zaki-mustafa-530503104" target = "_blank">zmf</a></span>
 </div>

  </div>

  </div>

</body>
<script src="loader.js"></script>
 </html>
