<?php
$title = 'admin';
$meta = '';
ob_start(); ?>
<p></p>
<div class="container">
  <div class="jumbotron background-contact-list">
    <div class="bootstrap_datatables">
      <div class="container py-5">
        <header class="text-center text-black">
          <h2>Liste des contacts</h2>
        </header>
        <?php
        foreach ($messagePages as $message) {
        ?>
          <div class="row py-5">
            <div class="col-lg-10 mx-auto">
              <div class="card rounded shadow border-0">
                <div class="card-body p-5 bg-white rounded">
                  <div class="table-responsive">
                    <table id="example" style="width:100%" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>Nom</th>
                          <th>Email</th>
                          <th class="table-none">Localisation</th>
                          <th class="table-none">Dâte</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td><?= $message->username ?></td>
                          <td><?= $message->email ?></td>
                          <td class="table-none"><?= $message->locate  ?></td>
                          <td class="table-none"><?= $message->dateAjout ?></td>
                        </tr>
                      </tbody>
                    </table>
                    <a href="/P5_benoit_coste/index.php?action=admin/message&id=<?php echo htmlspecialchars($message->id);?>"class="btn-table btn btn-primary ml-auto">Voir message</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        <?php } ?>
        <?php  if ($currentPage != 1) { ?>
        <a href="index.php?action=admin&page=<?= $currentPage - 1 ?>" class="btn btn-primary ml-auto"><</a>
        <?php }  if (count($messagePages) == $perPage) { ?>
        <a href="index.php?action=admin&page=<?= $currentPage + 1 ?>" class="btn btn-primary ml-auto">></a>
       <?php } ?>
      </div>
    </div>
  </div>
</div>
<?php $content = ob_get_clean(); ?>
<?php require('views/template.php'); ?>