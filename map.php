<?php
$page = $_SERVER['PHP_SELF'];
$sec = "200";
?>
<!DOCTYPE html>
<html>
    <head>
<title>main</title>
<meta name="viewport" content="initial-scale=1.0, user-scalable=no">
<meta http-equiv="refresh" content="<?php echo $sec?>;URL='<?php echo $page?>'">
<meta charset="utf-8">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap" rel="stylesheet">
<link rel="stylesheet"type="text/css"href="map.css">
<link rel="stylesheet"href= "https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    </head>
    <body>
    <div class="logo">
        <div class="logo1">
            
            <h1>T</h1>
            <h2>B</h2>
            <h3>R</h3>
        </div>
        
    </div> 
    <div class="icon">  
        <nav>
            <ul class="nav_items">
                    <li><a class="but" href="index.html"><div id="page1">HOME</div></a></li>
                    <li><a class="but" href="map.php"><div id="page2">MAP</div></a></li>
                    <li><a class="but" href="graph.html"><div id="page3">GRAPH</div></a></li>
                    <li><a class="but" href="gauges.html"><div id="page4">GAUGES</div></a></li>
                    <li><a class="but" href="#"><div id="page5">LOGOUT</div></a></li>
                    <a class="butt" href="index.html"><div id="icon1"><i class="fa fa-home" aria-hidden="true"></i></div></a>
                    <a class="butt" href="map.php"><div id="icon2"><i class="fas fa-map-marker-alt" aria-hidden="true"></i></div></a>
                    <a class="butt" href="graph.html"><div id="icon3"><i class="fas fa-chart-line" aria-hidden="true"></i></div></a>
                    <a class="butt" href="gauges.html"><div id="icon4"><i class="fas fa-tachometer-alt" aria-hidden="true"></i></div></a>
                    <a class="butt"><div id="icon5"><i class="fa fa-lock" aria-hidden="true"></i></div></a>
            </ul>
        </nav>
    </div> 
    
<div id="map">
    <h1>Location of Raven 6.0</h1>
<?php

$host="localhost";
$user="root";
$password="";
$db="main2";


  $conn=mysqli_connect($host,$user,$password)or die("Cannot execute");
  mysqli_select_db($conn,$db);

  $query = "SELECT * FROM main2 order by ID desc limit 1";
    
$result = mysqli_query($conn,$query);
if(mysqli_num_rows($result) > 0){
    while($row = mysqli_fetch_array($result)){
       $latt = $row["MAP_LAT"];
       $long = $row["MAP_LONG"];
       //echo "var lat =".json_encode($latt);
      // echo "var lng =".json_encode($long); 
        ?>
 
        <iframe width="1200" height="600" src="https://maps.google.com/maps?z=10&q=<?php echo $latt; ?>,<?php echo $long; ?>&output=embed"></iframe>
 
        <?php
    }}
?>

</body>
</html>