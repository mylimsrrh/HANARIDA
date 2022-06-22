<!DOCTYPE html>
<!--
Template Name: Viral
Author: <a href="https://www.os-templates.com/">OS Templates</a>
Author URI: https://www.os-templates.com/
Licence: Free to use under our free template licence terms
Licence URI: https://www.os-templates.com/template-terms
-->
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
<html>
<head>
<title>Viral</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="layout.css" rel="stylesheet" type="text/css" media="all">
<style>
                  
        table, th, td {
            border: 0px solid black;
        }
        
    </style>
</head>
<body id="top">
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- <div class="wrapper row0">
  <div id="topbar" class="clear"> 
    <div class="fl_left">
      <ul class="nospace inline">
        <li><i class="fa fa-phone"></i> +00 (123) 456 7890</li>
        <li><i class="fa fa-envelope-o"></i> info@domain.com</li>
      </ul>
    </div>
    <div class="fl_right">
      <ul class="faico clear">
        <li><a class="faicon-facebook" href="#"><i class="fa fa-facebook"></i></a></li>
        <li><a class="faicon-pinterest" href="#"><i class="fa fa-pinterest"></i></a></li>
        <li><a class="faicon-twitter" href="#"><i class="fa fa-twitter"></i></a></li>
        <li><a class="faicon-dribble" href="#"><i class="fa fa-dribbble"></i></a></li>
        <li><a class="faicon-linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
        <li><a class="faicon-google-plus" href="#"><i class="fa fa-google-plus"></i></a></li>
        <li><a class="faicon-rss" href="#"><i class="fa fa-rss"></i></a></li>
      </ul>
    </div>
  </div>
</div> -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- <div class="wrapper row1">
  <header id="header" class="clear"> 
    <div id="logo" class="fl_left">
      <h1><a href="index.html">Viral</a></h1>
    </div>
    <nav id="mainav" class="fl_right">
      <ul class="clear">
        <li class="active"><a href="index.html">Home</a></li>
        <li><a class="drop" href="#">Pages</a>
          <ul>
            <li><a href="pages/gallery.html">Gallery</a></li>
            <li><a href="pages/full-width.html">Full Width</a></li>
            <li><a href="pages/sidebar-left.html">Sidebar Left</a></li>
            <li><a href="pages/sidebar-right.html">Sidebar Right</a></li>
            <li><a href="pages/basic-grid.html">Basic Grid</a></li>
          </ul>
        </li>
        <li><a class="drop" href="#">Dropdown</a>
          <ul>
            <li><a href="#">Level 2</a></li>
            <li><a class="drop" href="#">Level 2 + Drop</a>
              <ul>
                <li><a href="#">Level 3</a></li>
                <li><a href="#">Level 3</a></li>
              </ul>
            </li>
          </ul>
        </li>
        <li><a href="#">Link Text</a></li>
        <li><a href="#">Link Text</a></li>
      </ul>
    </nav>
  </header>
</div> -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->


<div class="wrapper row2 bgded" style="background-image:url('w1.jng');">
  <div class="overlay">
    <section id="pageintro" class="clear">
      <div class="center btmspace-80">
        <h2 class="heading xxl capitalise btmspace-20">PT. Hanarida Tirta Birawa</h2>
        <p class="xl nospace capitalise">Your Partner for Water Investment</p>
      </div>
      <ul class="nospace group services">
        <li class="one_third first">
          <section class="overlay">
            <h3 class="heading" style="text-align: center;">Analyzer IPA-1</h3>
            <table>
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
            <!-- <p>Maecenas libero nunc, volutpat eu erat sed, blandit elementum mi etiam scelerisque&hellip;</p>
            <footer><a href="#">Read More &raquo;</a></footer> -->
          </section>
        </li>
        <li class="one_third">
          <section class="overlay">
            <h3 class="heading" style="text-align: center;">Analyzer IPA-2</h3>
            <table>
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
            <!-- <p>Maecenas libero nunc, volutpat eu erat sed, blandit elementum mi etiam scelerisque&hellip;</p>
            <footer><a href="#">Read More &raquo;</a></footer> -->
          </section>
        </li>
        <li class="one_third">
          <section class="overlay">
            <h3 class="heading" style="text-align: center;">Analyzer IPA-3</h3>
            <table>
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
            <!-- <p>Maecenas libero nunc, volutpat eu erat sed, blandit elementum mi etiam scelerisque&hellip;</p>
            <footer><a href="#">Read More &raquo;</a></footer> -->
          </section>
        </li>
      </ul>
    </section>
  </div>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- <div class="wrapper row3">
  <main class="container clear"> 
    <div class="group">
      <div class="one_third first"><img src="images/demo/460x700.png" alt=""></div>
      <div class="two_third">
        <h2 class="heading">Etiam finibus tempus felis eget ullamcorper</h2>
        <p>Cras pellentesque neque, consectetur adipiscing elit. Fusce venenatis elit ac ligula euismod varius. Maecenas feugiat purus quam, vel aliquet tellus sodales eu. Integer vitae vestibulum turpis, in sollicitudin quam. Aliquam vulputate non felis non luctus. Vestibulum eget augue nulla. Aliquam dignissim nibh mi, ut bibendum quam dapibus eget. Nam nec nisi vel sapien pulvinar ultrices. Curabitur rutrum nisl sagittis, pretium velit eget, convallis lacus. Nulla fermentum nulla ut lacus maximus, ut porttitor neque varius. Nullam sed vulputate sem. Sed bibendum porttitor metus.</p>
        <p class="btmspace-80">Donec lacinia lacus eros, nec luctus odio bibendum dictum. Vivamus nec egestas libero, non faucibus mauris. In in efficitur felis. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nunc porttitor turpis in ex porttitor, nec sagittis diam ultrices.</p>
        <ul class="nospace group">
          <li class="one_third first">
            <h6 class="nospace btmspace-10"><a href="#"><i class="fa fa-location-arrow"></i> Praesent neque</a></h6>
            <p class="nospace">Mauris consectetur vel tellus quis consectetur&hellip;</p>
          </li>
          <li class="one_third">
            <h6 class="nospace btmspace-10"><a href="#"><i class="fa fa-lock"></i> Integer tinciduntt</a></h6>
            <p class="nospace">Mauris consectetur vel tellus quis consectetur&hellip;</p>
          </li>
          <li class="one_third last">
            <h6 class="nospace btmspace-10"><a href="#"><i class="fa fa-map-marker"></i> Aliquam mauris</a></h6>
            <p class="nospace">Mauris consectetur vel tellus quis consectetur&hellip;</p>
          </li>
        </ul>
      </div>
    </div>
    <div class="clear"></div>
  </main>
</div>

<div class="wrapper row4">
  <section id="info" class="clear"> 
    <div class="center btmspace-80">
      <h2 class="heading uppercase btmspace-30">Curabitur eget elit sit amet purus congue</h2>
      <p class="lrspace">Aenean semper elementum tellus, ut placerat leo. Quisque vehicula, urna sit amet pulvinar dapibus, dui leo egestas augue, eget molestie augue diam nec ante. Fusce quis feugiat urna. Curabitur a sapien tincidunt, ullamcorper mauris sit amet, ornare augue. Suspendisse potenti. Sed eget ultricies sem. Proin quis lacus egestas, adipiscing nunc ornare, gravida diam. Donec luctus convallis rhoncus.</p>
    </div>
    <div class="group">
      <div class="one_half first"><img src="images/demo/600x700.png" alt=""></div>
      <div class="one_half">
        <ul class="nospace group services">
          <li>
            <article><a href="#"><i class="fa fa-asterisk"></i></a>
              <h6 class="heading">Ut pharetra nisi eu massa</h6>
              <p>Nunc nec tincidunt turpis sed feugiat dui vestibulum euismod nunc sed vestibulum interdum&hellip;</p>
              <footer><a href="#">Read More &raquo;</a></footer>
            </article>
          </li>
          <li>
            <article><a href="#"><i class="fa fa-bar-chart"></i></a>
              <h6 class="heading">Pellentesque neque porttitor</h6>
              <p>Maecenas luctus sed nulla ac faucibus cras pellent esque neque vitae tincidunt tempus&hellip;</p>
              <footer><a href="#">Read More &raquo;</a></footer>
            </article>
          </li>
          <li>
            <article><a href="#"><i class="fa fa-paper-plane-o"></i></a>
              <h6 class="heading">Nulla lobortis ultrices nibh</h6>
              <p>Quisque sit amet tellus nunc praesent nunc augue, eleifend ac consequat sed egestas eu nunc&hellip;</p>
              <footer><a href="#">Read More &raquo;</a></footer>
            </article>
          </li>
        </ul>
      </div>
    </div>
    <div class="clear"></div>
  </section>
</div>

<div class="wrapper row5">
  <footer id="footer" class="clear"> 
    <div class="one_quarter first">
      <h6 class="title">Viral</h6>
      <address class="btmspace-15">
      Company Name<br>
      Street Name &amp; Number<br>
      Town<br>
      Postcode/Zip
      </address>
      <ul class="nospace">
        <li class="btmspace-10"><span class="fa fa-phone"></span> +00 (123) 456 7890</li>
        <li><span class="fa fa-envelope-o"></span> info@domain.com</li>
      </ul>
    </div>
    <div class="one_quarter">
      <h6 class="title">Quick Links</h6>
      <ul class="nospace linklist">
        <li><a href="#">Home Page</a></li>
        <li><a href="#">Blog</a></li>
        <li><a href="#">Gallery</a></li>
        <li><a href="#">Portfolio</a></li>
        <li><a href="#">Contact Us</a></li>
      </ul>
    </div>
    <div class="one_quarter">
      <h6 class="title">From The Blog</h6>
      <article>
        <h2 class="nospace"><a href="#">Praesent Vestibulum</a></h2>
        <time class="smallfont" datetime="2045-04-06">Friday, 6<sup>th</sup> April 2045</time>
        <p>Vestibulumaccumsan egestibulum eu justo convallis augue estas aenean elit intesque sed.</p>
      </article>
    </div>
    <div class="one_quarter">
      <h6 class="title">Grab Our Newsletter</h6>
      <form method="post" action="#">
        <fieldset>
          <legend>Newsletter:</legend>
          <input class="btmspace-15" type="text" value="" placeholder="Name">
          <input class="btmspace-15" type="text" value="" placeholder="Email">
          <button type="submit" value="submit">Submit</button>
        </fieldset>
      </form>
    </div>
  </footer>
</div>
<div class="wrapper row6">
  <div id="copyright" class="clear"> 
    <p class="fl_left">Copyright &copy; 2018 - All Rights Reserved - <a href="#">Domain Name</a></p>
    <p class="fl_right">Template by <a target="_blank" href="https://www.os-templates.com/" title="Free Website Templates">OS Templates</a></p>
  </div>
</div> -->

<a id="backtotop" href="#top"><i class="fa fa-chevron-up"></i></a> 
<!-- JAVASCRIPTS -->
<script src="jquery.min.js"></script>
<script src="jquery.backtotop.js"></script>
<script src="jquery.mobilemenu.js"></script>
</body>
</html>