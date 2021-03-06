<?php
$title = 'adminMessage';
$meta = '';
ob_start(); ?>
<div class="container">
  <div class="jumbotron">
    <div class="bootstrap_datatables">
      <div class="container py-5">
        <header class="text-center text-black">
          <h3>Message de : <?= $messageFromUser->username; ?></h3>
          <p>Le : <?= $messageFromUser->dateAjout; ?></p>
        </header>
        <div class="admin-message">
          <p>
            <?php 
             echo htmlspecialchars($messageFromUser->message); ?>
          </p>
          <button>
            <a href="/P5_benoit_coste/index.php?action=admin/message/delete&id=<?php echo htmlspecialchars($messageFromUser->id); ?>">Supprimer</a>
          </button>
        </div>
      </div>
    </div>
  </div>
</div>
<?php $content = ob_get_clean(); ?>
<?php require('views/template.php'); ?>