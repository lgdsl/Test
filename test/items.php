<?php foreach ($warframeItems as $item):?>
    <div class="conteneur_vignette">
        <div class="vignette" style="background: url(<?=$item['image']?>); background-size: 150px 105px;">
            <a href="#"></a>
        </div><?=$item['name']?>
    </div>
<?php endforeach; ?>