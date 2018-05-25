<?php
// Template Name: Inicio
get_header();
?>

<div class="header-img-ruan">
    <div class="logo-centralizado">
        <img src="<?= get_template_directory_uri();?>/uploads/logo-header.png" alt="Ruan Reis Fotografia" class="img-fluid" id="logo-centralizado-img" />
        <a role="button" href="#" class="btn btn-outline-light" id="logo-centralizado-button">Saiba Mais</a>
    </div>

    <a href="#slider-ensaio"><div class="arrow bounce"></div></a>

    <div id="testemunho-slider" class="owl-carousel owl-theme testemunho-carousel">
        <?php for($i=0;$i<5;$i++){?>
        <div class="testemunho-conteudo item row">
            <div class="col-sm-3 col-xs-12"> <img src="<?= get_template_directory_uri();?>/uploads/gabriel-taina.jpg" alt="Imagem Testemunho" class="imagem-testemunho">
                <a href="#" class="btn btn-outline-dark btn-block">Ver Ensaio</a>
            </div>
            <div class="col-sm-9 col-xs-12"><p>
                Nosso amigo Ruan Reis, nosso querido fotografo, sempre profissional, trazendo uma abordagem de fotografia inovadora, muito mais divertida, de forma amiga, tornando toda a experiencia muito mais  natural , e confortável. Nossa maior dificuldade era a timidez, e Ruan Reis com sua forma  simpática de atuar, nos impressionou  assim nos fazendo sentir muito mais confortável. Agradecemos muito  pelo seu trabalho, sua dedicação , preços acessíveis, e profissionalismo, marcando eternamente este momento de felicidade.
            </p></div>
        </div>
        <?php } ?>
    </div>
</div>

<div id="slider-ensaio" class="owl-carousel owl-theme slider-ensaios">
    <?php for($i=0;$i<5;$i++){?>
        <div class="item">
            <img class="img-fluid" src="<?= get_template_directory_uri();?>/uploads/eduardo-juliana.jpg"
                alt="Ensaio <?=$i;?>" />
            <h2 class="slider-nome">Eduardo e Juliana</h2>
            <a href="#" role="button" class="slider-link btn btn-outline-light btn-lg">Ver Ensaio</a>
            
        </div>
    <?php } ?>
</div>

<div class="container">
    <div class="row">
        <?php for($i=0;$i<9;$i++){?>
            <div class="col-md-4 my-4">
                <div class="card-deck">
                    <div class="">
                        <div class="card-img-top">
                            <img class="img-fluid" src="<?= get_template_directory_uri();?>/uploads/gabriel-taina2.jpg" alt="Gabriel e Tainá">
                        </div>
                        <div class="card-footer my-1">
                            <h6 class="text-center">Gabriel e Tainá</h6>
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
</div>

<div class="container container-sobre">
    <div class="row">
        <div class="col-md-4" data-aos="zoom-out-left" data-aos-duration="1500">
            <img src="<?= get_template_directory_uri();?>/uploads/ruanreis-sobre.jpg" alt="Ruan Reis" class="imagem-sobre-inicio">
        </div>
        <div class="col-md-8" data-aos="zoom-out-left" data-aos-duration="2200">
            <h3 class="sobre-mim-inicio">Sobre Mim</h3>
            <p class="paragrafo-sobre-inicio">Olá, meu nome é Ruan, nascido e atualmente morando em Mogi Guaçu, estado de São Paulo.</p>
            <p class="paragrafo-sobre-inicio">Minha esposa Ana Paula e eu temos uma linda filha que se chama Ellie.</p>
            <p class="paragrafo-sobre-inicio">Uma pessoa muito sábia me ensinou que os melhores momentos da vida são aqueles em que estamos presentes de corpo e alma!</p>
            <p class="paragrafo-sobre-inicio">Sou fotografo, e acredito que a fotografia é essencial em nossa vida, ela tem a capacidade de nos fazer viajar no tempo, e <strong>recordar</strong> as emoções que sentimos no momento da <strong>foto</strong>.</p>
            <p class="paragrafo-sobre-inicio">A fotografia pode mudar nossos dias, nossa vida e a nossa história, <strong>e eu posso te dar o poder para recordar!</p>
        </div>
    </div>

    <div class="row mt-4">
        <div class="col-sm-12">
            <img src="" alt="">
        </div>
    </div>
</div>


<?php get_footer();?>