<?php

$faq = [
    [
        'domanda' => "Come state implementando la recente decisione della Corte di giustizia UE (CGUE) relativa al diritto all'oblio?",
        'risposta' => 'ok',

    ],
    [
        'domanda' => "Come state implementando la recente decisione della Corte di giustizia UE (CGUE) relativa al diritto all'oblio?",
        'risposta' => 'ok',

    ],
    [
        'domanda' => "Come state implementando la recente decisione della Corte di giustizia UE (CGUE) relativa al diritto all'oblio?",
        'risposta' => 'ok',

    ],
    [
        'domanda' => "Come state implementando la recente decisione della Corte di giustizia UE (CGUE) relativa al diritto all'oblio?",
        'risposta' => 'ok',

    ],
    [
        'domanda' => "Come state implementando la recente decisione della Corte di giustizia UE (CGUE) relativa al diritto all'oblio?",
        'risposta' => 'ok',

    ],
    
];

$stampa_faq = count($faq);

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- collegamento bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!-- collegamento CSS -->
    <link rel="stylesheet" href="css/style.css">
    <title>Google FAQ</title>
</head>
<body>

    <header>
        <nav>
            <div class="container-fluid">
                <div class="row d-flex">
                    <div class="col-4 d-inline-flex">
                        <img src="img/logo-google.png" alt="logo google" class="logo">

                        <h3>Privacy e Termini</h3>
                    </div>
                    
                </div>

                <div class="row">
                    <div class="col-8">
                        <ul>
                            <li>
                                <a href="#">Introduzione</a>
                            </li>
                            <li>
                                <a href="#">Norme sulla Privacy</a>
                            </li>
                            <li>
                                <a href="#">Termini di servizio</a>
                            </li>
                            <li>
                                <a href="#">Tecnologie</a>
                            </li>
                            <li>
                                <a href="#">Domande frequenti</a>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>
        </nav>
    </header>

    <main>
        <div class="container-xl">
            <div class="row">
                <?php for ($i = 0; $i < $stampa_faq; $i++){?>
                    <div class="partite">

                        <h4>
                            <?php echo $faq[$i]['domanda'];?> 
                        </h4>

                        <p>
                            <?php echo $faq[$i]['risposta'];?> 
                        </p>
                    </div>
                <?php } ?>
            </div>
        </div>
    </main>
</body>
</html>