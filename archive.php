<?php 
// Template Name: OqFazemos
get_header(); ?>

<div class="container">
    <div class="row justify-content-center">
        <ul class="d-inline-flex text-center" style="list-style-type: none;">
            <li class="pr-4"> Ensaios </li>
            <li class="pr-4"> Casamentos </li>
            <li class="pr-4"> Aniversários </li>
            <li class="pr-4"> Família </li>
            <li class="pr-4"> Todos </li>
        </ul>
    </div>
</div>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<?php endwhile; else : ?>
	<p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>
<?php get_footer();?>