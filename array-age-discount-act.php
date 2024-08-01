<?php
    function getPeople($numOfPerson){

        $html = <<<HTML
        <div class='text-center mx-auto mt-3 w-50'>
            <h2>Ages of the people attending</h2>
            <form action='' method='POST' class='mt-2 mx-3 text-white'>
        HTML;

        for($i=1; $i <= $numOfPerson; $i++){
            $html .= "<input type='text' name='people[]' class='form-control mx-auto my-1' placeholder='Enter age here' />";
        }
        $html .= <<<HTML
                <button type='submit' name='btn_save' class='btn btn-primary mt-2'>SAVE</button>
            </form>
        </div>
        HTML;

        echo $html;
    }

    /*function getPeople($numOfPerson){
        echo "<div class='text-center mx-auto mt-3 w-50'>";
        echo "<h2>Ages of the people attending</h2>";
        echo "<form action='' method='POST' class='mt-2 mx-3 text-white'>";
        for($i=1; $i <= $numOfPerson; $i++){
            echo "<input type='text' name='people[]' class='form-control mx-auto my-1' placeholder='Enter age here' />";
        }
        echo "<button type='submit' name='btn_save' class='btn btn-primary mt-2'>SAVE</button>";
        echo "</form>";
        echo "</div>";
        echo "</div>";
    }*/


    function displayPeople($people){
        echo "<div class='text-center mx-auto mt-3 w-50'>";
        echo "<div class='card-body text-white'>";
        echo "You have Quize score: <br>";
        foreach($people as $person){
            echo $person."<br>";
        }
        echo "</div>";
        echo "</div>";
    }

    function sumPeople($people){
        $totalPrice = 0;
        $count = count($people);

        $html = <<<HTML
        <div class='text-center mx-auto mt-3 w-50'>
            <table class='mx-auto table-bordered w-100'>
                <thead class='text-white bg-dark text-center'>
                    <tr>
                        <th>AGE</th>
                        <th>PRICE</th>
                    </tr>
                </thead>
                <tbody class='text-center'>
        HTML;

        foreach($people as $age){
            $price = Price($age);
            $totalPrice += $price;
            $html .= "<tr><td>$age</td><td>$price</td></tr>";
        }

        $html .= <<<HTML
                </tbody>
                <tfoot class='text-white text-center'>
                    <tr class=' bg-danger'>
                        <td>Total Price</td>
                        <td>$totalPrice</td>
                    </tr>
                    <tr class='bg-primary'>
                        <td>Number of People</td>
                        <td>$count</td>
                    </tr>
                </tfoot>
            </table>
        </div>
        HTML;

        echo $html;
    }

    function Price($age){
            $price = 325;
            if($age >= 0 && $age <= 5){
                return 0; 
            } elseif($age >= 6 && $age <= 10){
                return $price *= 0.9;
            } elseif($age >= 60){
                return $price *= 0.95;
            }
            return $price;
    }

    /*function sumPeople($people){
        $totalPrice = 0;
        $count = count($people);

        echo "<div class='text-center mx-auto mt-3 w-50'>";
        echo "<table border=1 class='mx-auto table-bordered w-100'>";
        echo "<thead class='text-white bg-dark text-center'>
                <tr>
                    <th>AGE</th>
                    <th>PRICE</th>
                </tr>
            </thead>";
        echo "<tbody class='text-center'>";

        foreach($people as $age){
            $price = 325;
            if($age >= 0 && $age <= 5){
                $price = 0; 
            } elseif($age >= 6 && $age <= 10){
                $price *= 0.9;
            } elseif($age >= 60){
                $price *= 0.95;
            }
            
        echo "<tr>
                <td>$age</td>
                <td>$price</td>
            </tr>";
        
        $totalPrice += $price;

        }
        echo "</tbody>";
        echo "<tfoot class='text-white text-center'>
                <tr class=' bg-danger'>
                    <td>Total Price</td>
                    <td>$totalPrice</td>
                </tr>
                <tr class='bg-primary'>
                    <td>Number of People</td>
                    <td>$count</td>
                </tr>
            </tfoot>";
        echo "</table>";
        echo "</div>";

    }*/

    
    ?>
    

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer">
    <title>Kredo Cafe</title>

</head>
<body>
    <div class="container">
        <div class="text-center mx-auto mt-3 w-50">
            <h2>How many people are going to eat?</h2>
            <div>
                <form action="" method="POST">
                    <input type="number" name="numperson" id="numperson" class="form-control">
                    <button type="submit" name="btn_submit" class="btn btn-success mt-2 w-100">SUBMIT</button>
                </form>
            </div>
        </div>

        <?php
            if(isset($_POST['btn_submit'])){
                $numOfPerson = $_POST['numperson'];

                if($numOfPerson > 0){
                    getPeople($numOfPerson);
                }
            }

            if(isset($_POST['btn_save'])){
                $people = $_POST['people'];  //array of countries

                displayPeople($people);
                sumPeople($people);

            }
    
        ?>
    

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>