<?php
    //Associate array

    $market = ["fruit1" => "orange", "fruit2" => "grapes", "fruit3" => "banana", "fruit4" => "mango"];

    //2d associative array
    $maket = [
        "round" => ["fruit1" => "orange", "fruit2" => "grapes"],
        "yellow" => ["fruit3" => "banana", "fruit4" => "mango"]
    ];

    //2d indexed array
    $age = [
        //0
        [1,2,3,4],
        //1
        [5,6,7,8]
    ];

    //display the array
    print_r($market);
    echo "<br>";
    print_r($maket['round']);
    echo "<br>".$market['round']['fruit1']; //orange

    echo "<br>";
    // access all elements inside the 2d assosiative array
    /*
        foreach(<array_name> as <key> => <value>)

    $maket = [
        "round" => ["fruit1" => "orange", "fruit2" => "grapes"],
        "yellow" => ["fruit3" => "banana", "fruit4" => "mango"]
    ];


    */
    /*
    foreach($market as $key => $innerArray){
        foreach($innerArray as $key2 => $fruit_val){
            echo $key2. "=>". $fruit_val;
        }
    }
    */

    /*
    $maket                                                             $key                        $innerArray                  $key2           $value    
    [
        "round" => ["fruit1" => "orange", "fruit2" => "grapes"],     "round"     ["fruit1" => "orange", "fruit2" => "grapes"],  fruit1          orange 
                                                                                                                                fruit2          grapes

        
        "yellow" => ["fruit3" => "banana", "fruit4" => "mango"]     "yellow"    ["fruit3" => "banana", "fruit4" => "mango"],    fruit3          banana  
                                                                                                                                fruit4          mango

    ];


    */

?>