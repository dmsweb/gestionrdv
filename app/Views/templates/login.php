<body class="h-100">
<div style="padding-top: 50px;">

</div>
<div class="login-form-bg h-100">
    <div class="container h-100">
        <div class="row justify-content-center h-100">
            <div class="col-xl-6">
                <div class="form-input-content">
                    <div class="card login-form mb-0">
                        <div class="card-body pt-5">
                            <a class="text-center" href="#"> <h4>Quixlab</h4></a>
                            <?php if($errors):?>
                                <div class="alert alert-danger">
                                    Indentifiant incorrect
                                </div>
                            <?php endif; ?>

                            <form action="" method="post"  class="mt-5 mb-5 login-input">
                                <?= $form->input('username','Telephone'); ?>
                                <?= $form->input('password','Mot de passe', ['type' => 'password']); ?>
                                <button class="btn login-form__btn submit w-100">Valider</button>
                            <!--<p class="mt-5 login-form__footer">Dont have account? <a href="page-register.html" class="text-primary">Sign Up</a> now</p>
                        --></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>




<!--**********************************
    Scripts
***********************************-->
<script src="plugins/common/common.min.js"></script>
<script src="js/custom.min.js"></script>
<script src="js/settings.js"></script>
<script src="js/gleek.js"></script>
<script src="js/styleSwitcher.js"></script>
</body>
</html>





