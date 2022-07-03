<?= $v->layout("layouts/front") ?>

<?= $v->start("content") ?>

<!-- banner -->
<?php
if ($banner ?? null) {
    include __DIR__ . "/includes/banner-section.php";
}
?>

<!-- section 01 -->
<section class="section" id="pp0">
    <div class="container">
        <div class="row cards-list">
            <div class="col-12 col-md-6 p-2 p-md-4 p-lg-5 mb-2 bottom">
                <div class="card card-body card-item primary">
                    <div class="icon-area"><?= icon_elem("bluetooth") ?></div>
                    <div class="content">
                        <h3 class="title">bluetooth 5.0</h3>
                        <p class="description">Aenean placerat, in vulputateurna eu arcu morbi mattis felis at nunc. Duis viverra diam.</p>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-6 p-2 p-md-4 p-lg-5 mb-2 top">
                <div class="card card-body card-item primary-dark">
                    <div class="icon-area"><?= icon_elem("soundwave") ?></div>
                    <div class="content">
                        <h3 class="title">som de alta qualidade</h3>
                        <p class="description">Aenean placerat, in vulputateurna eu arcu morbi mattis felis at nunc. Duis viverra diam.</p>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-6 p-2 p-md-4 p-lg-5 mb-2 bottom">
                <div class="card card-body card-item secondary-light">
                    <div class="icon-area"><?= icon_elem("lightning") ?></div>
                    <div class="content">
                        <h3 class="title">baixa latência</h3>
                        <p class="description">Aenean placerat, in vulputateurna eu arcu morbi mattis felis at nunc. Duis viverra diam.</p>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-6 p-2 p-md-4 p-lg-5 mb-2 top">
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

<!-- section 02 -->
<section class="section section-two d-flex align-items-center" id="pp1" style="background-image: url(<?= url("/shared/images/front/background_02.png") ?>);">
    <div class="container">
        <!-- 1115 -->
        <div class="row justify-content-center">
            <div class="col-12 col-lg-8">
                <h2 class="title">Alta qualidade e baixo preço!</h2>
                <p class="subtitle">
                    Aenean placerat, in vulputate urna eu arcu morbi mattis felis at
                    nunc. Aenean placerat. In vulputate urna eu arcu. Aliquam erat volutpat.
                    Suspendisse potenti urna eu arcu morbi mattis.
                </p>
            </div>
            <div class="col-12 col-lg-8 d-flex flex-column justify-content-center align-items-center">
                <a class="pb-3" href="">Não quero perder tempo</a>
                <a class="btn btn-primary" href="">Me leve para loja</a>
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