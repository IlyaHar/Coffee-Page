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
    case 'cart':
        require PAGE_DIR . '/cart.php';
        break;




    case 'admin/dashboard':
        conditionRedirect(!isAdmin());
        require ADMIN_PAGE_DIR . '/dashboard.php';
        break;
    case 'admin/products';
          conditionRedirect(!isAdmin());
          require ADMIN_PAGE_DIR . '/products/index.php';
          break;
    case 'admin/products/create';
        conditionRedirect(!isAdmin());
        require ADMIN_PAGE_DIR . '/products/create.php';
        break;
    case (bool) preg_match('/admin\/products\/edit\/(\d+)/' , getUrl(), $match);
          conditionRedirect(!isAdmin());
          $id = end($match);
          $product = dbFind(Tables::Products, $id);

           if (empty($product)) {
               notify('404 - Product not found', 'danger mt-4');
               redirectBack();
           }
          require ADMIN_PAGE_DIR . '/products/edit.php';
        break;
    case 'admin/content':
        conditionRedirect(!isAdmin());

        require ADMIN_PAGE_DIR . '/content/index.php';

        break;

    case (bool) preg_match('/admin\/content\/edit\/(\d+)/' , getUrl(), $match);
          conditionRedirect(!isAdmin());

          $id = end($match);
          $block = dbFind(Tables::Content, $id);

          conditionRedirect(!$block, 'admin/content');

          $file = ADMIN_PAGE_DIR . "/content/blocks/$block[name].php";
          if (!file_exists($file)) {
              notify("[$block[name]] - 404. Can not find request template!", "warning");
              redirectBack();
          }

        require $file;
        break;

    default:
        throw new Exception(getUrl() . ' - not found', code: 404);

}