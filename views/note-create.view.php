<?php require('partials/header.php')?>
<?php require('partials/nav.php')?>
    <main>
            <h1><?= $heading ?></h1>
            <div class="form-container">
                <form class="form-container" method="POST">
                <label for="body">Note</label>
                <textarea name="body" id="body"></textarea>
                <button type="submit">Create</button>
            </form>
            </div>
    </main>
<?php require('partials/footer.php')?>