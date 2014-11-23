<?php/** * The template for displaying Search Results pages. *  */?><?php get_header(); ?><div class="page-content">  <div class="grid_sub_16 sub_alpha">    <div class="content-bar">      <?php if (have_posts()) : ?>      <h1 class="page_title"><?php printf(__('Search Results for: %s', 'elite'), '' . get_search_query() . ''); ?></h1>      <!--Start Post-->      <?php get_template_part('loop', 'search'); ?>      <!--End Post-->      <?php else : ?>      <article id="post-0" class="post no-results not-found">        <header class="entry-header">          <h1 class="entry-title">            <?php _e('Nothing Found', 'elite'); ?>          </h1>        </header>        <!-- .entry-header -->        <div class="entry-content">          <p>            <?php _e('Sorry, but nothing matched your search criteria. Please try again with some different keywords.', 'elite'); ?>          </p>          <?php get_search_form(); ?>        </div>        <!-- .entry-content -->      </article>      <?php endif; ?>      <div class="clear"></div>      <nav id="nav-single"> <span class="nav-previous">        <?php next_posts_link(__('&larr; Older posts', 'elite')); ?>        </span> <span class="nav-next">        <?php previous_posts_link(__('Newer posts &rarr;', 'elite')); ?>        </span> </nav>    </div>  </div>  <div class="grid_sub_8 sub_omega">    <?php get_sidebar(); ?>  </div></div></div><?php get_footer(); ?>