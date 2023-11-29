<?php
include __DIR__ . '/../Model/data.php';
// var_dump($hotels);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>PHP Hotel</title>
</head>

<body>
    <header class="container text-center">
        <h1 class="m-4">PHP Hotel</h1>
        <div class="d-flex justify-content-evenly m-3">
            <form action="index.php" method="GET" class="w-25 gy-2">
                <h6>Filtra per disponibilità parcheggio</h6>
                <div class="d-flex">
                    <select class="form-select" aria-label="Default select example" name="parking">
                        <option value="all">All</option>
                        <option value="0">Non Disponibile</option>
                        <option value="1">Disponibile</option>
                    </select>
                    <button class="btn btn-outline-primary" type="submit">Cerca</button>
                </div>
                <h6>Filtra per voto</h6>
                <div class="d-flex">
                    <input type="text" class="form-control" placeholder="Voto" name="vote">
                    <button class="btn btn-outline-primary" type="submit">Cerca</button>
                </div>
            </form>
        </div>
    </header>