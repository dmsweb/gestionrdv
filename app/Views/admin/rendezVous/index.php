<div class="row page-titles mx-0">
    <div class="col p-md-0">
        <?php
        var_dump($rendezvous);
        var_dump($_SESSION['telephone'],$_SESSION['id'],$_SESSION['domaine'],$_SESSION['type']);
        //var_dump(sha1('thiam	'));
        ?>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Sécretariat</a></li>
            <li class="breadcrumb-item active"><a href="javascript:void(0)">Rendez-vous</a></li>
        </ol>
    </div>
</div>

<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Rendez-vous</h4>
                <div class="general-button">
                    <?php for ($i=0;$i<100;$i++): ?>
                        &nbsp;
                    <?php  endfor;?>
                    <a href="?p=admin.rendezVous.add" class="btn mb-1 btn-primary">Nouveau rendez-vous</a>
                    <?php for ($i=0;$i<10;$i++): ?>
                        &nbsp;
                    <?php  endfor;?>
                </div>
            </div>
        </div>
    </div>
<!-- row -->
<div class="container-fluid mt-3">
    <div class="row">
        <div class="col-lg-3 col-sm-6">
            <div class="card gradient-1">
                <div class="card-body">
                    <h3 class="card-title text-white">Rendez-vous du jours</h3>
                    <div class="d-inline-block">
                        <h2 class="text-white">
                            <?php
                            echo 2;
                            ?>
                        </h2>
                        <!--<p class="text-white mb-0">Jan - March 2019</p>-->
                    </div>
                    <span class="float-right display-5 opacity-5"><i class="fa fa-shopping-cart"></i></span>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-sm-6">
            <div class="card gradient-2">
                <div class="card-body">
                    <h3 class="card-title text-white">Rendez-vous reporter</h3>
                    <div class="d-inline-block">
                        <h2 class="text-white">
                            <?php
                            echo 2;
                            ?>
                        </h2>
                        <!--<p class="text-white mb-0">Jan - March 2019</p>-->
                    </div>
                    <span class="float-right display-5 opacity-5"><i class="fa fa-money"></i></span>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-sm-6">
            <div class="card gradient-3">
                <div class="card-body">
                    <h3 class="card-title text-white">Rendez-vous annuler</h3>
                    <div class="d-inline-block">
                        <h2 class="text-white">4565</h2>
                        <!--<p class="text-white mb-0">Jan - March 2019</p>-->
                    </div>
                    <span class="float-right display-5 opacity-5"><i class="fa fa-users"></i></span>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-sm-6">
            <div class="card gradient-4">
                <div class="card-body">
                    <h3 class="card-title text-white">Les rendez-vous</h3>
                    <div class="d-inline-block">
                        <h2 class="text-white">99%</h2>
                        <!--<p class="text-white mb-0">Jan - March 2019</p>-->
                    </div>
                    <span class="float-right display-5 opacity-5"><i class="fa fa-heart"></i></span>
                </div>
            </div>
        </div>
    </div>
</div>
</div>


    <!--<p><a href="?p=admin.posts.add" class="btn btn-primary">Nouveau medecin</a></p>-->

    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Les rendez-vous</h4>
                <div class="table-responsive">
                    <table class="table table-striped table-bordered zero-configuration">
                        <thead>
                        <tr>
                            <th>Id</th>
                            <th>Nom Complet</th>
                            <th>Téléphone</th>
                            <th>Date & heure</th>
                            <th>domaine</th>
                            <th>Etat</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($rendezvous as $rd): ?>
                            <tr>
                                <td><?= $rd->id ?></td>
                                <td><?= $rd->nomComplet ?></td>
                                <td><?= $rd->telephone ?></td>
                                <td><?= $rd->email?></td>
                                <td><?= $rd->typeEmployer ?></td>
                                <td><?= $rd->domaine?></td>
                                <td>
                                    <a href="?p=admin.employer.edit&id=<?= $rd->id ; ?>" class="btn btn-primary">Editer</a>
                                    <form action="?p=admin.posts.delete" method="post" style="display: inline">
                                        <input type="hidden" name="id" value="<?= $rd->id; ?>">
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

