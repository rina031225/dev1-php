<?php
    $nameAddress = [
        "Mark" => "New York",
        "Liam" => "Paris",
        "Olivia" => "Sydney",
        "Noah" => "Singapore",
        "Ava" => "Rio de Janeiro",
        "Ethan" => "Cape Town",
        "Mason" => "Dubai",
        "Isavella" => "Vancouver",
        "William" => "Amsterdam",
        "Mia" => "Bangkok",
        "James" => "Barcelona",
        "Charlotte" => "Toronto",
        "Benjamin" => "Istanbul"
    ]


?>
    

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer">
    <title>The Green Pages</title>

</head>
<body>
    <div class="container">
        <div class="card text-dark text-center bg-light mx-auto mt-3 w-50">
            <div class="card-header bg-secondary text-white">
                <h4 class="my-1">Loookup address</h4>
            </div>
            <div class="card-body">
                <form action="" method="POST">
                <select name="name" id="name" class="form-select">
                    <option value="" hidden>Select Name</option>
                    <?php
                        foreach($nameAddress as $name => $city){  //The $city part can also be "$_". The underscore in $_ indicates that it should be ignored.  
                            echo '<option value="'.$name.'">'.$name.'</option>';
                        }
                    ?>
                </select>
                    <button type="submit" name="btn_submit" class="btn btn-success mt-2 w-100">Submit</button>
                </form>
            </div>
            <div class="card-footer">
                <?php
                    if(isset($_POST['btn_submit'])){
                        $selectname = $_POST['name'];

                        foreach($nameAddress as $name => $city){
                            if($name === $selectname){
                                echo '<h3>'.$name." lives in ".$city.'</h3>';
                            }
                        }
    
                    }
                ?>
            </div>
        </div>
    </div>

    <?php
    
    
    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>

