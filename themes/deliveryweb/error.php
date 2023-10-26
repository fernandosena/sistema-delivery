<?php $this->layout("_theme", ["head"=>$head]); ?>
<div class="container my-5">
    <div class="row">
        <div class="col-md-12">
            <div>
                <h1><?= $error->code ?></h1>
                <h2><?= $error->title ?></h2>
                <div class="error-details my-3"><?= $error->message ?></div>
                <div class="error-actions">
                    <a href="<?= $error->link ?>" class="btn btn-primary btn-lg"><span class="glyphicon glyphicon-home"></span>
                    <?= $error->linkTitle ?> </a><a href="<?= url("contato") ?>" class="btn btn-default btn-lg"><span class="glyphicon glyphicon-envelope"></span> Contate o suporte </a>
                </div>
            </div>
        </div>
    </div>
</div>
