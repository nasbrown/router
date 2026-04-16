<?php require('partials/header.php')?>
<?php require('partials/nav.php')?>
    <main>
            <h1><?= $heading ?></h1>
                 <?php foreach($notes as $note) : ?>
                    <a href="/router/note?id=<?= $note['id'] ?>">
                        <li class="notes"><?= $note['body'] ?></li>
                    </a>
                <?php endforeach; ?>
          <div>
                    <a href="/router/create-note" class="note-btn">Create Note</a>
          </div>
    </main>
<?php require('partials/footer.php')?>