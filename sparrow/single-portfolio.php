<?php get_header(); ?>


   <!-- Page Title
   ================================================== -->
   <div id="page-title">

      <div class="row">

         <div class="ten columns centered text-center">
            <h1>Our Amazing Works<span>.</span></h1>

            <p>Aenean condimentum, lacus sit amet luctus lobortis, dolores et quas molestias excepturi
            enim tellus ultrices elit, amet consequat enim elit noneas sit amet luctu. </p>
         </div>

      </div>

   </div> <!-- Page Title End-->
<?php if (have_posts() ) : while ( have_posts() ) : the_post(); ?>
   <!-- Content
   ================================================== -->
   <div class="content-outer">

      <div id="page-content" class="row portfolio">

         <section class="entry cf">

            <div id="secondary"  class="four columns entry-details">
 <? if(get_post_meta($post->ID, 'name_project',1)){?>
                  <h1><? echo get_post_meta($post->ID, 'name_project',1);?></h1><?}?>
 <? if(get_post_meta($post->ID, 'descrip_project',1)){?>
                  <div class="entry-description">
<? echo get_post_meta($post->ID, 'descrip_project',1);?>
                  </div><?}?>

                  <ul class="portfolio-meta-list">
 <? if(get_post_meta($post->ID, 'work_date',1)){?>
						   <li><span>Дата: </span><? echo get_post_meta($post->ID, 'work_date',1);?></li><?}?>
 <? if(get_post_meta($post->ID, 'clients_works',1)){?>
                     <li><span>Клиент: </span><? echo get_post_meta($post->ID, 'clients_works',1);?></li><?}?>
 <? if(get_post_meta($post->ID, 'skills_works',1)){?>
						   <li><span>Наработки: </span><?php the_terms( get_the_ID(), 'skills', '', ' / ', '' ); ?></li><?}?>
				      </ul>

                  <a class="button" href="http://behance.net">View project</a>

            </div> <!-- secondary End-->

            <div id="primary" class="eight columns">
               <div class="entry-media">
                  <img src="<?php the_field('first_image'); ?>" alt="первая картинка" />
                  <img src="<?php the_field('second_images'); ?>" alt="вторая картинка" />
               </div>
               <div class="entry-excerpt">
<?php the_content(); ?>
					</div>
            </div> <!-- primary end-->
         </section> <!-- end section -->

<!--
ссылки в статьях в следующую и предыдущую стьатьи
 -->
<ul class="post-nav cf">
  <li class="prev">
   <?php previous_post_link( $format = '%link', $link = '<strong>Предыдущая работа</strong> %title' ) ?>
</li>
<li class="next"> <?php next_post_link( $format = '%link', $link = '%title <strong>Следующая работа</strong>' ) ?>
</li>
</ul>

<!--          <ul class="post-nav cf">
			   <li class="prev"><a href="#" rel="prev"><strong>Previous Entry</strong> Duis Sed Odio Sit Amet Nibh Vulputate</a></li>
				<li class="next"><a href="#" rel="next"><strong>Next Entry</strong> Morbi Elit Consequat Ipsum</a></li>
			</ul> -->

      </div>

   </div> <!-- content End-->

   <!-- Tweets Section
   ================================================== -->
   <section id="tweets">

      <div class="row">

         <div class="tweeter-icon align-center">
            <i class="fa fa-twitter"></i>
         </div>

         <ul id="twitter" class="align-center">
            <li>
               <span>
               This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet.
               Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum
               <a href="#">http://t.co/CGIrdxIlI3</a>
               </span>
               <b><a href="#">2 Days Ago</a></b>
            </li>
            <!--
            <li>
               <span>
               This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet.
               Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum
               <a href="#">http://t.co/CGIrdxIlI3</a>
               </span>
               <b><a href="#">3 Days Ago</a></b>
            </li>
            -->
         </ul>

         <p class="align-center"><a href="#" class="button">Follow us</a></p>

      </div>

   </section> <!-- Tweet Section End-->
<?php endwhile; ?>
<?php endif; ?>
<?php get_footer(); ?>