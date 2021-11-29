<?php $title='Fiche-produit'; ?>


<?php ob_start(); ?>

<?php

require("config/commande.php");

$Produit=fiche();

?>
 <!-- Product section-->
 <section class="py-5">
            <div class="container px-4 px-lg-5 my-5">
                <div class="row gx-4 gx-lg-5 align-items-center">
                <?php foreach($Produit as $produits): ?>
                    <div class="col-md-6"><img class="card-img-top mb-5 mb-md-0" src="<?=$produits->image?>" alt="..." /></div>
                    <div class="col-md-6">
                        <div class="small mb-1">SKU: BST-498</div>
                        <h1 class="display-5 fw-bolder"><?=$produits->nom?></h1>
                        <div class="fs-5 mb-5">
                            
                            <span><?=$produits->prix?>€</span>
                        </div>
                        <p class="lead"><?=$produits->description?></p>
                        <div class="d-flex">
                            <input class="form-control text-center me-3" id="inputQuantity" type="num" value="1" style="max-width: 3rem" />
                            <button class="btn btn-outline-dark flex-shrink-0" type="button">
                                <i class="bi-cart-fill me-1"></i>
                                ajouter au panier
                            </button>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>

<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>