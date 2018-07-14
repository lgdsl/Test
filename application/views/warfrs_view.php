<?php apc_fetch() //var_dump($data);
//die(123);
//?>
<?php foreach ($data as $item):?>
    <div class="conteneur_vignette">
        <div class="vignette" style="background: url(<?=$item['image']?>); background-size: 150px 105px;">
            <a href="warframes/index/<?= $item['id']?>"></a>
        </div><?=$item['name']?>
    </div>
<?php endforeach; ?>

