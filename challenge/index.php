<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Day 7 Challenge</title>
    <style>
        html, body {
            height: auto; 
            width: 100%;
            font-family: monospace;
        }
        img {
            width: 100%;
        }
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            overflow-wrap: anywhere;
        }
        hr {
            margin-top: 30px;
            border: none;
            border-top: 1px solid gainsboro;
        }
        div {
            width: 70%;
            height: auto;
            display: flex;
            flex-direction: column;
            justify-items: center;
            align-items: flex-start;
            border-bottom: 1px solid gainsboro;
            padding-bottom: 50px;
        }
        .div-flex-center {
            align-items: center;
            text-align: center;
        }
        section {
            margin-top: 10px;
            background-color: #dcdcdc8a;
            line-height: 1.5;
        }
    </style>
</head>
<body>

    <!-- LOOP THE STARS -->
    <div>
        <p>1. Loop the stars</p>
        <form action="index.php" method="get">
            <input type="number" name="numberStars" id="" placeholder="number of layers">
            <input type="submit" value="generate stars">
            <a href="http://localhost:8888/backend-day-7/challenge">reset</a>
        </form>
        <section>
            <?php
                $number = 0;
                $number = $_GET[numberStars];
                //normal
                for ($i=0; $i < $number ; $i++) {
                    for ($j=0; $j <= $i; $j++) {
                        echo '*';
                    }
                    echo '<br>';
                }
                //normal reverse
                for ($i=0; $i < $number ; $i++) {
                    for ($j=$number; $j > $i; $j--) {
                        echo '*';
                    }
                    echo '<br>';
                }
                //inverse
                for ($i=0; $i < $number ; $i++) {
                    if ($i===0) {
                        for ($j=$number; $j > $i ; $j--) {
                            echo '*';
                        }
                        echo '<br>';
                    }
                    else {
                        for ($k=0; $k < $i; $k++) {
                            echo '&nbsp';
                        }
                        for ($j=$number; $j > $i ; $j--) {
                            echo '*';
                        }
                        echo '<br>';
                    }
                }
                //inverse reverse
                for ($i=0; $i < $number ; $i++) {
                    for ($j=$number-1; $j > $i; $j--) {
                        echo '&nbsp';
                    }
                    for ($k=0; $k < $i+1; $k++) {
                        echo '*';
                    }
                    echo '<br>';
                }
            ?>
        </section>
    </div>

    <!-- ADDITION OF INTEGERS -->
    <div>
        <p>2. Accumulation of integers</p>
        <p>1 + 2 + 3 + 4 + ..... n</p>
        <form action="index.php" method="get">
            <input type="number" name="n" id="" placeholder="state number of n">
            <input type="submit" value="Generate">
            <a href="http://localhost:8888/backend-day-7/challenge">reset</a>
        </form>
        <section>
            <?php
                $lastInteger = $_GET[n];
                $numbers = [];
                $sum = null;
                for ($i=1; $i <= $lastInteger; $i++) {
                    array_push($numbers, $i);
                    // print_r($numbers);
                    $sum += $numbers[$i-1];
                }
                echo join(" + ", $numbers);
                echo " = ";
                echo $sum;
            ?>
        </section>
    </div>

    <!-- SUMMATION OF ODDS -->
    <div>
        <p>3. Add all the odd numbers between two numbers</p>
        <form action="index.php" method="get">
            <input type="number" name="num1" id="" placeholder="Number 1" value="30">
            <input type="number" name="num2" id="" placeholder="Number 2" value="50">
            <input type="submit" value="Add all odd numbers">
            <a href="http://localhost:8888/backend-day-7/challenge">reset</a>
        </form>
        <section>
            <?php
                $num1 = $_GET[num1];
                $num2 = $_GET[num2];
                $oddNum = [];
                $sumOdd = null;
                for ($i=$num1; $i <= $num2 ; $i++) {
                    if ($i % 2 != 0) {
                        array_push($oddNum, $i);
                        // print_r($oddNum);
                    }
                }
                for ($j=0; $j < count($oddNum) ; $j++) { 
                    $sumOdd += $oddNum[$j];
                }
                echo join(" + ", $oddNum);
                echo ' = ';
                echo $sumOdd;
                echo '<br>';
            ?>
        </section>
    </div>

    <!-- REPLACE THE SPACES -->
    <div>
        <p>4. Replace the spaces with % and count them</p>
        <form action="index.php" method="get">
            <input type="text" name="countString" id="" value="Hello there my name is Zahin">
            <input type="submit" value="Replace">
            <a href="http://localhost:8888/backend-day-7/challenge">reset</a>
        </form>
        <section>
            <?php
                $countString = $_GET[countString];
                echo str_replace(' ', '<strong>%</strong>', $countString);
                echo '<br>';
                echo '<br>';
                $numPercentage = substr_count($countString, ' ');
                echo "There is <strong>$numPercentage</strong> percentage symbol in this string.";
            ?>
        </section>
    </div>

</body>
</html>