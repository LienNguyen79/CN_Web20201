<html>
    <head>
        <title>Bài tập lap03</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body style="background-color:yellow;"> 
        <font size="5" color="blue">Enter your name and select date and time</font>
        <br>
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="GET">
            <?php         
            if(array_key_exists("name", $_GET)){
                $name = $_GET["name"];
                $date = $_GET["date"];
                $month = $_GET["month"];
                $year = $_GET["year"];
                $hour = $_GET["hour"];
                $minute = $_GET["minute"];
                $seconds = $_GET["seconds"];
            }
            else {
                $name = "";
                $date = $month = $year = $hour = $minute = $seconds = 0;
            }
            function display($data1,$data2){
                if ($data1 == $data2){
                    print("<option selected>$data2</option>");
                }
                else print("<option>$data2</option>");
            }
            ?>
            <table>
                <tr>
                    <td>Your name: </td>
                    <td colspan="3"><input type="text" size="17" maxlength="30" name="name" >   
                        <?php print("$name"); ?>
                    </td>              
                </tr>
                <tr>
                    <td>Date: </td>
                    <td><select name="date">
                        <?php                  
                            for ($i=1;$i<32;$i++){
                                display($date,$i);
                        }                       
                        ?>
                        </select>
                    </td>
                    <td><select name="month">
                        <?php
                            for ($i=1;$i<13;$i++){
                                display($month,$i);
                            }
                        ?>
                        </select>
                    </td>
                    <td><select name="year">
                        <?php
                            for ($i=1950;$i<2050;$i++){
                                display($year,$i);
                            }
                        ?>
                        </select>
                    </td>                   
                </tr>
                <tr>
                    <td>Time: </td>
                    <td><select name="hour">
                        <?php                  
                            for ($i=0;$i<24;$i++){
                                display($hour,$i);
                        }                       
                        ?>
                        </select>
                    </td>
                    <td><select name="minute">
                        <?php
                            for ($i=0;$i<60;$i++){
                                display($minute,$i);
                            }
                        ?>
                        </select>
                    </td>
                    <td><select name="seconds">
                        <?php
                            for ($i=0;$i<60;$i++){
                                display($seconds,$i);
                            }
                        ?>
                        </select>
                    </td>                   
                </tr>
                <tr>
                    <td align="right"><input type="submit" value="Submit"></td>
                    <td alight="left"><input type="reset" value="Reset"></td>
                </tr>                
            </table>
            <?php
            if(array_key_exists("name", $_GET)){
                if($_GET["hour"] < 13) {
                    $temp = $_GET["hour"];
                    $a = "AM";
                }
                else {
                    $temp = $_GET["hour"]-12;
                    $a = "PM";
                }
                echo "Hello ".$name. 
                "<br/> You have choose to have an appointment on " 
                .$_GET["hour"].":".$_GET["minute"].":".$_GET["seconds"]
                .",".$_GET["date"]."/".$_GET["month"]."/".$_GET["year"];
                echo "<br/> <br/>";          
                echo "More infomation: ";
                echo "<br/>In 12 hours, the time and date is ".$temp.":".$_GET["minute"].":".$_GET["seconds"]." ".$a
                .",".$_GET["date"]."/".$_GET["month"]."/".$_GET["year"];
                echo "<br/>";
                if($_GET["month"]==2){
                    if ($_GET["year"]%4==0 & $_GET["year"]%100!=0){
                        echo "This month has 29 days!";
                    }
                    elseif ($_GET["year"]%100==0 & $_GET["year"]%400==0){
                        echo "This month has 29 days!";
                    }
                    else echo "This month has 28 days";
                }
                elseif ($_GET["month"]==4 || $_GET["month"]==6 || $_GET["month"]==9 || $_GET["month"]==11) {
                    echo "This month has 30 days";
                }
                else echo "This month has 31 days";
            }
            ?>
        </form>
    </body>
</html>