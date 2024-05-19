<?php require ('partial/header.php')?>
<?php require ('partial/nav.php')?>
<?php require('partial/banner.php') ?>
  <main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">

  <p class="mb-6">
    <a href="/notes?id=<?= $notes['user_id']?>" class="text-blue-600 hover:underline "> Go back...</a>
  </p>

   <p> <?=htmlspecialchars($notes['Discription'])?></p>
  </div>
  </main>
  <?php require ('partial/foter.php')?>