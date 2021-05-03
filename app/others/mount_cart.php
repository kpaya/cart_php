
<!-- TRECHO DE CÓDIGO ABAIXO FARÁ A CONULSTA NA SESSION STORAGE E PREENCHERÁ O CARRINHO -->

<?php

$totalValue = 0;
$cartContent = '';
if (isset($_SESSION['itens-cart'])) {
    foreach ($_SESSION['itens-cart'] as $key => $value) {

        $totalValue += ($value['price'] * $value['unit']);

        $cartContent .=  '<div class="row">
                        <div class="col-3 align-self-center text-center">
                            <img src=' . $value['img'] . ' alt=".." width="100" height="100">
                        </div>
                        <div class="col-5 align-self-center">
                            <span class="fs-5 text-wrap">' . $value['title'] . '<br></span>
                            <span class="fs-6">Quantidade: ' . $value['unit'] . '</span>
                        </div>
                        <div class="col-4 align-self-center text-center">
                            <span class="fs-5 p-0 text-nowrap">R$ ' . number_format(($value['price'] * $value['unit']), 2) . '</span><br>
                        </div>
                        <hr class="dropdown-divider">
                    </div>';
    }
    $cartContent .=    '<div class="row">
                        <span class="text-primary fw-bold fs-5">Total: R$ ' . number_format($totalValue, 2) . '</span>
                    </div>';
} else {
    $cartContent = '
        <div class="col-sm align-self-center"><span class="m-0 fw-bold">Seu carrinho está vazio!</span></div>
    ';
}
