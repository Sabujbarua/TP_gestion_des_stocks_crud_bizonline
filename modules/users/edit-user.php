<?php
include_once dirname(__FILE__) . "./../../inc/head.php";
?>

<?php if (!isset($product) OR $product === false): ?>
<p>Il n'y a aucun produit</p>
<?php endif; ?>

<?php if(isset($product) AND $product !== false): ?>

<!-- <form method="post" action="index.php" class="create f-col">
  <input type="hidden" name="id" value="<?php echo $user->id ?>">
  <label for="lastname">Nom</label>
  <input id="lastname" name="lastname" type="text" value="<?php echo $user->lastname ?>" required>
  <label for="name">Prénom</label>
  <input id="name" name="name" type="text" value="<?php echo $user->name ?>" required>
  <label for="age">Age</label>
  <input id="age" name="age" type="number" value="<?php echo $user->age ?>"
  class="input" min="16" max="140">
  <label for="email">Email</label>
  <input id="email" name="email" type="mail" class="input" value="<?php echo $user->email ?>">
  <div class="f-row">
    <input name="update_user" type="submit" value="edit user !" class="btn">
  </div>
</form> -->

<form method="post" action="index.php" class="create f-col">
  <input type="hidden" name="id" value="<?php echo $product->id ?>">
  <label for="nom">Nom</label>
  <input id="lastname" name="lastname" type="text" value="<?php echo $product->nom ?>" required>
  <label for="prix">prix</label>
  <input id="name" name="name" type="text" value="<?php echo $product->prix ?>" required>
  <label for="description">Description</label>
  <input id="email" name="description" type="mail" class="input" value="<?php echo $product->description ?>">
  <div class="f-row">
    <input name="update_product" type="submit" value="editer produit" class="btn">
  </div>
</form>

<?php endif; ?>

<?php
include_once dirname(__FILE__) . "./../../inc/footer.php";
?>
