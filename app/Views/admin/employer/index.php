<div class="row page-titles mx-0">
    <div class="col p-md-0">
        <?php
           var_dump($_SESSION['telephone'],$_SESSION['id']);
        ?>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Administration</a></li>
            <li class="breadcrumb-item active"><a href="javascript:void(0)">Employer</a></li>
        </ol>
    </div>
</div>
<!-- row -->
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Administration</h4>
                <div class="general-button">
                    <?php for ($i=0;$i<10;$i++): ?>
                        &nbsp;
                    <?php  endfor;?>
                    <a href="?p=admin.employer.add" class="btn mb-1 btn-primary">Nouveau medecin</a>
                    <?php for ($i=0;$i<10;$i++): ?>
                        &nbsp;
                    <?php  endfor;?>
                    <a href="#" class="btn mb-1 btn-secondary">Nouveau service</a>
                    <?php for ($i=0;$i<10;$i++): ?>
                        &nbsp;
                    <?php  endfor;?>
                    <a href="#" class="btn mb-1 btn-danger">Nouveau domaine</a>
                    <?php for ($i=0;$i<10;$i++): ?>
                        &nbsp;
                    <?php  endfor;?>
                    <a href="#" class="btn mb-1 btn-warning">Nouveau type employer</a>
                </div>
            </div>
        </div>
    </div>

<!--<p><a href="?p=admin.posts.add" class="btn btn-primary">Nouveau medecin</a></p>-->

    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Les employés</h4>
                <div class="table-responsive">
                    <table class="table table-striped table-bordered zero-configuration">
                        <thead>
                        <tr>
                            <th>Id</th>
                            <th>Nom Complet</th>
                            <th>Telephone</th>
                            <th>Email</th>
                            <th>Type</th>
                            <th>Domaine</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($employers as $employer): ?>
                            <tr>
                                <td><?= $employer->id ?></td>
                                <td><?= $employer->nomComplet ?></td>
                                <td><?= $employer->telephone ?></td>
                                <td><?= $employer->email?></td>
                                <td><?= $employer->typeEmployer ?></td>
                                <td><?= $employer->domaine?></td>
                                <td>
                                    <a href="?p=admin.employer.edit&id=<?= $employer->id ; ?>" class="btn btn-primary">Editer</a>
                                    <form action="?p=admin.posts.delete" method="post" style="display: inline">
                                        <input type="hidden" name="id" value="<?= $employer->id; ?>">
                                        <button type="submit" class="btn btn-danger">Supprimer</button>
                                    </form>
                                </td>
                            </tr>
                        <?php endforeach ?>
                        </tbody>
                        <tfoot>
                        <tr>
                            <th>Id</th>
                            <th>Nom Complet</th>
                            <th>Telephone</th>
                            <th>Email</th>
                            <th>Type</th>
                            <th>Domaine</th>
                            <th>Action</th>
                        </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
</div>


</div>

