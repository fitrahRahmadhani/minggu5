<!DOCTYPE HTML>
<html>
    <head></head>
    <body>
        <h2>Sorting Array</h2>
        <?php
            $age = array(
                "Joe" => "29",
                "Elsa" => "27",
                "Kevin" => "32",
                "Nick" => "24",
                "Olaf" => "9",
                "Ana" => "17"
            );
        asort($age);
        echo "asort<br>";
        foreach($age as $name => $value){
            echo "name = " . $name . ", age = " . $value . "<br>";
        }
        echo "-------------------------------------------<br>";
        echo "rsort<br>";
        $age = array(
            "Joe" => "29",
            "Elsa" => "27",
            "Kevin" => "32",
            "Nick" => "24",
            "Olaf" => "9",
            "Ana" => "17"
        );
        rsort($age);
        foreach($age as $name => $value){
            echo "name = " . $name . ", age = " . $value . "<br>";
        }
        echo "-------------------------------------------<br>";
        echo "ksort<br>";
        $age = array(
            "Joe" => "29",
            "Elsa" => "27",
            "Kevin" => "32",
            "Nick" => "24",
            "Olaf" => "9",
            "Ana" => "17"
        );
        ksort($age);
        foreach($age as $name => $value){
            echo "name = " . $name . ", age = " . $value . "<br>";
        }
        echo "-------------------------------------------<br>";
        echo "arsort<br>";
        $age = array(
            "Joe" => "29",
            "Elsa" => "27",
            "Kevin" => "32",
            "Nick" => "24",
            "Olaf" => "9",
            "Ana" => "17"
        );
        arsort($age);
        foreach($age as $name => $value){
            echo "name = " . $name . ", age = " . $value . "<br>";
        }
        echo "-------------------------------------------<br>";
        echo "krsort<br>";
        $age = array(
            "Joe" => "29",
            "Elsa" => "27",
            "Kevin" => "32",
            "Nick" => "24",
            "Olaf" => "9",
            "Ana" => "17"
        );
        krsort($age);
        foreach($age as $name => $value){
            echo "name = " . $name . ", age = " . $value . "<br>";
        }
        ?>
    </body>
</html>