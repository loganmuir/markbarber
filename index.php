<?php get_header();?>

    <div class="desktop">
      <ul class="slideshow">
            <?php
    if( have_rows('desktop_slider') ):
        while ( have_rows('desktop_slider') ) : the_row();
            ?>
            <li><span style="background:url(<?php the_sub_field('image');?>);"></span></li>
            <?php
        endwhile;
    else :
    endif;
    ?>
      </ul>
    </div>

    <div class="mobile">
      <ul class="slideshow">
            <?php
    if( have_rows('mobile_slider') ):
        while ( have_rows('mobile_slider') ) : the_row();
            ?>
            <li><span style="background:url(<?php the_sub_field('image');?>);"></span></li>
            <?php
        endwhile;
    else :
    endif;
    ?>
      </ul>
    </div>

<?php get_footer();?>