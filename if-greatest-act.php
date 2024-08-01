<?php
    //initialize there different integers
    $num1 = 7;
    $num2 = 11;
    $num3 = 8;

    //get the greatest among the  three

    //  7    >   11  &&  7  >  8
    //   false && false
    if($num1 > $num2 && $num1 > $num3) {
        echo "$num1 is the greatest number";
    }
    //  11   >   7        11   >  8
    //   true      &&  true
    if($num2 > $num1 && $num2 > $num3) {
        echo "$num2 is the greatest number";
    }
    //   8  >   7        8  >  11
    // true   &&   false
    if($num3 > $num1 && $num3 > $num2) {
        echo "$num3 is the greatest number";
    }

    // 11 is the greatest number

    $num1 = 10;
    $num2 = 20;
    //if num1 is greater than num2 perform division else perform multiplication

    if($num1 > $num2) {
        $quotient = $num1 / $num2;
        echo "Quotient: $quotient";
    } else {
        $product = $num1 * $num2;
        echo "Product: $product";
    }
?>