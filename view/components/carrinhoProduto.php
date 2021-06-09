
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
    <h4 class="media-heading"><?php echo $item['nome'] ?></h4>
    <p>
        Preço Unit.: R$ <?php echo round($item['preco'] / 100, 2) ?> Qtd:
        <input
        onchange="showUpdateItemAndSetPath(<?php echo $item['cantidad'] ?>, '<?php echo $item['cp_id'] ?>')"
        type="number"
        value="<?php echo $item['cantidad'] ?>"
        id="cantidad_<?php echo $item['cp_id'] ?>"
        name="cantidad_<?php echo $item['cp_id'] ?>"
        />
    </p>
    <a id="btn-remove-<?php echo $item['cp_id'] ?>" href="./removeItem?id=<?php echo $item['cp_id'] ?>">Remover</a>
    <a id="btn-<?php echo $item['cp_id'] ?>" style="display: none;">Atualizar</a>

    </p>
    </div>
</div>