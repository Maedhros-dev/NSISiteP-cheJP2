<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>La pêche</title>
        <link rel="stylesheet" href="../style.css">
        <script src='../script.js'></script>
    </head>
    <body>
        <div class="container">
        <div id="header">
                <a href="../index.php" id="logo"><img src="../comp/logo.png" alt="logo"></a> 
                <nav id="dnav">
                    <ul>
                        <li class="deroulant"><a href=poissons.php>Poissons</a>
                            <ul class="sous">
                                <li><a href="poissons.php#c1">En Mer</a></li>
                                <li><a href="poissons.php#c2">En Rivière</a></li>
                            </ul>
                        </li>
                        <li class="deroulant"><a href=materiel.php>Matériels</a>
                            <ul class="sous">
                                <li><a href="materiel.php#c1">Cannes</a></li>
                                <li><a href="materiel.php#c2">Moulinets</a></li>
                                <li><a href="materiel.php#c3">Fils</a></li>
                            </ul>
                        </li>
                        <li class="deroulant"><a href=eau_douce.php>Eau douce</a>
                            <ul class="sous">
                                <li><a href="eau_douce.php#c1">Leurres</a></li>
                                <li><a href="eau_douce.php#c2">Mouches</a></li>
                                <li><a href="eau_douce.php#c3">Bouchons</a></li>
                            </ul>
                        </li>
                        <li class="deroulant"><a href=mer.php>Eau salée</a>
                            <ul class="sous">
                                <li><a href="mer.php#c1">Mitraillette</a></li>
                                <li><a href="mer.php#c2">Ligne de fond</a></li>
                            </ul>
                        </li>
                        <li class="deroulant"><a href=reglementation.php>Réglementation</a>
                            <ul class="sous">
                                <li><a href="reglementation.php#c1">Quotas</a></li>
                                <li><a href="reglementation.php#c2">Lieux</a></li>
                                <li><a href="reglementation.php#c3">Périodes d'ouverture</a></li>
                                <li><a href="reglementation.php#c4">Horaires de pêche</a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>
                <div id="mobnav" class="sidenav">
                  <a id="closeBtn" href="#" class="close" onclick="closeNav()">&times;</a>
                  <ul>
                    <li><a href="poissons.php">Poissons</a></li>
                    <li><a href="materiel.php">Matériel</a></li>
                    <li><a href="eau_douce.php">Eau douce</a></li>
                    <li><a href="mer.php">Mer</a></li>
                    <li><a href="reglementation.php">Réglementation</a></li>
                  </ul>
                </div>

                <a href="#" id="openBtn" onclick="openNav()">
                  <span class="burger-icon">
                    <span></span>
                    <span></span>
                    <span></span>
                  </span>
                </a>
            </div>
            <div class="content">
                <div  id="c1">
                    <div class="left">
                        <h2>Cannes</h2>
                        <p>La canne à pêche est l'élément principal du materiel qui compose une canne a pêche. Elles se differencient par leures puissances qui definie le grammage qu'elles peuvent lancer, la longueur de la canne qui definie plus ou moins la distance de lancer, ces ensemble doivent être equilibrée afin d'avoir un certain comfort de peche et pour que la resonance de la canne soit optimale (la resonance est le fait de resentir tout les vibrations qui sont transmises dans le fil et de savoir les differencier).</p>
                    </div>
                    <div class="right">
                        <img src="../comp/canne.jpg" alt="image de canne" id="c1img">
                    </div>
                </div>
                <div id="c2">
                    <div class="right">
                        <h2>Moulinets</h2>
                        <p>Le moulinet permet de ramener le fil il en existe plusieurs type, les plus communs sont les spinnings principalement utilisés pour les peche au leurrre en medium, pour la carpe et la peche en mer, les moulinets castings sont principalement utiliser pour peche le  brochet et du black-bass car la prescision de lancer est meilleur cependant le fil a tendance a faire des perruque (le fil s'enmmele au lancer et forme une boule de fil).Enfin les moulinets pour les cannes a mouches sont encore differents, il ne sont pas equiper de freins et nous devons freiner le poissons en retenant le fil a la main.La bobine est encore dans une position differente.</p>
                    </div>
                    <div class="left">
                        <img src="../comp/moulinet.jpg" alt="image de moulinet" id="c2img">
                    </div>
                </div>
                <div id="c3">
                        <div class="left">
                           <h2>Les fils</h2>
                           <p> Pour ce qui est des fils, le plus utilise est le nylon notamment pour la peche de la truite, grace a son elasticité qui permet de mieux gerer le poisson et de rester en contact avec lui, les chance de decrocher le poisson sont tres reduite mais ce fil a tendance a s'enmeler.La tresse permet une meilleur ressonance, de ne pas s'enmeler et une meilleur resistance, le seul inconvenient ou point de faiblessse est le noeud de raccord qui doit etre effectue avec le bas de ligne en fluorocarbone de 1 a 2 longuere de canne en fluorocarbone(transparent) et permet ainsi d'être discret et de ne pas effryer le poisson </p>
                       </div>
                    <div class="right">
                        <img src="../comp/fils.jpg" alt="image de fils" id="c3img">
                    </div>
                 </div>
            </div>
            <div class="footer">
                <div class="left">
                    <h3>Contact us</h3>
                    <p>Phone: <a href="tel:+33 888">+33 6 71 15 59 56</a></p>
                    <p>Email: <a href="mailto:contact@pkw.org">contact@victorthefisherman.org</a></p>
                    <p>Address: 1234 Nairobi, Kenya</p>

            </div>
        </div>
    </body>
</html>