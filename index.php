<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="De home pagina van Saffraan en Sahara.">
    <meta name="keywords" content="Saffraan en Sahara, Arabisch restaurant Den Haag, 
        Marokkaanse keuken, authentieke Arabische gerechten, couscous specialiteiten, 
        traditionele kruiden, warme gastvrijheid, oosterse sfeer, dineren Den Haag, vers bereide maaltijden, 
        Thuisbezorgd Den Haag, Uber Eats Saffraan en Sahara, Deliveroo Arabisch eten, Glovo bezorging, 
        Arabische smaken ontdekken, restaurant Herengracht Den Haag, lekker eten Den Haag, sfeervol dineren,
         Marokkaans specialiteitenrestaurant, online eten bestellen Den Haag, Arabische gastronomie,
          dineren in hartje Den Haag, Saffraan en Sahara menukaart, beste couscous Den Haag, traditioneel Arabisch koken.">
    <meta name="author" content="Viggo Duindam">
    <title>Saffraan en Sahara | Home</title>
    <link rel="stylesheet" href="CSS/style.css">
    <script src="lib/script.js" defer></script>
    <script src="lib/home.js" defer></script>
</head>

<body class="body-home">
    <?php require_once 'partials/header.php'; ?>

    <main class="main-home">
        <section class="intro-home">
            <h1>Welkom bij Saffraan en Sahara</h1>
            <p>Ontdek de Arabische smaken bij ons restaurant.<br>
                Geniet van authentieke gerechten, <br>
                warme gastvrijheid en een unieke sfeer.</p>
        </section>

        <section class="slide-home">
            <img id="dia" class="img-slide" src="images/couch.png" alt="Sfeerimpressie">
            <article>
                <span class="dot" onclick="toon(0)"></span>
                <span class="dot" onclick="toon(1)"></span>
                <span class="dot" onclick="toon(2)"></span>
            </article>
        </section>

        <section class="specialiteiten-home">
            <article>
                <h2>Onze Specialiteiten</h2>
                <p>Proef onze heerlijke couscous en nog veel meer.
                    Onze gerechten worden bereid met verse ingrediënten en traditionele
                    kruiden voor een onvergetelijke smaakervaring.</p>
            </article>
        </section>

        <section class="bezorging-home">
            <article class="bezorging-tekst">
                <h2>Onze bezorg opties</h2>
                <p>Bestel gemakkelijk online om ons eten zelfs thuis te proeven.<br>
                    U kunt ons vinden op de volgende platforms:<br><br>
                    Thuisbezorgd.nl | Uber Eats | Deliveroo | Glovo
                </p>

                <h3>Voor meer vragen kunt u ons mailen</h3>
                <h4>saffraan&sahara@gmail.com</h4>
            </article>

            <article class="img-bezorging">
                <img src="images/Thuisbezorgd.png" alt="Thuisbezorgd">
                <img src="images/UberEats.png" alt="Uber Eats">
                <img src="images/Deliveroo.png" alt="Deliveroo">
                <img src="images/Glovo.png" alt="Glovo">
            </article>
        </section>

    </main>

    <?php require_once 'partials/footer.php'; ?>
</body>

</html>