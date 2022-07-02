<div class="banner">
    <div class="container">
        <div class="banner-content">
            <div class="row">
                <div class="col-12 col-lg-6 col-xl-8">
                    <div class="row pb-3">
                        <div class="col-8">
                            <p class="mb-0 subtitle"><?= $banner->subtitle ?></p>
                        </div>
                        <div class="col-12">
                            <h2 class="title"><?= $banner->title ?></h2>
                        </div>
                    </div>
                    <div>
                        <?php foreach ($banner->links as $btnLink) : ?>
                            <a class="btn <?= $btnLink->style ?> px-5" href="<?= $btnLink->url ?>" title="<?= $btnLink->title ?>" target="<?= $btnLink->target ?>">
                                <?= $btnLink->icon ? icon_elem($btnLink->icon) : null ?> <?= $btnLink->text ?>
                            </a>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="banner-ilustrations">
        <?php foreach ($banner->images as $bImage) : ?>
            <img class="image <?= $bImage->class ?>" <?= !empty($bImage->id) ? "id='{$bImage->id}'" : null ?> src="<?= url("shared/" . $bImage->path) ?>" alt="<?= $bImage->name ?>">
        <?php endforeach; ?>
    </div>
</div>