<?php get_header(); ?>
<div class="bg_black">
    <div class="container">
        <div class="row justify-content-center">
            <ul class="d-inline-flex text-center menu-arquivo">
                <li class="pr-4"><a href="/ruanreisfotografia/category/ensaio" class="menu-arquivo"> Ensaios </a></li>
                <li class="pr-4"><a href="/ruanreisfotografia/category/casamento" class="menu-arquivo"> Casamentos </a></li>
                <li class="pr-4"><a href="/ruanreisfotografia/category/aniversario" class="menu-arquivo"> Aniversários </a></li>
                <li class="pr-4"><a href="/ruanreisfotografia/category/familia" class="menu-arquivo"> Família </a></li>
                <li class="pr-4"><a href="/ruanreisfotografia/o-que-fazemos/" class="menu-arquivo"> Todos </a></li>
            </ul>
        </div>
    </div>
</div>

<div class="background-posts">
    <div class="container py-3">
        <div class="row justify-content-center">
            <h2 class="titulo-arquivo">Família</h2>
        </div>
    </div>

    <?php 
    // query para pegar os posts da categoria "Familia"
        $argumentos = array(
            'category_name' => 'familia'
        );
        $querySearch = new WP_Query($argumentos);
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