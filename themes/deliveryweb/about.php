<?php $this->layout("_theme", ["head"=>$head]); ?>

<!-- Why choose us-->
<section class="section section-md section-first bg-default text-md-left">
<div class="container">
    <div class="row row-50 justify-content-center">
        <div class="col-md-10 col-lg-5 col-xl-6"><img src="<?= image(theme("assets/images/cozinha.jpg"), 519, 446)?>" alt="" width="519" height="446"/>
        </div>
        <div class="col-md-10 col-lg-7 col-xl-6">
            <h2>Porque escolher-nos</h2>
            <!-- Bootstrap tabs-->
            <div class="tabs-custom tabs-horizontal tabs-line" id="tabs-4">
                <!-- Nav tabs-->
                <ul class="nav nav-tabs">
                    <li class="nav-item" role="presentation"><a class="nav-link active" href="#tabs-4-1" data-toggle="tab">Nossos objetivos</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="#tabs-4-2" data-toggle="tab">Nossos valores</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="#tabs-4-3" data-toggle="tab">Nossa missão</a></li>
                </ul>
                <!-- Tab panes-->
                <div class="tab-content">
                    <div class="tab-pane fade show active" id="tabs-4-1">
                        <p>Nosso site de entrega de fast food está aqui para satisfazer seus desejos de comida rápida e garantir que você tenha uma experiência incrível a cada pedido. Estamos ansiosos para servi-lo e tornar suas refeições ainda mais saborosas e convenientes. Faça seu pedido agora e descubra o que temos reservado para você!</p>
                        <div class="text-center text-sm-left offset-top-30">
                            <ul class="row-16 list-0 list-custom list-marked list-marked-sm list-marked-secondary">
                            <li>Sabor Incomparável</li>
                            <li>Variedade Irresistível</li>
                            <li>Entrega Rápida e Confiável</li>
                            <li>Facilidade de Pedido</li>
                            <li>Atendimento ao Cliente Excepcional</li>
                            <li>Opções Saudáveis</li>
                            </ul>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="tabs-4-2">
                        <p>Nossos valores são a base de tudo o que fazemos. Eles nos motivam a servir comida rápida de qualidade, cuidar de nossos clientes e contribuir para uma comunidade melhor. Ao escolher nossa comida, você não apenas satisfaz seu paladar, mas também compartilha de nossos valores. Obrigado por fazer parte da nossa jornada!.</p>
                        <div class="text-center text-sm-left offset-top-30">
                            <ul class="row-16 list-0 list-custom list-marked list-marked-sm list-marked-secondary">
                            <li>Qualidade Impecável</li>
                            <li>Satisfação do Cliente</li>
                            <li>Diversidade e Inclusão</li>
                            <li>Sustentabilidade</li>
                            <li>Transparência</li>
                            <li>Integridade</li>
                            </ul>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="tabs-4-3">
                        <p>Nossa missão é muito mais do que servir comida rápida. É sobre criar momentos especiais, nutrir a felicidade e fazer parte de sua vida diária. Agradecemos por nos escolher como seu destino de fast food e esperamos continuar alimentando sua alegria por muitos anos.</p>
                        <div class="text-center text-sm-left offset-top-30">
                            <ul class="row-16 list-0 list-custom list-marked list-marked-sm list-marked-secondary">
                                <li>Inovação Constante</li>
                                <li>Valor Acessível</li>
                                <li>Conveniência Sem Compromisso</li>
                                <li>Alegria Compartilhada</li>
                                <li>Respeito ao Meio Ambiente</li>
                                <li>Envolvimento na Comunidade</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</section>

<!-- What people say-->
<section class="section context-dark">
    <div class="parallax-container" data-parallax-img="<?= image(theme("assets/images/bg-parallax-2.jpg"), 1920, 558)?>">
        <div class="parallax-content section-md bg-overlay-2-21">
        <div class="container">
            <div class="oh">
            <h2 class="wow slideInUp" data-wow-delay="0s">Depoimentos</h2>
            </div>
            <!-- Owl Carousel-->
            <div class="owl-carousel owl-modern" data-items="1" data-stage-padding="15" data-margin="30" data-dots="true" data-animation-in="fadeIn" data-animation-out="fadeOut" data-autoplay="true">
            <!-- Quote Lisa-->
            <article class="quote-lisa">
                <div class="quote-lisa-body"><a class="quote-lisa-figure" href="#"><img class="img-circles" src="images/user-16-100x100.jpg" alt="" width="100" height="100"/></a>
                <div class="quote-lisa-text">
                    <p class="q">Eu sou um cliente fiel da <?= CONF_SITE_NAME ?> e não consigo resistir aos seus lanches deliciosos. Cada mordida é uma festa para o meu paladar. O atendimento rápido e a qualidade constante me fazem voltar sempre que estou com fome.</p>
                </div>
                <h5 class="quote-lisa-cite"><a href="#">Pedro Santos</a></h5>
                <p class="quote-lisa-status">Cliente satisfeito</p>
                </div>
            </article>
            <!-- Quote Lisa-->
            <article class="quote-lisa">
                <div class="quote-lisa-body"><a class="quote-lisa-figure" href="#"><img class="img-circles" src="images/user-17-100x100.jpg" alt="" width="100" height="100"/></a>
                <div class="quote-lisa-text">
                    <p class="q">Quando estou com vontade de um lanche saboroso, a <?= CONF_SITE_NAME ?> é o meu destino certo. Eu experimentei o sanduíche vegetariano e fiquei surpresa com o quão saboroso e saudável ele era. É ótimo ver opções para todos os gostos.</p>
                </div>
                <h5 class="quote-lisa-cite"><a href="#">Ana Oliveira</a></h5>
                <p class="quote-lisa-status">Cliente satisfeito</p>
                </div>
            </article>
            <!-- Quote Lisa-->
            <article class="quote-lisa">
                <div class="quote-lisa-body"><a class="quote-lisa-figure" href="#"><img class="img-circles" src="images/user-18-100x100.jpg" alt="" width="100" height="100"/></a>
                <div class="quote-lisa-text">
                    <p class="q">Os lanches da <?= CONF_SITE_NAME ?> são simplesmente incríveis! Eu provei o hambúrguer especial e, sério, foi uma explosão de sabores. A carne suculenta, os ingredientes frescos e o atendimento impecável tornaram a minha visita memorável</p>
                </div>
                <h5 class="quote-lisa-cite"><a href="#">Maria da Silva</a></h5>
                <p class="quote-lisa-status">Cliente satisfeito</p>
                </div>
            </article>
            </div>
        </div>
        </div>
    </div>
</section>


<!-- Latest Projects-->
<section class="section section-md section-fluid bg-default">
    <div class="container">
        <h2>Nossa história</h2>
    </div>
    <!-- Owl Carousel-->
    <div class="owl-carousel owl-classic owl-timeline" data-items="1" data-md-items="2" data-lg-items="3" data-xl-items="4" data-margin="30" data-stage-padding="15" data-xxl-stage-padding="0" data-autoplay="true" data-nav="true" data-dots="true">
        <div class="owl-item">
        <!-- Thumbnail Classic-->
        <article class="thumbnail thumbnail-mary thumbnail-md">
            <div class="thumbnail-mary-figure"><img src="images/project-1-420x308.jpg" alt="" width="420" height="308"/>
            </div>
            <div class="thumbnail-mary-caption"><a class="icon fl-bigmug-line-zoom60" href="images/gallery-original-11-800x1200.jpg" data-lightgallery="item"><img src="images/project-1-420x308.jpg" alt="" width="420" height="308"/></a>
            </div>
        </article>
        <div class="thumbnail-mary-description">
            <h5 class="thumbnail-mary-project"><a href="#">Farm Establishment</a></h5><span class="thumbnail-mary-decor"></span>
            <h5 class="thumbnail-mary-time">
            <time datetime="1999">1999</time>
            </h5>
        </div>
        </div>
        <div class="owl-item">
        <!-- Thumbnail Classic-->
        <article class="thumbnail thumbnail-mary thumbnail-md">
            <div class="thumbnail-mary-figure"><img src="images/project-2-420x308.jpg" alt="" width="420" height="308"/>
            </div>
            <div class="thumbnail-mary-caption"><a class="icon fl-bigmug-line-zoom60" href="images/gallery-original-5-800x1200.jpg" data-lightgallery="item"><img src="images/project-2-420x308.jpg" alt="" width="420" height="308"/></a>
            </div>
        </article>
        <div class="thumbnail-mary-description">
            <h5 class="thumbnail-mary-project"><a href="#">New Partners</a></h5><span class="thumbnail-mary-decor"></span>
            <h5 class="thumbnail-mary-time">
            <time datetime="2005">2005</time>
            </h5>
        </div>
        </div>
        <div class="owl-item">
        <!-- Thumbnail Classic-->
        <article class="thumbnail thumbnail-mary thumbnail-md">
            <div class="thumbnail-mary-figure"><img src="images/project-3-420x308.jpg" alt="" width="420" height="308"/>
            </div>
            <div class="thumbnail-mary-caption"><a class="icon fl-bigmug-line-zoom60" href="images/gallery-original-4-800x1200.jpg" data-lightgallery="item"><img src="images/project-3-420x308.jpg" alt="" width="420" height="308"/></a>
            </div>
        </article>
        <div class="thumbnail-mary-description">
            <h5 class="thumbnail-mary-project"><a href="#">Opening Our Online Store</a></h5><span class="thumbnail-mary-decor"></span>
            <h5 class="thumbnail-mary-time">
            <time datetime="2010">2010</time>
            </h5>
        </div>
        </div>
        <div class="owl-item">
        <!-- Thumbnail Classic-->
        <article class="thumbnail thumbnail-mary thumbnail-md">
            <div class="thumbnail-mary-figure"><img src="images/project-4-420x308.jpg" alt="" width="420" height="308"/>
            </div>
            <div class="thumbnail-mary-caption"><a class="icon fl-bigmug-line-zoom60" href="images/gallery-original-3-800x1200.jpg" data-lightgallery="item"><img src="images/project-4-420x308.jpg" alt="" width="420" height="308"/></a>
            </div>
        </article>
        <div class="thumbnail-mary-description">
            <h5 class="thumbnail-mary-project"><a href="#">Farming Industry Leader</a></h5><span class="thumbnail-mary-decor"></span>
            <h5 class="thumbnail-mary-time">
            <time datetime="2013">2013</time>
            </h5>
        </div>
        </div>
        <div class="owl-item">
        <!-- Thumbnail Classic-->
        <article class="thumbnail thumbnail-mary thumbnail-md">
            <div class="thumbnail-mary-figure"><img src="images/project-5-420x308.jpg" alt="" width="420" height="308"/>
            </div>
            <div class="thumbnail-mary-caption"><a class="icon fl-bigmug-line-zoom60" href="images/gallery-original-1-1200x800.jpg" data-lightgallery="item"><img src="images/project-5-420x308.jpg" alt="" width="420" height="308"/></a>
            </div>
        </article>
        <div class="thumbnail-mary-description">
            <h5 class="thumbnail-mary-project"><a href="#">Farming Innovations</a></h5><span class="thumbnail-mary-decor"></span>
            <h5 class="thumbnail-mary-time">
            <time datetime="2019">2019</time>
            </h5>
        </div>
        </div>
    </div>
</section>
