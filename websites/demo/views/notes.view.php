<?php require('partials/head.php'); ?>
<?php require('partials/nav.php'); ?>
<?php require('partials/banner.php'); ?>

  <main>
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
      <p>Notes</p>

      <?php foreach ($notes as $note) : ?>
        <li>
          <a href="/note?id=<?= $note['id'] ?>" class="text-blue-500 hover:underline">
            <?= $note['body'] ?>
          </a>
        </li>
        <?php endforeach; ?>
        
      <p class="mt-6">
        <a href="/notes/create" class="text-blue-500 hover:underline">Create Note</a>
      </p>
      
    </div>
  </main>
</div>



</body>
</html>