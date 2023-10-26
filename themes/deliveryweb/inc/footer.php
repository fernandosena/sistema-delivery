<footer class="section footer-variant-2 footer-modern context-dark section-top-image section-top-image-dark">
    <div class="footer-variant-2-content">
        <div class="container">
            <div class="row row-40 justify-content-between">
                <div class="col-sm-6 col-lg-4 col-xl-3">
                    <div class="oh-desktop">
                        <div class="wow slideInRight" data-wow-delay="0s">
                        <div class="footer-brand"><a href="index.html"><img src="<?= image(theme("assets/images/logo-inverse-196x42.png"), 196, 42) ?>" alt="<?= CONF_SITE_NAME ?>" width="196" height="42"/></a></div>
                            <p><?= CONF_SITE_DESC ?></p>
                            <ul class="footer-contacts d-inline-block d-md-block">
                                <li>
                                    <div class="unit unit-spacing-xs">
                                        <div class="unit-left">
                                            <span class="icon fa fa-phone"></span>
                                        </div>
                                        <div class="unit-body">
                                        <a target="_blank" class="link-phone" href="https://api.whatsapp.com/send/?phone=<?= CONF_SITE_WHATSAPP_NUMBER ?>"><?= CONF_SITE_WHATSAPP_FMT ?></a>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="unit unit-spacing-xs">
                                        <div class="unit-left">
                                            <span class="icon fa fa-clock-o"></span>
                                        </div>
                                        <div class="unit-body">
                                            <p>Seg-Sáb: 18:00 - 24:00</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="unit unit-spacing-xs">
                                        <div class="unit-left"><span class="icon fa fa-location-arrow"></span></div>
                                        <div class="unit-body">
                                            <a class="link-location" href="#"><?= CONF_SITE_ADDR_STREET.", Nº ".CONF_SITE_ADDR_NUMBER.", ".CONF_SITE_ADDR_COMPLEMENT.", ".CONF_SITE_ADDR_CITY, " - ".CONF_SITE_ADDR_STATE.", ".CONF_SITE_ADDR_ZIPCODE ?></a>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4 col-xl-4">
                    <div class="oh-desktop">
                        <div class="inset-top-18 wow slideInDown" data-wow-delay="0s">
                            <h5>Newsletter</h5>
                            <p>Cadastre-se em nosso newsletter por e-mail para receber notícias e dicas.</p>
                            <form class="rd-form rd-mailform" data-form-output="form-output-global" data-form-type="subscribe" method="post" action="bat/rd-mailform.php">
                                <div class="form-wrap">
                                    <input class="form-input" id="subscribe-form-5-email" type="email" name="email" data-constraints="@Email @Required">
                                    <label class="form-label" for="subscribe-form-5-email">Digite seu melhor e-mail</label>
                                </div>
                                <button class="button button-block button-white" type="submit">Inscrever</button>
                            </form>
                            <div class="group-lg group-middle">
                                <p class="text-white">Siga-nos</p>
                                <div>
                                    <ul class="list-inline list-inline-sm footer-social-list-2">
                                        <li><a target="_blank" class="icon fa fa-facebook" href="https://pt-br.facebook.com/<?= CONF_SOCIAL_FACEBOOK_PAGE ?>"></a></li>
                                        <li><a target="_blank" class="icon fa fa-twitter" href="https://twitter.com/<?= CONF_SOCIAL_TWITTER_PUBLISHER ?>"></a></li>
                                        <li><a target="_blank" class="icon fa fa-instagram" href="https://www.instagram.com/<?= CONF_SOCIAL_INSTAGRAM_PAGE ?>"></a></li>
                                        <li><a target="_blank" class="icon fa fa-pinterest" href="https://br.pinterest.com/<?= CONF_SOCIAL_PINTEREST_PAGE ?>"></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-xl-3">
                    <div class="oh-desktop">
                        <div class="inset-top-18 wow slideInLeft" data-wow-delay="0s">
                            <h5>Local</h5>
                            <div class="row row-10 gutters-10" data-lightgallery="group">
                            <?php for($i=1; $i<=4; $i++): ?>
                                <div class="col-6 col-sm-3 col-lg-6">
                                    <!-- Thumbnail Classic-->
                                    <article class="thumbnail thumbnail-mary">
                                        <div class="thumbnail-mary-figure">
                                            <img src="<?= image(theme("assets/images/galeria-loja/0{$i}-tumb.jpg"), 129, 120); ?>" alt="" width="129" height="120"/>
                                        </div>
                                        <div class="thumbnail-mary-caption">
                                            <a class="icon fl-bigmug-line-zoom60" href="<?= image(theme("assets/images/galeria-loja/0{$i}.jpg"), 630, 630); ?>" data-lightgallery="item">
                                            <img src="<?= image(theme("assets/images/galeria-loja/0{$i}.jpg"), 630, 630); ?>" alt="" width="129" height="120"/></a>
                                        </div>
                                    </article>
                                </div>
                                <?php endfor; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>