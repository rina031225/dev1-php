<?php   
        //          0       1           2       3       4
    $fruits = ["Mango", "Banana", "Apple", "Orange", "Grapes"];

    print_r($fruits);
    echo "<br>";
    echo "Size of the fruits array is".count($fruits);

    echo "<br>".$fruits[3]; //Orange
    echo "<br>". $fruits[0];

    /*
        foreach(<array name> as variable_value){
        
        }

        Mango
        Banana
        Apple
        Orange
        Grapes
    
    */
    foreach($fruits as $fruit){
        echo $fruit. "<br>";
    }

    /*
                            $fruits                                     $fruit          iteration
        ["Mango", "Banana", "Apple", "Orange", "Grapes"];               Mango               1
                                                                        Banana              2
                                                                        Apple               3
                                                                        Orange              4
                                                                        Grapes              5
    
    
    */

?>