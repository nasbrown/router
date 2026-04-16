<?php require('partials/header.php')?>
<?php require('partials/nav.php')?>
    <main>
            <h1><?= $heading ?></h1>
            <p><?= $note['body'] ?></p>
             <p><a href="/router/notes" class="notes">go back...</a></p>
    </main>
<?php require('partials/footer.php')?>