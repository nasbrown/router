<?php require('views/partials/header.php')?>
<?php require('views/partials/nav.php')?>
    <main>
            <h1><?= $heading ?></h1>
            <div class="form-container">
                <form class="form-container" method="POST">
                <label for="body">Note</label>
                <textarea name="body" id="body" maxlength="150" minlength="15"><?= $_POST['body'] ?? '' ?></textarea>
                <button type="submit">Create</button>
            </form>
            <?php if(!empty($errors) && isset($errors)) : ?>
                <p style="color: red; margin-top: 1rem;"><?= $errors['body'] ?></p>
                <?php endif; ?>
            </div>
    </main>
<?php require('views/partials/footer.php')?>