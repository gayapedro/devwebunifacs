
<div class="media">
    <div class="media-left">
    <img
        src="<?php echo $item['image_url'] ?>"
        class="media-object"
        style="height: 80px; width: 80px;"
        alt="<?php echo $item["nome"] ?>"
    />
    </div>
    <div class="media-body">
    <h4 class="media-heading"><?php echo $item["nome"] ?></h4>
    <p>Preço Unit.: R$ <?php echo round(($item['preco'] - ($item['preco'] * $item['desconto'] / 100))/100, 2) ?></p>
    <input
        hidden
        type="number"
        id="quantidade-produto1"
        data-preco="<?php echo round(($item['preco'] - ($item['preco'] * $item['desconto'] / 100))/100, 2) ?>"
        data-nome="<?php echo $item["nome"] ?>"
        onchange="atualizarValorCarrinho()"
        value="0"
        min="0"
    />
    <button id="button1" onclick="button1()" class="btn btn-primary">
        Adicionar ao Carrinho
    </button>
    </div>
</div>