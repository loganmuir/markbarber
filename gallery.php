<?php
/*
Template Name: Gallery
*/
?>

<?php get_header();?>


<div class="content grid gallery chocolat-parent"  data-chocolat-title="<?php the_title();?>"> 
        
<?php if(get_field('images')): ?>
    <?php $size = "thumbnail";?>
    <?php while(the_repeater_field('images')): ?>
      <?php $image = wp_get_attachment_image_src(get_sub_field('image'), 'full'); ?>
      <?php $thumb = wp_get_attachment_image_src(get_sub_field('image'), 'thumbnail' ); ?>
        <a title="<?php the_sub_field('title');?>" class="chocolat-image" href="<?php the_sub_field('image');?>"><div><span><?php the_sub_field('title');?></span><img src="<img src="<?php echo $thumb;?>">" alt="<?php the_sub_field('title');?>"/></div></a>
      <?php endwhile; ?>
  <?php endif; ?>
</div>

<?php get_footer();?>