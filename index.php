<?php
include __DIR__ . '/partials/header.php';
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
                    <td>
                        <?php echo $hotel["parking"] ?>
                    </td>
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