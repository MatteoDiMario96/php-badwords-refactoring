<?php 

$paragraph = 
                "Giri con una tua amica, io ti prendo in giro
                Dopo sbrocco perché voglio esserci io
                Come quando dormo e me rubi er cuscino, cucino io
                Bona, che 'n piatto bono ancora non t'è riuscito
                Siamo troppo diversi, io pe' strada già dai tempi
                Dei primi fumi boni e dei sordi falsi
                Te sei sempre stata a casa sopra a libri alti
                Quel compagno de banco ancora te batte i pezzi
                Io giro senza il casco, co' te andavo più veloce
                Pe' sentimme le mani strette sur petto
                Se per te vado bene, occhio
                Che me porto appresso i miei difetti, difficilmente li scordo
                Non m'ha cambiato nemmeno mi madre
                Poi fa 'n po' come te pare
                Le persone non vanno cambiate, ma vanno capite
                Quando parlo serio scoppi a ride'
                Io scrocchio due dita perché n' so' che dire
                T'accompagno a vede' 'l voto all'università
                Devi scusarmi, ma qua dentro ce vendevo er fumo
                Ecco perché me salutano co' 'n occhio chiuso
                Batto il cinque alla gente pure se n' so' nessuno
                T'accompagno a vede' 'l voto all'università
                Devi scusarmi, ma qua dentro ce vendevo er fumo
                Ecco perché me salutano co' 'n occhio chiuso
                Batto il cinque alla gente pure se n' so' nessuno
                E siamo in due, ma siamo soli in casa
                L'eco dei passi dal piano di sopra
                Ed era una sciocchezza, poca cosa
                Forse avrei dovuto passarci sopra
                Non prendo sonno
                Giro il cuscino dal lato freddo, ma non c'è verso
                Resto fermo a guardare il buio accanto al mio letto
                Una birra e un libro che non ho letto
                Ne accendo una al fornello mentre tossisco
                Siamo alla fine, al caffè prima del conto
                Un drink all'ultimo sorso, un disco all'ultimo solco
                E aspetto che il tempo faccia il suo corso
                Ti eri sbagliata sul mio conto
                Anch'io m'ero sbagliato sul mio conto (anch'io)
                E non lo so perché poi non imparo mai
                E mischio due parti di gin e una di lime
                Ho smesso di chiedermi come mai
                Spero che tu stia bene dove stai (ciao), ehi
                T'accompagno a vede' 'l voto all'università
                Devi scusarmi, ma qua dentro ce vendevo er fumo
                Ecco perché me salutano co' 'n occhio chiuso
                Batto il cinque alla gente pure se n' so' nessuno
                T'accompagno a vede' 'l voto all'università
                Devi scusarmi, ma qua dentro ce vendevo er fumo
                Ecco perché me salutano co' 'n occhio chiuso
                Batto il cinque alla gente pure se n' so' nessuno";

$userReplace = $_GET["replace"] ?? '';



?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--CSS BOOTSTRAP-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Lycris canzoni!</title>
</head>
<body>
    <div id="app">
    <header class="d-flex align-items-center justify-content-center my-3">
        <h1>
            Lycris {{ songData.name }}
        </h1>
    </header>
    <main>
            <div class="d-flex align-items-center justify-content-center mb-3 ">
            <h2 class="me-3">
                Artist:  
            </h2>
            <h2 v-for="(artist,index) in songData.artists" :key="index"  class="me-3">
                {{ artist }}
            </h2>
            </div>
            <p>
                
                <?php 
                    $paragraph2 = str_replace($userReplace, '***', $paragraph);
                    echo $paragraph2; 
                ?>
            </p>

            <h3>
                Count: <?php echo strlen($paragraph2); ?>
            </h3>
        </article>
        <section class="d-flex align-items-center justify-content-center mb-3">
            <form action="./index.php" method="get">
                <input type="text" name="replace" id="replace">
                <button type="submit">Rimpiazza</button>
            </form>
        </section>
        <section class="d-flex align-items-center justify-content-center mb-3">
            <h4>
                Cos'hai censurato?
            </h4>
            <p>
                <?php echo  $userReplace; 
                if($userReplace === ''){
                    echo 'Non hai ancora censurato nulla.';
                }
                ?>
            </p>
        </section>
    </main>
    </div>
    <!--Vue3 Script-->
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <!--MyJS Script-->
    <script src="./js/script.js"></script>
</body>
</html>