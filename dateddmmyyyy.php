<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>date display</title>
    <style>
        h1{
            text-align:center;
        }
        p{
            color: blue;
            background-color: aqua;
        }
    </style>
    
</head>
<body>
   
    <?php
// Get today's date
$today = date("d-m-Y");

// Display today's date in dd-mm-yyyy format
 echo "<h1>Today's date is: <p>$today </p> </h1>"; 
?>
</body>
</html>