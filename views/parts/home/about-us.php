
<div class="container" id="about">
    <div class="row">
        <div class="col-12 d-flex about">
            <div class="video-container">
                <img src="<?= IMAGES_URI ?>/<?= $content['about_us']['video']['img'] ?? '' ?>" >
                <img class="play-icon" href="<?= $content['about_us']['video']['source'] ?? '' ?>" src="assets/img/play-icon.png" alt="play">
            </div>
            <section class="px-5 mt-5 about-section">
                <span class="about-caption">
                    <?= $content['about_us']['text']['subtitle'] ?? '' ?>
                </span>
                <h2 class="about-text">
                    <?= $content['about_us']['text']['title'] ?? '' ?>
                </h2>
                <p class="about-text2">
                    <?= $content['about_us']['text']['quote'] ?? '' ?>
                </p>
                <p class="about-text3">
                    <?= $content['about_us']['text']['description'] ?? '' ?>
                </p>

                <img src="<?= IMAGES_URI ?>/<?= $content['about_us']['text']['img'] ?? '' ?>" >
            </section>
        </div>
    </div>
</div>
