<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer">
    <title>Is Leap Year</title>

</head>
<body>
    <div class="container mt-5 w-50">
    <form action="" method="POST">
            <label for="num1" class="form-label">Year: </label>
            <input type="number" name="year" id="year" class="form-control">
            <button type="submit" name="check" class="btn btn-warning mt-3">Check</button>
        </form>
        <?php
            if(isset($_POST['check'])){
                //input
                $number = $_POST['year'];

                leapyear($number);
            }

            function leapyear($year){

                if($year % 4 == 0) {
                    if($year % 100 == 0) {
                        if($year % 400 == 0) {
                            echo "<div class='mt-5 text-center bg-info text-white'>It is a leap year</div>";
                        } else {
                            echo "<div class='mt-5 text-center bg-warning text-white'>It is not a leap year.</div>";
                        }
                    } else {
                        echo "<div class='mt-5 text-center bg-success text-white'>It is a leap year</div>";
                    }
                } else {
                    echo "<div class='mt-5 text-center bg-primary text-white'>It is not a leap year.</div>";
                }
            }

            //     if($year % 4 == 0) {
            //         return showResult("It is a leap year", "info");
            //     }
            //     if ($year % 100 == 0) {
            //         return showResult("It is not a leap year.", "warning");
            //     }
            //     if ($year % 400 == 0) {
            //         return showResult("It is a leap year", "success");
            //     }
            //     return showResult("It is not a leap year.", "primary");
            // }
        
            // function showResult($message, $type) {
            //     echo "<div class='result mt-5 text-center text-white bg-$type'>$message</div>"; 
            // }

            /* if($year % 4 == 0 && $year % 100 == 0 && $year % 400 == 0) {
                echo "<div class='mt-5 text-center bg-info text-white'>It is a leap year</div>";
            } else {
                echo "<div class='mt-5 text-center bg-warning text-white'>It is not a leap year.</div>";
                }
                
            */
            
        ?>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>