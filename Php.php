<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="author" content="Kirill_Kononovich" />
        <title>HW-PHP-!</title>
        
    </head>

    <body>
        <?php 

            echo "<hr>";
            echo 'Задание 1';
            echo "<hr>";

            $a = 10;
            $b = 2;
            $c = $a + $b;

            echo "$c";

            echo "<hr>";
            echo 'Задание 2';
            echo "<hr>";

            $x = 2;
            $y = 6;
            $z = 9;

            $result = (($x+1)*4) - (2*(($z-pow(2*$x,2))+pow($y,2)));

            echo "$result";

            echo "<hr>";
            echo 'Задание 3';
            echo "<hr>";

            $a = 17;
            $b = 10;
            $c = $a + $b;
            $d = 7;

            $result = $c + $d;

            echo "$result";

            echo "<hr>";
            echo 'Задание 4';
            echo "<hr>";

            $text1 = "Hello";
            $text2 = "World";
            $txtresult = "$text1 $text2";

            echo "$txtresult";
            echo "<br> $text1 $text2";

            echo "<hr>";
            echo 'Задание 5';
            echo "<hr>";

            $name = "Kirill";

            echo "Hi, $name!";

            echo "<hr>";
            echo 'Задание 6';
            echo "<hr>";

            $num = "12345";

            print $num[0]+$num[1]+$num[2]+$num[3]+$num[4];

            echo "<hr>";
            echo 'Задание 7';
            echo "<hr>";

            $hour = 9;
            $minutes = 60;
            $second = 60;
            
            $second_Hours = ($hour*($minutes*$second));
            echo "Секунд в часе $hour: $second_Hours";

            $HDay = 24;
            $HDay_Second = ($HDay*($minutes*$second));

            echo "<br> Секунд в сутках: $HDay_Second";

            $year = 365;
            $yearResult = (($year*$HDay)*($minutes*$second));

            echo "<br> Секунд в году: $yearResult";

            $Y2000 = 21;
            $yr2000 = (($year*$Y2000)*$HDay*($minutes*$second));

            echo "<br> С начала 2000 года прошло секунд: $yr2000";

            echo "<hr>";
            echo 'Задание 8';
            echo "<hr>";

            $hours = date(H);
            $minutes = date(i);
            $second = date(s);

            echo "$hours:$minutes:$second";

            echo "<hr>";
            echo 'Задание 9';
            echo "<hr>";

            $var = 1;
            $var += $var + 12;
            $var -= $var - 14;
            $var *= $var * 5;
            $var /= $var / 7;
            $var ++;
            -- $var;
            echo $var;

            echo "<hr>";
            echo 'Задание 10';
            echo "<hr>";

            define("Konon", "Kononovich");
            $name = "Kirill";
            $name3 = "Viktorovich";
            $years = 21;
            
            echo "Меня зовут ";
            echo Konon;
            echo " $name $name3 <br>Мне $years год.";





        ?>
    </body>
</html>