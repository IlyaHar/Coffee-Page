
<div class="container">
    <div class="row">
        <div class="col-12 gallery-text ">
            <h1><?= $content['gallery']['title'] ?? '' ?></h1>
            <p><?= $content['gallery']['description'] ?? '' ?></p>
        </div>
    </div>
    <div class="row row-cols-2">
        <div class="col-12 col-md-4">
            <div class="row">
                <div class="col-12">
                    <img src="<?= IMAGES_URI ?>/<?= $content['gallery']['images'][0] ?? '' ?>" alt="">
                </div>
                <div class="col-12">
                    <img src="<?= IMAGES_URI ?>/<?= $content['gallery']['images'][1] ?? '' ?>" alt="">
                </div>
            </div>
        </div>
        <div class="col-12 col-md-8">
            <div class="col-12">
                <img src="<?= IMAGES_URI ?>/<?= $content['gallery']['images'][2] ?? '' ?>" alt="">
            </div>
            <div class="col-12">
                <div class="row">
                    <div class="col-12 col-md-6">
                        <img src="<?= IMAGES_URI ?>/<?= $content['gallery']['images'][3] ?? '' ?>" alt="">
                    </div>
                    <div class="col-12 col-md-6">
                        <img src="<?= IMAGES_URI ?>/<?= $content['gallery']['images'][4] ?? '' ?>" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>