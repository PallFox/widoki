<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <title>Profil</title>
    <style>
        body {
            background-color: black;
            color: white;
            overflow-x: hidden;
        }
    </style>
</head>
<body>
        
<div class="row bg-dark text-white fixed-header" style="width: 100%; height: 60px; position: fixed">
        <div class="col-auto">
            (Logo)
        </div>
        <div class="col-1"></div>
        <div class="col">
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Wpisz szukaną frazę...">
                <button class="btn btn-primary" type="button">Wyszukaj</button>
            </div>
        </div>
        <div class="col-auto">
            <button class="btn btn-light">Ulubione ogłoszenia</button>
            <button class="btn btn-light">Kategorie</button>
            <button class="btn btn-success">Dodaj ogłoszenie</button>
            <button class="btn btn-light">Zaloguj się lub zarejestruj</button>
        </div>
    </div>
</div>

<div class="container mt-4" style="padding-top: 70px;">
    <div class="card p-4">
        <h2 class="text-center text-primary mb-4">Moje konto</h2>

        <div class="scrollable">
            <div class="mb-4 d-flex justify-content-center align-items-center">
                <h4 class="text-bold mx-2">Imie Nazwisko</h4>
            </div>

            <div class="mb-4">
                <h5 class="text-bold">Urodzony:</h5>
                <p class="text-muted">tresc</p>
            </div>

            <div class="mb-4">
                <h5 class="text-bold">Email:</h5>
                <p class="text-primary font-italic">tresc</p>
            </div>

            <div class="mb-4 d-flex align-items-center">
                <h5 class="text-bold me-2">Hasło:</h5>
                <h5 id="PasswordLabel" class="text-bold text-primary">tresc (********)</h5>
                <button id="PasswordButton" class="btn btn-primary ms-2">Pokaż</button>
            </div>

            <div class="mb-4">
                <h5 class="text-bold">Telefon:</h5>
                <p class="text-muted">tresc</p>
            </div>

            <div class="mb-4">
                <h5 class="text-bold">Miasto:</h5>
                <p class="text-muted">tresc</p>
            </div>

            <div class="mb-4">
                <h5 class="text-bold">Oferty pracy do których zaaplikowałeś:</h5>
                <p id="AppliedOffers" class="text-primary"></p>
            </div>
        </div>

        <button class="btn btn-primary btn-block mt-4">Edytuj profil</button>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>