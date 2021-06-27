<?php
$server ='localhost';
$user='root';
$db='Control Interface';
$db_port = 8080;
$connection = new mysqli_connect($server,$root,$db,8080);
$sql="select from'ENGINS'";
if(isset($_POST['submit'])){
 if (!empty ($_POST['ENGIN 1']) && !empty($_POST['ENGIN 2'])&& !empty($_POST['ENGIN 3']&& !empty($_POST['ENGIN 4']))&& !empty($_POST['ENGIN 5'])&& !empty($_POST['ENGIN 6'])&& !empty($_POST['SAVE']) && !empty($_POST['RUN'])){
    $value1 = $_POST['value1'];
    $value2 = $_POST['value2'];
    $value3 = $_POST['value3'];
    $value4 = $_POST['value4'];
    $value5 = $_POST['value5'];
    $value6 = $_POST['value6'];
    $SAVE =$_POST['SAVE'];
    $RUN=$_POST['RUN'];
    $query ="insert into form insert into ENGINS((value1,value2,value3,value4,value5,value6,SAVE ,RUN) value($value1,$value2,$value3,$value4,$value5,$value6,$SAVE ,$RUN) ";
    $run = mysqli_query($connection,$query) or die (mysqli_error());
 if ($run){
    echo "form submitted sucessfully";
}
 else{
     echo "form not submitted";
}
} 
else{
     echo "not found";
}
}

    ?>

