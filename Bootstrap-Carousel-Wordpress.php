<?php $args = array(
                 'post_type' => 'post',
                 'posts_per_page' => -1,
                 'tag' => 'slide', /*configure the tag as you want it with 'tag' => 'yout-tag-go-here'*/
                
             );
             $slider = new WP_Query($args);
             if($slider->have_posts()):
             
             ?>

<div class="container ">
<div class="row ">
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">


                <div class="carousel-inner">
                   <?php $i = 0; while($slider->have_posts()): $slider->the_post(); ?>
                       <div class=" item carousel-item <?php echo ($i == 0) ? 'active' : ''?>">
                             <?php the_post_thumbnail('post',  array(
                                                                     'class' => 'd-block w-25 ', 
                                                           
                                                                      ) ) ; ?>
                            
                       </div><!--.carousel-item-->
                   <?php $i++; endwhile; ?>
                 

                </div> <!--.carouse-inner-->


</div> 
 <?php endif; 
        wp_reset_postdata(); ?>
             
          </div>
        </div>