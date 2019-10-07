<?php query_posts( array(
    'post_type' => 'client',
    'post_per_page' => 5,
  )); 
?>
<?php while (have_posts()) : the_post(); ?>
<div class="col align-self-center">
    <p><?php the_post_thumbnail(); ?></p>
</div>
<?php endwhile; ?>
<?php wp_reset_query(); ?>