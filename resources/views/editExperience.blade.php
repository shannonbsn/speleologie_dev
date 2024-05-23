<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Modifier</title>
    <link rel="stylesheet" href="./public/style.css">
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

    <h1>Éditer l'Expérience</h1>
    <form action="{{ route('modification.update', ['id' => $editexperience->id]) }}" method="POST">
        @csrf
        <label for="email">Email:</label>
        <input type="email" name="email" value="{{ $editexperience->email }}" required>
        <label for="date">Date:</label>
        <input type="date" name="date" value="{{ $editexperience->date }}" required>
        <label for="activite">Activité:</label>
        <input type="text" name="activite" value="{{ $editexperience->activite }}" required>
        <label for="site">Site:</label>
        <input type="text" name="site" value="{{ $editexperience->site }}" required>
        <label for="titre">Titre:</label>
        <input type="text" name="titre" value="{{ $editexperience->titre }}" required>
        <label for="description">Description:</label>
        <textarea name="description" required>{{ $editexperience->description }}</textarea>
        <label> 
            <p>Souhaitez-vous recevoir des e-mails de la fédération française de la spéléologie ?</p>
            <input type="radio" name="reception_email" value="oui" checked> 
                Oui 
        </label> <br> 
        <label> 
            <input type="radio" name="reception_email" value="non"> 
                Non
        </label> <br><br>
        <label for="avis">Avis:</label>
        <textarea name="avis" required>{{ $editexperience->avis }}</textarea> <br><br>
        @method('PUT')
        <input type="hidden" name="valide" value="true">
        <button type="submit">Valider</button>
    </form>
    <section id="footer">
        <p>FFS - Fédération Française de Spéléologie</p>
        <p>28 rue Delandine - 69002 Lyon</p>
        <p>Tél : +33 4 72 56 09 63</p>
        <p>Fax : +33 4 78 42 15 98</p>
    </section>
</body>
</html>
