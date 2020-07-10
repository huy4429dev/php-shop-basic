<?php

include('./autoload/Autoload.php');


$page = Input::get('page') ?? 1;
$pageSize = 9;
$offset = ($page - 1) * $pageSize;


$filter = Input::get('orderby') ?? null;
$baseUrl = '';

if ($filter != null) {

        switch ($filter) {

                case 'rating':
                        $sql = "SELECT sanpham.*, danhmuc.tendanhmuc FROM sanpham  JOIN danhmuc ON sanpham.danhmuc_id = danhmuc.id  ORDER BY sanpham.danhgia DESC LIMIT $pageSize OFFSET $offset";
                        break;

                case 'price':
                        $sql = "SELECT sanpham.*, danhmuc.tendanhmuc FROM sanpham  JOIN danhmuc ON sanpham.danhmuc_id = danhmuc.id  ORDER BY sanpham.giaban ASC LIMIT $pageSize OFFSET $offset";
                        break;

                case 'price-desc':
                        $sql = "SELECT sanpham.*, danhmuc.tendanhmuc FROM sanpham  JOIN danhmuc ON sanpham.danhmuc_id = danhmuc.id  ORDER BY sanpham.giaban DESC LIMIT $pageSize OFFSET $offset";
                        break;

                case 'popularity':
                        $sql = "SELECT sanpham.*, danhmuc.tendanhmuc FROM sanpham  JOIN danhmuc ON sanpham.danhmuc_id = danhmuc.id  ORDER BY sanpham.luotmua DESC LIMIT $pageSize OFFSET $offset";
                        break;

                case 'news':
                        $sql = "SELECT sanpham.*, danhmuc.tendanhmuc FROM sanpham  JOIN danhmuc ON sanpham.danhmuc_id = danhmuc.id  ORDER BY sanpham.id DESC LIMIT $pageSize OFFSET $offset";
                        break;
                default:
                        $sql = "SELECT sanpham.*, danhmuc.tendanhmuc FROM sanpham  JOIN danhmuc ON sanpham.danhmuc_id = danhmuc.id  ORDER BY sanpham.id DESC LIMIT $pageSize OFFSET $offset";
        }

        $products = $DB->query($sql);
        $baseUrl =  "shop.php?orderby=$filter";
} else {

        $sql = "SELECT sanpham.*, danhmuc.tendanhmuc FROM sanpham  JOIN danhmuc ON sanpham.danhmuc_id = danhmuc.id  ORDER BY sanpham.id DESC LIMIT $pageSize OFFSET $offset";
        $products = $DB->query($sql);
}


$categories = "SELECT * FROM danhmuc";
$sql = "SELECT sanpham.*, danhmuc.tendanhmuc FROM sanpham  JOIN danhmuc ON sanpham.danhmuc_id = danhmuc.id  ORDER BY sanpham.luotmua DESC LIMIT 3";
$productHot = $DB->query($sql);
$totalProduct = $DB->CountRecord('sanpham')->count;
$paginateLink = pagination($totalProduct, $pageSize, $page, $baseUrl);

$title = "Cửa hàng";
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
                                <div class="cmsmasters_woo_wrap_result">
                                        <div class="woocommerce-notices-wrapper"></div>
                                        <p class="woocommerce-result-count">
                                                Hiển thị 1 &ndash; 9 of <?= $totalProduct ?> kết quả</p>
                                        <form class="woocommerce-ordering" method="get">
                                                <select name="orderby" class="orderby" aria-label="Shop order">
                                                        <option value="menu_order" selected='selected'>Lọc kết quả</option>
                                                        <option value="popularity">Bán chạy</option>
                                                        <option value="rating">Đánh giá cao</option>
                                                        <option value="news">Mới</option>
                                                        <option value="price">Giá thấp</option>
                                                        <option value="price-desc">Giá cao</option>
                                                </select>
                                                <input type="hidden" name="page" value="1" />
                                        </form>
                                </div>
                                <ul class="products columns-3 cmsmasters_products">
                                        <?php foreach ($products as $item) : ?>
                                                <li class="product type-product post-1631 status-publish first instock product_cat-cell-phones product_cat-xiaomi has-post-thumbnail shipping-taxable purchasable product-type-simple">
                                                        <article class="cmsmasters_product">
                                                                <div class="cmsmasters_product_wrapper_border">
                                                                        <figure class="cmsmasters_product_img">
                                                                                <a href="product-detail.php?id=<?= $item->id ?>">
                                                                                        <img width="540" height="540" src="<?= BASE_URL . '/' . $item->hinhanh ?> " class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="" srcset="https://devicer.cmsmasters.net/wp-content/uploads/2015/05/6-540x540.jpg 540w ' ?> " sizes="(max-width: 540px) 100vw, 540px" />
                                                                                </a>
                                                                        </figure>
                                                                        <div class="cmsmasters_product_inner">
                                                                                <header class="cmsmasters_product_header entry-header">
                                                                                        <div class="cmsmasters_product_cat entry-meta">
                                                                                                <a href="<?= url('product-category.php?id=' . $item->danhmuc_id) ?>" class="cmsmasters_cat_color cmsmasters_cat_27" rel="category tag">
                                                                                                        <?= $item->tendanhmuc ?>
                                                                                                </a>
                                                                                        </div>
                                                                                        <h3 class="cmsmasters_product_title entry-title">
                                                                                                <a href="<?= url('product-detail.php?id=' . $item->id) ?>">
                                                                                                        <?= $item->tensanpham ?>
                                                                                                </a>
                                                                                        </h3>
                                                                                </header>

                                                                                <div class="cmsmasters_product_info_wrap">
                                                                                        <div class="cmsmasters_product_info">

                                                                                                <span class="woocommerce-Price-amount amount"><span><span class="woocommerce-Price-currencySymbol">


                                                                                                                </span><?= number_format($item->giaban) . ' vnđ' ?></span>

                                                                                        </div>

                                                                                        <div class="cmsmasters_star_rating" itemscope itemtype="//schema.org/AggregateRating" title="Rated 5.00 out of 5">
                                                                                                <div class="cmsmasters_star_trans_wrap">
                                                                                                        <span class="cmsmasters_theme_icon_star_empty cmsmasters_star"></span>
                                                                                                        <span class="cmsmasters_theme_icon_star_empty cmsmasters_star"></span>
                                                                                                        <span class="cmsmasters_theme_icon_star_empty cmsmasters_star"></span>
                                                                                                        <span class="cmsmasters_theme_icon_star_empty cmsmasters_star"></span>
                                                                                                        <span class="cmsmasters_theme_icon_star_empty cmsmasters_star"></span>
                                                                                                </div>
                                                                                                <div class="cmsmasters_star_color_wrap" data-width="width:100%">
                                                                                                        <div class="cmsmasters_star_color_inner">
                                                                                                                <?php for ($i = 1; $i <= $item->danhgia; $i++) : ?>
                                                                                                                        <span class="cmsmasters_theme_icon_star_full cmsmasters_star"></span>
                                                                                                                <?php endfor ?>
                                                                                                        </div>
                                                                                                </div>
                                                                                                <span class="rating dn"><strong itemprop="ratingValue"><?= $item->danhgia ?></strong>
                                                                                                        out of 5</span>
                                                                                        </div>
                                                                                        <div class="cmsmasters_product_add_wrap">
                                                                                                <div class="cmsmasters_product_add_inner">
                                                                                                        <a href="<?= url('add-cart.php?id=' . $item->id) ?>" data-product_id="1631" data-product_sku="" class="cmsmasters_product_button add_to_cart_button cmsmasters_add_to_cart_button product_type_simple ajax_add_to_cart" title="Add to Cart"><span>Add
                                                                                                                        to
                                                                                                                        Cart</span></a><a href="<?= url('add-cart.php?id=' . $item->id) ?>"" class=" cmsmasters_product_button added_to_cart wc-forward" title="View Cart"><span>View
                                                                                                                        Cart</span></a>
                                                                                                </div>
                                                                                        </div>
                                                                                </div>
                                                                        </div>
                                                                </div>
                                                        </article>
                                                </li>
                                        <?php endforeach ?>
                                </ul>
                                <div class="cmsmasters_wrap_pagination">
                                        <?= $paginateLink ?>
                                        <!-- <ul class='page-numbers'>
                                                <li><span aria-current="page" class="page-numbers current">1</span></li>
                                                <li><a class="page-numbers" href="page/2/index.html">2</a></li>
                                                <li><a class="page-numbers" href="page/3/index.html">3</a></li>
                                                <li><a class="page-numbers" href="page/4/index.html">4</a></li>
                                                <li><a class="page-numbers" href="page/5/index.html">5</a></li>
                                                <li><a class="next page-numbers" href="page/2/index.html"><span class="cmsmasters_theme_icon_slide_next"></span></a></li>
                                        </ul> -->
                                </div>
                        </div>
                        <!-- Finish Content -->


                        <!-- Start Sidebar -->
                        <div class="sidebar">
                                <aside id="woocommerce_product_categories-2" class="widget woocommerce widget_product_categories">
                                        <h3 class="widgettitle">Danh mục sản phẩm</h3><select name='product_cat' id='product_cat' class='dropdown_product_cat'>
                                                <option value='' selected='selected'>Select a category</option>
                                                <option class="level-0" value="acoustics">Acoustics</option>
                                                <option class="level-0" value="action-camcorders">Action Camcorders</option>
                                                <option class="level-0" value="apple-smart-watches">Apple</option>
                                                <option class="level-0" value="apple-imac">Apple iMac</option>
                                                <option class="level-0" value="apple-ipads">Apple iPads</option>
                                                <option class="level-0" value="apple-ipads-mini">Apple iPads Mini</option>
                                                <option class="level-0" value="apple-led-tcvs">Apple LED TVs</option>
                                                <option class="level-0" value="apple-macbook">Apple Macbook</option>
                                                <option class="level-0" value="asus">Asus</option>
                                                <option class="level-0" value="cameras">Cameras</option>
                                                <option class="level-0" value="cell-phones">Cell Phones</option>
                                                <option class="level-0" value="computer-hardware">Computer Hardware</option>
                                                <option class="level-0" value="daydream-view">Daydream View</option>
                                                <option class="level-0" value="dell-laptop">Dell Laptop</option>
                                                <option class="level-0" value="dell-led-tvs">Dell LED TVs</option>
                                                <option class="level-0" value="digital-camcorders">Digital Camcorders</option>
                                                <option class="level-0" value="over-the-ear-headphones">Ear Headphones</option>
                                                <option class="level-0" value="headphones">Headphones</option>
                                                <option class="level-0" value="htc">HTC</option>
                                                <option class="level-0" value="apple">IPhone</option>
                                                <option class="level-0" value="keyboards">Keyboards</option>
                                                <option class="level-0" value="laptops">Laptops</option>
                                                <option class="level-0" value="led-tvs">LED TVs</option>
                                                <option class="level-0" value="meizu">Meizu</option>
                                                <option class="level-0" value="mice">Mice</option>
                                                <option class="level-0" value="monitors">Monitors</option>
                                                <option class="level-0" value="motorola">Motorola</option>
                                                <option class="level-0" value="motorola-smart-technologies">Motorola</option>
                                                <option class="level-0" value="nintendo-switch">Nintendo Switch</option>
                                                <option class="level-0" value="nokia">Nokia</option>
                                                <option class="level-0" value="oneplus">OnePlus</option>
                                                <option class="level-0" value="over-ear-on-ear-headphones">Over-Ear &amp; On-Ear Headphones</option>
                                                <option class="level-0" value="powerbank">Powerbank</option>
                                                <option class="level-0" value="samsung">Samsung</option>
                                                <option class="level-0" value="samsung-smart-watches">Samsung</option>
                                                <option class="level-0" value="smart-technologies">Smart Watches</option>
                                                <option class="level-0" value="sony">Sony</option>
                                                <option class="level-0" value="tablets">Tablets</option>
                                                <option class="level-0" value="televisions">Televisions</option>
                                                <option class="level-0" value="uncategorized">Uncategorized</option>
                                                <option class="level-0" value="video-games">Video Games</option>
                                                <option class="level-0" value="xbox-playstation">Xbox PlayStation</option>
                                                <option class="level-0" value="xiaomi">Xiaomi</option>
                                        </select>
                                </aside>
                                <aside id="woocommerce_products-4" class="widget woocommerce widget_products">
                                        <h3 class="widgettitle">Sản phẩm bán chạy</h3>
                                        <ul class="product_list_widget">
                                                <?php foreach ($productHot as $item) : ?>
                                                        <li>

                                                                <a href="<?= url('product-detail.php?id=' . $item->id) ?>">
                                                                        <img width="540" height="540" src="<?= BASE_URL . '/' . $item->hinhanh ?> " class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="Headphones" srcset="<?= BASE_URL . '/' . $item->hinhanh ?>" sizes="(max-width: 540px) 100vw, 540px" /> <span class="product-title"></span>
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
                                                                        <div class="cmsmasters_star_color_wrap" data-width="width:100%">
                                                                                <div class="cmsmasters_star_color_inner">
                                                                                        <?php for ($i = 1; $i <= $item->danhgia; $i++) : ?>
                                                                                                <span class="cmsmasters_theme_icon_star_full cmsmasters_star"></span>
                                                                                        <?php endfor ?>
                                                                                </div>
                                                                        </div>
                                                                </div>
                                                        </li>
                                                <?php endforeach ?>
                                        </ul>
                                </aside>
                        </div>
                        <!-- Finish Sidebar -->


                </div>
        </div>
</div>
<!-- Finish Middle -->


<?php include('./layouts/page/footer.php') ?>