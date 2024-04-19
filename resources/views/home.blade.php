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
            <a href="{{route('experience')}}"> Expérience</a>
        </nav>
        <div id="svg">
            <a href="/login">
                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                    <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0"/>
                    <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1"/>
                  </svg>
                </a>
                <a href="/register"></a>
                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-person-fill-add" viewBox="0 0 16 16">
                    <path d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7m.5-5v1h1a.5.5 0 0 1 0 1h-1v1a.5.5 0 0 1-1 0v-1h-1a.5.5 0 0 1 0-1h1v-1a.5.5 0 0 1 1 0m-2-6a3 3 0 1 1-6 0 3 3 0 0 1 6 0"/>
                    <path d="M2 13c0 1 1 1 1 1h5.256A4.5 4.5 0 0 1 8 12.5a4.5 4.5 0 0 1 1.544-3.393Q8.844 9.002 8 9c-5 0-6 3-6 4"/>
                  </svg>
                </a>
        </div>
    </section>
    <section id="experienceaccueil">
        <div>
            <h1>Retour d'expériences</h1>
            <table>
                <tr>
                    <th>E-mail</th>
                    <th>Date de l'évènement</th>
                    <th>Nom de l'activité</th>
                    <th>Nom du site</th>
                    <th>Titre du retour</th>
                    <th>Description du retour d'expérience</th>
                    <th>Avis</th>
                </tr>
    
                @foreach($publishedpost as $experience)
                <tr>
                    <td>{{ $experience->email }}</td>
                    <td>{{ $experience->date }}</td>
                    <td>{{ $experience->activite }}</td>
                    <td>{{ $experience->site }}</td>
                    <td>{{ $experience->titre }}</td>
                    <td>{{ $experience->description }}</td>
                    <td>{{ $experience->avis }}</td>
                </tr>
                @endforeach 
            </table>
    </section>
    <section id="footer">
        <p>FFS - Fédération Française de Spéléologie</p>
        <p>28 rue Delandine - 69002 Lyon</p>
        <p>Tél : +33 4 72 56 09 63</p>
        <p>Fax : +33 4 78 42 15 98</p>
    </section>
</body>
</html>