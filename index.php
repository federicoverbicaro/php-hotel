
<!-- Descrizione

✅Partiamo da questo array di hotel. https://www.codepile.net/pile/OEWY7Q1G

✅Stampare tutti i nostri hotel con tutti i dati disponibili.

Iniziate in modo graduale.

✅Prima stampate in pagina i dati, senza preoccuparvi dello stile.

✅Dopo aggiungete Bootstrap e mostrate le informazioni con una tabella. -->

<!-- 
Bonus:

✅1 - Aggiungere un form ad inizio pagina che tramite una richiesta GET permetta di filtrare gli hotel che hanno un parcheggio.

2 - Aggiungere un secondo campo al form che permetta di filtrare gli hotel per voto (es. inserisco 3 ed ottengo tutti gli hotel che hanno un voto di tre stelle o superiore)


NOTA: deve essere possibile utilizzare entrambi i filtri contemporaneamente (es. ottenere una lista con hotel che dispongono di parcheggio e che hanno un voto di tre stelle o superiore)
Se non viene specificato nessun filtro, visualizzare come in precedenza tutti gli hotel. -->

<?php


$hotels = [

    [
        'img' => './img/hotel-belvedere.jpg',
        'name' => 'Hotel Belvedere',
        'description' => 'Hotel Belvedere Descrizione',
        'parking' => true,
        'vote' => 4,
        'distance_to_center' => 10.4
    ],
    [
        'img' => './img/hotel-future.jpg',
        'name' => 'Hotel Futuro',
        'description' => 'Hotel Futuro Descrizione',
        'parking' => true,
        'vote' => 2,
        'distance_to_center' => 2
    ],
    [
        'img' => './img/hotel-rivamare.jpg',
        'name' => 'Hotel Rivamare',
        'description' => 'Hotel Rivamare Descrizione',
        'parking' => false,
        'vote' => 1,
        'distance_to_center' => 1
    ],
    [
        'img' => './img/hotel-bellavista.jpg',
        'name' => 'Hotel Bellavista',
        'description' => 'Hotel Bellavista Descrizione',
        'parking' => false,
        'vote' => 5,
        'distance_to_center' => 5.5
    ],
    [
        'img' => './img/hotel-milano.jpg',
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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css' integrity='sha512-jnSuA4Ss2PkkikSOLtYs8BlYIeeIK1h99ty4YfvRPAlzr377vr3CXDb7sb7eEEBYjDtcYj+AjBH3FLv5uSJuXg==' crossorigin='anonymous' />
    <link rel="stylesheet" href="style.css">
    <title>PHP-HOTEL</title>
</head>


<body>


    <div class="container pt-4 ">
        <form class="d-flex" action="ricerca.php"  method="get">
            <div class="col-10">
                <div class="mb-3">
                    <label for="pargheggio" class="form-label">Cerca qui il tuo hotel</label>
                    <input
                        type="text"
                        name="pargheggio"
                        id="pargheggio"
                        class="form-control"
                        
                    />
                    <button type="submit" class="btn btn-primary mt-3 ">Cerca</button>
                </div>
            </div>
        </form>
        
    </div>


    <div class="container ">
        <div class="d-flex justify-content-center flex-wrap gap-10 ">

            <!-- ciclo per ogni singolo hotels -->
            <?php foreach ($hotels as $element) : ?>

                <div class="card" style="width: 18rem;">
                <!-- informazioni presi tramite element -->
                    <img src="<?= $element['img'] ?> " class="card-img-top" alt="..." height="100%">
                    <div class="card-body">
                        <h4 class="card-title"> <?= $element['name'] ?></h4>
                        <h6 class="card-title"><?= $element['description'] ?> </h6>
                        <div class="d-flex flex-column ">
                            <span class="text-capitalize ">voto: <?= $element['vote'] ?></span>
                            <span class="text-capitalize ">distanza: <?= $element['distance_to_center'] ?>Km</span>
                        </div>
                    </div>
                </div>

            <?php endforeach; ?>

        </div>
    </div>






    <script src='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/js/bootstrap.min.js' integrity='sha512-ykZ1QQr0Jy/4ZkvKuqWn4iF3lqPZyij9iRv6sGqLRdTPkY69YX6+7wvVGmsdBbiIfN/8OdsI7HABjvEok6ZopQ==' crossorigin='anonymous'></script>
</body>

</html>