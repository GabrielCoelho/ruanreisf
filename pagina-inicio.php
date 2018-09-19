<?php
// Template Name: Inicio
get_header();

$depoimentos = CFS()->get('adicionar_depoimento');
$slider = CFS()->get('slider_inicial');
?>

    <div class="header-img-ruan">
        <div class="informacoes-index">
            <div class="logo-centralizado">
                <img src="<?= get_template_directory_uri();?>/uploads/logo-header.png" alt="Ruan Reis Fotografia" class="img-fluid animated fadeInRight"
                    id="logo-centralizado-img" />
                <a role="button" href="#container-sobre" class="btn btn-outline-light animated fadeInLeft" id="logo-centralizado-button">Saiba
                    Mais</a>
            </div>

            <a href="#slider-ensaio">
                <div class="arrow bounce"></div>
            </a>
        </div>
        <div id="slider-ensaio" class="owl-carousel owl-theme slider-ensaios">
            <?php foreach ($slider as $s) { ?>
                <div class="item">
                    <img src="<?= $s['imagem_slider']?>" alt="<?= $s['nome_ensaio']?>" class="img-fluid">
                    <!-- <h2 class="slider-nome"><?//= $s['nome_ensaio'];?></h2>
                    <a href="<?//= $s['link']?>" role="button" class="slider-link btn btn-outline-light btn-lg">Ver Ensaio</a> -->
                </div>
            <?php } ?>
        </div>
    </div>
    <div class="bg-grey">
        <div class="container">
            <div id="testemunho-slider" class="owl-carousel owl-theme testemunho-carousel">
                <?php foreach ( array_reverse($depoimentos) as $d) {?>
                <div class="testemunho-conteudo item row">
                    <div class="col-sm-3 col-xs-12">
                        <img src="<?= $d['foto_ensaio']?>" alt="Imagem Depoimento" class="imagem-testemunho">
                        <a href="<?= $d['link_ensaio']?>" class="btn btn-outline-dark btn-block">Ver Ensaio</a>
                    </div>
                    <div class="col-sm-9 col-xs-12">
                        <p>
                            <?= $d['depoimento']?>
                        </p>
                    </div>
                </div>
                <?php }?>
            </div>
        </div>

        <div class="container">
            <div class="row">
            <?php 
            // Query para pegar os 9 ultimos posts
            $queryIndex = new WP_Query('all');
            if($queryIndex->found_posts > 9){
                $queryIndex->post_count = 9;
            }

            if (  $queryIndex->have_posts() ) : while (  $queryIndex->have_posts() ) :  $queryIndex->the_post(); ?>
                <div class="col-md-4 my-4">
                    <div class="card-deck">
                        <div class="">
                            <div class="card-img-top">
                                <img src="<?= the_post_thumbnail_url('medium');?>" style="min-height: 200px; max-width: 360px;" class="img-fluid" alt="<?php the_title();?>">
                            </div>
                            <div class="card-footer my-1">
                                <h6 class="text-center">
                                    <a href="<?php the_permalink();?>">
                                        <?php the_title();?>
                                    </a>
                                </h6>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endwhile; 
                else :esc_html_e( 'Sorry, no posts matched your criteria.' ); endif; wp_reset_postdata();
            ?>
            </div>
        </div>

        <div class="container container-sobre" id="container-sobre">
            <div class="row">
                <div class="col-md-4" data-aos="zoom-out-left" data-aos-duration="1500">
                    <img src="<?= get_template_directory_uri();?>/uploads/ruanreis-sobre.jpg" alt="Ruan Reis" class="imagem-sobre-inicio">
                </div>
                <div class="col-md-8" data-aos="zoom-out-left" data-aos-duration="2200">
                    <h3 class="sobre-mim-inicio">Sobre Mim</h3>
                    <p class="paragrafo-sobre-inicio">Olá, meu nome é Ruan, nascido e atualmente morando em Mogi Guaçu, estado
                        de São Paulo.</p>
                    <p class="paragrafo-sobre-inicio">Minha esposa Ana Paula e eu temos uma linda filha que se chama Ellie.</p>
                    <p class="paragrafo-sobre-inicio">Uma pessoa muito sábia me ensinou que os melhores momentos da vida são
                        aqueles em que estamos presentes
                        de corpo e alma!</p>
                    <p class="paragrafo-sobre-inicio">Sou fotografo, e acredito que a fotografia é essencial em nossa vida, ela
                        tem a capacidade de nos fazer
                        viajar no tempo, e
                        <strong>recordar</strong> as emoções que sentimos no momento da
                        <strong>foto</strong>.</p>
                    <p class="paragrafo-sobre-inicio">A fotografia pode mudar nossos dias, nossa vida e a nossa história,
                        <strong>e eu posso te dar o poder para recordar!</p>
                </div>
            </div>

            <div class="row mt-4">
                <div class="col-sm-12">
                    <img src="" alt="">
                </div>
            </div>
        </div>
    </div>
<?php get_footer();?>