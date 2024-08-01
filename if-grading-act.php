<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer">
    <title>Grading Acrivity</title>

</head>
<body>
    <div class="container mt-5 w-50">
    <form action="" method="POST">
            <label for="num1" class="form-label">Grade: </label>
            <input type="number" name="num1" id="num1" class="form-control">
            <button type="submit" name="check" value="Check" class="btn btn-warning mt-3">Check</button>
        </form>
        <?php
            if(isset($_POST['check'])){
                //input
                $number1 = $_POST['num1'];

                grading($number1);
            }

            function grading($num1){

                if($num1 >= 90 && $num1 <= 100) {
                    echo "<div class='mt-5 text-center bg-secondary text-white'>Remark: Excellent</div>";
                } elseif($num1 >= 85 && $num1 <= 89) {
                    echo "<div class='mt-5 text-center bg-secondary text-white'>Remark: Good</div>";
                } elseif($num1 >= 80 && $num1 <= 84) {
                    echo "<div class='mt-5 text-center bg-secondary text-white'>Remark: Fair</div>";
                } elseif($num1 >= 75 && $num1 <= 79) {
                    echo "<div class='mt-5 text-center bg-secondary text-white'>Remark: Poor</div>";
                } elseif($num1 >= 60 && $num1 <= 74) {
                    echo "<div class='mt-5 text-center bg-secondary text-white'>Remark: Fail</div>";
                } else {
                    echo "<div class='mt-5 text-center bg-secondary text-white'>Remark: Invalid</div>";
                }
            }
        ?>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>