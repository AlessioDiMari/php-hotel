<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Hotels</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>

    <?php
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
        ]
    ];
    ?>


    <div class="container">
        <h1 class="mb-3">PHP Hotel List</h1>
    
        <table class="table border border-black">
            <thead>
                <tr class="table-success">
                    <td scope="col">Nome</td>
                    <td scope="col">Descrizione</td>
                    <td scope="col">Parcheggio</td>
                    <td scope="col">Voto</td>
                    <td scope="col">Distanza centro</td>
                </tr>
            </thead>
            <tbody>
        
                <?php
                
                foreach ($hotels as $hotel) {
                    echo "
                        <tr>
                            <td>" . $hotel['name'] . "</td>
                            <td>" . $hotel['description'] . "</td>
                            <td>" . ($hotel['parking'] ? 'Disponibile' : 'Non Disponibile') . "</td>
                            <td>" . $hotel['vote'] . "</td>
                            <td>" . $hotel['distance_to_center'] . "</td>
                        </tr>
                    ";
                }
                
                ?>
        
            </tbody>
        </table>
    </div>

    


    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>