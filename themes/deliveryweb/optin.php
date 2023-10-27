<?php $this->layout("_theme", ["head"=>$head]); ?>
<div class="container my-5">
    <div class="row">
        <div class="col-md-12">
            <div>
                <h2><?= $data->title ?></h2>
                <div class="error-details my-3"><?= $data->desc ?></div>
                <div class="error-actions">
                    <a href="<?= $data->link ?>" class="btn btn-primary btn-lg"><span class="glyphicon glyphicon-home"></span>
                    <?= $data->linkTitle ?> </a>
                </div>
            </div>
        </div>
    </div>
</div>
