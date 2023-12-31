<?php

function createUserParams(): array
{
    $options = [
        'name' => [
            'flags' => FILTER_CALLBACK,
            'filter' => 'is string'
        ],

        'surname' => [
            'flags' => FILTER_CALLBACK,
            'filter' => 'is string'
        ],

        'email' => FILTER_VALIDATE_EMAIL,

        'password' => [
            'flags' => FILTER_CALLBACK,
            'filter' => 'is string'
        ],

        'password_confirm' => [
            'flags' => FILTER_CALLBACK,
            'filter' => 'is string'
        ],
    ];



    return filter_input_array(INPUT_POST, $options);

}

function authUserParams(): array
{
    $options = [
        'email' => FILTER_VALIDATE_EMAIL,

        'password' => [
            'flags' => FILTER_CALLBACK,
            'filter' => 'is string'
        ],

    ];

    return filter_input_array(INPUT_POST, $options);
}

function addToCartParams(): array
{
    $options = [
        'product_id' => FILTER_VALIDATE_INT,
        'quantity' => FILTER_VALIDATE_INT,
        'additions' => [
            'flags' => FILTER_REQUIRE_ARRAY,
            'filter' => FILTER_VALIDATE_INT
        ],
        'additions_qty' => [
            'flags' => FILTER_REQUIRE_ARRAY,
            'filter' => FILTER_VALIDATE_INT
        ]
    ];

    return filter_input_array(INPUT_POST, $options);
}

function removeCartItemParam(): array
{
    $options = [
        'product_key' => FILTER_VALIDATE_INT,
        'parent_key' => FILTER_VALIDATE_INT
    ];

    return filter_input_array(INPUT_POST, $options);
}