<?php require('partials/head.php'); ?>
<?php require('partials/nav.php'); ?>
<?php require('partials/banner.php'); ?>

  <main>
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
    <p class="mb-5">
      <a href="/notes" class="text-blue-500 underline">Back to Home</a>
    </p>
    <p>
      <?= htmlspecialchars($note['body']) ?>
    </p>

        
   <form class="mt-6" method="POST">
      <input type="hidden" name="id" value="<?= $note['id'] ?>">
      <button class="text-sm text-red-500">Delete</button>
   </form>

    </div>
  </main>
</div>



</body>
</html>