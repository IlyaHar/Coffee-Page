<?php
require PARTS_DIR . 'header.php';
extract(formSessionData(SESSION_KEYS::REGISTER));
?>
<section id="register" >
            <main class="w-25 m-auto mt-5 pt-5">
                <form class="mt-5" action="/" method="POST">
                    <input type="hidden" name="type" value="register" />
                    <h1 class="h3 mb-3 fw-normal">Registration</h1>
                    <div class="form-floating">
                        <input type="text" class="form-control" id="name" name="name" placeholder="Your name..."
                        value="<?= $fields['name'] ?? '' ?>"       autofocus>
                        <label for="name">Name</label>
                    </div>
                    <?= formError($errors['name'] ?? null) ?>
                    <div class="form-floating">
                        <input type="text" class="form-control mt-3" id="surname" name="surname"
                               value="<?= $fields['surname'] ?? '' ?>"        placeholder="Your surname...">
                        <label for="surname">Surname</label>
                    </div>
                    <?= formError($errors['surname'] ?? null) ?>


                    <div class="form-floating">
                        <input type="email" class="form-control mt-3" id="floatingInput" name="email"
                               value="<?= $fields['email'] ?? '' ?>" placeholder="name@example.com">
                        <label for="floatingInput">Email address</label>
                    </div>
                    <?= formError($errors['email'] ?? null) ?>
                    <div class="form-floating">
                        <input type="password" class="form-control mt-3" id="floatingPassword" name="password" placeholder="Password">
                        <label for="floatingPassword">Password</label>
                    </div>
                    <?= formError($errors['password'] ?? null) ?>
                    <div class="form-floating">
                        <input type="password" class="form-control mt-3" id="password_confirm" name="password_confirm" placeholder="Password Confirmation">
                        <label for="password_confirm">Password Confirmation</label>
                    </div>
                    <?= formError($errors['password_confirm'] ?? null) ?>

                    <button class="btn btn-secondary w-100 py-2 mt-3" type="submit">Create an account</button>
                    <p class="mt-4 mb-3 text-body-secondary">© 2017–2023</p>
                </form>
            </main>
</section>
<?php
require PARTS_DIR . 'footer.php';
