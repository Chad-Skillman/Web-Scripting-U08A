<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>CIS255 U08A Pic-A-Pic</title>

<!--

CIS255 Chad Skillman U08A Pic-A-Pic

Demonstrated Objectives:



-->


<style>
body {
    background-color: lightskyblue;
    object-position: center;
}


</style>

</head>
<body>


<?php

//Show errors
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Get pic data sent by GET
// isset() tests for data at the gateway, required on many servers
// Radio buttons pass values ($pic)

if(isset($_GET["moto"])) { $pic = $_GET["moto"]; } else { $pic = ""; }

if($pic == "Aprilia"){
    print '<img src="Aprilia.jpg">';
}

if($pic == "BMW"){
    print '<img src="BMW.jpg">';
}

if($pic == "Ducati"){
    print '<img src="Ducati.jpg">';
}

if($pic == "Honda"){
    print '<img src="CBR.jpg" width="1920" height= "1080">';
}

if($pic == "Kawasaki"){
    print '<img src="Ninja.jpg">';
}

if($pic == "Suzuki"){
    print '<img src="GSXR.png" width="1920" height= "1080">';
}

if($pic == "Yamaha"){
    print '<img src="R1M.jpg">';
}

?>

</body>

</html>