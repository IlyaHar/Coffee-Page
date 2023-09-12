
<?php $footer = $commonBlocks['footer'] ?? []; ?>
<footer>
    <div class="container">
        <div class="row">
            <div class="col-12 d-flex footer-container">
                <section>

                <p class="about-us "><?= $footer['about']['title'] ?? '' ?></p>


                <p class="foot-text">
                    <?= $footer['about']['description'] ?? '' ?>

                </p>
                <p class="foot-text">
                    <?= $footer['about']['copyright'] . ' |' ?? '' ?> This template is made with <br><i class="far fa-heart" aria-hidden="true" style="color: #b68834;"></i> by <span style="color: #b68834;">Colorlib</span>
                </p>
                </section>
                <section class="search-text">
                    <p class="news">
                        <?= $footer['form']['title'] ?? '' ?>
                    </p>
                    <p class="stay">
                        <?= $footer['form']['description'] ?? '' ?>
</p>
               <div class="search-container">
                    <input placeholder="Enter Email" class="search" type="search">
                    <button class="foot-btn">
                        <i class="fas fa-long-arrow-alt-right" aria-hidden="true" style="color: white;"></i>
                    </button>
                </div>
                </section>
                <?php if ($footer['follow']['socials']): ?>

                <section class="social">
                    <p class="follow">
                        <?= $footer['follow']['title'] ?? '' ?>
</p>
                    <p class="let">
                        <?= $footer['follow']['description'] ?? '' ?>
</p>
                    <?php foreach ($footer['follow']['socials'] as $social): ?>
                        <a href="<?= $social['href'] ?>">
                            <i style="color: silver;" class="fab <?= $social['icon'] ?>"></i>
                        </a>
                    <?php endforeach; ?>

                </section>
            </div>
            <?php endif; ?>

        </div>
    </div>
</footer>
        </div>
<?php include_once PARTS_DIR . 'modals/buy_product.php'; ?>
<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<script src="<?= ASSETS_URI ?>/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="<?= ASSETS_URI ?>/js/script.js"></script>
<script src="<?= ASSETS_URI ?>/js/buy_product.js"></script>
</body>
</html>
</html>