<?php
session_start(['cookie_lifetime' => 86400,]);
include './app/others/itensData.php';

// Verifico se o ID está preenchido e é numérico
if (isset($_GET['id']) && is_numeric($_GET['id'])) {

    $productId = $_GET['id'];

    // Verifico se o ID encontra-se na minha DB (Array)
    if (isset($myItens[$productId])) {
        
        // Caso exista, verifico se esse item já encontra-se na Session Storage
        if (isset($_SESSION['itens-cart'][$productId])) {
            
            // Caso exista, decremento 1 da quantidade de itens referente a esse ID
            $_SESSION['itens-cart'][$productId]['unit'] -= 1;

            // Verifico se esse item é == 0
            if ($_SESSION['itens-cart'][$productId]['unit'] <= 0){

                // Caso sim, remover o array do item na Session Storage
                unset($_SESSION['itens-cart'][$productId]);

                // Caso não possua mais itens no meu Array na Session
                if (count($_SESSION['itens-cart']) == 0){

                    // Apagar todas as sessões
                    session_destroy();
                    
                }
            }
        } else {
        }
        header("location: index.php?status=true");
    } else {
        header("location: index.php?status=false");
    }
} else {
    header('location: index.php?status=false');
}
