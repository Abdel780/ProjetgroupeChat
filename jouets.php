<?php
    require 'partials/head.php';
    require 'jouets.php';
?>

<?php
    foreach ($jouets as $jouet) {
?>
    <div class="card" style="width: 18rem;">
        <img class="card-img-top" src="public/img/<?= $jouet['picture']?> "alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title"><?= $jouet['name'] ?></h5>
            <p class="card-text"><?= $jouet['price']?></p>
            <a href="/car.php?id=<?= $car['description']?>" class="btn btn-primary">Voir plus</a>
        </div>
    </div>
<?php
}
?>


<?php
    require 'partials/footer.php'
?>
