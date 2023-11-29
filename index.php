<?php
include __DIR__ . '/partials/header.php';
?>


<main class="container">
    <div>
        <?php foreach ($hotels as $hotel) { ?>
            <p>
                <?php echo $hotel["name"] ?>
            </p>
            <p>
                <?php echo $hotel["description"] ?>
            </p>
            <p>
                <?php echo $hotel["vote"] ?>
            </p>
            <p>
                <?php echo $hotel["distance_to_center"] ?>
            </p>
            <span class="btn btn-success">
                <?php echo $hotel["parking"] ?>
            </span>
        <?php } ?>
    </div>
</main>

<?php
include __DIR__ . '/partials/footer.php';
?>