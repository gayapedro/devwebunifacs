<h3 style="color: #83a1eb;">Carrinho</h3>
<?php if (empty($currentCarrinhoProducts)): ?>
    <h3>Ainda não adicionou nenhum produto ao seu carrinho.</h3>
<?php else: ?>
    <div id="divcarrinho">
        <?php foreach($currentCarrinhoProducts as $item): ?>
        <div>
            <h4><?php echo $item['nome'] ?></h4>
            <p>Preço Unit.: R$ <?php echo round($item['preco'] / 100, 2) ?> Qtd.: <?php echo $item['cantidad'] ?></p>
        </div>
        <?php endforeach; ?>
    </div>
    <h3>Total</h3>
    <h3 id="valorTotal">R$ <?php echo round($total / 100, 2) ?></h3>
<?php endif; ?>