
<section class="banner" id="banner">
    <div class="container">
        <div class="row">
            <div class=" banner-content col-12 col-md-9 col-xl-6 ">
                <h3 class="banner-caption"><?= $content['banner']['title'] ?? '' ?></h3>
                <h1 class="banner-text">
                    <?= $content['banner']['subtitle'] ?? '' ?>
                </h1>
                <?php if ($content ['banner']['link']): ?>
                <a href="<?= $content ['banner']['link']['href'] ?>" class="banner-btn btn-info"><?= $content ['banner']['link']['title'] ?></a>
                <?php endif ?>
            </div>
        </div>
    </div>
</section>