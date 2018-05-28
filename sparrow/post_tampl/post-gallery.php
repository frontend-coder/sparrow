            <article class="post">
               <div class="entry-header cf">
                  <h1><?php the_title(); ?></h1>
                  <p class="post-meta">
                     <time class="date" datetime="2014-01-14T11:24"><?php the_time('j F Y в H:i'); ?></time>
                     / <span class="categories">
                     <?php the_category(' , '); ?> /
                     <?php the_tags('', ' , ' ); ?>
                     </span>
                  </p>
               </div>
<!--                <div class="post-thumb">
              <?php the_post_thumbnail('post_thumb'); ?>
               </div> -->
               <div class="post-content">
 <!--                  <p class="lead"></p> -->
 <?php the_content(); ?>
<!--                   <p class="tags">
                     <span>Метки</span>: <?php the_tags('', ' , ' ); ?>
                  </p> -->
                  <div class="bio cf">
                     <div class="gravatar">
                        <img src="images/author-img.png" alt="">
                     </div>
                     <div class="about">
                        <h5><a title="Posts by John Doe" href="#" rel="author">John Doe</a></h5>
                        <p>Jon Doe is lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate
                        cursus a sit amet mauris. Morbi accumsan ipsum velit. Duis sed odio sit amet nibh vulputate
                        <a href="#">cursus</a> a sit <a href="#">amet mauris</a>. Morbi elit consequat ipsum.</p>
                     </div>
                  </div>
        </div>
            </article> <!-- post end -->