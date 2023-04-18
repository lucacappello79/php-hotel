<?php
    $colors = ['table-secondary', 'table-success', 'table-danger', 'table-warning', 'table-info'];


    $hotels = [

        [
            'name' => 'Hotel Belvedere',
            'description' => 'Hotel Belvedere Descrizione',
            'parking' => true,
            'vote' => 4,
            'distance_to_center' => 10.4
        ],
        [
            'name' => 'Hotel Futuro',
            'description' => 'Hotel Futuro Descrizione',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 2
        ],
        [
            'name' => 'Hotel Rivamare',
            'description' => 'Hotel Rivamare Descrizione',
            'parking' => false,
            'vote' => 1,
            'distance_to_center' => 1
        ],
        [
            'name' => 'Hotel Bellavista',
            'description' => 'Hotel Bellavista Descrizione',
            'parking' => false,
            'vote' => 5,
            'distance_to_center' => 5.5
        ],
        [
            'name' => 'Hotel Milano',
            'description' => 'Hotel Milano Descrizione',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 50
        ],

    ];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

     <!-- --- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- ---FONTAWESOME -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <!-- --- CSS -->
    <link rel="stylesheet" href="css/style.css">
    <title>PHP HOTELS</title>
</head>
<body>

    <h1 class="my-4">Hotels</h1>

        <?php 
            foreach ($hotels as $item) {
                echo '<strong>Hotel Name</strong>' . ": " . $item['name'] . "<br>";
                echo '<strong>Features</strong>' . ": " . $item['description'] . "<br>";
                echo '<strong>Parking</strong>' . ": " . ($item['parking'] ? 'Y' : 'N') . "<br>";
                echo '<strong>Rating</strong>' . ": " . $item['vote'] . "<br>";
                echo '<strong>Distance</strong>' . ": " . $item['distance_to_center'] . "<br><br>";
            }
        ?>
    <hr>
    <div class="container my-5">
        <table class="table">
            <thead>
                <tr class="table-primary">
                    <th scope="col">Hotel Name</th>
                    <th scope="col">Features</th>
                    <th scope="col">Parking</th>
                    <th scope="col">Rating</th>
                    <th scope="col">Distance (km)</th>
                </tr>
            </thead>
            <tbody class="table-secondary">
                <?php 
                    foreach ($hotels as $item) {
                        echo '<tr>';
                            echo '<td>' . $item['name'] . '</td>';
                            echo '<td>' . $item['description'] . '</td>';
                            echo '<td>' . ($item['parking'] ? 'Y' : 'N') . '</td>';
                            echo '<td>' . $item['vote'] . '</td>';
                            echo '<td>' . $item['distance_to_center'] . '</td>';
                        echo '</tr>';
                    }
                ?>
            </tbody>
        </table>
    </div>

  

    <!-- ---BOOTSTRAP -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>