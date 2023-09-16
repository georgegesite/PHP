<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Udemy</title>
</head>

<body>
    <?php
    echo "This is my first PHP code";


    ?>
    <div>
        <p>
            <?php
            echo date('y-m-d'); //built in date 
            ?>
        </p>
    </div>
    <div>
        <p>
            <?php
            $name = "George";
            echo "Hello, $name. <br>";   // assign data types 
            ?>
        </p>
    </div>
    <div>
        <?php
        $num = 10; // variables are dynamically typed
        echo $num;
        ?>

    </div>
    <div>
        <!-- String type in php -->
        <?php
        $greeting = "Hello, ";
        $greeting = $greeting . "George <br>";
        $welcoem = "Welcoome";
        echo $greeting;

        // heredoc example
        $he = 'Bob';
        $she = 'Alice';
        $text = <<<TEXT
        $he said "PHP is awesome".
        "Of course" $she agreed."
        TEXT;
        echo $text;

        $str = <<<IDENTIFIER
        place a string here
        it can span multiple lines
        and include single quote ' and double quotes "
        IDENTIFIER;

        //Nowdoc example
        $title = 'My site';

        $header = <<<HEADER
        <header>
        <h1>$title</h1>
        </header>
        HEADER;
        echo $header;

        $str = <<<'IDENTIFIER'
        place a string here
        it can span multiple lines
        and include single quote ' and double quotes "
        IDENTIFIER;

        $price = 20.00;
        $tax = 0.07;
        $total = $price + ($price * $tax);
        echo "Total Price is \${$total}.";

        $stringindex = "Hello world";
        echo $stringindex[0];
        echo $stringindex[6];

        //single qoute escape character

        echo '<br> it\'s a string';
        //double qoute escape character
        echo "<br> it's a \"hello\" ";

        echo "<br>C:\\xamp\\htcods";

        ?>
    </div>

    <div>
        <?php
        $number = 10; // numbers
        $n_number = -20;
        $binary = 0b111;
        $octal = 0123;
        $hexa = 0x1A;
        echo $hexa;
        echo "<br>";
        echo $binary;
        echo "<br>";
        echo $octal;

        ?>

    </div>

    <div>
        <?php
        //floats
        ?>
    </div>
    <div>
        <?php
        //booleans\\
        $myBoolean = true;
        $anotherBoolean = false;
        $number = 5;
        $output = ($number == 5);
        echo $output;

        ?>
    </div>
    <div>
        <?php
        //next
        $answer = true;
        ?>
    </div>
</body>

</html>