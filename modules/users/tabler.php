<h3 class="title">Liste des produits</h3>

<?php if (isset($users) && !count($users)): ?>
    <p>Il n'y a pas de produits disponibles</p>
<?php endif; ?>

<?php if (isset($users) && count($users)): ?>

<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>"
class="form list-user">
    <table id="users" class="tabler users">
        <thead>
            <tr>
            <?php foreach ($users[0] as $prop => $val) {
                echo "<td>$prop</td>";
            } ?>
                <td class="update"><span>fiche produit</span></td>
                <td class="update"><span>update</span></td>
                <td class="delete">
                  <input type="submit" name="delete_users"
                  value="delete" class="tabler-btn">
                </td>
            </tr>
        </thead>
        <tbody>
        <?php foreach ($users as $user) {
            echo "<tr data-id-user=\"$user->id\">";
            foreach ((array)$user as $prop => $val) {
                $val = isset($val) ? $val : "N.R";
                echo "<td>" . $val . "</td>";
            }
                echo "<td class=\"bill\">
                    <a class=\"tabler-btn\">voir</a>
                </td>";
                echo "<td class=\"update\">
                    <a class=\"tabler-btn\" href=\"modules/users/edit-user.php?id=$user->id\">edit</a>
                </td>";
                echo "<td class=\"delete\">
                    <input name=\"delete_user_ids[]\" type=\"checkbox\" value=\"$user->id\" />
                </td>";
            echo "</tr>";
        } ?>
        </tbody>
    </table>
</form>
<?php endif; ?>

<?php if (isset($users) && !count($users)): ?>
    <p>Il n'y a pas de produits disponibles</p>
<?php endif; ?>

<?php if (isset($users) && count($users)): ?>

<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>"
class="form list-user">
    <table id="users" class="tabler users">
        <thead>
            <tr>
            <?php foreach ($products[0] as $prop => $val) {
                echo "<td>$prop</td>";
            } ?>
                <td class="update"><span>fiche produit</span></td>
                <td class="update"><span>update</span></td>
                <td class="delete">
                  <input type="submit" name="delete_products"
                  value="delete" class="tabler-btn">
                </td>
            </tr>
        </thead>
        <tbody>
        <?php foreach ($products as $product) {
            echo "<tr data-id-product=\"$product->id\">";
            foreach ((array)$product as $prop => $val) {
                $val = isset($val) ? $val : "N.R";
                echo "<td>" . $val . "</td>";
            }
                echo "<td class=\"bill\">
                    <a class=\"tabler-btn\">voir</a>
                </td>";
                echo "<td class=\"update\">
                    <a class=\"tabler-btn\" href=\"modules/users/edit-product.php?id=$product->id\">edit</a>
                </td>";
                echo "<td class=\"delete\">
                    <input name=\"delete_product_ids[]\" type=\"checkbox\" value=\"$product->id\" />
                </td>";
            echo "</tr>";
        } ?>
        </tbody>
    </table>
</form>
<?php endif; ?>
