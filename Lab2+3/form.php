<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Receiving Input</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body style="background-color:yellow;">
        <?php
            if ($_POST["gender"]=="Male") echo "Hello Mr.".$_POST["name"];
            elseif ($_POST["gender"]=="Female") echo "Hello Miss.".$_POST["name"];
            else echo "Hello, ".$_POST["name"];
            echo "<br>Your email is ".$_POST["email"];
            echo "<br>You are studying at ".$_POST["class"].", ".$_POST["university"];
            echo "<br>Your hobby is <br>";
            if (isset($_POST["hobby"])) {
                foreach($_POST["hobby"] as $value) {
                    echo "<li>$value</li>";
                }
            }            
        ?>       
    </body>
</html>

