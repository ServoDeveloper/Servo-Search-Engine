<html>
    
    
    <head>
   

    
    <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/index.css">
        <script src="js/bootstrap.min.js"></script>
        
        
        <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png">
<link rel="manifest" href="manifest.json">
<link rel="mask-icon" href="safari-pinned-tab.svg" color="#5bbad5">
<meta name="theme-color" content="#ffffff">
        <title>Servo - Search Engine</title>
        <div class="container">
        <h6 class="topright">Not signed in</h6>
            </div>
        
        <center>
        <img style="padding-top:112px"  src="img/servo.png" alt="Servo" title="Servo" >
        <form method="post" action="index.php">
            
            <input name="search-field" type="search" placeholder="Search a website or topic."> <input name="submit-field" type="image" src="img/search-button-clipart-1.jpg" height="32" width="32" style="padding-top:5px">
        
        
        </form>
            
            </center>
    
    </head>
    
</html>


<?php
 error_reporting(0);
require('../config.php');



function starts_with_upper($str) {
    $chr = mb_substr ($str, 0, 1, "UTF-8");
    return mb_strtolower($chr, "UTF-8") != $chr;
}

// Create connection

$conn = new mysqli(host, user, password, db);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM search";
$result = $conn->query($sql);


    // output data of each row
    while($row = $result->fetch_assoc()) {
        
        
        if($_POST['search-field'] == $row["name"]){
        header("Location: " . $row["redirect"]);
    }
    }



    
$conn->close();

    
