<?php
include __DIR__ . '/partials/header.php';
if (isset($_GET["parking"])) {
    $parking = $_GET['parking'];
    // var_dump($parking);
    $hotels = array_filter($hotels, fn($hotel) => $parking === 'all' || $hotel['parking'] == $parking);
}
if (isset($_GET["vote"])) {
    $voto = $_GET['vote'];
    // var_dump($parking);
    $hotels = array_filter($hotels, fn($hotel) => $voto === '' || $hotel['vote'] == $voto);
}
?>


<main class="container">
    <?php if (count($hotels) > 0) { ?>
    <div class="table-responsive">
        <table class="table table-hover table-bordered align-middle">
            <thead class="table-dark">
                <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Description</th>
                    <th scope="col">Parking</th>
                    <th scope="col">Vote</th>
                    <th scope="col">Distance to center in km</th>
                </tr>
            </thead>
            <tbody class="table-group-divider">
                <?php foreach ($hotels as $hotel) { ?>
                <tr>
                    <td>
                        <?php echo $hotel["name"] ?>
                    </td>
                    <td>
                        <?php echo $hotel["description"] ?>
                    </td>
                    <?php if ($hotel["parking"] == true) { ?>
                    <td>
                        <span class="fs-2"><i class="fa-regular fa-square-check text-success"></i></span>
                    </td>
                    <?php } else { ?>
                    <td>
                        <span class="fs-2"><i class="fa-regular fa-rectangle-xmark text-danger"></i></span>
                    </td>
                    <?php } ?>
                    <td>
                        <span>
                            <?php echo $hotel["vote"] ?>/5
                        </span>
                    </td>
                    <td>
                        <span>
                            <?php echo $hotel["distance_to_center"] ?> km
                        </span>
                    </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
    <?php } else { ?>
    <div class="alert alert-danger">Nessun risultato</div>
    <?php } ?>
</main>

<?php
include __DIR__ . '/partials/footer.php';
?>