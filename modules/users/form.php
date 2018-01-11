<h3 class="title">
    <span>Ajouter un nouveau produit</span>
</h3>
<!-- <?php if (isset($msg_crud)) {
    echo "<p class=\"msg\">$msg_crud</p>";
}?>

<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" class="create f-col">
    <input name="lastname" type="text" placeholder="nom" required>
    <input name="name" type="text" placeholder="prénom" required>
    <input name="age" type="number" placeholder="âge" class="input" min="1" max="140">
    <input name="email" type="mail" placeholder="mail" class="input">
    <div class="f-row">
      <input name="create_user" type="submit" value="valider" class="btn">
    </div>
</form> -->

<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" class="create f-col">
    <input name="nom" type="text" placeholder="nom du produit" required>
    <input name="prix" type="number" placeholder="prix" class="input">
    <textarea name="description" placeholder="description" rows="8" cols="80"></textarea>
    <input name="created_at" type="date" class="input">
    <div class="f-row">
      <input name="create_product" type="submit" value="valider" class="btn">
    </div>
</form>
