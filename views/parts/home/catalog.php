<?php
$products = getProducts();
if (!empty($products)):
    $products = array_chunk($products, 3);
?>
<div class="price" id="catalog">
    <h1 class="price-text"><?= $content['catalog']['title'] ?? '' ?></h1>
    <p class="price-text2"><?= $content['catalog']['description'] ?? '' ?></p>
    <?php foreach ($products as $card): ?>
    <div class="cards-price1">
        <?php foreach($card as $product): ?>
        <div
                data-bs-toggle="modal"
                data-bs-target="#buyProduct"
                data-id="<?= $product['id'] ?>"
                data-qty="<?= $product['quantity'] ?>"
                data-name="<?= $product['name'] ?>"
                data-price="<?= $product['price'] ?>"
                class="card">
            <div class="price-coffee">
                <h4><?= $product['name'] ?></h4>
                <p class="money">$<?= $product['price'] ?></p>
            </div>
            <p class="card-text">
                <?= $product['description'] ?>
            </p>
        </div>
        <?php endforeach; ?>

    </div>

    <?php endforeach; ?>

<?php
endif;