<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Accueil</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    <section id="header">
        <a href="">
            <img src="https://ffspeleo.fr/csx/scripts/resizer.php?filename=CHARTEX%2Flogobighome%2F68%2F99%2Ffiz5cgpdphyq&mime=image%252Fsvg%252Bxml&originalname=ffs-bottom-logo.svg&geometry=640x480%3E" alt="logo">
        </a>
        <nav>
            <a href="{{route('experience')}}"> Reccueils</a>
            <a href="{{route('experience')}}"> Modifier</a>
            <a href="{{route('experience')}}"> Reccueils</a>
        </nav>
        <div>
            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0"/>
                <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1"/>
              </svg>
        </div>
    </section>
    <section id="formulaireaccueil">
    <form method="POST" action="{{route('experience')}}">
        @csrf
        <p>
            <label for="email">E-mail</label><br>
            <input type="text" name="email" placeholder="sha@mds.org">
        </p>
        <p>
            <label for="date_de_naissance">Date de l'évènement</label><br>
            <input type="date" name="date" placeholder="2024-02-04">
        </p>
        <p>
            <label for="nom">Nom de l'activité</label><br>
            <input type="text" name="nom" placeholder="Spéléologie">
        </p>
        <p>
            <label for="nom">Nom du site</label><br>
            <input type="text" name="site" placeholder="Terrain 2">
        </p>
        <p>
            <label for="nom">Titre du retour</label><br>
            <input type="text" name="titre" placeholder="Problème avec ma lampe">
        </p>
        <p>
            <label for="nom">Description du retour d'expérience</label><br>
            <input type="text" name="description" placeholder="Expérience">
        </p>
        <label> 
            <p>Souhaitez-vous recevoir des e-mails de la fédération française de la spéléologie ?</p>
            <input type="radio" name="reception_email" value="oui" checked> 
                Oui 
        </label> <br> 
        <label> 
            <input type="radio" name="reception_email" value="non"> 
                Non
        </label>
        <label for="avis">SELECT :</label><br>
        <select id="avis" name="Avis">
            <option value="peu_satisfait">Peu satisfait</option>
            <option value="pas_satisfait">Pas satisfait</option>
            <option value="moyennement_satisfait">Moyennement satisfait</option>
            <option value="satisfait">Satisfait</option>
            <option value="tres_satisfait">Très satisfait</option>
        </select><br><br>
        <a href="{{route('experience')}}">
        <button type="submit">Soumettre</button>
        </a>
    </form>
    </section>
</body>
</html>
