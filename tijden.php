<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Viggo Duindam">
   <meta name="description" content="De pagina met de openingstijden en locatie van Saffraan en Sahara.">
    <meta name="keywords" content="Vacatures Saffraan en Sahara, werken in de horeca Den Haag, vacature kok Den Haag, 
        fulltime kok gezocht, parttime kok Arabische keuken, bedieningsmedewerker gezocht, bijbaan horeca Den Haag,
         vacature afwasser, werken in een gezellig team, horeca vacatures Den Haag, solliciteren restaurant, 
         keukenpersoneel gezocht, dynamische werkomgeving horeca, passie voor koken, gastvrijheid vacatures, 
         kelner gezocht, serveerster vacature, werken bij een Marokkaans restaurant, bijbaan student Den Haag,
          horeca team versterken, kok vacature Den Haag, restaurant banen, afwas hulp gezocht, werken in Den Haag centrum, horeca carrière.">
    <title>Saffraan en Sahara | Openings Tijden</title>
    <link rel="stylesheet" href="CSS/style.css">
    <script src="lib/script.js" defer></script>
    <script src="lib/tijden.js" defer></script>
</head>

<body>
    <?php require_once 'partials/header.php'; ?>

    <main class="main-tijden">
        <section class="locatie">
            <article class="locatie-info">
                <h2>Onze locatie</h2>
                <h4>U kont ons vinden bij de volgende locatie:</h4>
                <p>Saffraan en Sahara <br>
                    Herengracht 6 <br>
                    2511 EH Den Haag</p>
            </article>
            <article class="img-locatie">
                <img src="images/locatie.png" alt="locatie saffraan en sahara">
            </article>
        </section>
        <section class="tijden">
            <h2>Onze openingstijden</h2>
            <p>Wij zijn elke dag geopend van 10:00 tot 22:00 uur.</p>
        </section>
        <section class="status">
            <h2>Onze Status</h2>
            <h3 id="message"></h3>
        </section>
    </main>

    <?php require_once 'partials/footer.php'; ?>
</body>

</html>