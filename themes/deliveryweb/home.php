<?php $this->layout("_theme", ["head"=>$head]); ?>

<?php $this->insert("inc/banner"); ?>

<!-- Icons Ruby-->
<section class="section section-md bg-default section-top-image">
    <div class="container">
        <div class="row row-30 justify-content-center">
        <div class="col-sm-6 col-lg-4 wow fadeInRight" data-wow-delay="0s">
            <article class="box-icon-ruby">
            <div class="unit box-icon-ruby-body flex-column flex-md-row text-md-left flex-lg-column align-items-center text-lg-center flex-xl-row text-xl-left">
                <div class="unit-left">
                <div class="box-icon-ruby-icon linearicons-smile"></div>
                </div>
                <div class="unit-body">
                <h4 class="box-icon-ruby-title"><a href="#">Sanduíches</a></h4>
                </div>
            </div>
            </article>
        </div>
        <div class="col-sm-6 col-lg-4 wow fadeInRight" data-wow-delay=".1s">
            <article class="box-icon-ruby">
            <div class="unit box-icon-ruby-body flex-column flex-md-row text-md-left flex-lg-column align-items-center text-lg-center flex-xl-row text-xl-left">
                <div class="unit-left">
                <div class="box-icon-ruby-icon linearicons-pie-chart"></div>
                </div>
                <div class="unit-body">
                <h4 class="box-icon-ruby-title"><a href="#">Massas e pizzas</a></h4>
                </div>
            </div>
            </article>
        </div>
        <div class="col-sm-6 col-lg-4 wow fadeInRight" data-wow-delay=".2s">
            <article class="box-icon-ruby">
            <div class="unit box-icon-ruby-body flex-column flex-md-row text-md-left flex-lg-column align-items-center text-lg-center flex-xl-row text-xl-left">
                <div class="unit-left">
                <div class="box-icon-ruby-icon linearicons-coffee-cup"></div>
                </div>
                <div class="unit-body">
                <h4 class="box-icon-ruby-title"><a href="#">Drinks e bebidas</a></h4>
                </div>
            </div>
            </article>
        </div>
        </div>
    </div>
</section>

<!-- Trending products-->
<section class="section section-md bg-default">
    <div class="container">
        <div class="row row-40 justify-content-center">
            <div class="col-sm-8 col-md-7 col-lg-6 wow fadeInLeft" data-wow-delay="0s">
                <div class="product-banner">
                    <img src="<?= image(theme("assets/images/banner/pizza.jpg"), 570, 715) ?>" alt="" width="570" height="715"/>
                </div>
            </div>
        <div class="col-md-5 col-lg-6">
            <div class="row row-30 justify-content-center">
                <div class="col-sm-6 col-md-12 col-lg-6">
                    <div class="oh-desktop">
                    <!-- Product-->
                    <article class="product product-2 box-ordered-item wow slideInRight" data-wow-delay="0s">
                        <div class="unit flex-row flex-lg-column">
                        <div class="unit-left">
                            <div class="product-figure"><img src="images/product-5-270x280.png" alt="" width="270" height="280"/>
                            <div class="product-button"><a class="button button-md button-white button-ujarak" href="#">Add to cart</a></div>
                            </div>
                        </div>
                        <div class="unit-body">
                            <h6 class="product-title"><a href="#">Avocados</a></h6>
                            <div class="product-price-wrap">
                            <div class="product-price product-price-old">$59.00</div>
                            <div class="product-price">$28.00</div>
                            </div><a class="button button-sm button-secondary button-ujarak" href="#">Add to cart</a>
                        </div>
                        </div>
                    </article>
                    </div>
                </div>
                <div class="col-sm-6 col-md-12 col-lg-6">
                    <div class="oh-desktop">
                    <!-- Product-->
                    <article class="product product-2 box-ordered-item wow slideInLeft" data-wow-delay="0s">
                        <div class="unit flex-row flex-lg-column">
                        <div class="unit-left">
                            <div class="product-figure"><img src="images/product-6-270x280.png" alt="" width="270" height="280"/>
                            <div class="product-button"><a class="button button-md button-white button-ujarak" href="#">Add to cart</a></div>
                            </div>
                        </div>
                        <div class="unit-body">
                            <h6 class="product-title"><a href="#">Corn</a></h6>
                            <div class="product-price-wrap">
                            <div class="product-price">$27.00</div>
                            </div><a class="button button-sm button-secondary button-ujarak" href="#">Add to cart</a>
                        </div>
                        </div>
                    </article>
                    </div>
                </div>
                <div class="col-sm-6 col-md-12 col-lg-6">
                    <div class="oh-desktop">
                    <!-- Product-->
                    <article class="product product-2 box-ordered-item wow slideInLeft" data-wow-delay="0s">
                        <div class="unit flex-row flex-lg-column">
                        <div class="unit-left">
                            <div class="product-figure"><img src="images/product-8-270x280.png" alt="" width="270" height="280"/>
                            <div class="product-button"><a class="button button-md button-white button-ujarak" href="#">Add to cart</a></div>
                            </div>
                        </div>
                        <div class="unit-body">
                            <h6 class="product-title"><a href="#">Artichokes</a></h6>
                            <div class="product-price-wrap">
                            <div class="product-price">$23.00</div>
                            </div><a class="button button-sm button-secondary button-ujarak" href="#">Add to cart</a>
                        </div>
                        </div>
                    </article>
                    </div>
                </div>
                <div class="col-sm-6 col-md-12 col-lg-6">
                    <div class="oh-desktop">
                    <!-- Product-->
                    <article class="product product-2 box-ordered-item wow slideInRight" data-wow-delay="0s">
                        <div class="unit flex-row flex-lg-column">
                        <div class="unit-left">
                            <div class="product-figure"><img src="images/product-7-270x280.png" alt="" width="270" height="280"/>
                            <div class="product-button"><a class="button button-md button-white button-ujarak" href="#">Add to cart</a></div>
                            </div>
                        </div>
                        <div class="unit-body">
                            <h6 class="product-title"><a href="#">Broccoli</a></h6>
                            <div class="product-price-wrap">
                            <div class="product-price">$25.00</div>
                            </div><a class="button button-sm button-secondary button-ujarak" href="#">Add to cart</a>
                        </div>
                        </div>
                    </article>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </div>
</section>

<!-- Section CTA 2-->
<section class="section text-center">
<div class="parallax-container" data-parallax-img="<?= image(theme("assets/images/banner/promocao.jpg"), 1920, 701)?>">
    <div class="parallax-content section-xl section-inset-custom-1 context-dark bg-overlay-40">
    <div class="container">
        <h2 class="oh font-weight-normal"><span class="d-inline-block wow slideInDown" data-wow-delay="0s">Promoções</span></h2>
        <p class="oh big text-width-large"><span class="d-inline-block wow slideInUp" data-wow-delay=".2s">Veja todas as nossas promoções clicando no botão abaixo, temos várias promoções com diversos produtos.</span></p><a class="button button-primary button-icon button-icon-left button-ujarak wow fadeInUp" href="https://www.youtube.com/watch?v=-AhmuMqZB0s" data-lightgallery="item" data-wow-delay=".1s"><span class="icon mdi mdi-play"></span>Todas as promoções</a>
    </div>
    </div>
</div>
</section>

<!-- About us-->
<section class="section">
<div class="parallax-container" data-parallax-img="images/bg-parallax-2.jpg">
    <div class="parallax-content section-xl context-dark bg-overlay-68">
    <div class="container">
        <div class="row row-lg row-50 justify-content-center border-classic border-classic-big">
        <div class="col-sm-6 col-md-5 col-lg-3 wow fadeInLeft" data-wow-delay="0s">
            <div class="counter-creative">
            <div class="counter-creative-number"><span class="counter">12</span><span class="icon counter-creative-icon fl-bigmug-line-trophy55"></span>
            </div>
            <h6 class="counter-creative-title">Awards</h6>
            </div>
        </div>
        <div class="col-sm-6 col-md-5 col-lg-3 wow fadeInLeft" data-wow-delay=".1s">
            <div class="counter-creative">
            <div class="counter-creative-number"><span class="counter">2</span><span class="symbol">k</span><span class="icon counter-creative-icon fl-bigmug-line-up104"></span>
            </div>
            <h6 class="counter-creative-title">Products</h6>
            </div>
        </div>
        <div class="col-sm-6 col-md-5 col-lg-3 wow fadeInLeft" data-wow-delay=".2s">
            <div class="counter-creative">
            <div class="counter-creative-number"><span class="counter">679</span><span class="icon counter-creative-icon fl-bigmug-line-sun81"></span>
            </div>
            <h6 class="counter-creative-title">Happy Clients</h6>
            </div>
        </div>
        <div class="col-sm-6 col-md-5 col-lg-3 wow fadeInLeft" data-wow-delay=".3s">
            <div class="counter-creative">
            <div class="counter-creative-number"><span class="counter">13</span><span class="icon counter-creative-icon fl-bigmug-line-user143"></span>
            </div>
            <h6 class="counter-creative-title">Farmers</h6>
            </div>
        </div>
        </div>
    </div>
    </div>
</div>

</section>
<!-- Improve your interior with deco-->

<section class="section section-md bg-default section-top-image">
<div class="container">
    <div class="oh h2-title">
    <h2 class="wow slideInUp" data-wow-delay="0s">Alguns produtos</h2>
    </div>
    <div class="row row-30" data-lightgallery="group">
        <?php for($i=1; $i<=6; $i++): ?>
            <div class="col-sm-6 col-lg-4">
                <div class="oh-desktop">
                <!-- Thumbnail Classic-->
                <article class="thumbnail thumbnail-mary thumbnail-sm wow slideInLeft" data-wow-delay="0s">
                    <div class="thumbnail-mary-figure"><img src="<?= image(theme("assets/images/galeria/0{$i}-tumb.jpg"), 370, 303) ?>" alt="" width="370" height="303"/>
                    </div>
                    <div class="thumbnail-mary-caption"><a class="icon fl-bigmug-line-zoom60" href="<?= image(theme("assets/images/galeria/0{$i}.jpg"), 650, 650) ?>" data-lightgallery="item"><img src="<?= image(theme("assets/images/galeria/0{$i}.jpg"), 650, 650) ?>" alt="" width="650" height="650"/></a>
                    <h4 class="thumbnail-mary-title"><a href="#">Watermelons</a></h4>
                    </div>
                </article>
                </div>
            </div>
        <?php endfor; ?>
    </div>
</div>
</section>