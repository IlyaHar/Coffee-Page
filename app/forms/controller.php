<?php

match(getRequestType()) {
    'register' => createUserHandler(createUserParams()),
    'login' => authUserHandler(authUserParams()),
    default => redirectBack()
};
