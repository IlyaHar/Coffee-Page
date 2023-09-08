<?php
require PARTS_DIR . 'header.php';
extract(formSessionData(SESSION_KEYS::LOGIN));
?>
    <section id="register" >
        <main class="w-25 m-auto mt-5 pt-5">
            <form class="mt-5" action="/" method="POST">
                <?= formError($error ?? null) ?>
                <input type="hidden" name="type" value="login" />
                <h1 class="h3 mb-3 fw-normal">Sign In</h1>
                <div class="form-floating">
                    <input type="email" class="form-control mt-3" id="floatingInput" name="email" placeholder="name@example.com" autofocus
                    value="<?= $fields['email'] ?? '' ?>">

                    <label for="floatingInput">Email address</label>
                </div>
                <?= formError($errors['email'] ?? null) ?>
                <div class="form-floating">
                    <input type="password" class="form-control mt-3" id="floatingPassword" name="password" placeholder="Password">
                    <label for="floatingPassword">Password</label>
                </div>
                <?= formError($errors['password'] ?? null) ?>
                <button class="btn btn-secondary w-100 py-2 mt-3" type="submit">Sign In</button>
                <p class="mt-4 mb-3 text-body-secondary">© 2017–2023</p>
            </form>
        </main>
    </section>
<?php
require PARTS_DIR . 'footer.php';
