<!DOCTYPE html>
<html lang="fr">
    
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>BOOTSRAP 5</title>
        <!-- CSS only -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" href="design/defaut.css">
    </head>

    <body class="jumbtron">
    <!-- <body class="container bg-light"> -->
    
        <!-- menu navigation responsive -->
        <nav class="navbar navbar-dark bg-dark navbar-expand-xl py-1">
            <div class="navbar-brand">
                <h1 class="text-uppercase text-primary px-3">ça déc'ouaf</h1>
            </div>
            <div class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#menuDeroulant">
                <span class="navbar-toggler-icon"></span>
            </div>
            <div class="collapse navbar-collapse" id="menuDeroulant">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="#prestations" class="nav-link">Prestations</a>
                    </li>
                    <li class="nav-item">
                        <a href="#rayon" class="nav-link">Rayon de déplacements</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">Prendre RDV</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">A propos de moi</a>
                    </li>
                </ul>
            </div>
        </nav>
        <!-- header en-tête du site -->
        <header class="container text-center">
            <p class="">TOILETTAGE CANIN à domicile à Albertville et ses environs.</p>
            <p>Pas de stress pour votre loulou, un gain de temps pour vous!</p>
            <p>Bonjour, je suis Alexia, toiletteuse canin diplômée et championne de France 2010 de toilettage.</p>
        </header>
        <section class="text-center">
            <p>Pour prendre soin de votre animal préféré, Vous n'aurez RIEN A FAIRE, je m'occupe de tout!
            Je me déplace à votre domicile avec du matériel professionnel, table, séchoir et produits.
            Tout ce dont j'ai besoin, c'est un point d'eau et une pièce fermée.
            Confiez-moi votre animal et vous bénéficerez de mon savoir-faire!</p>
        </section>
        <!-- Prestations -->
        <table id="prestations" class="table">
            <h2 class="text-center">PRESTATIONS & TARIFS 2021</h2>
            <thead>
                <tr>
                    <th>Poids</th>
                    <th>Prestation</th>
                    <th>Tarif</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>2 à 5kgs</td>
                    <td>Tonte + bain</td>
                    <td>35€</td>
                    <tr>
                        <td></td>
                        <td>Ciseaux</td>
                        <td>40€</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>Epilation à partir de</td>
                        <td>60€</td>
                    </tr>
                </tr>
                <tr>
                    <td>6à 9kgs</td>
                    <td>Tonte + bain</td>
                    <td>35€</td>
                    <tr>
                        <td></td>
                        <td>Ciseaux</td>
                        <td>40€</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>Epilation à partir de</td>
                        <td>60€</td>
                    </tr>
                </tr>
                <tr>
                    <td>10 à 17kgs</td>
                    <td>Tonte + bain</td>
                    <td>35€</td>
                    <tr>
                        <td></td>
                        <td>Ciseaux</td>
                        <td>40€</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>Epilation à partir de</td>
                        <td>60€</td>
                    </tr>
                </tr>
                <tr>
                    <td>18 à 30kgs</td>
                    <td>Tonte + bain</td>
                    <td>35€</td>
                    <tr>
                        <td></td>
                        <td>Ciseaux</td>
                        <td>40€</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>Epilation à partir de</td>
                        <td>60€</td>
                    </tr>
                </tr>
            </tbody>
        </table>
            
        <!-- LIENS EXTERNES -->
        <section class="liens text-center">
            <div>https://www.purina.fr/chiens/sante-nutrition</div>
            <div>Photo by Charles from Pexels</div>
            <div>Photo de Sam Lion provenant de Pexels</div>
            <div>Photo de Yaroslav Shuraev provenant de Pexels</div>
            <div>Photo by Lum3n from Pexels</div>
            <div>Photo de Simona Kidrič provenant de Pexels</div>
            <div>Photo de Dominika Roseclay provenant de Pexels</div>
            <div>Icons made by
                <a href="https://www.freepik.com" title="Freepik">Freepik</a>
                <a href="https://www.flaticon.com/" title="Flaticon">www.flaticon.com</a>
            </div>
        </section>  
        
        <!-- FOOTER -->
        <!-- <footer class="container d-flex justify-content-center bg-dark text-light py-5"> -->

            <div class="media">
                <img class="align-self-start" style="width:64px"src="design\img\paw.svg" alt="pow dog - patte de chien">
                <div class="media-body">
                    <h3 class="text-dark">Alexia by Ca Déc'Ouaf</h3>
                    <p>Plus qu'un métier, une passion!</p>
                </div>
            </div>
        <!-- </footer> -->

        <!-- JAVASCRIPT -->
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
                integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
                crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
                integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
                crossorigin="anonymous">
        </script>
    </body>
</html>