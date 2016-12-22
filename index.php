<?php
session_start();
include 'db.php';
?>

<html>
<head>
  <!-- Standard Meta -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

  <!-- Site Properties -->
  <title>CPITER</title>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/1.11.8/semantic.min.css"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/1.11.8/semantic.min.js"></script>
      <link rel="stylesheet" type="text/css" href="new.css">
<link href="loader.css" rel="stylesheet"/>
            <link rel="stylesheet" type="text/css" href="cgpa.css">



</head>
<body>
  <div class="main" id="zak">
<div  class="ui attached message blue">
  <div class="header">
    Welcome to CPITER
  </div>
  <p>Hello Students..CPITER is a simple cgpa-to-% converter..just enter your cgpa/sgpa/cpi and get percentage result</p>
</div>

<form  action="cgpa.php" method="POST" class="ui form attached fluid segment" enctype="multipart/form-data">

  <div class="field">
    <label for="username">Your cgpa/sgpa</label>
    <input placeholder="cgpa" type="number" step="0.001" min="1" max="10" name="cgpa" id="username" onBlur="checkAvailability()" required="required"><span id="user-availability-status"></span>
<p><img src="loading.gif" id="loaderIcon" style="display:none"></p>
  </div>

  <div class="field">
    <label>Method/course</label>
    <select class="ui dropdown" name="method" required="required" >
      <option value="">Calculating Method</option>

    <option value="1">B.TECH(cubic formula)</option>
    <option value="2">Other Courses (Linear formula)</option>
    <option value="3">School(Linear Formula)</option>


    </select>
  </div>






 <input id="inp" class="ui large fluid blue submit button zed" type="submit" value="Lemme know my percent result"/>

 </form>
<div class="ui bottom attached warning message">
  <span><i class="icon star"></i><a href="https://github.com/zmf0507" target = "_blank"> Star this project on Github</a></span<span>  <i class="icon pencil"></i>Coded by <a href="https://www.linkedin.com/in/zaki-mustafa-530503104" target = "_blank">zmf</a></span>
</div>


</div>
</body>
<script>
$('select.dropdown')
  .dropdown()
;
</script>
<script>


</html>
