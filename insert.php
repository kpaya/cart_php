<?php
session_start(['cookie_lifetime' => 86400,]);
include './app/others/itensData.php';

if (isset($_GET['id']) && is_numeric($_GET['id'])) {

    $productId = $_GET['id'];

    if (isset($myItens[$productId])) {
        if (isset($_SESSION['itens-cart'][$productId])) {
            $_SESSION['itens-cart'][$productId]['unit'] += 1;
        } else {
            $_SESSION['itens-cart'][$productId] = array('id' => $productId, 'title' => $myItens[$productId]['title'], 'unit' => 1, 'price' => $myItens[$productId]['price'], 'img' => $myItens[$productId]['img']);
        }
        header("location: index.php?status=true&method=insert");
    } else {
        header("location: index.php?status=false&method=insert");
    }
} else {
    header('location: index.php?status=false');
}
