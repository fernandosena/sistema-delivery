<?php $this->layout("_theme", ["head"=>$head]); ?>
<!-- forget start -->
<section class="login-block">
    <div class="container">
        <div class="row my-5">
            <div class="col-md-4 login-sec">
                <h2 class="text-center">Redefinir senha</h2>
                <form class="login100-form validate-form" action="<?= url("/recuperar"); ?>" method="post" enctype="multipart/form-data">
                    <div class="ajax_response"><?= flash(); ?></div>
                    <?= csrf_input(); ?>
                    <div class="wrap-input100 validate-input">
                        <span class="label-input100">E-mail</span>
                        <input class="input100" type="email" name="email"
                        placeholder="Seu e-mail">
                        <span class="focus-input100 email"></span>
                    </div>
                    <div class="container-login100-form-btn">
                        <div class="wrap-login100-form-btn">
                            <button class="btn btn-primary">
                                Redefinir senha
                            </button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-md-8 banner-sec">   
                <img src="<?= image(theme("assets/images/banner/promocao.jpg"), 1920, 729) ?>" width="100%" style="height: 100%" height="100%" alt="" title="">
            </div>
        </div>
    </div>
</section>