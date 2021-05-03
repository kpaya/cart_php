<?php
session_start(['cookie_lifetime' => 86400,]);
include './app/others/itensData.php';

// Preencher os itens no index
include './app/others/mount_itens.php';

// Preencher o Carrinho
include './app/others/mount_cart.php';

// --------------------------------------------------------------------------------------------------------------------

include __DIR__ . '/includes/header.php';
include __DIR__ . '/includes/main.php';
include __DIR__ . '/includes/footer.php';
