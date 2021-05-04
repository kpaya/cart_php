<?php

$itensContent = '';
foreach ($myItens as $key => $item) {
    $itensContent .= '
    <div class="card mt-3 p-2 shadow rounded" style="width: 18rem;">
        <img src=' . $item['img'] . ' class="card-img-top" alt=' . $item['title'] . ' width="100px" height="400px">
        <hr>
        <div class="card-body">
            <h5 class="card-title">' . $item['title'] . '</h5>
            <p class="card-text">' . $item['description'] . '</p>
            <p class="text-center text-primary fs-4 fw-bold mb-1">R$' . number_format($item['price'], 2) . '</p>
            <div class="form-group">
            <p class="text-center fs-6">12x de R$' . number_format($item['price'] / 12, 2) . '</p>
            </div>
            <a href="insert.php?id=' . $key . '" class="justify-content-center">
                <div class="text-center p-0 m-0">
                    <button type="submit" id="insertBtn" class="btn btn-outline-primary">ADICIONAR AO CARRINHO</button>
                </div>
            </a>
        </div>
    </div>';
}
