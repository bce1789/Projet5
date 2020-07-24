<div class="header-bar">
    <nav class="navbar navbar-light navbar-expand-md">
        <div class="container-fluid"><img id="logo-site" src="assets/img/logo.png" alt="logo"><a class="navbar-brand" href="/P5_benoit_coste/index.php"><strong>Benoit Coste </strong>Developpeur</a>
        <button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1">
            <span class="navbar-toggler-icon"></span>
        </button>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item" role="presentation"><a class="nav-link" href="/P5_benoit_coste/index.php">Accueil</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="/P5_benoit_coste/index.php?action=contact">Contact</a></li>
                    <?php if (isset($_SESSION['auth'])) { ?>
                        <li class="nav-item" role="presentation"><a class="nav-link" href="/P5_benoit_coste/index.php?action=logout">Déconnexion</a></li>
                    <?php } else { ?>
                        <li class="nav-item" role="presentation"><a class="nav-link" href="/P5_benoit_coste/index.php?action=login">Connexion</a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link" href="/P5_benoit_coste/index.php?action=signup">S'enregistrer</a></li>
                    <?php }
                    if (isset($_SESSION['auth']->isAdmin)) { ?>
                        <li class="nav-item" role="presentation"><a class="nav-link" href="/P5_benoit_coste/index.php?action=admin">Admin</a></li>
                    <?php } ?>
                </ul>
            </div>
        </div>
    </nav>
</div>
<div class="container">
    <?php if (isset($_SESSION['flash'])) : ?>
        <?php foreach ($_SESSION['flash'] as $type => $message) : ?>
            <div class="alert alert-<?= $type; ?>">
                <?= $message; ?>
            </div>
        <?php endforeach; ?>
        <?php unset($_SESSION['flash']); ?>
    <?php endif; ?>
</div>