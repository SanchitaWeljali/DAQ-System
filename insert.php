<?php

    $host = "localhost";		     
    $dbname = "main2";              
    $username = "root";		
    $password = "";	       

$conn = new mysqli($host, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

else { echo "Connected to mysql database. "; }


  if(!empty($_POST['SPEED']) || !empty($_POST['PITVAL']) || !empty($_POST['FAILVAL']) || !empty($_POST['LAPCOUNT']) || !empty($_POST['LAPTIME']) || !empty($_POST['FUEL']) || !empty($_POST['MAP_LAT']) || !empty($_POST['MAP_LONG']))
    {
	$SPEED = $_POST['SPEED'];
	$PITVAL = $_POST['PITVAL'];
	$FAILVAL = $_POST['FAILVAL'];
	$LAPCOUNT = $_POST['LAPCOUNT'];
	$LAPTIME = $_POST['LAPTIME'];
	$FUEL = $_POST['FUEL'];
    $MAP_LAT = $_POST['MAP_LAT'];
    $MAP_LONG = $_POST['MAP_LONG'];


	        $sql = "INSERT INTO main2(SPEED,PITVAL,FAILVAL,LAPCOUNT,LAPTIME,FUEL,MAP_LAT,MAP_LONG) VALUES ('".$SPEED."','".$PITVAL."', '".$FAILVAL."' ,'".$LAPCOUNT."', '".$LAPTIME."', '".$FUEL."', '".$MAP_LAT."', '".$MAP_LONG."')"; 
 


		if ($conn->query($sql) === TRUE) {
		    echo "Values inserted in MySQL database table.";
		} else {
		    echo "Error: " . $sql . "<br>" . $conn->error;
		}
	}


$conn->close();



?>