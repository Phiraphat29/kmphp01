<?php
    //* Function
    // no parameter, no return
    function hello() {
        echo "<h1 style=\"color: red;\">Hello World</h1> <br>";
    }

    hello();
    hello();

    // with parameters, no return
    function hi($fname, $lname) {
        echo "Hi " . $fname . " " . $lname . "<br>";
    }

    hi("John", "Doe");
    hi("Jane", "Doe");

    // no parameters, with return
    function bye() {
        echo "WOWOWOWOWOWOWOWOWOWOW";
        return "Bye bye ....";
    }

    echo bye();
    $data = bye();
    echo "<br>" . $data . "DTI-SAU";

    // with parameters, with return
    function sum($num1, $num2) {
        $sum = $num1 + $num2;
        return $sum;
    }

    echo "<br><br>Sum of 10 and 20 is " . sum(10, 20);

    //* Arrow Function
    $woo = fn() => "<br>woo woo woo";
    echo $woo();

    $hi = fn($nickname) => "<br>Hi " . $nickname;
    echo $hi("John");
