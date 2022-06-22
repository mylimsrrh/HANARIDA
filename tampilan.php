<!DOCTYPE html>
<html>
<head>
<title>Hanarida</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-black.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css">
<meta http-equiv="refresh" content="2" />
</head>
<body>

<?php
  
$hostname = "localhost";
$username = "root";
$password = "";
$databaseName = "db_ana";

$connect = mysqli_connect($hostname, $username, $password, $databaseName);
$query1 =mysqli_query($connect, "SELECT*FROM tb_ana WHERE KET='ANA1'");
$result1=mysqli_fetch_array($query1);
$query2 =mysqli_query($connect, "SELECT*FROM tb_ana WHERE KET='ANA2'");
$result2=mysqli_fetch_array($query2);
$query3 =mysqli_query($connect, "SELECT*FROM tb_ana WHERE KET='ANA3'");
$result3=mysqli_fetch_array($query3);
?>
<!-- Side Navigation -->

<nav class="w3-sidebar w3-bar-block w3-card w3-animate-left w3-center" style="display:none" id="mySidebar">
  <h1 class="w3-xxxlarge w3-text-theme">Side Navigation</h1>
  <button class="w3-bar-item w3-button" onclick="w3_close()">Close <i class="fa fa-remove"></i></button>
  <a href="#" class="w3-bar-item w3-button">Link 1</a>
  <a href="#" class="w3-bar-item w3-button">Link 2</a>
  <a href="#" class="w3-bar-item w3-button">Link 3</a>
  <a href="#" class="w3-bar-item w3-button">Link 4</a>
</nav>

<!-- Header -->
<header class="w3-container w3-theme w3-padding" id="myHeader">
  <i onclick="w3_open()" class="fa fa-bars w3-xlarge w3-button w3-theme"></i> 
  <div class="w3-center">
  <h4>Your Partner For Water Investment</h4>
  <h1 class="w3-xxxlarge w3-animate-bottom">PT. Hanarida Tirta Birawa</h1>
    
  </div>
</header>

<div class="w3-row-padding w3-center w3-margin-top">
<div class="w3-third">
  <div class="w3-card w3-container" style="min-height:460px">
  <h3>ANALYZER IPA-1</h3><br>
  <thead>
              <tr>
                <th style="text-align: right;">PH :</th>
                <th style="text-align: center;"><?php echo $result1['PH']?></th>
                <th style="text-align: right;"> </th>
              </tr>
              <tr>
                <th style="text-align: right;">Turbidity :</th>
                <th style="text-align: center;"><?php echo $result1['TURB']?></th></th>
                <th style="text-align: right;">NTU</th>
              </tr>
              <tr>
                <th style="text-align: right;">Chlorine :</th>
                <th style="text-align: center;"><?php echo $result1['CL']?></th></th>
                <th style="text-align: right;">PPM</th>
              </tr>
              <tr>
                <th style="text-align: right;">Flow Rate :</th>
                <th style="text-align: center;"><?php echo $result1['FL']?></th></th>
                <th style="text-align: right;">Liter/s</th>
              </tr>
              </thead>
            </table>
            <h6 style="text-align: center;">Totalizer</h6>
            <h4 style="text-align: center;"><?php echo $result1['TOT']?></th> &nbsp;&nbsp;&nbsp; M<sup>3</h4>
  </div>
</div>

<div class="w3-third">
  <div class="w3-card w3-container" style="min-height:460px">
  <h3>ANALYZER IPA-2</h3><br>
  <thead>
              <tr>
                <th style="text-align: right;">PH :</th>
                <th style="text-align: center;"><?php echo $result2['PH']?></th></th>
                <th style="text-align: right;"> </th>
              </tr>
              <tr>
                <th style="text-align: right;">Turbidity :</th>
                <th style="text-align: center;"><?php echo $result2['TURB']?></th></th>
                <th style="text-align: right;">NTU</th>
              </tr>
              <tr>
                <th style="text-align: right;">Chlorine :</th>
                <th style="text-align: center;"><?php echo $result2['CL']?></th></th>
                <th style="text-align: right;">PPM</th>
              </tr>
              <tr>
                <th style="text-align: right;">Flow Rate :</th>
                <th style="text-align: center;"><?php echo $result2['FL']?></th></th>
                <th style="text-align: right;">Liter/s</th>
              </tr>
              </thead>
            </table>
            <h6 style="text-align: center;">Totalizer</h6>
            <h4 style="text-align: center;"><?php echo $result2['TOT']?></th>&nbsp;&nbsp;&nbsp; M<sup>3</h4>
  </div>
</div>

<div class="w3-third">
  <div class="w3-card w3-container" style="min-height:460px">
  <h3>ANALYZER IPA-3</h3><br>
  <thead>
              <tr>
                <th style="text-align: right;">PH :</th>
                <th style="text-align: center;"><?php echo $result3['PH']?></th></th>
                <th style="text-align: right;"> </th>
              </tr>
              <tr>
                <th style="text-align: right;">Turbidity :</th>
                <th style="text-align: center;"><?php echo $result3['TURB']?></th></th>
                <th style="text-align: right;">NTU</th>
              </tr>
              <tr>
                <th style="text-align: right;">Chlorine :</th>
                <th style="text-align: center;"><?php echo $result3['CL']?></th></th>
                <th style="text-align: right;">PPM</th>
              </tr>
              <tr>
                <th style="text-align: right;">Flow Rate :</th>
                <th style="text-align: center;"><?php echo $result3['FL']?></th></th>
                <th style="text-align: right;">Liter/s</th>
              </tr>
              </thead>
            </table>
            <h6 style="text-align: center;">Totalizer</h6>
            <h4 style="text-align: center;"><?php echo $result3['TOT']?></th> &nbsp;&nbsp;&nbsp; M<sup>3</h4>
  </div>
</div>
</div>


</body>
</html>
