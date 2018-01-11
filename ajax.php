<?php

// include_once "modules/users/users-model.php";
//
// if (isset($_POST["action"])) {
//
//     if ($_POST["action"] === "get_bill") {
//         echo json_encode(getBill($_POST["id_bill"]));
//
//     } elseif ($_POST["action"] === "get_bills") {
//         echo json_encode(getBills());
//
//     } elseif ($_POST["action"] === "create_bill") {
//         echo createBill();
//         //par json_encode car c'est un chiffre , on echo l'id de ce que l'on vient d'envoyer
//
//     } elseif ($_POST["action"] === "delete_bills") {
//         echo json_encode(deleteBills(json_decode($_POST["ids"])));
//
//     } elseif ($_POST["action"] === "get_user") {
//         echo json_encode(getUser($_POST["id"]));
//
//     } elseif ($_POST["action"] === "update_bill") {
//       echo json_encode(updateBill(
//         $_POST["id_bill"],
//         $_POST["total"],
//         $_POST["created_at"]
//       ));
//     }
// }
//
include_once "modules/products/products-model.php";

if (isset($_POST["action"])) {

    if ($_POST["action"] === "get_product") {
        echo json_encode(getProduct($_POST["id_product"]));

    } elseif ($_POST["action"] === "get_products") {
        echo json_encode(getProducts());

    } elseif ($_POST["action"] === "create_product") {
        echo createProduct();
        //par json_encode car c'est un chiffre , on echo l'id de ce que l'on vient d'envoyer

    } elseif ($_POST["action"] === "delete_products") {
        echo json_encode(deleteProducts(json_decode($_POST["ids"])));

    } elseif ($_POST["action"] === "get_user") {
        echo json_encode(getUser($_POST["id"]));

    } elseif ($_POST["action"] === "update_product") {
      echo json_encode(updateProduct(
        $_POST["id_product"],
        $_POST["total"],
        $_POST["created_at"]
      ));
    }
}
