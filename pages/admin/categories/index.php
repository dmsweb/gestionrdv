<?php
$categories = App::getInstance()->getTable('Category')->all();
?>

<div class="row">
    <div class="col-sm-6">
        <h1>Administrer les categories</h1>

        <p><a href="?p=categories.add" class="btn btn-success">Ajouter</a></p>
        <table class="table">
            <thead>
                <tr>
                    <td>Id</td>
                    <td>Titre</td>
                    <td>Action</td>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($categories as $category): ?>
                <tr>
                    <td><?= $category->id ?></td>
                    <td><?= $category->titre ?></td>
                    <td>
                        <a href="?p=categories.edit&id=<?= $category->id; ?>" class="btn btn-primary">Editer</a>
                        <form action="?p=categories.delete" method="post" style="display: inline">
                            <input type="hidden" name="id" value="<?= $category->id ?>">
                            <button type="submit" class="btn btn-danger" href="?p=categories.delete&id<?= $category->id;?>">Supprimer</button>
                        </form>
                    </td>
                </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>
</div>

