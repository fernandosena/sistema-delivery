<?php $this->layout("_theme", ["head"=>$head]); ?>
<!-- register start -->
<section class="login-block">
        <div class="container">
            <div class="row my-5">
                <div class="col-md-5 login-sec">
                    <h2 class="text-center">Cadastrar</h2>
                    <form class="login100-form validate-form" action="<?= url("/cadastrar"); ?>" method="post" enctype="multipart/form-data">
                        <div class="ajax_response"><?= flash(); ?></div>
                        <?= csrf_input(); ?>
                        <div class="g-flex">
                            <div class="wrap-input50 validate-input">
                                <span class="label-input100">Nome</span>
                                <input class="input100" type="text" name="first_name"
                                placeholder="Nome">
                                <span class="focus-input100"></span>
                            </div>
                            <div class="wrap-input50 validate-input">
                                <span class="label-input100">Sobrenome</span>
                                <input class="input100" type="text" name="last_name"
                                placeholder="Sobrenome">
                                <span class="focus-input100"></span>
                            </div>
                        </div>
                        <div class="wrap-input100 validate-input">
                            <span class="label-input100">E-mail</span>
                            <input class="input100" type="email" name="email"
                            placeholder="Seu e-mail">
                            <span class="focus-input100"></span>
                        </div>
                        <div class="wrap-input100 validate-input">
                            <span class="label-input100">Whatsapp</span>
                            <input class="input100" d="telefone" type="text" name="whatsapp"
                            placeholder="Seu whatsapp">
                            <span class="focus-input100"></span>
                        </div>
                        <div class="g-flex">
                            <div class="wrap-input50 validate-input">
                                <span class="label-input100">Senha</span>
                                <input class="input100" type="password" name="pass" placeholder="Sua senha">
                                <span class="focus-input100 password"></span>
                            </div>
                            <div class="wrap-input50 validate-input">
                                <span class="label-input100">Senha novamente</span>
                                <input class="input100" type="password" name="repass" placeholder="Senha novamente">
                                <span class="focus-input100 password"></span>
                            </div>
                        </div>
                        <div class="container-login100-form-btn">
                            <div class="wrap-login100-form-btn">
                                <button class="btn btn-primary">
                                    Cadastrar
                                </button>
                            </div>
                        </div>

                        <div class="txt1 text-center p-t-54 p-b-20">
                            <span>
                                Já tem conta? <a href="<?= url("entrar") ?>">Entrar</a>
                            </span>
                        </div>
                    </form>
                </div>
                <div class="col-md-7 banner-sec">   
                    <img src="<?= image(theme("assets/images/banner/promocao.jpg"), 1920, 729) ?>" width="100%" style="height: 100%" height="100%" alt="" title="">
                </div>
            </div>
    </div>
</section>