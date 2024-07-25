<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>prime number checker</title>
    <style>

        #form{
            /* background-color:magenta; */
            margin:100px 200px;
            font-size: 30px
        }
        form{
            background-color:#F48FB1;
            margin:100px 200px;
            padding: 100px 200px;
        }
        p{
            text-align:center;
            font-size:40px;
            font-weight: bold;
        }
        h1{
            text-align: center;
        }
    </style>
</head>
<body>
    <div id="form">
    <form action="prime.php" method="POST">
    <label>Enter a number</label>
    <br>
    <input type="number" name="num">
    <br>

    <button type="submit">Check</button>
    </form>
    </div>
    <?php
    
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $num=$_POST['num'];
        $res="";
        $flag=0;
        for($i=2;$i<=sqrt($num);$i++){
            if(($num%$i)==0){
                $flag=1;
                break;
            }
        }

        if($flag==1){
            $res="$num is not prime";
        }
        else{
            $res="$num is prime";
        }

        echo "<p>$res</p>";
        
    }
    // $date=getdate();
    // echo "<p>$date[mday]/$date[mon]/$date[year]</p>"
    $today = date("d-m-Y");

// Display today's date in dd-mm-yyyy format
 echo "<h1>Today's date is: <p>$today </p> </h1>"; 
    ?>
</body>
</html>
