<?php
    //check if the form has been submitted
    if(isset($_POST['submit'])){
        //input
        $number1 = $_POST['num1'];
        $number2 = $_POST['num2'];

        //call the function add
        add($number1, $number2);

        // $sum = $number1 + $number2;
        
        // echo "Sun: $sum";
    }

    function add($num1, $num2){
        //$num1 = 2;
        //$num2 = 3;

        //process
        $sum = $num1 + $num2;
        
        //output
        echo "<div class='mt-5 bg-success text-white p-3'>sum: $sum</div>";

    }

?>