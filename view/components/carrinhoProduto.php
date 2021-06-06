<div class="media">
    <div class="media-left">
    <img
        src="<?php echo $item['image_url'] ?>"
        class="media-object"
        style="width: 60px"
    />
    </div>
    <div class="media-body">
    <h4 class="media-heading"><?php echo $item['nome'] ?></h4>
    <p>
        Preço Unit.: R$ <?php echo round($item['preco'] / 100, 2) ?> Qtd:
        <input
        data-preco="<?php echo $item['preco'] ?>"
        required
        onchange="atualizarValorCarrinho()"
        name="quantidade1"
        type="number"
        value="<?php echo $item['cantidad'] ?>"
        />
    </p>
    </div>
</div>