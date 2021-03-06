<?php

$faq = [
    [
        'domanda' => "Come state implementando la recente decisione della Corte di giustizia UE (CGUE) relativa al diritto all'oblio?",
        'risposta' => "Da quando questa decisione è stata pubblicata il 13 maggio 2014, abbiamo lavorato incessantemente per uniformarci a essa. Si tratta di una procedura complessa perché dobbiamo valutare ogni singola richiesta e effettuare un bilanciamento tra il diritto dell'individuo a controllare i suoi dati personali ed il diritto di tutti di conoscere e distribuire le informazioni.",

    ],
    [
        'domanda' => "Come fa Google a proteggere la mia privacy e a tenere le mie informazioni al sicuro?",
        'risposta' => "Sappiamo che la sicurezza e la privacy sono importanti per te e lo sono anche per noi. Per noi è imperativo offrire un'elevata sicurezza e assicurarti che le tue informazioni sono al sicuro e accessibili quando ne hai bisogno. Siamo costantemente al lavoro per garantire un'elevata sicurezza, proteggere la tua privacy e rendere Google ancora più efficace ed efficiente per te. Spendiamo centinaia di milioni di dollari ogni anno per la sicurezza e ci avvaliamo di esperti di fama mondiale in materia di sicurezza dei dati per mantenere le tue informazioni al sicuro. Abbiamo inoltre sviluppato strumenti per la sicurezza e la privacy di facile utilizzo come Google Dashboard, la verifica in due passaggi e Impostazioni annunci. Così, per quanto riguarda le informazioni che condividi con Google, hai il massimo controllo.",

    ],
    [
        'domanda' => "Stabilire il paese associato al tuo account",
        'risposta' => "Quando crei un nuovo Account Google, lo associamo a un paese in base a dove è stato creato. Per quanto riguarda gli account creati almeno un anno fa, usiamo il paese da cui accedi solitamente ai servizi Google, in genere i servizi in cui hai trascorso più tempo nell'ultimo anno.
        I viaggi frequenti solitamente non influiscono sul paese associato al tuo account. Se ti trasferisci in un altro paese, potrebbe occorrere circa un anno per aggiornare l'associazione del paese.",

    ],
    [
        'domanda' => "Quando faccio clic sui risultati della Ricerca Google, le mie chiavi di ricerca vengono inviate ai siti web?",
        'risposta' => "n alcuni casi sì. Quando fai clic su un risultato della Ricerca Google, il tuo browser web potrebbe reindirizzare alla pagina web di destinazione anche l'indirizzo Internet, o URL, della pagina dei risultati di ricerca sotto forma di URL referrer. Talvolta, l'URL della pagina dei risultati di ricerca potrebbe contenere la query di ricerca che hai inserito. Se utilizzi la ricerca SSL (la funzione di ricerca criptata di Google), nella maggior parte dei casi i termini di ricerca non vengono inviati come parte dell'URL negli URL referrer. Questo comportamento può fare eccezione, ad esempio se utilizzi alcuni browser meno diffusi. Ulteriori informazioni sulla ricerca SSL sono disponibili qui. Le query di ricerca o le informazioni contenute nell'URL referrer potrebbero essere disponibili mediante Google Analytics o un'API (Application Programming Interface). Inoltre, gli inserzionisti potrebbero ricevere informazioni relative all' esatte parole chiave che hanno determinato il clic su un annuncio.",

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
    <!-- collegamento font-awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Google FAQ</title>
</head>
<body>

    <header>
        <!-- start nav -->
        <nav>
            <div class="container-fluid">
                <!-- start row -->
                <div class="row d-flex">
                    <div class="col-11 d-inline-flex">

                        <img src="img/logo-google.png" alt="logo google" class="logo">

                        <h3>Privacy e Termini</h3>
                    </div>
                    
                    <div class="col-1 mt-4 icons">
                        <i class="fas fa-bars"></i>
                        <i class="fas fa-user-circle"></i>
                    </div>
                </div>
                <!-- end row -->

                <!-- start row -->
                <div class="row">
                    <div class="col-12">
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
                <!-- end row -->
            </div>
        </nav>
        <!-- end nav -->
    </header>

    <main>
        <div class="container-xl">
            <!-- start row -->
            <div class="row mt-5 p-5">
                <?php for ($i = 0; $i < $stampa_faq; $i++){?>
                    <div class="partite">
                        <h4>
                            <?php echo $faq[$i]['domanda'];?> 
                        </h4>

                        <p class="pb-5">
                            <?php echo $faq[$i]['risposta'];?> 
                        </p>
                    </div>
                <?php } ?>
            </div>
            <!-- end row -->
        </div>
    </main>

    <footer>
        <div class="container-fluid">
            <!-- start row -->
            <div class="row">
                <div class="col-10">
                    <ul>
                        <li><a href="#">Google</a></li>
                        <li><a href="#">Tutto su Google</a></li>
                        <li><a href="#">Privacy</a></li>
                        <li><a href="#">Termini</a></li>
                    </ul>
                </div>

                <div class="col-2">
                    <span><i class="fas fa-globe"></i></span>
                    <select name="selection" id="selection">
                        <option value="italiano">Italiano</option>
                        <option value="inglese">Inglese</option>
                        <option value="cinese">Cinese</option>
                        <option value="tedesco">Tedesco</option>
                        <option value="russo">Russo</option>
                    </select>
                </div>
            </div>
            <!-- start row -->        
        </div>
    </footer>
</body>
</html>