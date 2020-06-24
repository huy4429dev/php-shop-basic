<?php

include('./autoload/Autoload.php');

$id = Input::get('id');
$sql = "SELECT baiviet.*, danhmuc_blog.tendanhmuc, users.name FROM baiviet JOIN danhmuc_blog ON baiviet.danhmuc_id = danhmuc_blog.id JOIN users on users.id = baiviet.user_id WHERE baiviet.id = $id ";
$new = $DB->queryOne($sql);

if (is_object($new)) {


    $sql = "SELECT * FROM baiviet  ORDER BY id DESC LIMIT 4 ";
    $newRelated = $DB->query($sql);

    
} else {
    die('product not found !');
}







$title = "Product Detail";
include('./layouts/page/header.php');

?>

<!-- Start Middle -->
<div id="middle">
    <div class="middle_inner">
        <div class="content_wrap fullwidth">

            <!-- Start Content -->
            <div class="middle_content entry">
                <div class="blog opened-article">
                    <!-- Start Post Single Article -->
                    <article id="post-2938" class="cmsmasters_open_post post-2938 post type-post status-publish format-image has-post-thumbnail hentry category-hi-tech post_format-post-format-image">
                        <span class="cmsmasters_post_category"><?= $new->tendanhmuc ?></span><span class="cmsmasters_post_author"><span><?= $new->name ?></span></span>
                        <div class="cmsmasters_post_cont_info entry-meta"><span class="cmsmasters_post_date"><?= formatDate($new->created_at) ?></span></div>
                        <figure class="cmsmasters_img_wrap"><a href="#" title="Dairy: A free Sketch UI kit for minimal apps" rel="ilightbox[img_2938_5ef2b6e86144c]" class="cmsmasters_img_link"><img width="1160" height="685" src="<?= BASE_URL . '/' . $new->hinhanh ?>" sizes="(max-width: 1160px) 100vw, 1160px" /></a></figure>
                        <div class="cmsmasters_post_content entry-content">
                            <p>
                                <?= $new->noidung ?>
                            </p>
                        </div>
                    </article>
                    <aside class="cmsmasters_single_slider">
                        <h3 class="cmsmasters_single_slider_title">Bài viết khác</h3>
                        <div class="cmsmasters_single_slider_inner">
                            <div id="cmsmasters_owl_slider_5ef2b6e862e7e" class="cmsmasters_owl_slider" data-single-item="false" data-auto-play="5000">
                                <?php foreach($newRelated as $item): ?>
                                <div class="cmsmasters_owl_slider_item cmsmasters_single_slider_item">
                                    <div class="cmsmasters_single_slider_item_outer">
                                        <figure class="cmsmasters_img_wrap"><a href="<?= url('blog-detail.php?id='. $item->id) ?>" title="Best care and support at Our Stores" class="cmsmasters_img_link preloader"><img width="580" height="410" src="<?= BASE_URL . '/' . $item->hinhanh ?>" class="full-width wp-post-image" alt="Best care and support at Our Stores" title="blog5" /></a></figure>
                                        <div class="cmsmasters_single_slider_item_inner">
                                            <h6 class="cmsmasters_single_slider_item_title">
                                                <a href="<?= url('blog-detail.php?id='. $item->id) ?>"><?= $item->tieude ?></a>
                                            </h6>
                                        </div>
                                    </div>
                                </div>
                                <?php endforeach ?>
                            </div>
                        </div>
                    </aside>
                </div>
            </div>
            <!-- Finish Content -->



        </div>
    </div>
</div>
<!-- Finish Middle -->
<!-- Start Bottom -->
<div id="bottom" class="cmsmasters_color_scheme_footer">
    <div class="bottom_bg">
        <div class="bottom_outer">
            <div class="bottom_inner sidebar_layout_14141414">
                <aside id="text-2" class="widget widget_text">
                    <h3 class="widgettitle">Products</h3>
                    <div class="textwidget">
                        <ul>
                            <li><a href="https://devicer.cmsmasters.net/product/apple-watch-series/">Apple Watch Series</a></li>
                            <li><a href="https://devicer.cmsmasters.net/product/refurbished-ipad-4th/">Refurbished iPad 4th</a></li>
                            <li><a href="https://devicer.cmsmasters.net/product/apple-9-7-ipad/">Apple 9.7&#8243; iPad</a></li>
                            <li><a href="https://devicer.cmsmasters.net/product/apple-iphone-6s-16gb/">Apple iPhone 6s 16GB</a></li>
                            <li><a href="https://devicer.cmsmasters.net/product/apple-magic-mouse/">Apple Magic Mouse</a></li>
                        </ul>
                    </div>
                </aside>
                <aside id="text-4" class="widget widget_text">
                    <h3 class="widgettitle">Customer Service</h3>
                    <div class="textwidget">
                        <ul>
                            <li><a href="https://devicer.cmsmasters.net/news/">News</a></li>
                            <li><a href="https://devicer.cmsmasters.net/faq/">FAQ</a></li>
                            <li><a href="https://devicer.cmsmasters.net/shop/">Shop</a></li>
                            <li><a href="https://devicer.cmsmasters.net/about-us/">About us</a></li>
                            <li><a href="https://devicer.cmsmasters.net/contacts/">Contacts</a></li>
                        </ul>
                    </div>
                </aside>
                <aside id="text-3" class="widget widget_text">
                    <h3 class="widgettitle">Socials</h3>
                    <div class="textwidget">
                        <ul>
                            <li><a href="#">Twitter</a></li>
                            <li><a href="#">YouTube</a></li>
                            <li><a href="#">Instagram</a></li>
                            <li><a href="#">Snapchat</a></li>
                            <li><a href="#">Facebook</a></li>
                        </ul>
                    </div>
                </aside>
                <aside id="text-5" class="widget widget_text">
                    <h3 class="widgettitle">Customer Care</h3>
                    <div class="textwidget">
                        <ul>
                            <li><a href="https://devicer.cmsmasters.net/sale/">Sale</a></li>
                            <li><a href="https://devicer.cmsmasters.net/shop/">Shop</a></li>
                            <li><a href="https://devicer.cmsmasters.net/cart/">Cart</a></li>
                            <li><a href="https://devicer.cmsmasters.net/my-account/">My Orders</a></li>
                            <li><a href="https://devicer.cmsmasters.net/contacts/">Contacts</a></li>
                        </ul>
                    </div>
                </aside>
            </div>
        </div>
    </div>
</div>
<!-- Finish Bottom -->
<a href="javascript:void(0)" id="slide_top" class="cmsmasters_theme_icon_slide_top"><span></span></a>
</div>
<!-- Finish Main -->


<?php include('./layouts/page/footer.php') ?>