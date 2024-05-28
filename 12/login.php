<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
 body {
            background-color: aqua;
            font-family: cursive;
        }

        form {
            margin: 100px 242px;
            padding: 100px 174px;
            background-color: aquamarine;
        }

        label {
            margin: 20px;
            padding: 20px;
        }

        input {
            margin: 10px;
            padding: 10px;
            border: 2px solid;
            border-radius: 4px
        }

        button {
            margin: 32px 180px;
            font-size: 13px;
            padding: 20px;
            font-family: cursive;
            border: 3px solid black;
            border-radius: 29px;

        }

        textarea {
            margin: 100px;
            padding: 100px;
        }
    </style>
</head>
<body>
    <form action="login.php" method="POST">
        <label >Enter your name</label>
        <br>
        <input type="text" name="name">
        <br>
        <label >Enter your password</label>
        <br>
        <input type="password" name="pass">
        <br>

        <button type="submit">LOGIN</button>
    </form>
    <?php
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $un=$_POST['name'];
        $pw=$_POST['pass'];
        $con=fopen("user.txt","r");
        $cont=fread($con,filesize("user.txt"));
        if(strpos($cont,$un . ":" . $pw)!==false){
            echo "<p>LOGIN SUCCESSFUL</p>";
        }
        else{
            echo "<p>LOGIN UNSUCCESSFUL</p>";

        }
    }

    ?>
</body>
</html>