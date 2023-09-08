<?php

switch (getUrl()) {
    case '';
    require PAGE_DIR . '/home.php';
    break;
    case 'register':
        conditionRedirect(isAuth());
        require_once  PAGE_DIR . '/auth/register.php';
            break;
    case 'login':
        conditionRedirect(isAuth());
        require_once  PAGE_DIR . '/auth/login.php';
        break;
    case 'logout':
        conditionRedirect(!isAuth());
        removeUser();
        redirect();
        break;
    default:
        throw new Exception(getUrl() . ' - not found', code: 404);

}