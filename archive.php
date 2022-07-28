<?php get_header(); ?>
 	<h1>Le thème Réalise</h1>

<?php 
    if ( is_category() ) {
        $title = "Catégorie : " . single_tag_title( '', false );
    }
    elseif ( is_tag() ) {
        $title = "Étiquette : " . single_tag_title( '', false );
    }
    elseif ( is_search() ) {
        $title = "Vous avez recherché : " . get_search_query();
    }
    else {
        $title = 'Le thème';
    }
?>
<h2><?php echo $title; ?></h2>


<?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>

    <article class="post">
        <h2><?php the_title(); ?></h2>
  
        <?php the_post_thumbnail(); ?>

        <!-- Pour afficher la date, on va utiliser the_time() même si on dispose d'une autre fonction
la fonction get_option() permet de récupérer la valeur indiquée dans Réglages > général > Format de date -->
        <p class="post__meta">
                Publié le <?php the_time( get_option( 'date_format' ) ); ?> 
                par <?php the_author(); ?> • <?php comments_number(); ?>
            </p>

            <!-- La fonction the_date() affichera qu’une seule fois la même date si plusieurs articles sont publiés le même jour, seulement le premier affichera la date. En réalité on s’en sert pour un classement chronologique ou on affiche d’abord une date, puis la liste des articles publiés ce jour-ci -->
            <?php the_excerpt(); ?>
              
      		<p>
                <a href="<?php the_permalink(); ?>" class="post__link">Lire la suite</a>
            </p>
		</article>

	<?php endwhile; endif; ?>

    <?php get_template_part( 'parts/newsletter' ); ?>

<?php get_footer(); ?>

<!--
https://wpchannel.com/wordpress/tutoriels-wordpress/creer-page-darchives-articles-classes-categories/
https://code.tutsplus.com/articles/create-a-wordpress-archives-template-for-your-theme--wp-23384
https://wpfr.net/support/sujet/trouver-le-fichier-archive-php/
-->

