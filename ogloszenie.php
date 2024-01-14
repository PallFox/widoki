<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <title>Ogłoszenie</title>
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

<div class="container mt-4" style="padding-top: 70px;">
    <div class="card p-4">
        <h2 class="text-center text-success mb-4">Szczegóły Oferty</h2>

        <div class="scrollable">
            <div class="mb-4">
                <h5 class="text-bold">Nazwa Stanowiska:</h5>
                <p class="text-muted">tresc</p>
            </div>

            <div class="mb-4">
                <h5 class="text-bold">Poziom Stanowiska:</h5>
                <p class="text-muted">tresc</p>
            </div>

            <div class="mb-4">
                <h5 class="text-bold">Korzyści:</h5>
                <p class="text-muted">tresc</p>
            </div>

            <div class="mb-4">
                <h5 class="text-bold">O Firmie:</h5>
                <p class="text-muted">tresc</p>
            </div>
        </div>

        <button class="btn btn-primary btn-block mt-4" disabled>Zaloguj się aby aplikować</button>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>