<?php
$title = 'admin';
ob_start(); ?>
<div class="container">
  <div class="jumbotron background-contact-list">
    <div class="bootstrap_datatables">
      <div class="container py-5">
        <header class="text-center text-black">
          <h2>Liste des contacts</h2>
        </header>
        <?php
        foreach ($dataUser as $data) {
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
                          <th>Localisation</th>
                          <th>Dâte</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td><?= $data->username ?></td>
                          <td><?= $data->email ?></td>
                          <td><?= $data->locate  ?></td>
                          <td><?= $data->dateAjout ?></td>
                        </tr>
                      </tbody>
                    </table>
                    <button>
                    <a href="/P5_benoit_coste/index.php?action=admin/message&id=<?php echo $data->id; ?>">Voir message</a>
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        <?php } ?>
      </div>
    </div>

  </div>
</div>


<?php $content = ob_get_clean(); ?>
<?php require('views/template.php'); ?>