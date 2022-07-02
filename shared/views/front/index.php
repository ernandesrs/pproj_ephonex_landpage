<?= $v->layout("layouts/front") ?>

<?= $v->start("content") ?>

<!-- banner -->
<?php
if ($banner ?? null) {
    include __DIR__ . "/includes/banner-section.php";
}
?>

<!-- apresentação -->
<section class="section" id="pp0">
    <div class="container pt-5">
        <div class="row py-5 cards-list">
            <div class="col-12 col-md-6 p-5 mb-4 bottom">
                <div class="card card-body card-item primary">
                    <div class="icon-area"><?= icon_elem("bluetooth") ?></div>
                    <div class="content">
                        <h3 class="title">bluetooth 5.0</h3>
                        <p class="description">Aenean placerat, in vulputateurna eu arcu morbi mattis felis at nunc. Duis viverra diam.</p>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-6 p-5 mb-4 top">
                <div class="card card-body card-item primary-dark">
                    <div class="icon-area"><?= icon_elem("soundwave") ?></div>
                    <div class="content">
                        <h3 class="title">som de alta qualidade</h3>
                        <p class="description">Aenean placerat, in vulputateurna eu arcu morbi mattis felis at nunc. Duis viverra diam.</p>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-6 p-5 mb-4 bottom">
                <div class="card card-body card-item secondary-light">
                    <div class="icon-area"><?= icon_elem("lightning") ?></div>
                    <div class="content">
                        <h3 class="title">baixa latência</h3>
                        <p class="description">Aenean placerat, in vulputateurna eu arcu morbi mattis felis at nunc. Duis viverra diam.</p>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-6 p-5 mb-4 top">
                <div class="card card-body card-item secondary-dark">
                    <div class="icon-area"><?= icon_elem("bateryCharging") ?></div>
                    <div class="content">
                        <h3 class="title">longa duração e rápido carregamento</h3>
                        <p class="description">Aenean placerat, in vulputateurna eu arcu morbi mattis felis at nunc. Duis viverra diam.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?= $v->end("content") ?>


<?= $v->start("scripts") ?>

<script src="<?= asset("js/rellax.min.js") ?>"></script>
<script>
    var bannerImageOne = new Rellax('#banner-content', {
        speed: 4,
    });
    var bannerImageTwo = new Rellax('#banner-image-two', {
        speed: -2,
    });
    var bannerImageThree = new Rellax('#banner-image-three', {
        speed: 6,
    });
    var bannerImageThree = new Rellax('#banner-image-three', {
        speed: 6,
    });
</script>

<?= $v->end("scripts") ?>