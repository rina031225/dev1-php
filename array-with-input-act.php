<?php
    function getCountries($numOfCountry){
        echo "<div class='card text-center bg-success mx-auto mt-3 w-25'>";
        echo "<div class='card-body'>";
        echo "<form action='' method='POST' class='mt-2 mx-3'>";
        for($i=1; $i <= $numOfCountry; $i++){
            echo "
                <input type='text' name='countries[]' class='form-control mx-auto my-1' />
            ";
        }
        echo "<button type='submit' name='btn_save' class='btn btn-danger mt-2'>Save</button>";
        echo "</form>";
        echo "</div>";
        echo "</div>";
    }

    function displayCountries($countries){
        echo "<div class='card text-center bg-success mx-auto mt-3 w-25'>";
        echo "<div class='card-body text-white'>";
        echo "You have been to: <br>";
        foreach($countries as $country){
            echo $country."<br>";
        }
        echo "</div>";
        echo "</div>";
    }

    
    ?>
    

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer">
    <title>Countries Visited</title>

</head>
<body>
    <div class="container">
        <div class="card text-dark text-center bg-light mx-auto mt-3 w-25">
            <div class="card-header bg-secondary text-white">
                <h6 class="my-1">Countries Visited</h6>
            </div>
            <div class="card-body ">
                <form action="" method="POST">
                    <label for="numcountry" class="form-label">Number of Countries Bisited</label>
                    <input type="number" name="numcountry" id="numcountry" class="form-control">
                    <button type="submit" name="btn_submit" class="btn btn-danger mt-2 w-100">Submit</button>
                </form>
            </div>
        </div>

        <?php
            if(isset($_POST['btn_submit'])){
                $numOfCountry = $_POST['numcountry'];

                if($numOfCountry > 0){
                    getCountries($numOfCountry);
                }
            }

            if(isset($_POST['btn_save'])){
                $countries = $_POST['countries'];  //array of countries

                displayCountries($countries);

            }
    
        ?>
    

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>