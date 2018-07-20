<?php get_header();

$nome = CFS()->get('nome_do_ensaio');
$desc = CFS()->get('descricao_do_ensaio');
$datalocal = CFS()->get('data_e_local');
$imagem_cliente = CFS()->get('imagem_cliente');
$depoimento = CFS()->get('depoimento_cliente');
?>

<?php //the loop :D 
    if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

    <div class="fundo-imagem" style="background-image: url(<?php the_post_thumbnail_url();?>);">
        <div class="mask">
            <div class="centered">
                <h3 class="post_title">
                    <?= $nome; ?>
                </h3>
                <span class="post_description">
                    <?= $desc; ?>
                </span>
                <p class="date_n_local">
                    <?= $datalocal; ?>
                </p>
            </div>
        </div>
    </div>

    <div class="background-posts">
        <div class="container fundo-branco-post">
            <div class="row">
                <img src="<?= $imagem_cliente ?>" alt="<?= $nome; ?>" class="imagem-testemunho img-fluid">
            </div>
            <div class="row">
                <p class="depoimento">
                    <?= $depoimento; ?>
                </p>
            </div>
        </div>

        <div class="container o_conteudo">
            <?php the_content();?>
        </div>
        
    </div>
<?php endwhile; 
    else : esc_html_e( 'Sorry, no posts matched your criteria.' ); endif; ?>

<?php get_footer();?>