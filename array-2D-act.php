<?php
    $japan = [
        "Hokkaido" => ["Hokkaido" => "Sapporo"],
        "Tohoku" => ["Aomori" => "Aomori", "Iwate" => "Morioka", "Miyagi" => "Sendai", "Akita" => "Akita", "Fukushima" => "Fukushima", "Yamagata" => "Yamagata"],
        "Kanto" => ["Ibaraki" => "Mito", "Totigi" => "Utunomiya", "Gunma" => "Maebashi", "Saitama" => "Saitama", "Chiba" => "Chiba", "Tokyo" => "Tokyo", "Kanagawa" => "Yokohama"],
        "Chubu" => ["Niigata" => "Niigata", "Toyama" => "Toyama", "Ishikawa" => "Kanazawa","Fukui" => "Fukui", "Yamanashi" => "Kofu", "Nagano" => "Nagano", "Gifu" => "Gifu", "Sizuoka" => "Fuji", "Aichi"  => "Nagoya"],
        "Kinki" => ["Kyoto" => "Kyoto","Osaka" => "Osaka","Hyogo" => "Hyogo","Nara" => "Nara","Shiga" => "Otsu","Wakayama" => "Wakayama","Mie" => "Tsu",],
        "Chugoku" => ["Tottori" => "Tottori","Shimane" => "Matsue","Okayama" => "Okayama","Hiroshima" => "Hiroshima","Yamaguchi" => "Yamaguchi",],
        "Shikoku" => ["Tokushima" => "Tokushima","Kagawa" => "Kagawa","Ehime" => "Matsuyama","Kochi" => "Kochi",],
        "Kyushu" => ["Fukuoka" => "Fukuoka","Saga" => "Saga","Nagasaki" => "Nagasaki","Kumamoto" => "Kumamoto","Oita" => "Oita","Miyazaki" => "Miyazaki","Kagoshima" => "Kagoshima",],
        "Okinawa" => ["Okinawa" => "Okinawa",]
    ];

    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer">
    <title>Japanese Regions</title>

</head>
<body>
    <div class="container mt-3">

        <?php

        foreach($japan as $region => $prefectures){
            echo '<h3 class="mx-auto w-25 mt-3">'.$region.'</h3>';
            echo '<table class="table-bordered w-25 mx-auto">';
            echo '<tr class="text-center">
                    <th>Prefecture</th>
                    <th>City</th>
                </tr>';
            foreach ($prefectures as $prefecture => $city){
                echo '<tr">
                        <td class="ps-1">'.$prefecture.'</td>
                        <td class="ps-1">'.$city.'</td>
                    </tr>';
            }
            echo '</table>';
        }

        ?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>