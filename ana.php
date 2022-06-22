<?php
  
$hostname = "localhost";
$username = "root";
$password = "";
$databaseName = "db_ana";

$connect = mysqli_connect($hostname, $username, $password, $databaseName);

$NILAI = $_GET ['nilai'];
$x = explode (';' , $NILAI);


 if ($x[0]=='ANA1'){
    mysqli_query($connect,"UPDATE tb_ana SET PH='".$x[1]."', TURB='".$x[2]."', CL='".$x[3]."', FL='".$x[4]."', TOT='".$x[5]."' WHERE KET = 'ANA1'");
}
    
else if ($x[0] == 'ANA2'){
    mysqli_query($connect,"UPDATE tb_ana SET PH='".$x[1]."', TURB='".$x[2]."', CL='".$x[3]."', FL='".$x[4]."', TOT='".$x[5]."' WHERE KET = 'ANA2'");
}

else if ($x[0] == 'ANA3'){
    mysqli_query($connect,"UPDATE tb_ana SET PH='".$x[1]."', TURB='".$x[2]."', CL='".$x[3]."', FL='".$x[4]."', TOT='".$x[5]."' WHERE KET = 'ANA3'");
}
