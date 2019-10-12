<div class="row">
    <div class="col-sm-6">
        <?php foreach ( App::getInstance()->getTable('Post')->last() as $post){ ?>
            <h1 class="mt-5">
                <a href="<?= $post->url ?>"><?= $post->titre ?></a>
            </h1>
            <p><em><?= $post->categorie ?></em></p>
            <p class="lead"><?= $post->extrait ?></p>

        <?php }  ?>
    </div>
    <div class="col-sm-4" style="padding-top: 50px;" >
        <ul>
            <?php foreach (App::getInstance()->getTable('Category')->all() as $categorie):?>
                <li><a href="<?= $categorie->url; ?>"><?= $categorie->titre; ?></a></li>
            <?php endforeach; ?>
        </ul>
    </div>
</div>
