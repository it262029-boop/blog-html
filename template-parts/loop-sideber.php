 <div class="sideberarea">
     <div class="search">
         <h2>Search</h2>
         <div class="search-box">
             <?php get_search_form(); ?>
         </div>
     </div>
     <!-- カテゴリー -->
     <div class="category">
         <h2>Category</h2>
         <ul class="category-area">
             <?php
                $categories = get_categories(array(
                    'orderby'    => 'name',
                    'order'      => 'ASC',
                    'hide_empty' => true,
                ));
                if (!empty($categories)) :
                    foreach ($categories as $category) :
                ?>
                     <li class="Category-btn">

                         <a href="<?php echo esc_url(get_category_link($category->term_id)); ?>">
                             <?php echo esc_html($category->name); ?>
                         </a>

                     </li>
             <?php
                    endforeach;
                endif;
                ?>
         </ul>
     </div>
     <aside class="side-archive">
         <h2 class="side-title">archive</h2>
         <ul class="side-list">
             <?php wp_get_archives(
                    array(
                        'show_post_count' => 1,
                    )
                ); ?>
         </ul>
     </aside>
 </div>