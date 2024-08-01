<?php
/*
    instruction: display all numbers less than 5
    sample output: 1 2 3 4
*/

    //initial counter
    $x = 1;

    //condition
    while($x < 5) {
        echo "$x";

        //update statement
        $x++;
    }

    /*
        $x      $x < 5              display in the browser
        1       1 < 5    true       1
        2       2 < 5    true       1 2
        3       3 < 5    true       1 2 3
        4       4 < 5    true       1 2 3 4
        5       5 < 5    false
    */


    //initial counter
    $num = 1;

    do {
        echo "$num ";

        $num++;
    } while ($num < 5);

    /*
        $num        $num < 5        display
        1                       true      1
        2                       true      1 2
        3                       true      1 2 3
        4                       true      1 2 3 4
        5            5 < 5    false     
    */


    //do while
    /*
    1          1    true
    2       2 < 1   false
    */


    //while 
    /*
        1          1 < 1   false
    */

    //for loop
    /*
        for(init_counter; condition; uppdate statement){
        }

        instruction: display all numbers less than 5
        sample output: 1 2 3 4 
    */

    for($x = 1; $x < 5; $x++){
        echo "$x ";
    }

    /*
        *   $x      $x < 5          display
        *   1       1 < 5   true        1
        *   2       2 < 5   true        1 2 
        *   3       3 < 5   true        1 2 3 
        *   4       4 < 5   true        1 2 3 4
        *   5       5 < 5   false
    */

?>