<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Jakub Bratek">
   <meta name="description" content="De vacatures van Saffraan en Sahara.">
    <meta name="keywords" content="Locatie Saffraan en Sahara, adres Herengracht 6 Den Haag, 
        restaurant nabij Mauritshuis, Arabisch eten Den Haag centrum, openingstijden Saffraan en Sahara,
         elke dag geopend Den Haag, restaurant status nu geopend, routebeschrijving restaurant Den Haag,
          parkeren Herengracht Den Haag, Saffraan en Sahara Den Haag contact, dichtstbijzijnde Arabisch restaurant, 
          dineren nabij Den Haag Centraal, 2511 EH Den Haag, restaurant openingstijden weekend, 
          eten in Den Haag op maandag, bezoek Saffraan en Sahara, kaart Den Haag restaurant, Arabische keuken locatie,
           openingsuren horeca Den Haag, route plannen restaurant.">
    <title>Saffraan en Sahara | Vacatures</title>
    <link rel="stylesheet" href="CSS/style.css">
    <script src="lib/script.js" defer></script>
    <script src="lib/ScrollFunc.js" defer></script>
</head>

<body class="body">
    <?php require_once 'partials/header.php'; ?>

    <main>
        <section id="vaca-Grid">
            <article id="vaca1">
                <h4>Vacature: Kok Fulltime/Parttime</h4>
                <img src="images/kok.jpg" alt="een kok die aan het werk is" class="vacatureFoto">
                <p> Heb jij passie voor koken en werk je graag in een dynamische keuken?
                    Sluit je aan bij ons team en groei met ons mee.</p>
                <form method="post">

                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" required>

                    <button type="submit" class="soli-Btn">Word onze Kok!</button>

                </form>


            </article>

            <article id="vaca2">
                <h4>Vacature: bedieningsmedewerker</h4>
                <img src="images/ober.jpg" alt="een ober die aan het werk is" class="vacatureFoto">
                <p> Zorg voor een top ervaring voor onze gasten en werk in een gezellig team.</p>
                <form method="post">

                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" required>

                    <button type="submit" class="soli-Btn">Word onze Ober!</button>

                </form>
            </article>

            <article id="vaca3">
                <h4>Vacature: Afwasser</h4>
                <img src="images/afwasser.jpg" alt="een afwasser die aan het werk is" class="vacatureFoto">
                <p>Onmisbare schakel in ons team en ideaal als bijbaan.</p>
                <form method="post">

                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" required>

                    <button type="submit" class="soli-Btn">Word onze Afwasser!</button>

                </form>
            </article>
        </section>

    </main>

    <?php require_once 'partials/footer.php'; ?>
</body>

</html>