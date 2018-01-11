<?php
include_once dirname(__FILE__) . "./../../inc/head.php";
?>

<?php if (!isset($product) OR $product === false): ?>
<p>Il n'y a aucun produit</p>
<?php endif; ?>

<?php if(isset($product) AND $product !== false): ?>

<form method="post" action="index.php" class="create f-col">
  <input type="hidden" name="id" value="<?php echo $product->id ?>">
  <label for="nom">Nom</label>
  <input id="lastname" name="nom" type="text" value="<?php echo $product->nom ?>" required>
  <label for="prix">prix</label>
  <input id="name" name="prix" type="number" value="<?php echo $product->prix ?>" required>
  <label for="description">Description</label>
  <input id="email" name="description" type="text" class="input" value="<?php echo $product->description ?>">
  <div class="f-row">
    <input name="update_product" type="submit" value="editer produit" class="btn">
  </div>
</form>

<?php endif; ?>

<?php
include_once dirname(__FILE__) . "./../../inc/footer.php";
?>
