<?php  

include('./autoload/Autoload.php');

$id = Input::get('id');
$sql = "SELECT * FROM sanpham JOIN danhmuc ON sanpham.danhmuc_id = danhmuc.id WHERE sanpham.id = $id ";
$product = $DB->queryOne($sql);

if(is_object($product)){


    $sql = "SELECT COUNT(sanpham.id) as countReview FROM sanpham join danhgia_sanpham on sanpham.id = danhgia_sanpham.sanpham_id WHERE sanpham.id = $id";
    $countReview = $DB->queryOne($sql);

    $sql = "SELECT * FROM danhgia_sanpham join khachhang on khachhang.id = danhgia_sanpham.khachhang_id WHERE danhgia_sanpham.sanpham_id = $id";
    $reviews = $DB->query($sql);


    $sql = "SELECT * FROM sanpham JOIN danhmuc ON sanpham.danhmuc_id = danhmuc.id WHERE danhmuc.id = $product->danhmuc_id ORDER BY sanpham.id DESC LIMIT 4 ";
    $productRelated = $DB->query($sql);

    
}
else{
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
						<div class="middle_content entry" style="padding-top:0">
							<div class="woocommerce-notices-wrapper"></div>
							<div itemscope itemtype="http://schema.org/Product" id="product-13161"
								class="product type-product post-13161 status-publish first instock product_cat-apple-ipads product_cat-tablets has-post-thumbnail shipping-taxable purchasable product-type-simple">
								<div class="cmsmasters_single_product">
									<div class="cmsmasters_breadcrumbs">
										<div class="cmsmasters_breadcrumbs_aligner"></div>
										<div class="cmsmasters_breadcrumbs_inner">
											<nav class="woocommerce-breadcrumb">
                                                <a href="#">
                                                    <?= $product->tendanhmuc ?>
                                                </a>
											</nav>
										</div>
									</div>
									<div class="cmsmasters_product_left_column">
										<div class="images">

								                <img
													width="600" height="600"
													class="attachment-shop_single size-shop_single wp-post-image" alt=""
													srcset="<?= url('/'.$product->hinhanh) ?>"
													sizes="(max-width: 600px) 100vw, 600px" />

										</div>


										<script type="text/javascript" charset="utf-8">
											var yith_magnifier_options = {

												enableSlider: true,

												sliderOptions: {
													responsive: false,
													circular: true,
													infinite: true,
													direction: 'left',
													debug: false,
													auto: false,
													align: 'left',
													prev: {
														button: "#slider-prev",
														key: "left"
													},
													next: {
														button: "#slider-next",
														key: "right"
													},
													//width   : 618,
													scroll: {
														items: 1,
														pauseOnHover: true
													},
													items: {
														//width: 104,
														visible: 6
													}
												},


												showTitle: false,
												zoomWidth: 'auto',
												zoomHeight: 'auto',
												position: 'right',
												//tint: ,
												//tintOpacity: ,
												lensOpacity: 0.5,
												softFocus: false,
												//smoothMove: ,
												adjustY: 0,
												disableRightClick: false,
												phoneBehavior: 'inside',
												loadingLabel: 'Loading...',
												zoom_wrap_additional_css: ''
											};
										</script>
									</div>
									<div class="summary entry-summary cmsmasters_product_right_column">
										<div class="cmsmasters_product_title_wrap">
											<h1 class="product_title entry-title"><?= $product->tensanpham ?></h1>
										</div>
										<div class="cmsmasters_product_info_wrap">

											<div class="cmsmasters_star_rating" itemscope
												itemtype="//schema.org/AggregateRating" title="Rated 4.00 out of 5">
												<div class="cmsmasters_star_trans_wrap">
													<span
														class="cmsmasters_theme_icon_star_empty cmsmasters_star"></span>
													<span
														class="cmsmasters_theme_icon_star_empty cmsmasters_star"></span>
													<span
														class="cmsmasters_theme_icon_star_empty cmsmasters_star"></span>
													<span
														class="cmsmasters_theme_icon_star_empty cmsmasters_star"></span>
													<span
														class="cmsmasters_theme_icon_star_empty cmsmasters_star"></span>
												</div>
												<div class="cmsmasters_star_color_wrap" data-width="width:80%">
													<div class="cmsmasters_star_color_inner">
												        <?php for($i = 1 ; $i <= $product->danhgia ; $i ++): ?>
                                                            <span class="cmsmasters_theme_icon_star_full cmsmasters_star"></span>
                                                        <?php endfor ?>
													</div>
												</div>
												<span class="rating dn"><strong itemprop="ratingValue"><?= $product->danhgia ?></strong> out
													of 5</span>
											</div>
											<span class="woocommerce-Price-amount amount"><span><span class="woocommerce-Price-currencySymbol">


														<?=  number_format($product->giaban) . ' vnđ' ?>

											</span>
										</div>
										<form class="cart"
											action="https://devicer.cmsmasters.net/product/apple-9-7-ipad/"
											method="post" enctype='multipart/form-data'>

											<div class="quantity">
												<label class="screen-reader-text" for="quantity_5ee8610905008">Apple
													9.7&quot; iPad quantity</label>
												<input type="number" id="quantity_5ee8610905008"
													class="input-text qty text" step="1" min="1" max="" name="quantity"
													value="1" title="Qty" size="4" placeholder="" inputmode="numeric" />
											</div>

											<a  href="add-cart.php?id=<?=$product->id?>"
												class="single_add_to_cart_button button alt">Add to cart</a>

										</form>


										<div class="product_meta">



											<span class="posted_in"><span class="product_meta_title">Loại sản phẩm:
												</span><a href="#"><?= $product->tendanhmuc ?></a>


										</div>
									</div>
								</div>

								<div class="cmsmasters_tabs tabs_mode_tab cmsmasters_woo_tabs">
									<ul class="cmsmasters_tabs_list">
										<li class="description_tab cmsmasters_tabs_list_item">
											<a href="#tab-description">
												<span>Mô tả</span>
											</a>
										</li>
										<li class="reviews_tab cmsmasters_tabs_list_item">
											<a href="#tab-reviews">
												<span>Đánh giá (<?= $countReview->countReview ?>)</span>
											</a>
										</li>
									</ul>
									<div class="cmsmasters_tabs_wrap">
										<div class="entry-content cmsmasters_tab" id="tab-description">
											<div class="cmsmasters_tab_inner">

												<h2>Mô tả</h2>

												<div id="cmsmasters_row_34c7175e4b"
													class="cmsmasters_row cmsmasters_color_scheme_default cmsmasters_row_top_default cmsmasters_row_bot_default cmsmasters_row_boxed">
													<div class="cmsmasters_row_outer_parent">
														<div class="cmsmasters_row_outer">
															<div class="cmsmasters_row_inner">
																<div class="cmsmasters_row_margin">
																	<div id="cmsmasters_column_"
																		class="cmsmasters_column one_first">
																		<div class="cmsmasters_column_inner">
																			<div class="cmsmasters_text">
                                                                                <?= $product->mota ?>
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
										<div class="entry-content cmsmasters_tab" id="tab-reviews">
											<div class="cmsmasters_tab_inner">
												<div id="reviews">
                                                    <?php if(is_array($reviews)): ?>
                                                    <?php foreach($reviews as $review):?>
                                                        <div id="comments" class="post_comments cmsmasters_woo_comments">
                                                            <h2 class="post_comments_title">
                                                            <ol class="commentlist">
                                                                <li itemprop="review" itemscope
                                                                    itemtype="//schema.org/Review"
                                                                    class="review byuser comment-author-cmsmasters bypostauthor even thread-even depth-1"
                                                                    id="li-comment-38">
                                                                    <div id="comment-38"
                                                                        class="comment_container cmsmasters_comment_item">
                                                                        <figure class="cmsmasters_comment_item_avatar">
                                                                            <img alt=''
                                                                                src='<?= url('public/uploads/images/'.$review->avatar) ?>'
                                                                                class='avatar avatar-70 photo' height='70'
                                                                                width='70' /> </figure>
                                                                        <div
                                                                            class="comment-text cmsmasters_comment_item_cont">
                                                                            <div class="cmsmasters_comment_item_cont_info">
                                                                                <h4 class="cmsmasters_comment_item_title"
                                                                                    itemprop="author"><?= $review->hoten ?></h4>

                                                                                <div class="cmsmasters_star_rating"
                                                                                    itemscope itemtype="//schema.org/Rating"
                                                                                    title="Rated 4 out of 5">
                                                                                    <div class="cmsmasters_star_trans_wrap">
                                                                                        <span
                                                                                            class="cmsmasters_theme_icon_star_empty cmsmasters_star"></span>
                                                                                        <span
                                                                                            class="cmsmasters_theme_icon_star_empty cmsmasters_star"></span>
                                                                                        <span
                                                                                            class="cmsmasters_theme_icon_star_empty cmsmasters_star"></span>
                                                                                        <span
                                                                                            class="cmsmasters_theme_icon_star_empty cmsmasters_star"></span>
                                                                                        <span
                                                                                            class="cmsmasters_theme_icon_star_empty cmsmasters_star"></span>
                                                                                    </div>
                                                                                    <div class="cmsmasters_star_color_wrap"
                                                                                        data-width="width:80%">
                                                                                        <div
                                                                                            class="cmsmasters_star_color_inner">
                                                                                            <?php for($i = 1 ; $i <= $review->danhgia ; $i ++): ?>
                                                                                                <span class="cmsmasters_theme_icon_star_full cmsmasters_star"></span>
                                                                                            <?php endfor ?>
                                                                                        </div>
                                                                                    </div>
                                                                                    <span class="rating dn"><strong
                                                                                            itemprop="ratingValue">4</strong>
                                                                                        out of 5</span>
                                                                                </div>
                                                                            </div>
                                                                            <time class="cmsmasters_comment_item_date"
                                                                                itemprop="datePublished"
                                                                                >
                                                                                <?= formatDate($review->created_at) ?></time>
                                                                            <div itemprop="description"
                                                                                class="description cmsmasters_comment_item_content">
                                                                                <p><?= $review->noidung ?></p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </li><!-- #comment-## -->
                                                            </ol>


                                                        </div>
                                                    <?php endforeach ?>
                                                    <?php endif ?>

													<div id="review_form_wrapper">
														<div id="review_form">
															<div id="respond" class="comment-respond">
																<h3 id="reply-title" class="comment-reply-title">Add a
																	review <small><a rel="nofollow"
																			id="cancel-comment-reply-link"
																			href="index.html#respond"
																			style="display:none;">Cancel
																			reply</a></small></h3>
																<form
																	action="https://devicer.cmsmasters.net/wp-comments-post.php"
																	method="post" id="commentform" class="comment-form"
																	novalidate>
																	<p class="comment-form-rating"><label
																			for="rating">Your Rating</label><select
																			name="rating" id="rating" required>
																			<option value="">Rate&hellip;</option>
																			<option value="5">Perfect</option>
																			<option value="4">Good</option>
																			<option value="3">Average</option>
																			<option value="2">Not that bad</option>
																			<option value="1">Very Poor</option>
																		</select></p>
																	<p class="comment-form-comment"><textarea
																			id="comment" name="comment" cols="67"
																			rows="2" placeholder="Your Review"
																			required></textarea></p>
																	<p class="comment-form-author">
																		<input id="author" name="author" type="text"
																			value="" size="35" placeholder="Name *"
																			required />
																	</p>
																</form>
															</div><!-- #respond -->
														</div>
													</div>


													<div class="clear"></div>
												</div>
											</div>
										</div>
									</div>
								</div>


								<section class="related products">

									<h2>Sản phẩm tương tự</h2>

									<ul class="products columns-4 cmsmasters_products">
										<li
											class="product type-product post-13156 status-publish first instock product_cat-apple-ipads-mini product_cat-tablets has-post-thumbnail shipping-taxable purchasable product-type-simple">
											<article class="cmsmasters_product">
												<div class="cmsmasters_product_wrapper_border">
													<figure class="cmsmasters_product_img">
														<a href="../refurbished-apple-ipad-mini/index.html">
															<img width="540" height="540"
																src="../../wp-content/uploads/2017/09/21-2-540x540.jpg"
																class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
																alt="Refurbished Apple iPad Mini"
																srcset="https://devicer.cmsmasters.net/wp-content/uploads/2017/09/21-2-540x540.jpg 540w, https://devicer.cmsmasters.net/wp-content/uploads/2017/09/21-2-150x150.jpg 150w, https://devicer.cmsmasters.net/wp-content/uploads/2017/09/21-2-300x300.jpg 300w, https://devicer.cmsmasters.net/wp-content/uploads/2017/09/21-2.jpg 600w, https://devicer.cmsmasters.net/wp-content/uploads/2017/09/21-2-75x75.jpg 75w, https://devicer.cmsmasters.net/wp-content/uploads/2017/09/21-2-580x580.jpg 580w, https://devicer.cmsmasters.net/wp-content/uploads/2017/09/21-2-100x100.jpg 100w"
																sizes="(max-width: 540px) 100vw, 540px" /> </a>
														<div class="cmsmasters_product_sale_wrap">
															<div class="cmsmasters_product_features">
																<div class="cmsmasters_product_wishlist_button_wrap">
																	<div
																		class="cmsmasters_add_wishlist_button add-to-wishlist-13156">
																		<div class="yith-wcwl-add-button show"
																			style="display:block"><a
																				href="index95b6.html?add_to_wishlist=13156"
																				rel="nofollow" data-product-id="13156"
																				data-product-type="simple"
																				class="button cmsmasters_theme_icon_wishlist add_to_wishlist single_add_to_wishlist button alt"
																				title="Wishlist"></a><img
																				src="../../wp-content/themes/devicer/woocommerce/cmsmasters-framework/theme-style/yith-woocommerce-wishlist/img/loader.gif"
																				class="ajax-loading" alt="loading"
																				width="16" height="16"
																				style="visibility:hidden" /></div>
																		<div class="yith-wcwl-wishlistaddedbrowse hide"
																			style="display:none;"><a
																				href="../../wishlist/index.html"
																				class="button browse_wishlist cmsmasters_theme_icon_wishlist"
																				rel="nofollow" title="Wishlist"></a>
																		</div>
																		<div class="yith-wcwl-wishlistexistsbrowse hide"
																			style="display:none"><a
																				href="../../wishlist/index.html"
																				class="button browse_wishlist cmsmasters_theme_icon_wishlist"
																				rel="nofollow" title="Wishlist"></a>
																		</div>
																	</div>
																</div>
																<div class="cmsmasters_product_compare_button_wrap"><a
																		href="index0e7d.html?action=asd&amp;id=13156"
																		class="compare button cmsmasters_compare_btn"
																		data-product_id="13156" rel="nofollow"
																		title="Compare">Compare</a></div>
																<div class="cmsmasters_product_view_button_wrap"><a
																		href="#"
																		class="button cmsmasters_quick_view_button yith-wcqv-button inside-thumb empty cmsmasters_theme_icon_quick_view"
																		title="" data-product_id="13156"></a></div>
															</div>
														</div>
													</figure>
													<div class="cmsmasters_product_inner">
														<header class="cmsmasters_product_header entry-header">
															<div class="cmsmasters_product_cat entry-meta"><a
																	href="../../product-category/tablets/apple-ipads-mini/index.html"
																	class="cmsmasters_cat_color cmsmasters_cat_57"
																	rel="category tag">Apple iPads Mini</a>, <a
																	href="../../product-category/tablets/index.html"
																	class="cmsmasters_cat_color cmsmasters_cat_47"
																	rel="category tag">Tablets</a></div>
															<h3 class="cmsmasters_product_title entry-title">
																<a href="../refurbished-apple-ipad-mini/index.html">Refurbished
																	Apple iPad Mini</a>
															</h3>
														</header>

														<div class="cmsmasters_product_info_wrap">
															<div class="cmsmasters_product_info">

																<span class="price"><span
																		class="woocommerce-Price-amount amount"><span><span
																				class="woocommerce-Price-currencySymbol">&#36;</span></span>170.00</span></span>
															</div>

															<div class="cmsmasters_star_rating" itemscope
																itemtype="//schema.org/AggregateRating"
																title="Rated 4.00 out of 5">
																<div class="cmsmasters_star_trans_wrap">
																	<span
																		class="cmsmasters_theme_icon_star_empty cmsmasters_star"></span>
																	<span
																		class="cmsmasters_theme_icon_star_empty cmsmasters_star"></span>
																	<span
																		class="cmsmasters_theme_icon_star_empty cmsmasters_star"></span>
																	<span
																		class="cmsmasters_theme_icon_star_empty cmsmasters_star"></span>
																	<span
																		class="cmsmasters_theme_icon_star_empty cmsmasters_star"></span>
																</div>
																<div class="cmsmasters_star_color_wrap"
																	data-width="width:80%">
																	<div class="cmsmasters_star_color_inner">
																		<span
																			class="cmsmasters_theme_icon_star_full cmsmasters_star"></span>
																		<span
																			class="cmsmasters_theme_icon_star_full cmsmasters_star"></span>
																		<span
																			class="cmsmasters_theme_icon_star_full cmsmasters_star"></span>
																		<span
																			class="cmsmasters_theme_icon_star_full cmsmasters_star"></span>
																		<span
																			class="cmsmasters_theme_icon_star_full cmsmasters_star"></span>
																	</div>
																</div>
																<span class="rating dn"><strong
																		itemprop="ratingValue">4.00</strong> out of
																	5</span>
															</div>
															<div class="cmsmasters_product_add_wrap">
																<div class="cmsmasters_product_add_inner"><a
																		href="indexe03d.html?add-to-cart=13156"
																		data-product_id="13156" data-product_sku=""
																		class="cmsmasters_product_button add_to_cart_button cmsmasters_add_to_cart_button product_type_simple ajax_add_to_cart"
																		title="Add to Cart"><span>Add to
																			Cart</span></a><a
																		href="../../cart/index.html"
																		class="cmsmasters_product_button added_to_cart wc-forward"
																		title="View Cart"><span>View Cart</span></a>
																</div>
															</div>
														</div>
													</div>
												</div>
											</article>
										</li>
									</ul>

								</section>

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
										<li><a href="../apple-watch-series/index.html">Apple Watch Series</a></li>
										<li><a href="../refurbished-ipad-4th/index.html">Refurbished iPad 4th</a></li>
										<li><a href="index.html">Apple 9.7&#8243; iPad</a></li>
										<li><a href="../apple-iphone-6s-16gb/index.html">Apple iPhone 6s 16GB</a></li>
										<li><a href="../apple-magic-mouse/index.html">Apple Magic Mouse</a></li>
									</ul>
								</div>
							</aside>
							<aside id="text-4" class="widget widget_text">
								<h3 class="widgettitle">Customer Service</h3>
								<div class="textwidget">
									<ul>
										<li><a href="../../news/index.html">News</a></li>
										<li><a href="../../faq/index.html">FAQ</a></li>
										<li><a href="../../shop/index.html">Shop</a></li>
										<li><a href="../../about-us/index.html">About us</a></li>
										<li><a href="../../contacts/index.html">Contacts</a></li>
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
										<li><a href="../../sale/index.html">Sale</a></li>
										<li><a href="../../shop/index.html">Shop</a></li>
										<li><a href="../../cart/index.html">Cart</a></li>
										<li><a href="../../my-account/index.html">My Orders</a></li>
										<li><a href="../../contacts/index.html">Contacts</a></li>
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