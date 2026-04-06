<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Viggo Duindam">
   <meta name="description" content="De pagina waar je een reservering kan maken bij Saffraan en Sahara.">
    <meta name="keywords" content="Tafel reserveren Den Haag, online reserveren Saffraan en Sahara,
         tafel boeken Arabisch restaurant, groepsreservering Den Haag, reserveringsformulier restaurant,
          specifieke dieetwensen doorgeven, allergieën melden restaurant, uit eten in Den Haag,
           avondje uit reserveren, reserveren voor diner, beschikbaarheid restaurant controleren,
            Saffraan en Sahara contact e-mail, info@saffraanensahara.nl, tafel voor twee Den Haag,
             familie diner reserveren, zakelijk diner Den Haag, reserveren met groepen, Arabisch eten reserveren, 
             diner planning, tafel vastleggen Den Haag centrum, speciale wensen restaurant doorgeven, reserveren bevestiging.">
    <title>Saffraan en Sahara | Reserveren</title>
    <link rel="stylesheet" href="CSS/style.css">
    <script src="lib/script.js" defer></script>
    <script src="lib/reservatie.js" defer></script>
</head>

<body>
    <?php require_once 'partials/header.php'; ?>

    <main class="main-reserveren">
        <section class="reservatie-form">
            <h2>Reserveren</h2>

            <form id="reservatieForm">
                <article>
                    <label for="aantal">Aantal Personen:</label>
                    <input type="number" id="aantal" name="aantal">
                </article>
                <br>
                <article>
                    <label for="datum">Datum:</label>
                    <input type="date" id="datum" name="datum">
                </article>
                <br>
                <article>
                    <label for="tijd">Tijdstip:</label>
                    <input type="number" id="tijd" name="tijd">
                </article>
                <article>
                    <p>Allergieën:</p>
                    <label><input type="radio" name="Aller" value="geenAller" checked> Geen</label>
                    <label><input type="radio" name="Aller" value="welAller"> Wel</label>
                </article>
                <br>
                <button type="submit">Verstuur Reservering</button>
            </form>
        </section>
        <br><br>
        <section class="extraInfo-reserveren">
            <h3>Extra Informatie</h3>
            <p>Heeft u speciale wensen of dieetwensen? Laat het ons weten door ons te mailen via:</p>
            <h4>info@saffraanensahara.nl</h4>
        </section>
        </form>
    </main>

    <?php require_once 'partials/footer.php'; ?>
</body>

</html>