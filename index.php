<?php
session_start(['cookie_lifetime' => 86400,]);

// Enviar parâmetros para o Sweet Alert via PHP (Url)
$icon = NULL;
$title = NULL;
if (isset($_GET['status'], $_GET['method'])) {
    
    $status = $_GET['status'];
    $method = $_GET['method'];

    if ($status == 'true' && $method == 'insert') {
        $icon = 'success';
        $title = 'Produto adicionado com sucesso!';

    } elseif ($status == 'false' && $method == 'insert') {
        $icon = 'error';
        $title = 'Erro ao adicionar produto!';

    } elseif ($status == 'true' && $method == 'cleancart') {
        $icon = 'success';
        $title = 'Carrinho esvaziado com sucesso!';

    } elseif ($status == 'true' && ($method == 'removeitem' || $method == 'removeitens')) {
        $icon = 'success';
        $title = 'Produto removido com sucesso!';

    } elseif ($status == 'false' && ($method == 'removeitem' || $method == 'removeitens')) {
        $icon = 'error';
        $title = 'Erro ao remover produto!';

    } else{
        $icon = 'error';
        $title = 'Erro ao realizar operação!';
    }
}

// Data
include './app/others/itensData.php';

// Preencher os itens no index
include './app/others/mount_itens.php';

// Preencher o Carrinho
include './app/others/mount_cart.php';

// --------------------------------------------------------------------------------------------------------------------

include __DIR__ . '/includes/header.php';
include __DIR__ . '/includes/main.php';
include __DIR__ . '/includes/footer.php';
