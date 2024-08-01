<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer">
    <title>If Else Greater</title>

</head>
<body>
    <div class="container mt-5 w-50">
    <form action="" method="POST">
            <label for="num1" class="form-label">1st Number: </label>
            <input type="number" name="num1" id="num1" class="form-control">
            <label for="num2" class="form-label">2nd Number:</label>
            <input type="number" name="num2" id="num2" class="form-control">
            <button type="submit" name="check" value="Check" class="btn btn-warning mt-3">Check</button>
        </form>
        <?php
            if(isset($_POST['check'])){
                //input
                $number1 = $_POST['num1'];
                $number2 = $_POST['num2'];

                $bigNumber = biggerNumber($number1, $number2);
                $smallNumber = smallNumber($number1, $number2);
                $checkIfEqual = checkIfEqual($number1, $number2);

                echo "<div class='mt-5'>Bigger: $bigNumber</div>";
                echo "<div class='mt-5'>Smaller: $smallNumber</div>";
                echo "<div class='mt-5'>Equal: $checkIfEqual</div>";


                // display($number1, $number2);
            }

            function biggerNumber($num1, $num2) {
                if($num1 > $num2) {
                    return $num1;
                } elseif($num2 > $num1) {
                    return $num2;
                } else{
                    return "$num1 and $num2 are equal.";
                }
            }
            
            function smallNumber($num1, $num2) {
                if($num1 < $num2) {
                    return $num1;
                } elseif($num2 < $num1) {
                    return $num2;
                } else{
                    return "$num1 and $num2 are equal.";
                }
            }

            function checkIfEqual($num1, $num2) {
                if($num1 === $num2) {
                    return "$num1 and $num2 are equal.";
                } else{
                    return "$num1 and $num2 are not equal";
                }
            }

            // function display($num1, $num2){

            //     if($num1 > $num2) {

            //         echo "<div class='mt-5 mb-0 bg-success text-white'>$num1</div>
            //         <div class='bg-success text-white text-end'>$num2</div>";
            //     } else {
            //         echo "<div class='mt-5 bg-success text-white'>
            //                 <p>$num2</p>
            //                 <p class='text-end'>$num1</p>
            //             </div>";
            //     }
            // }
        ?>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>