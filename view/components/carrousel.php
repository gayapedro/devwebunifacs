<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
    <?php
        $total = count($produtos);
        for ($x = 0; $x < $total; $x++) {
            $class = 'active';
            if ($x > 0) $class = 'incative';
            echo "<li data-target='#myCarousel' data-slide-to='$x' class='$class'></li>";
        }
    ?>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
        <?php
            $first = true;
            foreach($produtos as $item):
        ?>
        <div class="<?php if($first){
                echo 'item active';
                $first = false;
            } else {
                echo 'item';
            }
        ?>">
            <div class="carousel-info">
            <h1>OFERTA!</h1>
            <p><?php echo $item['nome'] ?></p>
            <p>R$ <?php echo round(($item['preco'] - ($item['preco'] * $item['desconto'] / 100))/100, 2) ?></p>
            </div>
            <img class="imgcarr" src="<?php echo $item['image_url'] ?>" alt="<?php echo $item['nome'] ?>" />
        </div>
        <?php endforeach; ?>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
    </a>
</div>