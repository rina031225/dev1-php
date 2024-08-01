<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer">
    <title>Factorial Activity</title>

</head>
<body>
    <div class="container mt-5 w-50">
        <form action="" method="POST">
            <label for="num" class="form-label">Enter a number: </label>
            <input type="number" name="num" id="num" class="form-control">
            <button type="submit" name="submit" class="btn btn-success mt-3">Submit</button>
        </form>

        <?php
            if(isset($_POST['submit'])){
                $num = $_POST['num'];
                $factorial = factorial($num);

                echo "<div class='bg-primary text-center text-white mt-3'>Result : $factorial</div>";
            }

            function factorial($num){
                if($num > 0) {
                    $factorial = 1;
                    for($i = $num; $i >= 1; $i--){
                        $factorial *= $i;
                    }
                    
                    return $factorial;
                }
            }

                /**
                 * $i      $num      $i >= 1      $factorial
                 *  4       4          true        = 4
                 *  3                  true        = 12
                 *  2                  true        = 24
                 *  1                  true        = 24
                 *  0                  false
                 */
    
            



        ?>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>