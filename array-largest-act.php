<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer">
    <title>Largest Number</title>

</head>
<body>
    <?php
        $numbers = [8.5, 7, 10, 24, 2, 25, 1, 8]; //pre-filled array

        //Get the largest number among the array values
        $largest = 0;
        foreach($numbers as $number){
            if($number > $largest){
                $largest = $number;
            }
        }
        echo "Largest number is ".$largest
        /*
            $number     $largest    $number > $largest
            8.5         8.5           8.5 > 0     true
            7                         7 < 8.5     false
            10          10            10 > 8      true
            24          24             24 > 10    true
            2                           2 < 24    true
            25          25              25 > 24    true
            1                           1 < 25      false
            8                           8 < 25      false
         */


    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>