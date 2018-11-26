<?php get_header(); ?>

<div class="wrap">
	<?php if ( is_home() && ! is_front_page() ) { ?>
		<header class="page-header">
			<h1 class="page-title"><?php single_post_title(); ?></h1>
		</header>
	<?php } else { ?>
	<header class="page-header">
		<h2 class="page-title"><?php /* _e( 'Posts', 'twentyseventeen' ); */?></h2>
	</header>
	<?php } ?>
	
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<!--LOOP-->
		
		<?php
			if ( have_posts() ) {
				while ( have_posts() ) {
					the_post();
					echo "<a href='";
						the_permalink();
					echo"'><h1>";
						the_title();
					echo "</h1></a>";
					the_post_thumbnail();
					echo "<br>";
					the_excerpt();
					the_content();
				    echo "<h3> Autor: &nbsp; ";
				    	the_author();
				    echo "&nbsp;&nbsp;&nbsp;&nbsp; Fecha Publicacion: &nbsp;";
				    	the_date();
				    echo "</h3>";
				}
			}else {
				get_template_part( 'template-parts/post/content', 'none' );	
			}
	    ?>
		
		</main><!-- #main -->
	</div><!-- #primary -->
	<?php get_sidebar(); ?>
</div><!-- .wrap -->

<?php get_footer(); ?>