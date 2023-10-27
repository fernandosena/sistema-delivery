<?php $this->layout("_theme", ["head"=>$head]); ?>
<!-- login start -->
<section class="login-block">
        <div class="container">
            <div class="row my-5">
                <div class="col-md-4 login-sec">
                    <h2 class="text-center">Entrar</h2>
                    <form class="login100-form validate-form" action="<?= url("/entrar"); ?>" method="post" enctype="multipart/form-data">
                        <div class="ajax_response"><?= flash(); ?></div>
                        <?= csrf_input(); ?>
                        <div class="wrap-input100 validate-input">
                            <span class="label-input100">E-mail</span>
                            <input class="input100" type="email" name="username"
                            placeholder="Seu e-mail">
                            <span class="focus-input100"></span>
                        </div>
                        <div class="wrap-input100 validate-input">
                            <span class="label-input100">Senha</span>
                            <input class="input100" type="password" name="pass" placeholder="Sua senha">
                            <span class="focus-input100 password"></span>
                        </div>
                        <div class="text-right p-t-8 p-b-31">
                            <a href="<?= url("recuperar") ?>">
                                Esqueceu a senha?
                            </a>
                        </div>
                        <div class="container-login100-form-btn">
                            <div class="wrap-login100-form-btn">
                                <button class="btn btn-primary">
                                    Entrar
                                </button>
                            </div>
                        </div>

                        <div class="txt1 text-center p-t-54 p-b-20">
                            <span>
                                Ou <a href="<?= url("cadastrar") ?>">cadastre-se</a>
                            </span>
                        </div>
                    </form>
                </div>
                <div class="col-md-8 banner-sec">   
                    <img src="<?= image(theme("assets/images/banner/promocao.jpg"), 1920, 729) ?>" width="100%" style="height: 100%" height="100%" alt="" title="">
                </div>
            </div>
    </div>
</section>