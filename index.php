<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>La pêche</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <script src='script.js'></script>
        <div class="container">
            <div id="header">
                <a href="./index.php" id="logo"><img src="comp/logo.png" alt="logo"></a> 
                <nav>
                    <ul>
                        <li class="deroulant"><a href=pages/poissons.php>Poissons</a>
                            <ul class="sous">
                                <li><a href="pages/poissons.php#c1">En Mer</a></li>
                                <li><a href="pages/poissons.php#c2">En Rivière</a></li>
                            </ul>
                        </li>
                        <li class="deroulant"><a href=pages/materiel.php>Matériels</a>
                            <ul class="sous">
                                <li><a href="pages/materiel.php#c1">Cannes</a></li>
                                <li><a href="pages/materiel.php#c2">Moulinets</a></li>
                                <li><a href="pages/materiel.php#c3">Fils</a></li>
                            </ul>
                        </li>
                        <li class="deroulant"><a href=pages/eau_douce.php>Eau douce</a>
                            <ul class="sous">
                                <li><a href="pages/eau_douce.php#c1">Leurres</a></li>
                                <li><a href="pages/eau_douce.php#c2">Mouches</a></li>
                                <li><a href="pages/eau_douce.php#c3">Bouchons</a></li>
                            </ul>
                        </li>
                        <li class="deroulant"><a href=pages/mer.php>Eau salée</a>
                            <ul class="sous">
                                <li><a href="pages/mer.php#c1">Mitraillette</a></li>
                                <li><a href="pages/mer.php#c2">Ligne de fond</a></li>
                            </ul>
                        </li>
                        <li class="deroulant"><a href=pages/reglementation.php>Réglementation</a>
                            <ul class="sous">
                                <li><a href="pages/reglementation.php#c1">Quotas</a></li>
                                <li><a href="pages/reglementation.php#c2">Lieux</a></li>
                                <li><a href="pages/reglementation.php#c3">Périodes d'ouverture</a></li>
                                <li><a href="pages/reglementation.php#c4">Horaires de pêche</a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
            <div class="content">
                <div id="slogan">
                    <h1>La pêche<br>&ensp; pour tous</h1>
                </div>
                <div  id="c1">
                    <div class="left">
                        <h2>A propos de nous :</h2>
                    </div>
                    <div class="right">
                        <img src="../comp/victor.jpg" alt="image de lucas" id="c1img" onclick="zoomIn(this)">
                    </div>
                </div>
                <div id="c2">
                    <iframe width="1039" height="779" src="https://www.youtube.com/embed/oKWglREK5jU?autoplay=1" title="C&#39;est pas sorcier -  QUI EST AU BOUT DU FIL ?
                    (Pêche)" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                </div>
                <div id="c3">
                    <div class="left">
                        <h2>Our conservancies</h2>
                        <p></p>
                    </div>
                    <img src="kenya.jpg" alt="map" id="kenya">
                </div>
                <div id="pendu">
                    <h2>Trouve le mot et remporte ta carte de pêche</h2>
                </div>
                    <p></p>
                    <a href="https://paypal.me/soyezgentilUEW" target="_blank"><button>JOUER</button></a>
                </div>
            </div>
            <div class="footer">
                <div class="left">
                    <h3>Nous contacter</h3>
                    <p>Phone: <a href="tel:+33 888">+33 6 71 15 59 56</a></p>
                    <p>Email: <a href="mailto:contact@victorthefisherman.org">contact@victorthefisherman.org</a></p>
                    <p>Address: 1234 Nairobi, Kenya</p>
            </div>
        </div>
    </body>
</html>