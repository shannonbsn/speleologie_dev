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
        <a href="/">
            <img src="https://ffspeleo.fr/csx/scripts/resizer.php?filename=CHARTEX%2Flogobighome%2F68%2F99%2Ffiz5cgpdphyq&mime=image%252Fsvg%252Bxml&originalname=ffs-bottom-logo.svg&geometry=640x480%3E" alt="logo">
        </a>
        <nav>
            <a href="{{route('experience')}}"> Expériences</a>
        </nav>
        <div>
            <a href="{{route('login')}}">
                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                    <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0"/>
                    <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1"/>
                  </svg>
                </a>
                {{-- <a href="{{route('register')}}"></a>
                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-person-fill-add" viewBox="0 0 16 16">
                    <path d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7m.5-5v1h1a.5.5 0 0 1 0 1h-1v1a.5.5 0 0 1-1 0v-1h-1a.5.5 0 0 1 0-1h1v-1a.5.5 0 0 1 1 0m-2-6a3 3 0 1 1-6 0 3 3 0 0 1 6 0"/>
                    <path d="M2 13c0 1 1 1 1 1h5.256A4.5 4.5 0 0 1 8 12.5a4.5 4.5 0 0 1 1.544-3.393Q8.844 9.002 8 9c-5 0-6 3-6 4"/>
                  </svg>
                </a> --}}
        </div>
    </section>
    <section id="retourexperienceform">
    <form method="POST" action="{{ route('post.experience') }}">
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
            <input type="text" name="activite" placeholder="Spéléologie">
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
        </label><br> <br> 
        <label for="avis">Avis :</label>
        <select id="avis" name="avis">
            @foreach ($avis_options as $value => $label)
                <option value="{{ $value }}">{{ $label }}</option>
            @endforeach
        </select>
        </select><br><br>
        <button type="submit">Soumettre</button>
        </a>
    </form>
    </section>
    <section id="footer">
        <p>FFS - Fédération Française de Spéléologie</p>
        <p>28 rue Delandine - 69002 Lyon</p>
        <p>Tél : +33 4 72 56 09 63</p>
        <p>Fax : +33 4 78 42 15 98</p>
    </section>
</body>
</html>
