<?php

include('./autoload/Autoload.php');


$title = "Tin tức";

$sql = "SELECT * FROM  baiviet ORDER BY id DESC";
$posts =  $DB->query($sql);

include('./layouts/page/header.php');


?>
<!-- Start Middle -->
<div id="middle">
    <div class="headline cmsmasters_color_scheme_default">
    </div>
    <div class="middle_inner">
        <div class="content_wrap r_sidebar">

            <!-- Start Content -->
            <div class="content entry">
                <div id="cmsmasters_row_a0e7e99483" class="cmsmasters_row cmsmasters_color_scheme_default cmsmasters_row_top_default cmsmasters_row_bot_default cmsmasters_row_boxed">
                    <div class="cmsmasters_row_outer_parent">
                        <div class="cmsmasters_row_outer">
                            <div class="cmsmasters_row_inner">
                                <div class="cmsmasters_row_margin">
                                    <div id="cmsmasters_column_" class="cmsmasters_column one_first">
                                        <div class="cmsmasters_column_inner">
                                            <div id="blog_49ae717791" class="cmsmasters_wrap_blog entry-summary" data-layout="standard" data-layout-mode="" data-url="https://devicer.cmsmasters.net/wp-content/plugins/cmsmasters-content-composer/" data-orderby="date" data-order="ASC" data-count="3" data-categories="business,hi-tech,trends" data-metadata="date,categories,author,comments,likes,more" data-pagination="more">
                                                <div class="blog standard">
                                                    <?php if (is_array($posts)) : ?>
                                                        <?php foreach ($posts as $post) : ?>
                                                            <article id="post-85" class="cmsmasters_post_default post-85 post type-post status-publish format-image has-post-thumbnail hentry category-hi-tech post_format-post-format-image">
                                                                <div class="cmsmasters_post_cont_wrap">
                                                                    <img width="860" height="508" src="./wp-content/uploads/2017/06/blog5-2-860x508.jpg" class="" alt="Best care and support at Our Stores" title="blog5" srcset=" <?= BASE_URL .'/' . $post->hinhanh ?> " sizes="(max-width: 860px) 100vw, 860px" />
                                                                    <div class="cmsmasters_post_cont enable_image">
                                                                        <footer class="cmsmasters_post_footer entry-meta"><span class="cmsmasters_post_category"><a href="./category/hi-tech/index.html" class="cmsmasters_cat_color cmsmasters_cat_17" rel="category tag">Hi-Tech</a></span><span class="cmsmasters_post_author"><a href="./author/cmsmasters/index.html" title="Posts by cmsmasters" class="vcard author" rel="author"><span class="fn">cmsmasters</span></a></span>
                                                                            <div class="cmsmasters_post_meta_info"><span class="cmsmasters_likes cmsmasters_post_likes"><a href="#" onclick="cmsmastersLike(85, false); return false;" id="cmsmastersLike-85" class="cmsmastersLike cmsmasters_theme_icon_like"><span>20 </span></a></span><span class="cmsmasters_comments cmsmasters_post_comments"><a class="cmsmasters_theme_icon_comment" href="./2017/01/10/best-care-and-support-at-our-stores/index.html#respond" title="Comment on Best care and support at Our Stores"><span>0 </span></a></span></div>
                                                                        </footer>
                                                                        <header class="cmsmasters_post_header entry-header">
                                                                            <h3 class="cmsmasters_post_title entry-title"><a href="blog-detail.php?id=<?= $post->id ?>"><?= $post->tieude ?></a></h3>
                                                                        </header>
                                                                        <div class="cmsmasters_post_cont_info entry-meta"><span class="cmsmasters_post_date"><?= formatDate($post->created_at) ?></span></div>
                                                                        <div class="cmsmasters_post_content entry-content">
                                                                            <p><?= $post->tieude ?></p>
                                                                        </div>
                                                                        <a class="cmsmasters_post_read_more" href="blog-detail.php?id=<?= $post->id ?>">Chi tiết</a>
                                                                    </div>
                                                                </div>
                                                            </article>
                                                        <?php endforeach ?>
                                                    <?php endif ?>

                                                </div>
                                                <div class="cmsmasters_wrap_more_posts cmsmasters_wrap_more_items">
                                                    <div class="cmsmasters_wrap_post_loader cmsmasters_wrap_items_loader">
                                                        <a href="javascript:void(0)" class="cmsmasters_button cmsmasters_post_loader cmsmasters_items_loader">
                                                            <span>Load More Posts</span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="cl"></div>
            </div>
            <!-- Finish Content -->


            <!-- Start Sidebar -->
            <div class="sidebar">
                <aside id="categories-2" class="widget widget_categories">
                    <h3 class="widgettitle">Categories</h3>
                    <ul>
                        <li class="cat-item cat-item-16"><a href="./category/business/index.html">Business</a>
                        </li>
                        <li class="cat-item cat-item-17"><a href="./category/hi-tech/index.html">Hi-Tech</a>
                        </li>
                        <li class="cat-item cat-item-19"><a href="./category/trends/index.html">Trends</a>
                        </li>
                    </ul>
                </aside>
                <aside id="custom-posts-tabs-2" class="widget widget_custom_posts_tabs_entries">
                    <h3 class="widgettitle">News</h3>
                    <div class="cmsmasters_tabs tabs_mode_tab lpr">
                        <div class="cmsmasters_tabs_wrap">
                            <div class="cmsmasters_tab tab_latest">
                                <ul>
                                    <li>
                                        <div class="cmsmasters_lpr_tabs_img">
                                            <figure class="cmsmasters_img_wrap"><a href="./2017/06/06/free-set-of-smartphone-clay-mockups/index.html" title="Free set of smartphone clay mockups" class="cmsmasters_img_link"><img width="75" height="75" src="./wp-content/uploads/2017/06/blog3-2-75x75.jpg" class=" wp-post-image" alt="Photo" title="blog3" srcset="https://devicer.cmsmasters.net/wp-content/uploads/2017/06/blog3-2-75x75.jpg 75w, https://devicer.cmsmasters.net/wp-content/uploads/2017/06/blog3-2-150x150.jpg 150w, https://devicer.cmsmasters.net/wp-content/uploads/2017/06/blog3-2-300x300.jpg 300w, https://devicer.cmsmasters.net/wp-content/uploads/2017/06/blog3-2-540x540.jpg 540w, https://devicer.cmsmasters.net/wp-content/uploads/2017/06/blog3-2-100x100.jpg 100w, https://devicer.cmsmasters.net/wp-content/uploads/2017/06/blog3-2-600x600.jpg 600w" sizes="(max-width: 75px) 100vw, 75px" /></a></figure>
                                        </div>
                                        <div class="cmsmasters_lpr_tabs_cont"><a href="./2017/06/06/free-set-of-smartphone-clay-mockups/index.html" title="Free set of smartphone clay mockups">Free set of smartphone clay mockups</a><abbr class="published" title="June 6, 2017">June 6, 2017</abbr></div>
                                    </li>
                                    <li>
                                        <div class="cmsmasters_lpr_tabs_img">
                                            <figure class="cmsmasters_img_wrap"><a href="./2017/04/15/the-best-products-at-your-fingertips/index.html" title="The best products at your fingertips" class="cmsmasters_img_link"><img width="75" height="75" src="./wp-content/uploads/2017/06/blog6-2-75x75.jpg" class=" wp-post-image" alt="Photo" title="blog6" srcset="https://devicer.cmsmasters.net/wp-content/uploads/2017/06/blog6-2-75x75.jpg 75w, https://devicer.cmsmasters.net/wp-content/uploads/2017/06/blog6-2-150x150.jpg 150w, https://devicer.cmsmasters.net/wp-content/uploads/2017/06/blog6-2-300x300.jpg 300w, https://devicer.cmsmasters.net/wp-content/uploads/2017/06/blog6-2-540x540.jpg 540w, https://devicer.cmsmasters.net/wp-content/uploads/2017/06/blog6-2-100x100.jpg 100w, https://devicer.cmsmasters.net/wp-content/uploads/2017/06/blog6-2-600x600.jpg 600w" sizes="(max-width: 75px) 100vw, 75px" /></a></figure>
                                        </div>
                                        <div class="cmsmasters_lpr_tabs_cont"><a href="./2017/04/15/the-best-products-at-your-fingertips/index.html" title="The best products at your fingertips">The best products at your fingertips</a><abbr class="published" title="April 15, 2017">April 15, 2017</abbr></div>
                                    </li>
                                    <li>
                                        <div class="cmsmasters_lpr_tabs_img">
                                            <figure class="cmsmasters_img_wrap"><a href="./2017/03/20/laptop-technical-details/index.html" title="Laptop technical details" class="cmsmasters_img_link"><img width="75" height="75" src="./wp-content/uploads/2017/03/blog4-2-75x75.jpg" class=" wp-post-image" alt="Laptop technical details" title="blog4" srcset="https://devicer.cmsmasters.net/wp-content/uploads/2017/03/blog4-2-75x75.jpg 75w, https://devicer.cmsmasters.net/wp-content/uploads/2017/03/blog4-2-150x150.jpg 150w, https://devicer.cmsmasters.net/wp-content/uploads/2017/03/blog4-2-300x300.jpg 300w, https://devicer.cmsmasters.net/wp-content/uploads/2017/03/blog4-2-540x540.jpg 540w, https://devicer.cmsmasters.net/wp-content/uploads/2017/03/blog4-2-100x100.jpg 100w, https://devicer.cmsmasters.net/wp-content/uploads/2017/03/blog4-2-600x600.jpg 600w" sizes="(max-width: 75px) 100vw, 75px" /></a></figure>
                                        </div>
                                        <div class="cmsmasters_lpr_tabs_cont"><a href="./2017/03/20/laptop-technical-details/index.html" title="Laptop technical details">Laptop technical details</a><abbr class="published" title="March 20, 2017">March 20, 2017</abbr></div>
                                    </li>
                                </ul>
                            </div>
                            <div class="cmsmasters_tab tab_popular">
                                <ul>
                                    <li>
                                        <div class="cmsmasters_lpr_tabs_img">
                                            <figure class="cmsmasters_img_wrap"><a href="./2017/01/10/best-care-and-support-at-our-stores/index.html" title="Best care and support at Our Stores" class="cmsmasters_img_link"><img width="75" height="75" src="./wp-content/uploads/2017/06/blog5-2-75x75.jpg" class=" wp-post-image" alt="Best care and support at Our Stores" title="blog5" srcset="https://devicer.cmsmasters.net/wp-content/uploads/2017/06/blog5-2-75x75.jpg 75w, https://devicer.cmsmasters.net/wp-content/uploads/2017/06/blog5-2-150x150.jpg 150w, https://devicer.cmsmasters.net/wp-content/uploads/2017/06/blog5-2-300x300.jpg 300w, https://devicer.cmsmasters.net/wp-content/uploads/2017/06/blog5-2-540x540.jpg 540w, https://devicer.cmsmasters.net/wp-content/uploads/2017/06/blog5-2-100x100.jpg 100w, https://devicer.cmsmasters.net/wp-content/uploads/2017/06/blog5-2-600x600.jpg 600w" sizes="(max-width: 75px) 100vw, 75px" /></a></figure>
                                        </div>
                                        <div class="cmsmasters_lpr_tabs_cont"><a href="./2017/01/10/best-care-and-support-at-our-stores/index.html" title="Best care and support at Our Stores">Best care and support at Our Stores</a><abbr class="published" title="January 10, 2017">January 10, 2017</abbr></div>
                                    </li>
                                    <li>
                                        <div class="cmsmasters_lpr_tabs_img">
                                            <figure class="cmsmasters_img_wrap"><a href="./2017/03/20/laptop-technical-details/index.html" title="Laptop technical details" class="cmsmasters_img_link"><img width="75" height="75" src="./wp-content/uploads/2017/03/blog4-2-75x75.jpg" class=" wp-post-image" alt="Laptop technical details" title="blog4" srcset="https://devicer.cmsmasters.net/wp-content/uploads/2017/03/blog4-2-75x75.jpg 75w, https://devicer.cmsmasters.net/wp-content/uploads/2017/03/blog4-2-150x150.jpg 150w, https://devicer.cmsmasters.net/wp-content/uploads/2017/03/blog4-2-300x300.jpg 300w, https://devicer.cmsmasters.net/wp-content/uploads/2017/03/blog4-2-540x540.jpg 540w, https://devicer.cmsmasters.net/wp-content/uploads/2017/03/blog4-2-100x100.jpg 100w, https://devicer.cmsmasters.net/wp-content/uploads/2017/03/blog4-2-600x600.jpg 600w" sizes="(max-width: 75px) 100vw, 75px" /></a></figure>
                                        </div>
                                        <div class="cmsmasters_lpr_tabs_cont"><a href="./2017/03/20/laptop-technical-details/index.html" title="Laptop technical details">Laptop technical details</a><abbr class="published" title="March 20, 2017">March 20, 2017</abbr></div>
                                    </li>
                                    <li>
                                        <div class="cmsmasters_lpr_tabs_img">
                                            <figure class="cmsmasters_img_wrap"><a href="./2017/01/27/dairy-a-free-sketch-ui-kit-for-minimal-apps/index.html" title="Dairy: A free Sketch UI kit for minimal apps" class="cmsmasters_img_link"><img width="75" height="75" src="./wp-content/uploads/2017/06/blog1-2-75x75.jpg" class=" wp-post-image" alt="Photo" title="blog1" srcset="https://devicer.cmsmasters.net/wp-content/uploads/2017/06/blog1-2-75x75.jpg 75w, https://devicer.cmsmasters.net/wp-content/uploads/2017/06/blog1-2-150x150.jpg 150w, https://devicer.cmsmasters.net/wp-content/uploads/2017/06/blog1-2-300x300.jpg 300w, https://devicer.cmsmasters.net/wp-content/uploads/2017/06/blog1-2-540x540.jpg 540w, https://devicer.cmsmasters.net/wp-content/uploads/2017/06/blog1-2-100x100.jpg 100w, https://devicer.cmsmasters.net/wp-content/uploads/2017/06/blog1-2-600x600.jpg 600w" sizes="(max-width: 75px) 100vw, 75px" /></a></figure>
                                        </div>
                                        <div class="cmsmasters_lpr_tabs_cont"><a href="./2017/01/27/dairy-a-free-sketch-ui-kit-for-minimal-apps/index.html" title="Dairy: A free Sketch UI kit for minimal apps">Dairy: A free Sketch UI kit for minimal apps</a><abbr class="published" title="January 27, 2017">January 27, 2017</abbr></div>
                                    </li>
                                </ul>
                            </div>
                            <div class="cmsmasters_tab tab_comments">
                                <ul>
                                    <li>cmsmasters <span class="color_2">on</span> <a href="./2017/01/27/dairy-a-free-sketch-ui-kit-for-minimal-apps/index.html#comments" rel="bookmark">Dairy: A free Sketch UI kit for minimal apps</a><small><abbr class="published" title="15-04-2015">3 years ago</abbr></small>
                                        <p>Aenean semper varius pellentesque</p>
                                    </li>
                                    <li>cmsmasters <span class="color_2">on</span> <a href="./2017/06/06/free-set-of-smartphone-clay-mockups/index.html#comments" rel="bookmark">Free set of smartphone clay mockups</a><small><abbr class="published" title="15-04-2015">3 years ago</abbr></small>
                                        <p>Aenean semper varius pellentesque</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </aside>
                <aside id="woocommerce_products-2" class="widget woocommerce widget_products">
                    <h3 class="widgettitle">Products</h3>
                    <ul class="product_list_widget">
                        <li>

                            <a href="./product/samsung-level-over-silver/index.html">
                                <img width="540" height="540" src="./wp-content/uploads/2015/05/29-2-540x540.jpg" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="Headphones" srcset="https://devicer.cmsmasters.net/wp-content/uploads/2015/05/29-2-540x540.jpg 540w, https://devicer.cmsmasters.net/wp-content/uploads/2015/05/29-2-150x150.jpg 150w, https://devicer.cmsmasters.net/wp-content/uploads/2015/05/29-2-300x300.jpg 300w, https://devicer.cmsmasters.net/wp-content/uploads/2015/05/29-2.jpg 600w, https://devicer.cmsmasters.net/wp-content/uploads/2015/05/29-2-75x75.jpg 75w, https://devicer.cmsmasters.net/wp-content/uploads/2015/05/29-2-580x580.jpg 580w, https://devicer.cmsmasters.net/wp-content/uploads/2015/05/29-2-100x100.jpg 100w" sizes="(max-width: 540px) 100vw, 540px" /> <span class="product-title"></span>
                            </a>
                            <div class="price"><span class="woocommerce-Price-amount amount"><span><span class="woocommerce-Price-currencySymbol">&#36;</span></span>55.00</span></div>
                            <div class="cmsmasters_star_rating" itemscope itemtype="//schema.org/AggregateRating" title="Rated 0 out of 5">
                                <div class="cmsmasters_star_trans_wrap">
                                    <span class="cmsmasters_theme_icon_star_empty cmsmasters_star"></span>
                                    <span class="cmsmasters_theme_icon_star_empty cmsmasters_star"></span>
                                    <span class="cmsmasters_theme_icon_star_empty cmsmasters_star"></span>
                                    <span class="cmsmasters_theme_icon_star_empty cmsmasters_star"></span>
                                    <span class="cmsmasters_theme_icon_star_empty cmsmasters_star"></span>
                                </div>
                                <div class="cmsmasters_star_color_wrap" data-width="width:0%">
                                    <div class="cmsmasters_star_color_inner">
                                        <span class="cmsmasters_theme_icon_star_full cmsmasters_star"></span>
                                        <span class="cmsmasters_theme_icon_star_full cmsmasters_star"></span>
                                        <span class="cmsmasters_theme_icon_star_full cmsmasters_star"></span>
                                        <span class="cmsmasters_theme_icon_star_full cmsmasters_star"></span>
                                        <span class="cmsmasters_theme_icon_star_full cmsmasters_star"></span>
                                    </div>
                                </div>
                                <span class="rating dn"><strong itemprop="ratingValue">0</strong> out of 5</span>
                            </div>
                        </li>
                        <li>

                            <a href="./product/marshall-major-ii-brown/index.html">
                                <img width="540" height="540" src="./wp-content/uploads/2015/05/8-3-540x540.jpg" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="8" srcset="https://devicer.cmsmasters.net/wp-content/uploads/2015/05/8-3-540x540.jpg 540w, https://devicer.cmsmasters.net/wp-content/uploads/2015/05/8-3-150x150.jpg 150w, https://devicer.cmsmasters.net/wp-content/uploads/2015/05/8-3-300x300.jpg 300w, https://devicer.cmsmasters.net/wp-content/uploads/2015/05/8-3.jpg 600w, https://devicer.cmsmasters.net/wp-content/uploads/2015/05/8-3-75x75.jpg 75w, https://devicer.cmsmasters.net/wp-content/uploads/2015/05/8-3-580x580.jpg 580w, https://devicer.cmsmasters.net/wp-content/uploads/2015/05/8-3-100x100.jpg 100w" sizes="(max-width: 540px) 100vw, 540px" /> <span class="product-title"></span>
                            </a>
                            <div class="price"><span class="woocommerce-Price-amount amount"><span><span class="woocommerce-Price-currencySymbol">&#36;</span></span>400.00</span></div>
                            <div class="cmsmasters_star_rating" itemscope itemtype="//schema.org/AggregateRating" title="Rated 0 out of 5">
                                <div class="cmsmasters_star_trans_wrap">
                                    <span class="cmsmasters_theme_icon_star_empty cmsmasters_star"></span>
                                    <span class="cmsmasters_theme_icon_star_empty cmsmasters_star"></span>
                                    <span class="cmsmasters_theme_icon_star_empty cmsmasters_star"></span>
                                    <span class="cmsmasters_theme_icon_star_empty cmsmasters_star"></span>
                                    <span class="cmsmasters_theme_icon_star_empty cmsmasters_star"></span>
                                </div>
                                <div class="cmsmasters_star_color_wrap" data-width="width:0%">
                                    <div class="cmsmasters_star_color_inner">
                                        <span class="cmsmasters_theme_icon_star_full cmsmasters_star"></span>
                                        <span class="cmsmasters_theme_icon_star_full cmsmasters_star"></span>
                                        <span class="cmsmasters_theme_icon_star_full cmsmasters_star"></span>
                                        <span class="cmsmasters_theme_icon_star_full cmsmasters_star"></span>
                                        <span class="cmsmasters_theme_icon_star_full cmsmasters_star"></span>
                                    </div>
                                </div>
                                <span class="rating dn"><strong itemprop="ratingValue">0</strong> out of 5</span>
                            </div>
                        </li>
                        <li>

                            <a href="./product/sony-srs-xb40/index.html">
                                <img width="540" height="540" src="./wp-content/uploads/2017/05/3-540x540.jpg" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="3" srcset="https://devicer.cmsmasters.net/wp-content/uploads/2017/05/3-540x540.jpg 540w, https://devicer.cmsmasters.net/wp-content/uploads/2017/05/3-150x150.jpg 150w, https://devicer.cmsmasters.net/wp-content/uploads/2017/05/3-300x300.jpg 300w, https://devicer.cmsmasters.net/wp-content/uploads/2017/05/3.jpg 600w, https://devicer.cmsmasters.net/wp-content/uploads/2017/05/3-75x75.jpg 75w, https://devicer.cmsmasters.net/wp-content/uploads/2017/05/3-580x580.jpg 580w, https://devicer.cmsmasters.net/wp-content/uploads/2017/05/3-100x100.jpg 100w" sizes="(max-width: 540px) 100vw, 540px" /> <span class="product-title"></span>
                            </a>
                            <div class="price"><span class="woocommerce-Price-amount amount"><span><span class="woocommerce-Price-currencySymbol">&#36;</span></span>400.00</span></div>
                            <div class="cmsmasters_star_rating" itemscope itemtype="//schema.org/AggregateRating" title="Rated 0 out of 5">
                                <div class="cmsmasters_star_trans_wrap">
                                    <span class="cmsmasters_theme_icon_star_empty cmsmasters_star"></span>
                                    <span class="cmsmasters_theme_icon_star_empty cmsmasters_star"></span>
                                    <span class="cmsmasters_theme_icon_star_empty cmsmasters_star"></span>
                                    <span class="cmsmasters_theme_icon_star_empty cmsmasters_star"></span>
                                    <span class="cmsmasters_theme_icon_star_empty cmsmasters_star"></span>
                                </div>
                                <div class="cmsmasters_star_color_wrap" data-width="width:0%">
                                    <div class="cmsmasters_star_color_inner">
                                        <span class="cmsmasters_theme_icon_star_full cmsmasters_star"></span>
                                        <span class="cmsmasters_theme_icon_star_full cmsmasters_star"></span>
                                        <span class="cmsmasters_theme_icon_star_full cmsmasters_star"></span>
                                        <span class="cmsmasters_theme_icon_star_full cmsmasters_star"></span>
                                        <span class="cmsmasters_theme_icon_star_full cmsmasters_star"></span>
                                    </div>
                                </div>
                                <span class="rating dn"><strong itemprop="ratingValue">0</strong> out of 5</span>
                            </div>
                        </li>
                    </ul>
                </aside>
                <aside id="woocommerce_widget_cart-2" class="widget woocommerce widget_shopping_cart">
                    <h3 class="widgettitle">Cart</h3>
                    <div class="widget_shopping_cart_content"></div>
                </aside>
            </div>
            <!-- Finish Sidebar -->


        </div>
    </div>
</div>
<!-- Finish Middle -->

<?php include('./layouts/page/footer.php') ?>