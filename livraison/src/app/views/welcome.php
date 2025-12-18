<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil - E-commerce</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="assets/bootstrap.min.css">
</head>
<body>
    <header class="bg-primary shadow-sm">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-dark">
                <a href="#" class="logo navbar-brand fw-bold fs-3">E-Varotra</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="menu navbar-nav ms-auto">
                        <li class="nav-item"><a href="#" class="nav-link active">Accueil</a></li>
                        <li class="nav-item"><a href="/ajout_livraison" class="nav-link">Add livraison</a></li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>
    <main class="py-5">
        <div class="container">
            <div class="row mb-4">
                <div class="col-12">
                    <h1 class="text-center display-4 fw-bold text-primary mb-4">Liste des livraisons</h1>
                </div>
            </div>
            <section class="product-list">
                <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
                    <?php
                        foreach($liste_livraison as $livraison) {
                    ?>
                    <div class="col">
                        <div class="card h-100 shadow-sm">
                            <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
                                <span class="fw-bold">Livraison #<?= $livraison['id_livraison'];?></span>
                                <span class="badge bg-light text-dark"><?= $livraison['desc_etat'];?></span>
                            </div>
                            <div class="card-body">
                                <div class="mb-3">
                                    <h6 class="text-muted mb-1">Adresse Entrepot</h6>
                                    <p class="mb-0"><?= $livraison['adr_entrepot'];?></p>
                                </div>
                                <div class="mb-3">
                                    <h6 class="text-muted mb-1">Adresse Destination</h6>
                                    <p class="mb-0"><?= $livraison['adr_destination'];?></p>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-6">
                                        <h6 class="text-muted mb-1">Voiture</h6>
                                        <p class="mb-0"><?= $livraison['voiture'];?></p>
                                    </div>
                                    <div class="col-6">
                                        <h6 class="text-muted mb-1">Chauffeur</h6>
                                        <p class="mb-0"><?= $livraison['chauffeur'];?></p>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-6">
                                        <h6 class="text-muted mb-1">Salaire chauffeur</h6>
                                        <p class="mb-0 text-success fw-bold"><?= $livraison['salaire_chauffeur'];?></p>
                                    </div>
                                    <div class="col-6">
                                        <h6 class="text-muted mb-1">Date livraison</h6>
                                        <p class="mb-0"><?= $livraison['date_livraison'];?></p>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer bg-light">
                                <a href="<?= Flight::request()->getBaseUrl() ?>/modif/<?= $livraison['id_livraison']?>" class="btn btn-warning btn-sm w-100">
                                    Modifier
                                </a>
                            </div>
                        </div>
                    </div>
                    <?php
                        }
                    ?>
                </div>
                <!-- Ajoutez d'autres produits ici -->
            </section>
        </div>
    </main>
    <footer class="bg-dark text-white text-center py-3 mt-5">
        <div class="container">
            <p class="mb-0">&copy; 2025 E-Varotra</p>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>