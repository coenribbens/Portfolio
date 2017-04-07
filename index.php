<!DOCTYPE html>
<html lang="nl">

<head>
    <title>Coen Ribbens</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen"/>
    <link type="text/css" rel="stylesheet" href="css/style.css"/>
    <link type="text/css" rel="stylesheet" href="css/animations.css"/>
    <link type="text/css" rel="stylesheet"
          href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>

<body>

  <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script type="text/javascript" src="js/materialize.min.js"></script>
  <script type="text/javascript" src="js/init.js"></script>

<div class="navbar-fixed">
    <nav>
        <div class="nav-wrapper">
            <div class="container">
                <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="fa fa-bars"></i></a>
                <a href="#top" class="brand-logo black-text">Portfolio</a>
                <ul class="hide-on-med-and-down right">
                    <li><a href="#overmij">Over mij</a></li>
                    <li><a href="#ervaring">Opleidingen</a></li>
                    <li><a href="#projecten">Projecten</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>
</div>
<ul class="side-nav" id="mobile-demo">
    <li><a href="#overmij">Over mij</a></li>
    <li><a href="#ervaring">Ervaring</a></li>
    <li><a href="#projecten">Projecten</a></li>
    <li><a href="#contact">Contact</a></li>
</ul>

<div id="top" class="scrollspy parallax-container z-depth-2">
    <div class="parallax">
        <img src="img/695933.jpg" alt="parallax"/>
    </div>
    <div class="col l12 center parallax-offset">
        <img src="img/index.jpg" class="profilepic circle responsive-img z-depth-1" alt="Coen Ribbens"/>
        <h3 class="parallax-name">Coen Ribbens</h3>
        <div class="z-depth-1 parallax-title">Software Developer</div>
    </div>
    <div class="col l12 center parallax-offset">
        <a href="https://www.linkedin.com/in/coen-r-979710131" target="_blank"
           class="btn-floating btn-large waves-effect waves white"><i class="fa fa-linkedin"></i></a>
        <a href="#contact" class="btn-floating btn-large waves-effect waves white"><i class="fa fa-envelope-o"></i></a>
        <a href="docs/CV.pdf" target="_blank" class="btn-floating btn-large waves-effect waves white"><i
                    class="fa fa-file-text-o"></i></a>
        <a href="https://github.com/coenribbens" target="_blank"
           class="btn-floating btn-large waves-effect waves white"><i class="fa fa-github"></i></a>
        <a href="skype:coen.ribbens" class="btn-floating btn-large waves-effect waves white"><i class="fa fa-skype"></i></a>
    </div>
    <div class="parallax-offset"></div>
</div>

<div id="overmij" class="section scrollspy darkbox">
    <div class="container">
        <div class="section-title center">Over Mij</div>
        <div class="row">
            <div class="col l6 m6 s12 center">
                <div class="subtitle">Wie ben ik ?</div>
                <p>
                    Mijn naam is Coen Ribbens. Ik ben een student Applicatie- &amp;
                    Op dit moment zit ik op de afdeling Applicatieontwikkeling (bol 4) op het Scalda te Vlissingen.
                    Hier zit ik in een projectgroep waar ik steeds nieuwe dingen leer en kan toepassen.
                    Na mijn 3 jarige opleiding ben ik van plan om door te studeren en meerdere talen te leren
                </p>
            </div>
            <div class="col l6 m6 s12 center">
                <div class="subtitle">Skills</div>
                <p>Ik heb ervaring met de onderstaande talen &amp; frameworks.</p>
                <div class="chip">HTML</div>
                <div class="chip">CSS</div>
                <div class="chip">Java</div>
                <div class="chip">Springwork</div>
                <div class="chip">MySQL</div>
                <div class="chip">Apache Tomcat</div>
                <div class="chip">Git</div>
            </div>
        </div>
    </div>
</div>

<div id="ervaring" class="section scrollspy whitebox">
    <div class="container">
        <div class="section-title center">Opleidingen</div>
        <div class="row">

            <div class="col s12 m12 l6">
                <div class="card">
                    <div class="card-content grey lighten-4">
                        <div class="row">
                            <div class="col l3 m4 s4">
                                <img src="img/scalda.png" alt="Scalda" class="responsive-img">
                            </div>
                            <div class="col l8 m8 s8">
                                <span class="card-title black-text">Applicatie- en Mediaontwikkeling</span>
                                <p>September 2016 - Heden</p>
                                <p>Scalda College voor Techniek &amp; Design</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col s12 m12 l6">

                <div class="card">
                        <div class="card-content grey lighten-4">
                            <div class="row">
                                <div class="col l3 m4 s4">
                                    <img src="img/logo.jpg" alt="Pontes_Bergweg" class="responsive-img">
                                </div>
                                <div class="col l8 m8 s8">
                                    <span class="card-title black-text">Bouwopleiding</span>
                                    <br>
                                    <br>
                                    <p>September 2012 - 2016</p>
                                    <p>VMBO-Kader</p>
                                    <p>Pontes Bergweg &amp; Design</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

</div>

</div>

<div class="row">
    <div id="projecten" class="section-tit center">Projecten</div>
    <div class="col 14 m4 s6 offset-l2 offset-m2">
        <div class="hovereffect center z-depth-2"><img class="responsive-img" src="img/ak.png">
            <div class="overlay">
                <h2>Animal Kingdom</h2>
                <a class="btn-floating white info"
                                           href="#animalKingdom"><i class="fa fa-info"></i></a>
            </div>
        </div>
    </div>
    <div class="col l4 m4 s12">
        <div class="hovereffect center z-depth-2"><img class="responsive-img" src="img/Pasimo.png">
            <div class="overlay">
                <h2>Project Pasimo</h2> <a class="btn-floating white info"
                                           href="#Pasimo"><i class="fa fa-info"></i></a>
            </div>
        </div>
    </div>

</div>

<div id="Pasimo" class="modal">
    <div class="modal-content">

        <div class="container">
            <div class="row">

                <a class="modal-action modal-close floating btn-flat"><h5>X</h5></a>

                <div class="col s12 m6">
                    <h4>Pasimo</h4>
                    <p class='light'>Pasimo is het eerste project waar ik mee begonnen ben en nog steeds in meewerk, Voor dit project
                        is het de bedoeling dat er een goed inklok systeem met onze schoolpasjes komt die automatisch de informatie
                        verzend naar de overheid zodat dit niet meer door mensen gedaan hoeft te worden.
                       </p>
                </div>
                <div class="col s12 m6 l6 center">
                    <br>
                    <img class="materialboxed z-depth-2" data-caption="Logo" width="100%"
                         src="img/Pasimo.png">
                    <br>
                </div>
            </div>

            <div class="row">
                <div class="col s12 m6 l6 center">
                    <h5>Talen &amp; Frameworks</h5>

                    <br>

                    <div class="chip z-depth-1">
                        <i class="fa fa-coffee" aria-hidden="true"></i> Java
                    </div>
                    <div class="chip z-depth-1">
                        <i class="fa fa-html5" aria-hidden="true"></i> HTML5
                    </div>
                    <div class="chip z-depth-1">
                        <i class="fa fa-css3" aria-hidden="true"></i> CSS3
                    </div>
                    <div class="chip z-depth-1">
                        <i class="fa fa-terminal" aria-hidden="true"></i> Javascript
                    </div>
                    <div class="chip z-depth-1">
                        <i class="fa fa-database" aria-hidden="true"></i> MySQL
                    </div>
                <div class="chip z-depth-1">
                    <i class="fa fa-code-fork" aria-hidden="true"></i> SpringMVC
                </div>
                <div class="chip z-depth-1">
                    <i class="fa fa-coffee" aria-hidden="true"></i> Jquery
                </div>

            </div>

            <div class="col s12 m6 l6 center">
                <h5>Info</h5>
                <table class="bordered">
                    <tbody>
                    <tr>
                        <td><i class="fa fa-user" aria-hidden="true"></i></td>
                        <td>Opdrachtgever</td>
                        <td class="right"><a href="http://scalda.nl/">Scalda Vlissingen</a></td>
                    </tr>
                    <tr>
                        <td><i class="fa fa-clock-o" aria-hidden="true"></i></td>
                        <td>Tijdsduur</td>
                        <td class="right">8 maanden</td>
                    </tr>
                    <tr>
                        <td><i class="fa fa-calendar" aria-hidden="true"></i></td>
                        <td>Opleverdatum</td>
                        <td class="right">September 2017</td>
                    </tr>
                    <tr>
                        <td><i class="fa fa-graduation-cap" aria-hidden="true"></i></td>
                        <td>Beoordeling</td>
                        <td class="right">Nog niet af.</td>
                    </tr>
                    </tbody>
                </table>
            </div>

        </div>

      </div>
    </div>
  </div>

<!-- Modals -->

<div id="animalKingdom" class="modal">
    <div class="modal-content">

        <div class="container">
            <div class="row">

                <a class="modal-action modal-close floating btn-flat"><h5>X</h5></a>

                <div class="col s12 m6">
                    <h4>Animal Kingdom</h4>
                    <p class='light'>Animal kingdom was mijn eerste opdracht met als doel het leren van de Java taal.
                    Samengevat was het de bedoeling dat er een dierentuin is waar kooien in zitten, Elke kooi bevat een soort dier.
                    Hiernaast zijn er ook mensen die moeten kunnen trouwen. Ook moeten de dieren zich kunnen voortplanten.
                    Deze opdracht duurde 5 maanden en heb hier ook de tijd voor genomen. Nadat het Java gedeelte af was heb ik
                    met het Spring framework een view gemaakt.</p>
                </div>
                <div class="col s12 m6 l6 center">
                    <br>
                    <img class="materialboxed z-depth-2" data-caption="Logo" width="100%"
                         src="img/ak.png">
                    <br>
                </div>
            </div>

            <div class="row">
                <div class="col s12 m6 l6 center">
                    <h5>Talen &amp; Frameworks</h5>

                    <br>

                    <div class="chip z-depth-1">
                        <i class="fa fa-coffee" aria-hidden="true"></i> Java
                    </div>
                    <div class="chip z-depth-1">
                        <i class="fa fa-html5" aria-hidden="true"></i> HTML5
                    </div>
                    <div class="chip z-depth-1">
                        <i class="fa fa-css3" aria-hidden="true"></i> CSS3
                    </div>
                    <div class="chip z-depth-1">
                        <i class="fa fa-terminal" aria-hidden="true"></i> Javascript
                    </div>
                    <div class="chip z-depth-1">
                        <i class="fa fa-database" aria-hidden="true"></i> MySQL
                    </div>
                    <div class="chip z-depth-1">
                        <i class="fa fa-code-fork" aria-hidden="true"></i> SpringMVC
                    </div>

                </div>

                <div class="col s12 m6 l6 center">
                    <h5>Info</h5>
                    <table class="bordered">
                        <tbody>
                        <tr>
                            <td><i class="fa fa-user" aria-hidden="true"></i></td>
                            <td>Opdrachtgever</td>
                            <td class="right"><a href="http://scalda.nl/">Scalda Vlissingen</a></td>
                        </tr>
                        <tr>
                            <td><i class="fa fa-clock-o" aria-hidden="true"></i></td>
                            <td>Tijdsduur</td>
                            <td class="right">5 Maanden</td>
                        </tr>
                        <tr>
                            <td><i class="fa fa-calendar" aria-hidden="true"></i></td>
                            <td>Opleverdatum</td>
                            <td class="right">12-1-2017</td>
                        </tr>
                        <tr>
                            <td><i class="fa fa-graduation-cap" aria-hidden="true"></i></td>
                            <td>Beoordeling</td>
                            <td class="right">Goed</td>
                        </tr>
                        </tbody>
                    </table>
                </div>

            </div>

            <div class="row">
                <div class="col s12 center">
                    <h5>Screenshots</h5>
                </div>
            </div>
<!--            //Screenshots for animal kingdom, Main animal class-->
            <div class="row">
                <div class="col s12 m6 l3 center"><img class="materialboxed z-depth-2"
                                                       data-caption="Een voorbeeld van een class in mijn project"
                                                       width="100%" src="img/Screenshot_1.png"/>
                </div>
                <div class="col s12 m6 l3 center"><img class="materialboxed z-depth-2"
                                                       data-caption="Een voorbeeld van een superclass"
                                                       width="100%" src="img/Screenshot_2.png"/>
                </div>
                <div class="col s12 m6 l3 center"><img class="materialboxed z-depth-2"
                                                       data-caption="Een methode om te trouwen en scheiden" width="100%"
                                                       src="img/Screenshot_3.png"/></div>
                <div class="col s12 m6 l3 center"><img class="materialboxed z-depth-2"
                                                       data-caption="Methodes voor back en front-end" width="100%"
                                                       src="img/Screenshot_4.png"/></div>
            </div>

        </div>
    </div>
</div>


<footer id="contact" class="scrollspy page-footer">
    <div class="container">
        <div class="row">
            <div class="col l6 s12">
                <div class="footer-title">Contact</div>
                <?php include 'form.php'; ?>
                <div class="mobile-divider"></div>
            </div>
            <div class="col l4 offset-l1 s12">
                <div class="footer-title">Contactgegevens</div>
                <p>
                    <i class="fa fa-map-marker"></i> Voorburcht 3, 4421EM Kapelle
                    <br><i class="fa fa-phone"></i> 06 30 79 59 97
                    <br><i class="fa fa-skype"></i>  coen.ribbens
                    <br> <i class="fa fa-envelope"></i> cribbens@student.scalda.nl
                </p>
            </div>
        </div>
    </div>
    <div class="footer-copyright">
        <div class="container"> Made with <i class="fa fa-coffee" style="margin-left: 8px;"></i> and <i
                    class="fa fa-bug" style="margin-left: 8px;"></i> <a
                    class="grey-text text-lighten-4 right" href="https://github.com/marc0tjevp/portfolio" target="_blank">Based on portfolio</a>
        </div>
    </div>
</footer>

</body>

</html>
