<div class="media">
    <div class="media-left">
    <img
        src="<?php echo $item['image_url'] ?>"
        class="media-object"
        style="width: 60px"
        alt="<?php echo $item['nome'] ?>"
    />
    </div>
    <div class="media-body">
    <h4 class="media-heading"><?php console_log($item); echo $item['nome'] ?></h4>
    <p>
        Preço Unit.: R$ <?php echo round($item['preco'] / 100, 2) ?> Qtd:
        <input
        onchange="atualizarValorCarrinho()"
        type="number"
        value="<?php echo $item['cantidad'] ?>"
        />
    <!-- 

        TODO: no onchange do input do number fazer que mostre um botao "atualizar"
        esse botão atualizar pega o id do carrinhoProduto (cp_id) e faz update da quantidade.

    -->
    </p>
    </div>
</div>