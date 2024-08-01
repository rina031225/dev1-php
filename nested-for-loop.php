<?php
    /*
        *****
        *****
        *****
        *****
        *****
        *****

        row = 6
        colums = 5

        for(initial counter; condition; update statement){
            for(initial counter; dondition; update statement){
            
            }
        }
    */

    //Using nested for loop

    for($row=1; $row <= 6; $row++){
        for($col=1; $col <= 5; $col++){
            echo "*";
        }
        echo "<br>";
    }

    /*
    
        $row    $row <= 6           $col    $col <= 5          display
        1       1<=6        true    1       1 <= 5      true    *
                                    2       2 <= 5      true    **
                                    3       3 <= 5      true    ***
                                    4       4 <= 5      true    ****
                                    5       5 <= 5      true    *****   -final display of the first row
                                    6       6 <= 5      false             
        2       2<=6        true    1       1 <= 5      true    *
                                    2       2 <= 5      true    **
                                    3       3 <= 5      true    ***
                                    4       4 <= 5      true    ****
                                    5       5 <= 5      true    *****   -final display of the 2nd row
                                    6       6 <= 5      false  
        3       2<=6        true    1       1 <= 5      true    *
                                    2       2 <= 5      true    **
                                    3       3 <= 5      true    ***
                                    4       4 <= 5      true    ****
                                    5       5 <= 5      true    *****   -final display of the 3rd row
                                    6       6 <= 5      false  
        4       2<=6        true    1       1 <= 5      true    *
                                    2       2 <= 5      true    **
                                    3       3 <= 5      true    ***
                                    4       4 <= 5      true    ****
                                    5       5 <= 5      true    *****   -final display of the 4th row
                                    6       6 <= 5      false  
        5       2<=6        true    1       1 <= 5      true    *
                                    2       2 <= 5      true    **
                                    3       3 <= 5      true    ***
                                    4       4 <= 5      true    ****
                                    5       5 <= 5      true    *****   -final display of the 5th row
                                    6       6 <= 5      false  
        6       2<=6        true    1       1 <= 5      true    *
                                    2       2 <= 5      true    **
                                    3       3 <= 5      true    ***
                                    4       4 <= 5      true    ****
                                    5       5 <= 5      true    *****   -final display of the 6th row
                                    6       6 <= 5      false  
        7       7<=6        false

     */

?>