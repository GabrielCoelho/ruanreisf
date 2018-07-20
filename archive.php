<?php 
// Template Name: OqFazemos
get_header(); ?>

<div class="bg_black">
    <div class="container">
        <div class="row justify-content-center">
            <ul class="d-inline-flex text-center menu-arquivo">
                <li class="pr-4"> Ensaios </li>
                <li class="pr-4"> Casamentos </li>
                <li class="pr-4"> Aniversários </li>
                <li class="pr-4"> Família </li>
                <li class="pr-4"> Todos </li>
            </ul>
        </div>
    </div>
</div>

<div class="background-posts">
    <div class="container py-3">
        <div class="row justify-content-center">
            <h2 class="titulo-arquivo">Todos</h2>
        </div>
    </div>

    <?php 
    // query para pegar os posts
        $querySearch = new WP_Query('all');
    ?>

    <div class="container mt-2">
        <div class="row">
            <?php 
                    if (  $querySearch->have_posts() ) : while (  $querySearch->have_posts() ) :  $querySearch->the_post(); ?>
            <div class="col-md-4 col-xs-12 my-3">
                <div class="fundo-branco-post">
                    <a href="<?php the_permalink();?>"><img src="<?= the_post_thumbnail_url('medium-large');?>" alt="<?php the_title();?>" class="card-img-top"></a>
                    <h4 class="pt-1 link-target">
                        <a class="anchor-post" href="<?php the_permalink();?>">
                            <?php the_title();?>
                        </a>
                    </h4>
                </div>
            </div>
            <?php endwhile; 
                    else : esc_html_e( 'Sorry, no posts matched your criteria.' ); endif; wp_reset_postdata();
                ?>
        </div>
    </div>
</div>
<?php get_footer();?>