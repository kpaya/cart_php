<div class="row bg-primary text-end py-2">
    <div class="dropdown px-3">
        <button class="btn btn-light dropdown-toggle text-primary fw-bold rounded-pill" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
            Carrinho (R$ <?= number_format($totalValue, 2) ?>)
        </button>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1" style="max-width: 650px;">
            <div class='container-sm'>
                <?= $cartContent ?>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row mt-3 justify-content-between">
        <?= $itensContent ?>
    </div>
    <div class="row">
    </div>
</div>