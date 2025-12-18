<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Creation de livraison</title>
<link rel="stylesheet" href="assets/bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">
</head>

<body class="bg-light">
<div class="container-fluid py-4">
    <div class="row g-4">
        <div class="col-lg-7">
            <h3 class="mb-4 text-primary fw-bold">Produits Disponibles</h3>
            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-3">
            <?php foreach($products as $p)  {
            ?>
            <div class="col">
            <div class="card h-100 shadow-sm hover-shadow" style="max-width: 320px">
            <img src="images/<?= $p['img'] ?>" class="card-img-top" alt="Product Image" style="height: 200px; object-fit: cover;">
            <div class="card-body">
            <h5 class="card-title"><?= $p['nom'] ?></h5>
            <div class="d-flex justify-content-between align-items-center mb-2">
            <span class="h5 mb-0 text-success fw-bold">$<?= $p['prix'] ?></span>
            <div>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-half text-warning"></i>
            </div>
            </div>
            <small class="text-muted"><i class="bi bi-box-seam"></i> Masse: <?= $p['masse']?> kg</small>
            </div>
            <div class="card-footer d-flex justify-content-between bg-light product-card" id="div-product<?= $p['id'] ?>">
            <button class="btn btn-primary btn-sm product-button" data-id="<?= $p['id'] ?>">
            <i class="bi bi-plus-lg"></i>
            </button>
            <button class="btn btn-danger btn-sm delete-product-button" data-id="<?= $p['id'] ?>">
            <i class="bi bi-dash-lg"></i>
            </button>
            </div>
            </div>
        </div>
    <?php
                }?>
    </div>
</div>
<div class="col-lg-5">
<div class="card shadow">
<div class="card-header bg-primary text-white">
<h2 class="h4 mb-0">Formulaire de livraison de coli avec plusieurs produits</h2>
</div>
<div class="card-body">
<form id="form-livraison">
<div class="mb-3">
<label for="entrepot_depart" class="form-label fw-bold">Entrepot depart</label>
<select name="id_entrepot" class="form-select">
<?php foreach($entrepots as $entrepot) {
?>
<option value="<?= $entrepot['id'] ?>"><?= $entrepot['adr_entrepot'] ?></option>
<?php
                    } ?>
</select>
</div>
<div class="mb-3">
<label for="adr_destination" class="form-label fw-bold">Adresse destination</label>
<input type="text" name="adr_destination" class="form-control" placeholder="Entrez l'adresse de destination">
</div>
<div class="mb-3">
<label for="voiture" class="form-label fw-bold">Voiture</label>
<input type="text" name="voiture" class="form-control" placeholder="Modèle de voiture">
</div>
<div class="mb-3">
<label for="chauffeur" class="form-label fw-bold">Chauffeur</label>
<select name="id_chauffeur" class="form-select">
<?php foreach($chauffeurs as $chauffeur) {
?>
<option value="<?= $chauffeur['id'] ?>"><?= $chauffeur['nom'] ?></option>
<?php
                    } ?>
</select>
</div>
<div class="mb-3">
<label for="salaire" class="form-label fw-bold">Salaire chauffeur</label>
<div class="input-group">
<span class="input-group-text">$</span>
<input type="number" name="salaire_chauffeur" class="form-control" placeholder="0.00">
</div>
</div>
<div class="mb-3">
<label for="date_livraison" class="form-label fw-bold">Date livraison</label>
<input type="date" name="date_livraison" class="form-control">
</div>
<div class="d-grid">
<button class="btn btn-primary btn-lg" type="submit">
<i class="bi bi-truck"></i> Commencer livraison
</button>
</div>
</form>
</div>
</div>
</div>
</div>
</div>
<script src="/js/script-livraison.js" type="text/javascript" nonce="<?= htmlspecialchars($nonce)?>">
</script>
<style>
.hover-shadow {
    transition: box-shadow 0.3s ease;
}
.hover-shadow:hover {
    box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15) !important;
}
</style>
</body>
</html>