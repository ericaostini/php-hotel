<?php
include __DIR__ . '/../Model/data.php';
// var_dump($hotels);
if (isset($_GET["parking"])) {
    $parking = $_GET['parking'];
    var_dump($parking);
}
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
    <header class="container">
        <h1>PHP Hotel</h1>
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
        </form>
    </header>