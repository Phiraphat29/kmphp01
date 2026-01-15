<?php
    // single line commment

    /* multi line
    comment */

    //* Variable
    $data_str = "ABCDE"; // String
    $data_char = 'a'; // char
    $data_num = 1234; // number
    $data_bool = true; // boolean
    $data_array = [1, 2, 3, 4, 5]; // array

    //* Output Statement on Browser
    echo "Phiraphat <br>";
    echo 123456 . "<br>";
    echo $data_str . "<br>";
    echo 'Y' . "<br>";
    echo $data_array[1] + $data_array[2] . "<br>";

    $fname = "John";
    $lname = "Doe";
?>

<hr>

<?php
    echo "Hi $fname $lname <br>";
    echo "Hi " . $fname . " " . $lname . "<br>"; // Recommended
?>