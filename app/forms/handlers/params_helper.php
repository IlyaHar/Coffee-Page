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

