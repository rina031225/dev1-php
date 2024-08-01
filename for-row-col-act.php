<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer">
    <title>Col Row Acrivity</title>

</head>
<body>
    <div class="container mt-5 w-50">
    <form action="" method="POST">
            <label for="rows" class="form-label">Rows: </label>
            <input type="number" name="rows" id="rows" class="form-control">
            <label for="cols" class="form-label">Columns: </label>
            <input type="number" name="cols" id="cols" class="form-control">
            <button type="submit" name="submit" class="btn btn-warning mt-3">Result</button>
        </form>
        <?php
            if(isset($_POST['submit'])){
                //input
                $number1 = $_POST['rows'];
                $number2 = $_POST['cols'];

                rowCol($number1, $number2);

            }

            function rowCol($rows, $cols){
                for($row=1; $row <= $rows; $row++){
                    for($col=1; $col <= $cols; $col++){
                        echo "* ";
                    }
                    echo "<br>";
                }    
            }



        ?>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>