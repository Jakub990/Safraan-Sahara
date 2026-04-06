<!DOCTYPE html>
<html lang="nl">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta name="author" content="Jakub Bratek">
   <meta name="description" content="De menukaart van Saffraan en Sahara.">
    <meta name="keywords" content="Menukaart Saffraan en Sahara, Arabische voorgerechten, 
      Hummus bestellen, Baba Ganoush Den Haag, Fattoush salade, Tabbouleh vers, koude mezze,
       warme mezze, allergie informatie restaurant, glutenvrij Arabisch, vegetarische voorgerechten,
        veganistische opties Den Haag, menukaart met prijzen, donkere modus website,
         tekstvergroting website, toegankelijke menukaart, Arabische tapas, gezonde voorgerechten, 
         tahini gerechten, kikkererwten puree, gegrilde aubergine, Arabisch dineren, 
         voorgerechten kaart, Saffraan en Sahara prijzen, dineren met allergie.">
   <title>Saffraan en Sahara | Menu</title>
   <link rel="stylesheet" href="CSS/style.css">
   <script src="lib/script.js" defer></script>
   <script src="lib/ScrollFunc.js" defer></script>
</head>

<body class="body">
   <?php require_once 'partials/header.php'; ?>

   <main class="main-menu">
      <section class="accessibility">
         <button id="knop-donker" class="focus-button">Donkere Modus</button>
         <button id="knop-groter" class="focus-button">Tekst +</button>
         <button id="knop-herstel" class="focus-button">Reset</button>
         <button id="knop-contrast" class="focus-button">Hoog Contrast</button>
      </section>
      <section class="menu-options">
         <button class="menu-Options" onclick="scrollToSection('voor')">Voor</button>
         <button class="menu-Options" onclick="scrollToSection('hoofd')">Hoofd</button>
         <button class="menu-Options" onclick="scrollToSection('bij')">Bij</button>
         <button class="menu-Options" onclick="scrollToSection('desserts')">Desserts</button>
         <button class="menu-Options" onclick="scrollToSection('dranken')">Dranken</button>
      </section>

      <section id="voor">
         <article id="cooleBoxWarning">
            <h1>Waarschuwing!</h1>
            <p>Heeft u een allergie? Informeer dan onze medewerkers voordat u bestelt.</p>
         </article>
         <article class="cooleBox">
            <h1>Voorgerechten</h1>
         </article>
         <section class="gerechtGrid">
            <article class="gerecht">
               <h4>Hummus €6,50</h4>
               <p class="gerecht-beschrijving">Romige puree van kikkererwten met tahini,citroensap en olijfolie.</p>
            </article>
            <article class="gerecht">
               <h4>baba Gaboush €6,50</h4>
               <p class="gerecht-beschrijving">Gegrilde aubergine met tahini,knoflook en specerijen.</p>
            </article>
            <article class="gerecht">
               <h4>Fattoush €7,00</h4>
               <p class="gerecht-beschrijving">Frisse salade met geroorsterd platbrood, tomaten, komkommer en sumak.</p>
            </article>
            <article class="gerecht">
               <h4>Tabbouleh €6,50</h4>
               <p class="gerecht-beschrijving">Peterselie met bulgur,tomaat, munt en citroen.</p>
            </article>
            <article class="gerecht">
               <h4>Linzensoep €5,50</h4>
               <p class="gerecht-beschrijving">Traditionele soep met rode linzen en Arabische kruiden.</p>
            </article>
            <article class="gerecht">
               <h4>Harira €6,00</h4>
               <p class="gerecht-beschrijving">Marokkaanse soep met linzen,kikkererwten en vermicelli.</p>
            </article>
         </section>
      </section>
      <section id="hoofd">
         <article class="cooleBox">
            <h1>Hoofdgerechten</h1>
         </article>
         <section class="gerechtGrid">
            <article class="gerecht">
               <h4>Mixed Grill € 22,50</h4>
               <p class="gerecht-beschrijving">Selectie van gegrilde lamsvlees,kipshawarma en kofte,geserveerd met rijst
                  en gegrillde groenten.</p>
            </article>
            <article class="gerecht">
               <h4>Mansaf €20,50</h4>
               <p class="gerecht-beschrijving">Traditioneel gerecht van lamvlees in yoghurtsaus,geserveerd op
                  saffraan-rijst met pijnboompitten.</p>
            </article>
            <article class="gerecht">
               <h4>Kipshawarma Schotel €18,50</h4>
               <p class="gerecht-beschrijving">Gemarineerde kip van de grill met knoflooksaus, geserveerd met rijst en
                  salade.</p>
            </article>
            <article class="gerecht">
               <h4>Kofte €19,50</h4>
               <p class="gerecht-beschrijving">Gekruide gehaktballetjes van lamsvlees met tomatensaus en rijst.</p>
            </article>
            <article class="gerecht">
               <h4>Vega Couscous €16,50</h4>
               <p class="gerecht-beschrijving">Couscous met gestoofde groenten,rozijnen en kikkererwten.</p>
            </article>
            <article class="gerecht">
               <h4>Samke Harra €21,50</h4>
               <p class="gerecht-beschrijving">Gegrilde vis met pittige kruiden,geserveerd met rijst en geroosterde
                  groenten.</p>
            </article>
            <article class="gerecht">
               <h4>Tagine van Zeebaars €23,50</h4>
               <p class="gerecht-beschrijving">Zeebaars gestoofd in saffraan-citroensaus met olijven en aardappelen.</p>
            </article>
         </section>
      </section>
      <section id="bij">
         <article class="cooleBox">
            <h1>Bijgerechten</h1>
         </article>
         <section class="gerechtGrid">
            <article class="gerecht">
               <h4>Arabische Rijst €4,50</h4>
               <p class="gerecht-beschrijving">Met saffraan en pijnboompitten.</p>
            </article>
            <article class="gerecht">
               <h4>Gegrilde Groenten €5,50</h4>
               <p class="gerecht-beschrijving">Selectie van seizoensgroenten.</p>
            </article>
            <article class="gerecht">
               <h4>Extra Platbrood €2,50</h4>
               <p class="gerecht-beschrijving">Vers gebakken Arabisch brood.</p>
            </article>
         </section>
      </section>
      <section id="desserts">
         <article class="cooleBox">
            <h1>Desserts</h1>
         </article>
         <section class="gerechtGrid">
            <article class="gerecht">
               <h4>Baklava €6,50</h4>
               <p class="gerecht-beschrijving">Assortiment van huisgemaakte zoete bladerdeeggebakjes met noten en
                  honing.</p>
            </article>
            <article class="gerecht">
               <h4>Umm Ali €7,00</h4>
               <p class="gerecht-beschrijving">Warme broodpudding met noten,rozijnen en kokos.</p>
            </article>
            <article class="gerecht">
               <h4>Dadelpudding €6,50</h4>
               <p class="gerecht-beschrijving">Huisgemaakte pudding met verse dadels en kardemom.</p>
            </article>
         </section>
      </section>
      <section id="dranken">
         <article class="cooleBox">
            <h1>Dranken</h1>
         </article>
         <section class="gerechtGrid">
            <article class="gerecht">
               <h4>Arabische Koffie €3,50</h4>
               <p class="gerecht-beschrijving">Traditioneel gezette koffie met kardemom.</p>
            </article>
            <article class="gerecht">
               <h4>Verse muntthee €3,00</h4>
               <p class="gerecht-beschrijving">Met verse munt en naar wens gezoet.</p>
            </article>
            <article class="gerecht">
               <h4>Ayran €3,00</h4>
               <p class="gerecht-beschrijving">Verfrissende yoghurtdrank.</p>
            </article>
            <article class="gerecht">
               <h4>Verse Sappen €4,50</h4>
               <p class="gerecht-beschrijving">Sinaasappel,granaatappel of mango.</p>
            </article>
         </section>
      </section>
      <button class="menu-Options terug-naar-boven" onclick="scrollToSection('knop-donker')">Terug naar boven?</button>




   </main>

   <?php require_once 'partials/footer.php'; ?>
</body>

</html>