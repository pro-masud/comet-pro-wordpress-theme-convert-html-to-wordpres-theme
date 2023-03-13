      <article class="post-single">
          <div class="post-info">
            <h2><a href="<?php echo the_permalink(); ?>"><?php the_title(); ?></a></h2>
            <h6 class="upper"><span>By</span><a href="<?php echo the_permalink(); ?>"> <?php the_author(); ?></a><span class="dot"></span><span><?php the_time('F d, Y'); ?></span><span class="dot"></span><a href="<?php echo the_permalink(); ?>" class="post-tag"><?php the_tags(' ',', ',' '); ?></a></h6>
          </div>
          <div class="post-media">
            <a href="<?php echo the_permalink(); ?>">
              <?php the_post_thumbnail(); ?>
            </a>
          </div>
          <div class="post-body">
            <p><?php echo wp_trim_words( get_the_content(), 70, null); ?></p>
            <p><a href="<?php echo the_permalink(); ?>" class="btn btn-color btn-sm">Read More</a>
            </p>
          </div>
        </article>