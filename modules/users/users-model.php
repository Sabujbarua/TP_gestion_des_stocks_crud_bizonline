<?php

$db = connectDB("localhost", "wp_test_01", "root", "root");

function getProduct($id) {
  global $db;
  $sql = "SELECT * FROM products WHERE id = :id";
  $statement = $db->prepare($sql);
  $statement->bindParam(":id", $id, PDO::PARAM_INT);
  $statement->execute();
  return $statement->fetch(PDO::FETCH_OBJ);
}

function getProducts() {
  global $db;
  $sql = "SELECT * FROM products";
  $exec = $db->query($sql);
  return $exec->fetchAll(PDO::FETCH_OBJ);
}

function updateProduct() {
  global $db;

  $sql = "UPDATE products SET nom = :nom, prix = :prix, description = :description WHERE id = :id";
  $description = $_POST["description"] !== "" ? $_POST["description"] : null;

  $statement = $db->prepare($sql);
  debug($_POST["prix"]);
  $statement->bindParam(":id", $_POST["id"], PDO::PARAM_INT);
  $statement->bindParam(":nom", $_POST["nom"], PDO::PARAM_STR);
  $statement->bindParam(":prix", $_POST["prix"], PDO::PARAM_INT);
  $statement->bindParam(":description", $description, PDO::PARAM_STR);
  $check = $statement->execute();
}

function deleteProduct() {
  global $db;

  foreach ($_POST["delete_product_ids"] as $id) {
    // debug($id);
    $sql = "DELETE FROM products WHERE id = :id";
    $statement = $db->prepare($sql);
    $statement->bindParam(":id", $id, PDO::PARAM_INT);
    $res = $statement->execute();
    $msg_crud = ($res === true) ? "suppression ok" : "souci suppression";
  }
  header("Location: index.php");
}

function createProduct() {
  global $db;

  $sql = "INSERT INTO products (nom, prix, description, created_at)
          VALUES (:nom, :prix, :description, :created_at)";

  $description = $_POST["description"] !== "" ? $_POST["description"] : null;

  $statement = $db->prepare($sql);
  $statement->bindParam(":nom", $_POST["nom"], PDO::PARAM_STR);
  $statement->bindParam(":prix", $_POST["prix"], PDO::PARAM_INT);
  $statement->bindParam(":description", $description, PDO::PARAM_STR);
  $statement->bindParam(":created_at", $_POST["created_at"], PDO::PARAM_INT);
  $res = $statement->execute();
  $msg_crud = ($res === true) ? "insertion ok" : "soucis à l'insertion";
  header("Location: index.php");
}
