<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer">
    <title>Form Day</title>

</head>
<body>
    <div class="container mt-5">
        <!-- <div class="border border-2 radius-3 w-75 text-center mx-auto">
            <form action="" method="POST">
                <button type="submit" name="monday" class="btn btn-warning my-3">Monday</button>
                <button type="submit" name="tuesday" class="btn btn-success my-3">Tuesday</button>
                <button type="submit" name="wednesday" class="btn btn-dark my-3">Wednesday</button>
                <button type="submit" name="thursday" class="btn btn-danger my-3">Thursday</button>
                <button type="submit" name="friday" class="btn btn-light my-3">Friday</button>
                <button type="submit" name="saturday" class="btn btn-info my-3">Saturday</button>
                <button type="submit" name="sunday" class="btn btn-primary my-3">Sunday</button>
            </form>

        </div>

        <?php
            $monday = "Monday";
            $tuesday = "Tuesday";
            $wednesday = "Wednesday";
            $thursday = "Thursday";
            $friday = "Friday";
            $saturday = "Saturday";
            $sunday = "Sunday";


            if(isset($_POST['monday'])){
                echo "<div class='text-center mt-5'>$monday</div>";
            }
            if(isset($_POST['tuesday'])){
                echo "<div class='text-center mt-5'>$tuesday</div>";
            }
            if(isset($_POST['wednesday'])){
                echo "<div class='text-center mt-5'>$wednesday</div>";
            }
            if(isset($_POST['thursday'])){
                echo "<div class='text-center mt-5'>$thursday</div>";
            }
            if(isset($_POST['friday'])){
                echo "<div class='text-center mt-5'>$friday</div>";
            }
            if(isset($_POST['saturday'])){
                echo "<div class='text-center mt-5'>$saturday</div>";
            }
            if(isset($_POST['sunday'])){
                echo "<div class='text-center mt-5'>$sunday</div>";
            }
            
        ?> -->

            <div class="border border-2 radius-3 w-75 text-center mx-auto">
                <form action="" method="POST">
                    <button type="submit" name="submit" value="monday" class="btn btn-warning my-3">Monday</button>
                    <button type="submit" name="submit" value="tuesday" class="btn btn-success my-3">Tuesday</button>
                    <button type="submit" name="submit" value="wednesday" class="btn btn-dark my-3">Wednesday</button>
                    <button type="submit" name="submit" value="thursday" class="btn btn-danger my-3">Thursday</button>
                    <button type="submit" name="submit" value="friday" class="btn btn-light my-3">Friday</button>
                    <button type="submit" name="submit" value="saturday" class="btn btn-info my-3">Saturday</button>
                    <button type="submit" name="submit" value="sunday" class="btn btn-primary my-3">Sunday</button>
                </form>

            </div>

            <?php
                
                

                if(isset($_POST['submit'])){
                    $day = $_POST('submit');
                    echo "<div class='text-center mt-5'>$day</div>";
                }
            ?>

    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>