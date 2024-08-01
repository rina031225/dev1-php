<?php
    echo "Hello World Good evening"; //single argument
    echo "<h1>Heading 1</h1>"; //single argument
    echo "Mary ", "John";  //two argument 
        //Mary John

    echo "<br>";

    print "Hello There!";
    echo "<br>";
    print "Hi there. How are you!";  //print is only single argument. i can't enter more two argument.
    echo "<br>";
    //multiple arguments
    echo "Tim","Jack","Aaron";
    echo "<br>";
    //single argument use"."=single   use","= some argument
    echo "My name is "."John "."Smith.";

    /* my name is john smith. i am 21 years old */
    $first_name = "John";
    $last_name = "Smith";
    $age = 21;

    //1st solution
    echo "My name is $first_name $last_name. I am $age years old."; //My name is John
    //2nd solution - use concatenation
    echo "<br>";
    echo "My name is ", $first_name, " ",$last_name, ". I am ", $age, " years old.";
    // My name is John Smith. I am 21 years old.

    echo "<br>";
    var_dump ($age);
    echo "<br>";

    $a = 3;
    $b = 5;

    //Additio aperator
    $a += $b;  // the same as $a = $a + $b
    $a = 8;  //3+5

    //Subtraction operator
    $a -= $b;  // the same as $a = $a - $b
    $a = -2;

    //multiplication operator
    $a *= $b;  // the same as $a = $a * $b
    $a = 15;

    //division operator
    $a = 10;
    $b = 5;

    $a /= $b;  //the same as $a = $a / $b
    $a = 2;

    $a %= $b;  //the same $a = $a % $b
    $a = 0; // 10/5=2 r.0

    $a = 10;
    $b = 3;
    $a %= $b;
    $a = 3; // 10/3=3  remainer is 3

    //increment
    //useing preincrement
    $num1 =7;
    echo ++$num1;  // 7 + 1 = 8

    echo "<br>";

    //post-increment
    echo $num1++;  //8

    echo "<br>";
    $num2 = 5;
    //decrement
    //pre-decrement
    echo --$num2;  //4

    echo "<br>";
    //post-decrement
    echo $num2--;  //4

    echo "<br>";
    $num1 = 7;
    $num2 = 3;
    $num3 = 7;
    $num4 = "4";

    //comparison operator
    $num1 ==$num2;  //7 ==3 false
    $num1 == $num3;  //7 == 7 ture
    //equal to (==)
    if($num1 == $num2);  // 7 ==3 false
    if($num1 == $num3);  // 7 == 7 true

    //identical (===)
    if($num2 === $num4);  // 3 ==="3"  false
                          // intager === string
     if($num1 === $num3);  //7 === 7  true

    // not equal operator (!= or <>)
    if($num1 != $num2);  //7 != 3  true
    if($num1 != $num3);  // 7 != 7 false

    //greater than operator
    if($num1 > $num2) // 7 > 3 true  
    if($num2 > $num1)  // 3 > 7 false
    if($num1 > $num3)  // 7 > 7 fase

    //less than operator (<)
    $num1 = 3;
    $num2 = 5;
    $num3 = 3;

    if($num1 < $num2)  //3<5 true
    if($num2 < $num1)  // 5<3 false
    if($num1 < $num3)  //3>3 false

    //greater than or equal to (>=)
    if($num1 >= $num2)  //3 >= 5 false
    if($num1 >= $num3)  // 3 >= 3 true

    //less than or equal to (<=)
    if($num1 <= $num2)  //3 <= 5 true
    if($num1 <= $num3)  // 3 <= 3 true
    if($num2 <= $num1)  // 5 <= 3 false

    //logical operators
    // && (and) -- all conditions/statements should be true
    $num1 = 2;
    $num2 = 6;
    $num3 = 1;
    $num4 = 10;
    //$num1 > $num3 -- first statement
    //$num2 < $num4 -- 2nd statement
    //true && true
    if($num1 > $num3 && $num2 < $num4) //true 

    //2 > 1 && 6 > 10
    //true && false
    if($num1 > $num3 && $num2 > $num4) // false

    //1 > 2 && 6 > 10
    if($num3 > $num1 && $num2 > $num4) // false

    //or operator (||)
    //2 > 1 || 6 > 10
    //true || false
    if($num1 > $num3 || $num2 > $num4) // false

    //not logical operator
    $input = true;
    $input2 = false;
    (!$input) // !true = false
    (!$input2) // !false = true
?>


