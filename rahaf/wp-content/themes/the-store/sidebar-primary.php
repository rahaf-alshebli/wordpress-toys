<?php
/**
 * Primary sidebar
 *
 * @package ThemeHunk
 * @package  Top Store
 * @since 1.0.0
 */
$top_store_pro_main_header_layout = get_theme_mod('top_store_main_header_layout','mhdrfour');
?>
<div id="sidebar-primary" class="sidebar-content-area sidebar-1 <?php echo esc_attr(apply_filters( 'top_store_stick_sidebar_class',''));?>">
  <div class="sidebar-main">
    <?php 
    if ( class_exists( 'WooCommerce' ) && $top_store_pro_main_header_layout != 'mhdrsix'){ ?>
            <div class="menu-category-list">
              <div class="toggle-cat-wrap">
                  <p class="cat-toggle">
                    <span class="cat-icon"> 
                      <span class="cat-top"></span>
                       <span class="cat-top"></span>
                       <span class="cat-bot"></span>
                     </span>
                    <span class="toggle-title"><?php echo esc_html(get_theme_mod('top_store_hdr_category_text', __( 'Category', 'top-store-pro' )));?></span>
                    <span class="toggle-icon"></span>
                  </p>
               </div>
              <?php top_store_product_list_categories(); ?>
             </div><!-- menu-category-list -->
           <?php }
            if(class_exists( 'WooCommerce' ) && is_shop()){
                  if ( is_active_sidebar('top-store-woo-shop-sidebar') ){
                           dynamic_sidebar('top-store-woo-shop-sidebar');
                    }
                  }
                  else{
                  if ( is_active_sidebar('sidebar-1') ){
                           dynamic_sidebar('sidebar-1');
                    }
                }
			    
           ?>
  </div> <!-- sidebar-main End -->
</div> <!-- sidebar-primary End -->                 