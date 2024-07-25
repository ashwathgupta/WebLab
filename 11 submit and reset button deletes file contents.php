<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thoughts</title>
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
    <h1>Enter your thoughts here</h1>
<label>Enter your thoughts here :</label>
<br>
    <form action="thoughts.php" method="POST">
        <textarea name="thoughts" id="th" cols="30" rows="10"></textarea>
<br><br>
        <button type="submit">SUBMIT</button>
        <button type="reset">RESET</button>
    </form>

    <?php
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $t=$_POST["thoughts"];

        $tf=fopen("myth.txt","w");
        fwrite($tf,$t);
        echo "<p>The thought you entered is $t</p>";

    }
    ?>
</body>
</html>