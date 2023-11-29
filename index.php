<?php
include __DIR__ . '/partials/header.php';
if (isset($_GET["parking"])) {
    $parking = $_GET['parking'];
    // var_dump($parking);
    $hotels = array_filter($hotels, fn($hotel) => $parking === 'all' || $hotel['parking'] == $parking);
}
?>


<main class="container">
    <div class="table-responsive">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Description</th>
                    <th scope="col">Parking</th>
                    <th scope="col">Vote</th>
                    <th scope="col">Distance to center</th>
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
                        <?php if ($hotel["parking"] === true) { ?>
                            <td>
                                <span class="btn btn-success">Disponibile</span>
                            </td>
                        <?php } else { ?>
                            <td>
                                <span class="btn btn-danger">Non Disponibile</span>
                            </td>
                        <?php } ?>
                        <td>
                            <?php echo $hotel["vote"] ?>
                        </td>
                        <td>
                            <?php echo $hotel["distance_to_center"] ?>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>

    </div>
</main>

<?php
include __DIR__ . '/partials/footer.php';
?>