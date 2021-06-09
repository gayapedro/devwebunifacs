
<div class="media">
    <div class="media-left">
    <img
        src="<?php echo $item['image_url'] ?>"
        class="media-object"
        style="height: 80px; width: 80px; object-fit: cover;"
        alt="<?php echo $item["nome"] ?>"
    />
    </div>
    <div class="media-body">
    <h4 class="media-heading"><?php echo $item["nome"] ?></h4>
    <p>Preço Unit.: R$ <?php echo round(($item['preco'] - ($item['preco'] * $item['desconto'] / 100))/100, 2) ?></p>
    <form action="./addItem" method="post">
        <input type="hidden" id="idProduto" name="idProduto" value="<?php echo $item['id'] ?>"/>
        <?php if (isset($_COOKIE['token'])): ?>
        <input
            type="number"
            id="quantidade"
            name="quantidade"
            value="1"
            min="1"
        />
        <button id="button1" type="submit" class="btn btn-primary">
            Adicionar ao Carrinho
        </button>
        <?php endif; ?>
    </form>
    </div>
</div>