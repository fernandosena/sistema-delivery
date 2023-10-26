<?php $this->layout("_theme", ["head"=>$head]); ?>

<!-- Contact Form and Gmap-->
<section class="section section-md section-last bg-default text-md-left">
    <div class="container">
        <div class="row row-50">
        <div class="col-lg-6 section-map-small">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d234056.76909129648!2d-46.941078313281245!3d-23.563521999999978!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce59c88849fd6d%3A0x6c2a8652e6e5b36a!2sShopping%20Cidade%20S%C3%A3o%20Paulo!5e0!3m2!1spt-BR!2sbr!4v1698290593995!5m2!1spt-BR!2sbr" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <div class="col-lg-6">
            <h4 class="text-spacing-50">Contato</h4>
            <form class="rd-form rd-mailform" data-form-output="form-output-global" data-form-type="contact" method="post" action="<?= url("contato")?>">
            <div class="row row-14 gutters-14">
                <div class="col-sm-6">
                <div class="form-wrap">
                    <input class="form-input" id="contact-first-name" type="text" name="name" data-constraints="@Required">
                    <label class="form-label" for="contact-first-name">Nome</label>
                </div>
                </div>
                <div class="col-sm-6">
                <div class="form-wrap">
                    <input class="form-input" id="contact-last-name" type="text" name="name" data-constraints="@Required">
                    <label class="form-label" for="contact-last-name">Sobrenome</label>
                </div>
                </div>
                <div class="col-12">
                    <div class="form-wrap">
                        <input class="form-input" id="telefone" type="tel" name="whatsapp">
                        <label class="form-label" for="telefone">Whatsapp</label>
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-wrap">
                        <input class="form-input" id="contact-email" type="email" name="email" data-constraints="@Email @Required">
                        <label class="form-label" for="contact-email">E-mail</label>
                    </div>
                </div>
                <div class="col-12">
                <div class="form-wrap">
                    <label class="form-label" for="contact-message">Mensagem</label>
                    <textarea class="form-input" id="contact-message" name="message" data-constraints="@Required"></textarea>
                </div>
                </div>
            </div>
            <button class="button button-primary button-pipaluk" type="submit">Envair</button>
            </form>
        </div>
        </div>
    </div>
</section>

<!-- Contact information-->
<section class="section section-md section-first bg-default">
<div class="container">
    <div class="row row-30 justify-content-center">
    <div class="col-sm-8 col-md-6 col-lg-4">
        <article class="box-contacts">
        <div class="box-contacts-body">
            <div class="box-contacts-icon fl-bigmug-line-cellphone55"></div>
            <div class="box-contacts-decor"></div>
            <p class="box-contacts-link"><a target="_blank" href="https://api.whatsapp.com/send/?phone=<?= CONF_SITE_WHATSAPP_NUMBER ?>"><?= CONF_SITE_WHATSAPP_FMT ?></a></p>
        </div>
        </article>
    </div>
    <div class="col-sm-8 col-md-6 col-lg-4">
        <article class="box-contacts">
        <div class="box-contacts-body">
            <div class="box-contacts-icon fl-bigmug-line-up104"></div>
            <div class="box-contacts-decor"></div>
            <p class="box-contacts-link"><a href="#"><?= CONF_SITE_ADDR_STREET.", Nº ".CONF_SITE_ADDR_NUMBER.", ".CONF_SITE_ADDR_COMPLEMENT.", ".CONF_SITE_ADDR_CITY, " - ".CONF_SITE_ADDR_STATE.", ".CONF_SITE_ADDR_ZIPCODE ?></a></p>
        </div>
        </article>
    </div>
    <div class="col-sm-8 col-md-6 col-lg-4">
        <article class="box-contacts">
        <div class="box-contacts-body">
            <div class="box-contacts-icon fl-bigmug-line-chat55"></div>
            <div class="box-contacts-decor"></div>
            <p class="box-contacts-link"><a href="mailto:<?= CONF_SITE_EMAIL ?>"><?= CONF_SITE_EMAIL ?></a></p>
        </div>
        </article>
    </div>
    </div>
</div>
</section>
<!-- Contact information-->
<section class="section section-md section-first bg-default">
    <div class="container">
        <div class="row row-30 justify-content-center">
        <div class="col-sm-8 col-md-6 col-lg-4">
            <article class="box-contacts">
            <div class="box-contacts-body">
                <div class="box-contacts-icon fl-bigmug-line-cellphone55"></div>
                <div class="box-contacts-decor"></div>
                <p class="box-contacts-link"><a target="_blank" class="link-phone" href="https://api.whatsapp.com/send/?phone=<?= CONF_SITE_WHATSAPP_NUMBER ?>"><?= CONF_SITE_WHATSAPP_FMT ?></a></p>
                
            </div>
            </article>
        </div>
        <div class="col-sm-8 col-md-6 col-lg-4">
            <article class="box-contacts">
            <div class="box-contacts-body">
                <div class="box-contacts-icon fl-bigmug-line-up104"></div>
                <div class="box-contacts-decor"></div>
                <p class="box-contacts-link"><a class="link-location" href="#"><?= CONF_SITE_ADDR_STREET.", Nº ".CONF_SITE_ADDR_NUMBER.", ".CONF_SITE_ADDR_COMPLEMENT.", ".CONF_SITE_ADDR_CITY, " - ".CONF_SITE_ADDR_STATE.", ".CONF_SITE_ADDR_ZIPCODE ?></a></p>
            </div>
            </article>
        </div>
        <div class="col-sm-8 col-md-6 col-lg-4">
            <article class="box-contacts">
            <div class="box-contacts-body">
                <div class="box-contacts-icon fl-bigmug-line-chat55"></div>
                <div class="box-contacts-decor"></div>
                <p class="box-contacts-link"><a class="link-email" href="mailto:<?= CONF_SITE_EMAIL ?>"><?= CONF_SITE_EMAIL ?></a></p>
                
            </div>
            </article>
        </div>
        </div>
    </div>
</section>
