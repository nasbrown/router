<?php require('views/partials/header.php')?>
<?php require('views/partials/nav.php')?>
    <main>
            <h1><?= $heading ?></h1>
            <p><?= htmlspecialchars($note['body']) ?></p>
             <p><a href="/router/notes" class="notes">go back...</a></p>
    </main>
<?php require('views/partials/footer.php')?>