<?php

function addToCart(array $productData)
{
    $cartItems = retrieveCartFromCookie();

    $cartItems = addOrCombineProduct(
        $cartItems,
        $productData
    );
    $expire = time() + (60 * 60 * 24 * 10);
    setcookie('cart', json_encode($cartItems), $expire);
    notify("Product was added to the cart");
    redirect();
}

function addOrCombineProduct(array $cartItems, array $addedProduct): array
{
    $sameProduct = array_filter(
        $cartItems,
        fn($item) => $item['product_id'] === $addedProduct['product_id'] && empty($item['additions'])
    );

    dd($cartItems, $addedProduct, $sameProduct);
}

function retrieveCartFromCookie(): array
{
    return  isset($_COOKIE['cart']) ? json_decode($_COOKIE['cart'], true) : [];
}