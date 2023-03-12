<?= $this->extend('layouts/books_layout.php') ?>

<?= $this->section('title') ?>
    Welcome
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="slider-banner-area">
    <div class="container">
        <div class="row flex-row-reverse">
            <div class="col-lg-8 col-md-12">
                <div class="slider-area res-mrg-md-mb">
                    <div class="slider-active-3 owl-carousel owl-dot-style">
                        <div class="single-slider-2 slider-height-18 d-flex align-items-center bg-img slider-overly-res" style="background-image:url(<?=base_url()?>public/assets/img/slider/slider-11.jpg);">
                            <div class="slider-content-7 slider-animated-1 ml-70">
                                <h3 class="animated">New Arrivals</h3>
                                <h1 class="animated">Book Shop <br>Find Your Book</h1>
                                <div class="slider-btn-9 btn-hover">
                                    <a class="animated" href="shop.html">SHOP NOW</a>
                                </div>
                            </div>
                        </div>
                        <div class="single-slider-2 slider-height-18 d-flex align-items-center bg-img slider-overly-res" style="background-image:url(<?=base_url()?>public/assets/img/slider/slider-11-2.jpg);">
                            <div class="slider-content-7 slider-animated-1 ml-70">
                                <h3 class="animated">New Arrivals</h3>
                                <h1 class="animated">Book Shop <br>Find Your Book</h1>
                                <div class="slider-btn-9 btn-hover">
                                    <a class="animated" href="shop.html">SHOP NOW</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12">
                <div class="row">
                    <div class="col-lg-12 col-md-6 col-sm-6">
                        <div class="single-banner mb-30">
                            <a href="product-details.html"><img src="<?=base_url()?>public/assets/img/banner/banner-38.png" alt=""></a>
                            <div class="banner-content banner-pink">
                                <h3>Book</h3>
                                <h4>Starting at <span>$99.00</span></h4>
                                <a href="product-details.html"><i class="fa fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-6 col-sm-6">
                        <div class="single-banner mb-30">
                            <a href="product-details.html"><img src="<?=base_url()?>public/assets/img/banner/banner-39.png" alt=""></a>
                            <div class="banner-content banner-pink">
                                <h3>Book</h3>
                                <h4>Starting at <span>$79.00</span></h4>
                                <a href="product-details.html"><i class="fa fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>       


<div class="support-area res-mrg-md-mt pb-70">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="support-wrap-3 support-bg-color-1 text-center mb-10">
                    <div class="support-icon-2">
                        <img class="animated" src="<?=base_url()?>public/assets/img/icon-img/support-5.png" alt="">
                    </div>
                    <div class="support-content-3">
                        <img src="<?=base_url()?>public/assets/img/icon-img/support-8.png" alt="">
                        <p>Free shipping on all order</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="support-wrap-3 support-bg-color-2 text-center mb-30">
                    <div class="support-icon-2">
                        <img class="animated" src="<?=base_url()?>public/assets/img/icon-img/support-6.png" alt="">
                    </div>
                    <div class="support-content-3">
                        <img src="<?=base_url()?>public/assets/img/icon-img/support-9.png" alt="">
                        <p>Back guarantee under 5 days</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="support-wrap-3 support-bg-color-3 text-center mb-30">
                    <div class="support-icon-2">
                        <img class="animated" src="<?=base_url()?>public/assets/img/icon-img/support-7.png" alt="">
                    </div>
                    <div class="support-content-3">
                        <img src="<?=base_url()?>public/assets/img/icon-img/support-10.png" alt="">
                        <p>Onevery order over $150</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="product-area">
    <div class="container">
        <div class="section-title-5 text-center">
            <h2>Featured Product</h2>
        </div>
        <div class="product-tab-list nav pt-35 pb-60 product-tab-pink2 text-center">
            <a href="#product-1" data-bs-toggle="tab" >
                <h4>New Arrivals  </h4>
            </a>
            <a class="active" href="#product-2" data-bs-toggle="tab">
                <h4>Best Sellers </h4>
            </a>
            <a href="#product-3" data-bs-toggle="tab">
                <h4>Sale Items</h4>
            </a>
        </div>
        <div class="tab-content jump">
            <div class="tab-pane" id="product-1">
                <div class="row item-wrapper3">
                    <div class="col-xl-3 col-md-6 col-lg-4 col-sm-6 toggle-item-active3">
                        <div class="product-wrap-2 mb-25">
                            <div class="product-img">
                                <a href="product-details.html">
                                    <img class="default-img" src="<?=base_url()?>public/assets/img/product/hm18-pro-4.jpg" alt="">
                                    <img class="hover-img" src="<?=base_url()?>public/assets/img/product/hm18-pro-4.jpg" alt="">
                                </a>
                                <span class="purple">New</span>
                                <div class="product-action-2">
                                    <a title="Add To Cart" href="#"><i class="fa fa-shopping-cart"></i></a>
                                    <a title="Quick View" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa fa-eye"></i></a>
                                    <a title="Compare" href="#"><i class="fa fa-retweet"></i></a>
                                </div>
                            </div>
                            <div class="product-content-2">
                                <div class="title-price-wrap-2">
                                    <h3><a href="product-details.html">World At War Vol2</a></h3>
                                    <div class="price-2">
                                        <span>$ 60.00</span>
                                    </div>
                                </div>
                                <div class="pro-wishlist-2">
                                    <a title="Wishlist" href="wishlist.html"><i class="fa fa-heart-o"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 col-lg-4 col-sm-6 toggle-item-active3">
                        <div class="product-wrap-2 mb-25">
                            <div class="product-img">
                                <a href="product-details.html">
                                    <img class="default-img" src="<?=base_url()?>public/assets/img/product/hm18-pro-5.jpg" alt="">
                                    <img class="hover-img" src="<?=base_url()?>public/assets/img/product/hm18-pro-5.jpg" alt="">
                                </a>
                                <span class="pink">-10%</span>
                                <div class="product-action-2">
                                    <a title="Add To Cart" href="#"><i class="fa fa-shopping-cart"></i></a>
                                    <a title="Quick View" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa fa-eye"></i></a>
                                    <a title="Compare" href="#"><i class="fa fa-retweet"></i></a>
                                </div>
                            </div>
                            <div class="product-content-2">
                                <div class="title-price-wrap-2">
                                    <h3><a href="product-details.html">Learn With Arif </a></h3>
                                    <div class="price-2">
                                        <span>$ 60.00</span>
                                        <span class="old">$ 60.00</span>
                                    </div>
                                </div>
                                <div class="pro-wishlist-2">
                                    <a title="Wishlist" href="wishlist.html"><i class="fa fa-heart-o"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 col-lg-4 col-sm-6 toggle-item-active3">
                        <div class="product-wrap-2 mb-25">
                            <div class="product-img">
                                <a href="product-details.html">
                                    <img class="default-img" src="<?=base_url()?>public/assets/img/product/hm18-pro-2.jpg" alt="">
                                    <img class="hover-img" src="<?=base_url()?>public/assets/img/product/hm18-pro-2.jpg" alt="">
                                </a>
                                <span class="purple">New</span>
                                <div class="product-action-2">
                                    <a title="Add To Cart" href="#"><i class="fa fa-shopping-cart"></i></a>
                                    <a title="Quick View" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa fa-eye"></i></a>
                                    <a title="Compare" href="#"><i class="fa fa-retweet"></i></a>
                                </div>
                            </div>
                            <div class="product-content-2">
                                <div class="title-price-wrap-2">
                                    <h3><a href="product-details.html">Tour Gide for Africa </a></h3>
                                    <div class="price-2">
                                        <span>$ 60.00</span>
                                    </div>
                                </div>
                                <div class="pro-wishlist-2">
                                    <a title="Wishlist" href="wishlist.html"><i class="fa fa-heart-o"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 col-lg-4 col-sm-6 toggle-item-active3">
                        <div class="product-wrap-2 mb-25">
                            <div class="product-img">
                                <a href="product-details.html">
                                    <img class="default-img" src="<?=base_url()?>public/assets/img/product/hm18-pro-1.jpg" alt="">
                                    <img class="hover-img" src="<?=base_url()?>public/assets/img/product/hm18-pro-1.jpg" alt="">
                                </a>
                                <span class="pink">-20%</span>
                                <div class="product-action-2">
                                    <a title="Add To Cart" href="#"><i class="fa fa-shopping-cart"></i></a>
                                    <a title="Quick View" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa fa-eye"></i></a>
                                    <a title="Compare" href="#"><i class="fa fa-retweet"></i></a>
                                </div>
                            </div>
                            <div class="product-content-2">
                                <div class="title-price-wrap-2">
                                    <h3><a href="product-details.html">History of Moon</a></h3>
                                    <div class="price-2">
                                        <span>$ 60.00</span>
                                        <span class="old">$ 60.00</span>
                                    </div>
                                </div>
                                <div class="pro-wishlist-2">
                                    <a title="Wishlist" href="wishlist.html"><i class="fa fa-heart-o"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 col-lg-4 col-sm-6 toggle-item-active3">
                        <div class="product-wrap-2 mb-25">
                            <div class="product-img">
                                <a href="product-details.html">
                                    <img class="default-img" src="<?=base_url()?>public/assets/img/product/hm18-pro-3.jpg" alt="">
                                    <img class="hover-img" src="<?=base_url()?>public/assets/img/product/hm18-pro-3.jpg" alt="">
                                </a>
                                <span class="purple">New</span>
                                <div class="product-action-2">
                                    <a title="Add To Cart" href="#"><i class="fa fa-shopping-cart"></i></a>
                                    <a title="Quick View" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa fa-eye"></i></a>
                                    <a title="Compare" href="#"><i class="fa fa-retweet"></i></a>
                                </div>
                            </div>
                            <div class="product-content-2">
                                <div class="title-price-wrap-2">
                                    <h3><a href="product-details.html"> Freelancing Guide</a></h3>
                                    <div class="price-2">
                                        <span>$ 60.00</span>
                                    </div>
                                </div>
                                <div class="pro-wishlist-2">
                                    <a title="Wishlist" href="wishlist.html"><i class="fa fa-heart-o"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 col-lg-4 col-sm-6 toggle-item-active3">
                        <div class="product-wrap-2 mb-25">
                            <div class="product-img">
                                <a href="product-details.html">
                                    <img class="default-img" src="<?=base_url()?>public/assets/img/product/hm18-pro-8.jpg" alt="">
                                    <img class="hover-img" src="<?=base_url()?>public/assets/img/product/hm18-pro-8.jpg" alt="">
                                </a>
                                <span class="pink">-30%</span>
                                <div class="product-action-2">
                                    <a title="Add To Cart" href="#"><i class="fa fa-shopping-cart"></i></a>
                                    <a title="Quick View" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa fa-eye"></i></a>
                                    <a title="Compare" href="#"><i class="fa fa-retweet"></i></a>
                                </div>
                            </div>
                            <div class="product-content-2">
                                <div class="title-price-wrap-2">
                                    <h3><a href="product-details.html">We Are Going Down</a></h3>
                                    <div class="price-2">
                                        <span>$ 60.00</span>
                                        <span class="old">$ 60.00</span>
                                    </div>
                                </div>
                                <div class="pro-wishlist-2">
                                    <a title="Wishlist" href="wishlist.html"><i class="fa fa-heart-o"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 col-lg-4 col-sm-6 toggle-item-active3">
                        <div class="product-wrap-2 mb-25">
                            <div class="product-img">
                                <a href="product-details.html">
                                    <img class="default-img" src="<?=base_url()?>public/assets/img/product/hm18-pro-6.jpg" alt="">
                                    <img class="hover-img" src="<?=base_url()?>public/assets/img/product/hm18-pro-6.jpg" alt="">
                                </a>
                                <span class="purple">New</span>
                                <div class="product-action-2">
                                    <a title="Add To Cart" href="#"><i class="fa fa-shopping-cart"></i></a>
                                    <a title="Quick View" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa fa-eye"></i></a>
                                    <a title="Compare" href="#"><i class="fa fa-retweet"></i></a>
                                </div>
                            </div>
                            <div class="product-content-2">
                                <div class="title-price-wrap-2">
                                    <h3><a href="product-details.html">Fallen Light</a></h3>
                                    <div class="price-2">
                                        <span>$ 60.00</span>
                                    </div>
                                </div>
                                <div class="pro-wishlist-2">
                                    <a title="Wishlist" href="wishlist.html"><i class="fa fa-heart-o"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 col-lg-4 col-sm-6 toggle-item-active3">
                        <div class="product-wrap-2 mb-25">
                            <div class="product-img">
                                <a href="product-details.html">
                                    <img class="default-img" src="<?=base_url()?>public/assets/img/product/hm18-pro-7.jpg" alt="">
                                    <img class="hover-img" src="<?=base_url()?>public/assets/img/product/hm18-pro-7.jpg" alt="">
                                </a>
                                <span class="pink">-10%</span>
                                <div class="product-action-2">
                                    <a title="Add To Cart" href="#"><i class="fa fa-shopping-cart"></i></a>
                                    <a title="Quick View" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa fa-eye"></i></a>
                                    <a title="Compare" href="#"><i class="fa fa-retweet"></i></a>
                                </div>
                            </div>
                            <div class="product-content-2">
                                <div class="title-price-wrap-2">
                                    <h3><a href="product-details.html">Fly High</a></h3>
                                    <div class="price-2">
                                        <span>$ 60.00</span>
                                        <span class="old">$ 60.00</span>
                                    </div>
                                </div>
                                <div class="pro-wishlist-2">
                                    <a title="Wishlist" href="wishlist.html"><i class="fa fa-heart-o"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 col-lg-4 col-sm-6 toggle-item-active3">
                        <div class="product-wrap-2 mb-25">
                            <div class="product-img">
                                <a href="product-details.html">
                                    <img class="default-img" src="<?=base_url()?>public/assets/img/product/hm18-pro-5.jpg" alt="">
                                    <img class="hover-img" src="<?=base_url()?>public/assets/img/product/hm18-pro-5.jpg" alt="">
                                </a>
                                <span class="purple">New</span>
                                <div class="product-action-2">
                                    <a title="Add To Cart" href="#"><i class="fa fa-shopping-cart"></i></a>
                                    <a title="Quick View" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa fa-eye"></i></a>
                                    <a title="Compare" href="#"><i class="fa fa-retweet"></i></a>
                                </div>
                            </div>
                            <div class="product-content-2">
                                <div class="title-price-wrap-2">
                                    <h3><a href="product-details.html">World At War Vol2 </a></h3>
                                    <div class="price-2">
                                        <span>$ 60.00</span>
                                    </div>
                                </div>
                                <div class="pro-wishlist-2">
                                    <a title="Wishlist" href="wishlist.html"><i class="fa fa-heart-o"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 col-lg-4 col-sm-6 toggle-item-active3">
                        <div class="product-wrap-2 mb-25">
                            <div class="product-img">
                                <a href="product-details.html">
                                    <img class="default-img" src="<?=base_url()?>public/assets/img/product/hm18-pro-4.jpg" alt="">
                                    <img class="hover-img" src="<?=base_url()?>public/assets/img/product/hm18-pro-4.jpg" alt="">
                                </a>
                                <span class="pink">-20%</span>
                                <div class="product-action-2">
                                    <a title="Add To Cart" href="#"><i class="fa fa-shopping-cart"></i></a>
                                    <a title="Quick View" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa fa-eye"></i></a>
                                    <a title="Compare" href="#"><i class="fa fa-retweet"></i></a>
                                </div>
                            </div>
                            <div class="product-content-2">
                                <div class="title-price-wrap-2">
                                    <h3><a href="product-details.html">Learn With Arif</a></h3>
                                    <div class="price-2">
                                        <span>$ 60.00</span>
                                        <span class="old">$ 60.00</span>
                                    </div>
                                </div>
                                <div class="pro-wishlist-2">
                                    <a title="Wishlist" href="wishlist.html"><i class="fa fa-heart-o"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 col-lg-4 col-sm-6 toggle-item-active3">
                        <div class="product-wrap-2 mb-25">
                            <div class="product-img">
                                <a href="product-details.html">
                                    <img class="default-img" src="<?=base_url()?>public/assets/img/product/hm18-pro-8.jpg" alt="">
                                    <img class="hover-img" src="<?=base_url()?>public/assets/img/product/hm18-pro-8.jpg" alt="">
                                </a>
                                <span class="purple">New</span>
                                <div class="product-action-2">
                                    <a title="Add To Cart" href="#"><i class="fa fa-shopping-cart"></i></a>
                                    <a title="Quick View" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa fa-eye"></i></a>
                                    <a title="Compare" href="#"><i class="fa fa-retweet"></i></a>
                                </div>
                            </div>
                            <div class="product-content-2">
                                <div class="title-price-wrap-2">
                                    <h3><a href="product-details.html">Tour Gide for Africa </a></h3>
                                    <div class="price-2">
                                        <span>$ 60.00</span>
                                    </div>
                                </div>
                                <div class="pro-wishlist-2">
                                    <a title="Wishlist" href="wishlist.html"><i class="fa fa-heart-o"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 col-lg-4 col-sm-6 toggle-item-active3">
                        <div class="product-wrap-2 mb-25">
                            <div class="product-img">
                                <a href="product-details.html">
                                    <img class="default-img" src="<?=base_url()?>public/assets/img/product/hm18-pro-3.jpg" alt="">
                                    <img class="hover-img" src="<?=base_url()?>public/assets/img/product/hm18-pro-3.jpg" alt="">
                                </a>
                                <span class="pink">-30%</span>
                                <div class="product-action-2">
                                    <a title="Add To Cart" href="#"><i class="fa fa-shopping-cart"></i></a>
                                    <a title="Quick View" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa fa-eye"></i></a>
                                    <a title="Compare" href="#"><i class="fa fa-retweet"></i></a>
                                </div>
                            </div>
                            <div class="product-content-2">
                                <div class="title-price-wrap-2">
                                    <h3><a href="product-details.html">History of Moon</a></h3>
                                    <div class="price-2">
                                        <span>$ 60.00</span>
                                        <span class="old">$ 60.00</span>
                                    </div>
                                </div>
                                <div class="pro-wishlist-2">
                                    <a title="Wishlist" href="wishlist.html"><i class="fa fa-heart-o"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="view-more text-center mt-20 toggle-btn3 col-12">
                        <a class="loadMore3" href="#">VIEW MORE PRODUCTS</a>
                    </div>
                </div>
            </div>
            <div class="tab-pane active" id="product-2">
                <div class="row item-wrapper">
                    <div class="col-xl-3 col-md-6 col-lg-4 col-sm-6 toggle-item-active">
                        <div class="product-wrap-2 mb-25">
                            <div class="product-img">
                                <a href="product-details.html">
                                    <img class="default-img" src="<?=base_url()?>public/assets/img/product/hm18-pro-1.jpg" alt="">
                                    <img class="hover-img" src="<?=base_url()?>public/assets/img/product/hm18-pro-1.jpg" alt="">
                                </a>
                                <span class="purple">New</span>
                                <div class="product-action-2">
                                    <a title="Add To Cart" href="#"><i class="fa fa-shopping-cart"></i></a>
                                    <a title="Quick View" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa fa-eye"></i></a>
                                    <a title="Compare" href="#"><i class="fa fa-retweet"></i></a>
                                </div>
                            </div>
                            <div class="product-content-2">
                                <div class="title-price-wrap-2">
                                    <h3><a href="product-details.html">Fly High</a></h3>
                                    <div class="price-2">
                                        <span>$ 60.00</span>
                                    </div>
                                </div>
                                <div class="pro-wishlist-2">
                                    <a title="Wishlist" href="wishlist.html"><i class="fa fa-heart-o"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 col-lg-4 col-sm-6 toggle-item-active">
                        <div class="product-wrap-2 mb-25">
                            <div class="product-img">
                                <a href="product-details.html">
                                    <img class="default-img" src="<?=base_url()?>public/assets/img/product/hm18-pro-2.jpg" alt="">
                                    <img class="hover-img" src="<?=base_url()?>public/assets/img/product/hm18-pro-2.jpg" alt="">
                                </a>
                                <span class="pink">-10%</span>
                                <div class="product-action-2">
                                    <a title="Add To Cart" href="#"><i class="fa fa-shopping-cart"></i></a>
                                    <a title="Quick View" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa fa-eye"></i></a>
                                    <a title="Compare" href="#"><i class="fa fa-retweet"></i></a>
                                </div>
                            </div>
                            <div class="product-content-2">
                                <div class="title-price-wrap-2">
                                    <h3><a href="product-details.html">Fallen Light</a></h3>
                                    <div class="price-2">
                                        <span>$ 40.00</span>
                                        <span class="old">$ 50.00</span>
                                    </div>
                                </div>
                                <div class="pro-wishlist-2">
                                    <a title="Wishlist" href="wishlist.html"><i class="fa fa-heart-o"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 col-lg-4 col-sm-6 toggle-item-active">
                        <div class="product-wrap-2 mb-25">
                            <div class="product-img">
                                <a href="product-details.html">
                                    <img class="default-img" src="<?=base_url()?>public/assets/img/product/hm18-pro-3.jpg" alt="">
                                    <img class="hover-img" src="<?=base_url()?>public/assets/img/product/hm18-pro-3.jpg" alt="">
                                </a>
                                <span class="purple">New</span>
                                <div class="product-action-2">
                                    <a title="Add To Cart" href="#"><i class="fa fa-shopping-cart"></i></a>
                                    <a title="Quick View" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa fa-eye"></i></a>
                                    <a title="Compare" href="#"><i class="fa fa-retweet"></i></a>
                                </div>
                            </div>
                            <div class="product-content-2">
                                <div class="title-price-wrap-2">
                                    <h3><a href="product-details.html">Learn With Arif</a></h3>
                                    <div class="price-2">
                                        <span>$ 70.00</span>
                                    </div>
                                </div>
                                <div class="pro-wishlist-2">
                                    <a title="Wishlist" href="wishlist.html"><i class="fa fa-heart-o"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 col-lg-4 col-sm-6 toggle-item-active">
                        <div class="product-wrap-2 mb-2">
                            <div class="product-img">
                                <a href="product-details.html">
                                    <img class="default-img" src="<?=base_url()?>public/assets/img/product/hm18-pro-4.jpg" alt="">
                                    <img class="hover-img" src="<?=base_url()?>public/assets/img/product/hm18-pro-4.jpg" alt="">
                                </a>
                                <span class="pink">-10%</span>
                                <div class="product-action-2">
                                    <a title="Add To Cart" href="#"><i class="fa fa-shopping-cart"></i></a>
                                    <a title="Quick View" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa fa-eye"></i></a>
                                    <a title="Compare" href="#"><i class="fa fa-retweet"></i></a>
                                </div>
                            </div>
                            <div class="product-content-2">
                                <div class="title-price-wrap-2">
                                    <h3><a href="product-details.html">Sky Fall</a></h3>
                                    <div class="price-2">
                                        <span>$ 30.00</span>
                                        <span class="old">$ 40.00</span>
                                    </div>
                                </div>
                                <div class="pro-wishlist-2">
                                    <a title="Wishlist" href="wishlist.html"><i class="fa fa-heart-o"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 col-lg-4 col-sm-6 toggle-item-active">
                        <div class="product-wrap-2 mb-25">
                            <div class="product-img">
                                <a href="product-details.html">
                                    <img class="default-img" src="<?=base_url()?>public/assets/img/product/hm18-pro-5.jpg" alt="">
                                    <img class="hover-img" src="<?=base_url()?>public/assets/img/product/hm18-pro-5.jpg" alt="">
                                </a>
                                <span class="purple">New</span>
                                <div class="product-action-2">
                                    <a title="Add To Cart" href="#"><i class="fa fa-shopping-cart"></i></a>
                                    <a title="Quick View" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa fa-eye"></i></a>
                                    <a title="Compare" href="#"><i class="fa fa-retweet"></i></a>
                                </div>
                            </div>
                            <div class="product-content-2">
                                <div class="title-price-wrap-2">
                                    <h3><a href="product-details.html">We Are Going Down</a></h3>
                                    <div class="price-2">
                                        <span>$ 80.00</span>
                                    </div>
                                </div>
                                <div class="pro-wishlist-2">
                                    <a title="Wishlist" href="wishlist.html"><i class="fa fa-heart-o"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 col-lg-4 col-sm-6 toggle-item-active">
                        <div class="product-wrap-2 mb-25">
                            <div class="product-img">
                                <a href="product-details.html">
                                    <img class="default-img" src="<?=base_url()?>public/assets/img/product/hm18-pro-6.jpg" alt="">
                                    <img class="hover-img" src="<?=base_url()?>public/assets/img/product/hm18-pro-6.jpg" alt="">
                                </a>
                                <span class="pink">-20%</span>
                                <div class="product-action-2">
                                    <a title="Add To Cart" href="#"><i class="fa fa-shopping-cart"></i></a>
                                    <a title="Quick View" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa fa-eye"></i></a>
                                    <a title="Compare" href="#"><i class="fa fa-retweet"></i></a>
                                </div>
                            </div>
                            <div class="product-content-2">
                                <div class="title-price-wrap-2">
                                    <h3><a href="product-details.html"> Freelancing Guide</a></h3>
                                    <div class="price-2">
                                        <span>$ 50.00</span>
                                        <span class="old">$ 60.00</span>
                                    </div>
                                </div>
                                <div class="pro-wishlist-2">
                                    <a title="Wishlist" href="wishlist.html"><i class="fa fa-heart-o"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 col-lg-4 col-sm-6 toggle-item-active">
                        <div class="product-wrap-2 mb-25">
                            <div class="product-img">
                                <a href="product-details.html">
                                    <img class="default-img" src="<?=base_url()?>public/assets/img/product/hm18-pro-7.jpg" alt="">
                                    <img class="hover-img" src="<?=base_url()?>public/assets/img/product/hm18-pro-7.jpg" alt="">
                                </a>
                                <span class="purple">New</span>
                                <div class="product-action-2">
                                    <a title="Add To Cart" href="#"><i class="fa fa-shopping-cart"></i></a>
                                    <a title="Quick View" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa fa-eye"></i></a>
                                    <a title="Compare" href="#"><i class="fa fa-retweet"></i></a>
                                </div>
                            </div>
                            <div class="product-content-2">
                                <div class="title-price-wrap-2">
                                    <h3><a href="product-details.html">History of Moon</a></h3>
                                    <div class="price-2">
                                        <span>$ 90.00</span>
                                    </div>
                                </div>
                                <div class="pro-wishlist-2">
                                    <a title="Wishlist" href="wishlist.html"><i class="fa fa-heart-o"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 col-lg-4 col-sm-6 toggle-item-active">
                        <div class="product-wrap-2 mb-25">
                            <div class="product-img">
                                <a href="product-details.html">
                                    <img class="default-img" src="<?=base_url()?>public/assets/img/product/hm18-pro-8.jpg" alt="">
                                    <img class="hover-img" src="<?=base_url()?>public/assets/img/product/hm18-pro-8.jpg" alt="">
                                </a>
                                <span class="pink">-30%</span>
                                <div class="product-action-2">
                                    <a title="Add To Cart" href="#"><i class="fa fa-shopping-cart"></i></a>
                                    <a title="Quick View" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa fa-eye"></i></a>
                                    <a title="Compare" href="#"><i class="fa fa-retweet"></i></a>
                                </div>
                            </div>
                            <div class="product-content-2">
                                <div class="title-price-wrap-2">
                                    <h3><a href="product-details.html">Tour Gide for Africa </a></h3>
                                    <div class="price-2">
                                        <span>$ 20.00</span>
                                        <span class="old">$ 30.00</span>
                                    </div>
                                </div>
                                <div class="pro-wishlist-2">
                                    <a title="Wishlist" href="wishlist.html"><i class="fa fa-heart-o"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 col-lg-4 col-sm-6 toggle-item-active">
                        <div class="product-wrap-2 mb-25">
                            <div class="product-img">
                                <a href="product-details.html">
                                    <img class="default-img" src="<?=base_url()?>public/assets/img/product/hm18-pro-1.jpg" alt="">
                                    <img class="hover-img" src="<?=base_url()?>public/assets/img/product/hm18-pro-1.jpg" alt="">
                                </a>
                                <span class="purple">New</span>
                                <div class="product-action-2">
                                    <a title="Add To Cart" href="#"><i class="fa fa-shopping-cart"></i></a>
                                    <a title="Quick View" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa fa-eye"></i></a>
                                    <a title="Compare" href="#"><i class="fa fa-retweet"></i></a>
                                </div>
                            </div>
                            <div class="product-content-2">
                                <div class="title-price-wrap-2">
                                    <h3><a href="product-details.html">Learn With Arif</a></h3>
                                    <div class="price-2">
                                        <span>$ 60.00</span>
                                    </div>
                                </div>
                                <div class="pro-wishlist-2">
                                    <a title="Wishlist" href="wishlist.html"><i class="fa fa-heart-o"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 col-lg-4 col-sm-6 toggle-item-active">
                        <div class="product-wrap-2 mb-25">
                            <div class="product-img">
                                <a href="product-details.html">
                                    <img class="default-img" src="<?=base_url()?>public/assets/img/product/hm18-pro-2.jpg" alt="">
                                    <img class="hover-img" src="<?=base_url()?>public/assets/img/product/hm18-pro-2.jpg" alt="">
                                </a>
                                <span class="pink">-40%</span>
                                <div class="product-action-2">
                                    <a title="Add To Cart" href="#"><i class="fa fa-shopping-cart"></i></a>
                                    <a title="Quick View" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa fa-eye"></i></a>
                                    <a title="Compare" href="#"><i class="fa fa-retweet"></i></a>
                                </div>
                            </div>
                            <div class="product-content-2">
                                <div class="title-price-wrap-2">
                                    <h3><a href="product-details.html">World At War Vol2</a></h3>
                                    <div class="price-2">
                                        <span>$ 40.00</span>
                                        <span class="old">$ 50.00</span>
                                    </div>
                                </div>
                                <div class="pro-wishlist-2">
                                    <a title="Wishlist" href="wishlist.html"><i class="fa fa-heart-o"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 col-lg-4 col-sm-6 toggle-item-active">
                        <div class="product-wrap-2 mb-25">
                            <div class="product-img">
                                <a href="product-details.html">
                                    <img class="default-img" src="<?=base_url()?>public/assets/img/product/hm18-pro-3.jpg" alt="">
                                    <img class="hover-img" src="<?=base_url()?>public/assets/img/product/hm18-pro-3.jpg" alt="">
                                </a>
                                <span class="purple">New</span>
                                <div class="product-action-2">
                                    <a title="Add To Cart" href="#"><i class="fa fa-shopping-cart"></i></a>
                                    <a title="Quick View" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa fa-eye"></i></a>
                                    <a title="Compare" href="#"><i class="fa fa-retweet"></i></a>
                                </div>
                            </div>
                            <div class="product-content-2">
                                <div class="title-price-wrap-2">
                                    <h3><a href="product-details.html">Fallen Light</a></h3>
                                    <div class="price-2">
                                        <span>$ 70.00</span>
                                    </div>
                                </div>
                                <div class="pro-wishlist-2">
                                    <a title="Wishlist" href="wishlist.html"><i class="fa fa-heart-o"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 col-lg-4 col-sm-6 toggle-item-active">
                        <div class="product-wrap-2 mb-25">
                            <div class="product-img">
                                <a href="product-details.html">
                                    <img class="default-img" src="<?=base_url()?>public/assets/img/product/hm18-pro-4.jpg" alt="">
                                    <img class="hover-img" src="<?=base_url()?>public/assets/img/product/hm18-pro-4.jpg" alt="">
                                </a>
                                <span class="pink">-10%</span>
                                <div class="product-action-2">
                                    <a title="Add To Cart" href="#"><i class="fa fa-shopping-cart"></i></a>
                                    <a title="Quick View" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa fa-eye"></i></a>
                                    <a title="Compare" href="#"><i class="fa fa-retweet"></i></a>
                                </div>
                            </div>
                            <div class="product-content-2">
                                <div class="title-price-wrap-2">
                                    <h3><a href="product-details.html">Learn With Arif</a></h3>
                                    <div class="price-2">
                                        <span>$ 30.00</span>
                                        <span class="old">$ 40.00</span>
                                    </div>
                                </div>
                                <div class="pro-wishlist-2">
                                    <a title="Wishlist" href="wishlist.html"><i class="fa fa-heart-o"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="view-more text-center mt-20 toggle-btn col-12">
                        <a class="loadMore" href="#">VIEW MORE PRODUCTS</a>
                    </div>
                </div>
            </div>
            <div class="tab-pane" id="product-3">
                <div class="row item-wrapper2">
                    <div class="col-xl-3 col-md-6 col-lg-4 col-sm-6 toggle-item-active2">
                        <div class="product-wrap-2 mb-25">
                            <div class="product-img">
                                <a href="product-details.html">
                                    <img class="default-img" src="<?=base_url()?>public/assets/img/product/hm18-pro-8.jpg" alt="">
                                    <img class="hover-img" src="<?=base_url()?>public/assets/img/product/hm18-pro-8.jpg" alt="">
                                </a>
                                <span class="purple">New</span>
                                <div class="product-action-2">
                                    <a title="Add To Cart" href="#"><i class="fa fa-shopping-cart"></i></a>
                                    <a title="Quick View" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa fa-eye"></i></a>
                                    <a title="Compare" href="#"><i class="fa fa-retweet"></i></a>
                                </div>
                            </div>
                            <div class="product-content-2">
                                <div class="title-price-wrap-2">
                                    <h3><a href="product-details.html"> Freelancing Guide</a></h3>
                                    <div class="price-2">
                                        <span>$ 60.00</span>
                                    </div>
                                </div>
                                <div class="pro-wishlist-2">
                                    <a title="Wishlist" href="wishlist.html"><i class="fa fa-heart-o"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 col-lg-4 col-sm-6 toggle-item-active2">
                        <div class="product-wrap-2 mb-25">
                            <div class="product-img">
                                <a href="product-details.html">
                                    <img class="default-img" src="<?=base_url()?>public/assets/img/product/hm18-pro-7.jpg" alt="">
                                    <img class="hover-img" src="<?=base_url()?>public/assets/img/product/hm18-pro-7.jpg" alt="">
                                </a>
                                <span class="pink">-10%</span>
                                <div class="product-action-2">
                                    <a title="Add To Cart" href="#"><i class="fa fa-shopping-cart"></i></a>
                                    <a title="Quick View" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa fa-eye"></i></a>
                                    <a title="Compare" href="#"><i class="fa fa-retweet"></i></a>
                                </div>
                            </div>
                            <div class="product-content-2">
                                <div class="title-price-wrap-2">
                                    <h3><a href="product-details.html">We Are Going Down</a></h3>
                                    <div class="price-2">
                                        <span>$ 60.00</span>
                                        <span class="old">$ 60.00</span>
                                    </div>
                                </div>
                                <div class="pro-wishlist-2">
                                    <a title="Wishlist" href="wishlist.html"><i class="fa fa-heart-o"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 col-lg-4 col-sm-6 toggle-item-active2">
                        <div class="product-wrap-2 mb-25">
                            <div class="product-img">
                                <a href="product-details.html">
                                    <img class="default-img" src="<?=base_url()?>public/assets/img/product/hm18-pro-6.jpg" alt="">
                                    <img class="hover-img" src="<?=base_url()?>public/assets/img/product/hm18-pro-6.jpg" alt="">
                                </a>
                                <span class="purple">New</span>
                                <div class="product-action-2">
                                    <a title="Add To Cart" href="#"><i class="fa fa-shopping-cart"></i></a>
                                    <a title="Quick View" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa fa-eye"></i></a>
                                    <a title="Compare" href="#"><i class="fa fa-retweet"></i></a>
                                </div>
                            </div>
                            <div class="product-content-2">
                                <div class="title-price-wrap-2">
                                    <h3><a href="product-details.html">Fallen Light</a></h3>
                                    <div class="price-2">
                                        <span>$ 60.00</span>
                                    </div>
                                </div>
                                <div class="pro-wishlist-2">
                                    <a title="Wishlist" href="wishlist.html"><i class="fa fa-heart-o"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 col-lg-4 col-sm-6 toggle-item-active2">
                        <div class="product-wrap-2 mb-25">
                            <div class="product-img">
                                <a href="product-details.html">
                                    <img class="default-img" src="<?=base_url()?>public/assets/img/product/hm18-pro-5.jpg" alt="">
                                    <img class="hover-img" src="<?=base_url()?>public/assets/img/product/hm18-pro-5.jpg" alt="">
                                </a>
                                <span class="pink">-20%</span>
                                <div class="product-action-2">
                                    <a title="Add To Cart" href="#"><i class="fa fa-shopping-cart"></i></a>
                                    <a title="Quick View" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa fa-eye"></i></a>
                                    <a title="Compare" href="#"><i class="fa fa-retweet"></i></a>
                                </div>
                            </div>
                            <div class="product-content-2">
                                <div class="title-price-wrap-2">
                                    <h3><a href="product-details.html">Learn With Arif </a></h3>
                                    <div class="price-2">
                                        <span>$ 60.00</span>
                                        <span class="old">$ 60.00</span>
                                    </div>
                                </div>
                                <div class="pro-wishlist-2">
                                    <a title="Wishlist" href="wishlist.html"><i class="fa fa-heart-o"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 col-lg-4 col-sm-6 toggle-item-active2">
                        <div class="product-wrap-2 mb-25">
                            <div class="product-img">
                                <a href="product-details.html">
                                    <img class="default-img" src="<?=base_url()?>public/assets/img/product/hm18-pro-4.jpg" alt="">
                                    <img class="hover-img" src="<?=base_url()?>public/assets/img/product/hm18-pro-4.jpg" alt="">
                                </a>
                                <span class="purple">New</span>
                                <div class="product-action-2">
                                    <a title="Add To Cart" href="#"><i class="fa fa-shopping-cart"></i></a>
                                    <a title="Quick View" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa fa-eye"></i></a>
                                    <a title="Compare" href="#"><i class="fa fa-retweet"></i></a>
                                </div>
                            </div>
                            <div class="product-content-2">
                                <div class="title-price-wrap-2">
                                    <h3><a href="product-details.html">Sky Fall</a></h3>
                                    <div class="price-2">
                                        <span>$ 60.00</span>
                                    </div>
                                </div>
                                <div class="pro-wishlist-2">
                                    <a title="Wishlist" href="wishlist.html"><i class="fa fa-heart-o"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 col-lg-4 col-sm-6 toggle-item-active2">
                        <div class="product-wrap-2 mb-25">
                            <div class="product-img">
                                <a href="product-details.html">
                                    <img class="default-img" src="<?=base_url()?>public/assets/img/product/hm18-pro-3.jpg" alt="">
                                    <img class="hover-img" src="<?=base_url()?>public/assets/img/product/hm18-pro-3.jpg" alt="">
                                </a>
                                <span class="pink">-30%</span>
                                <div class="product-action-2">
                                    <a title="Add To Cart" href="#"><i class="fa fa-shopping-cart"></i></a>
                                    <a title="Quick View" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa fa-eye"></i></a>
                                    <a title="Compare" href="#"><i class="fa fa-retweet"></i></a>
                                </div>
                            </div>
                            <div class="product-content-2">
                                <div class="title-price-wrap-2">
                                    <h3><a href="product-details.html">Fly High</a></h3>
                                    <div class="price-2">
                                        <span>$ 60.00</span>
                                        <span class="old">$ 60.00</span>
                                    </div>
                                </div>
                                <div class="pro-wishlist-2">
                                    <a title="Wishlist" href="wishlist.html"><i class="fa fa-heart-o"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 col-lg-4 col-sm-6 toggle-item-active2">
                        <div class="product-wrap-2 mb-25">
                            <div class="product-img">
                                <a href="product-details.html">
                                    <img class="default-img" src="<?=base_url()?>public/assets/img/product/hm18-pro-2.jpg" alt="">
                                    <img class="hover-img" src="<?=base_url()?>public/assets/img/product/hm18-pro-2.jpg" alt="">
                                </a>
                                <span class="purple">New</span>
                                <div class="product-action-2">
                                    <a title="Add To Cart" href="#"><i class="fa fa-shopping-cart"></i></a>
                                    <a title="Quick View" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa fa-eye"></i></a>
                                    <a title="Compare" href="#"><i class="fa fa-retweet"></i></a>
                                </div>
                            </div>
                            <div class="product-content-2">
                                <div class="title-price-wrap-2">
                                    <h3><a href="product-details.html">Tour Gide for Africa </a></h3>
                                    <div class="price-2">
                                        <span>$ 60.00</span>
                                    </div>
                                </div>
                                <div class="pro-wishlist-2">
                                    <a title="Wishlist" href="wishlist.html"><i class="fa fa-heart-o"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 col-lg-4 col-sm-6 toggle-item-active2">
                        <div class="product-wrap-2 mb-25">
                            <div class="product-img">
                                <a href="product-details.html">
                                    <img class="default-img" src="<?=base_url()?>public/assets/img/product/hm18-pro-1.jpg" alt="">
                                    <img class="hover-img" src="<?=base_url()?>public/assets/img/product/hm18-pro-1.jpg" alt="">
                                </a>
                                <span class="pink">-10%</span>
                                <div class="product-action-2">
                                    <a title="Add To Cart" href="#"><i class="fa fa-shopping-cart"></i></a>
                                    <a title="Quick View" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa fa-eye"></i></a>
                                    <a title="Compare" href="#"><i class="fa fa-retweet"></i></a>
                                </div>
                            </div>
                            <div class="product-content-2">
                                <div class="title-price-wrap-2">
                                    <h3><a href="product-details.html">World At War Vol2</a></h3>
                                    <div class="price-2">
                                        <span>$ 60.00</span>
                                        <span class="old">$ 60.00</span>
                                    </div>
                                </div>
                                <div class="pro-wishlist-2">
                                    <a title="Wishlist" href="wishlist.html"><i class="fa fa-heart-o"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 col-lg-4 col-sm-6 toggle-item-active2">
                        <div class="product-wrap-2 mb-25">
                            <div class="product-img">
                                <a href="product-details.html">
                                    <img class="default-img" src="<?=base_url()?>public/assets/img/product/hm18-pro-8.jpg" alt="">
                                    <img class="hover-img" src="<?=base_url()?>public/assets/img/product/hm18-pro-8.jpg" alt="">
                                </a>
                                <span class="purple">New</span>
                                <div class="product-action-2">
                                    <a title="Add To Cart" href="#"><i class="fa fa-shopping-cart"></i></a>
                                    <a title="Quick View" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa fa-eye"></i></a>
                                    <a title="Compare" href="#"><i class="fa fa-retweet"></i></a>
                                </div>
                            </div>
                            <div class="product-content-2">
                                <div class="title-price-wrap-2">
                                    <h3><a href="product-details.html">History of Moon</a></h3>
                                    <div class="price-2">
                                        <span>$ 60.00</span>
                                    </div>
                                </div>
                                <div class="pro-wishlist-2">
                                    <a title="Wishlist" href="wishlist.html"><i class="fa fa-heart-o"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 col-lg-4 col-sm-6 toggle-item-active2">
                        <div class="product-wrap-2 mb-25">
                            <div class="product-img">
                                <a href="product-details.html">
                                    <img class="default-img" src="<?=base_url()?>public/assets/img/product/hm18-pro-7.jpg" alt="">
                                    <img class="hover-img" src="<?=base_url()?>public/assets/img/product/hm18-pro-7.jpg" alt="">
                                </a>
                                <span class="pink">-20%</span>
                                <div class="product-action-2">
                                    <a title="Add To Cart" href="#"><i class="fa fa-shopping-cart"></i></a>
                                    <a title="Quick View" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa fa-eye"></i></a>
                                    <a title="Compare" href="#"><i class="fa fa-retweet"></i></a>
                                </div>
                            </div>
                            <div class="product-content-2">
                                <div class="title-price-wrap-2">
                                    <h3><a href="product-details.html">Fallen Light</a></h3>
                                    <div class="price-2">
                                        <span>$ 60.00</span>
                                        <span class="old">$ 60.00</span>
                                    </div>
                                </div>
                                <div class="pro-wishlist-2">
                                    <a title="Wishlist" href="wishlist.html"><i class="fa fa-heart-o"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 col-lg-4 col-sm-6 toggle-item-active2">
                        <div class="product-wrap-2 mb-25">
                            <div class="product-img">
                                <a href="product-details.html">
                                    <img class="default-img" src="<?=base_url()?>public/assets/img/product/hm18-pro-6.jpg" alt="">
                                    <img class="hover-img" src="<?=base_url()?>public/assets/img/product/hm18-pro-6.jpg" alt="">
                                </a>
                                <span class="purple">New</span>
                                <div class="product-action-2">
                                    <a title="Add To Cart" href="#"><i class="fa fa-shopping-cart"></i></a>
                                    <a title="Quick View" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa fa-eye"></i></a>
                                    <a title="Compare" href="#"><i class="fa fa-retweet"></i></a>
                                </div>
                            </div>
                            <div class="product-content-2">
                                <div class="title-price-wrap-2">
                                    <h3><a href="product-details.html">Learn With Arif</a></h3>
                                    <div class="price-2">
                                        <span>$ 60.00</span>
                                    </div>
                                </div>
                                <div class="pro-wishlist-2">
                                    <a title="Wishlist" href="wishlist.html"><i class="fa fa-heart-o"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 col-lg-4 col-sm-6 toggle-item-active2">
                        <div class="product-wrap-2 mb-25">
                            <div class="product-img">
                                <a href="product-details.html">
                                    <img class="default-img" src="<?=base_url()?>public/assets/img/product/hm18-pro-5.jpg" alt="">
                                    <img class="hover-img" src="<?=base_url()?>public/assets/img/product/hm18-pro-5.jpg" alt="">
                                </a>
                                <span class="pink">-30%</span>
                                <div class="product-action-2">
                                    <a title="Add To Cart" href="#"><i class="fa fa-shopping-cart"></i></a>
                                    <a title="Quick View" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa fa-eye"></i></a>
                                    <a title="Compare" href="#"><i class="fa fa-retweet"></i></a>
                                </div>
                            </div>
                            <div class="product-content-2">
                                <div class="title-price-wrap-2">
                                    <h3><a href="product-details.html">Tour Gide for Africa  </a></h3>
                                    <div class="price-2">
                                        <span>$ 60.00</span>
                                        <span class="old">$ 60.00</span>
                                    </div>
                                </div>
                                <div class="pro-wishlist-2">
                                    <a title="Wishlist" href="wishlist.html"><i class="fa fa-heart-o"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="view-more text-center mt-20 toggle-btn2 col-12">
                        <a class="loadMore2" href="#">VIEW MORE PRODUCTS</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="save-money-area pt-100">
    <div class="container">
        <div class="bg-img pt-100 pb-100" style="background-image:url(<?=base_url()?>public/assets/img/bg/bg-5.jpg);">
            <div class="save-money-content">
                <h2>Shop and save money</h2>
                <div class="save-money-btn">
                    <a href="#">Buy $97.09</a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="product-area pt-100 pb-95">
    <div class="container">
        <div class="section-title-5 mb-60 text-center">
            <h2>New Product</h2>
        </div>
        <div class="product-slider-active-2 owl-carousel">
            <div class="product-wrap-2">
                <div class="product-img">
                    <a href="product-details.html">
                        <img class="default-img" src="<?=base_url()?>public/assets/img/product/hm18-pro-1.jpg" alt="">
                        <img class="hover-img" src="<?=base_url()?>public/assets/img/product/hm18-pro-1.jpg" alt="">
                    </a>
                    <span class="purple">New</span>
                    <div class="product-action-2">
                        <a title="Add To Cart" href="#"><i class="fa fa-shopping-cart"></i></a>
                        <a title="Quick View" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa fa-eye"></i></a>
                        <a title="Compare" href="#"><i class="fa fa-retweet"></i></a>
                    </div>
                </div>
                <div class="product-content-2">
                    <div class="title-price-wrap-2">
                        <h3><a href="product-details.html"> Freelancing Guide</a></h3>
                        <div class="price-2">
                            <span>$ 60.00</span>
                        </div>
                    </div>
                    <div class="pro-wishlist-2">
                        <a title="Wishlist" href="wishlist.html"><i class="fa fa-heart-o"></i></a>
                    </div>
                </div>
            </div>
            <div class="product-wrap-2">
                <div class="product-img">
                    <a href="product-details.html">
                        <img class="default-img" src="<?=base_url()?>public/assets/img/product/hm18-pro-2.jpg" alt="">
                        <img class="hover-img" src="<?=base_url()?>public/assets/img/product/hm18-pro-2.jpg" alt="">
                    </a>
                    <span class="purple">New</span>
                    <div class="product-action-2">
                        <a title="Add To Cart" href="#"><i class="fa fa-shopping-cart"></i></a>
                        <a title="Quick View" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa fa-eye"></i></a>
                        <a title="Compare" href="#"><i class="fa fa-retweet"></i></a>
                    </div>
                </div>
                <div class="product-content-2">
                    <div class="title-price-wrap-2">
                        <h3><a href="product-details.html">Custard Apple</a></h3>
                        <div class="price-2">
                            <span>$ 40.00</span>
                        </div>
                    </div>
                    <div class="pro-wishlist-2">
                        <a title="Wishlist" href="wishlist.html"><i class="fa fa-heart-o"></i></a>
                    </div>
                </div>
            </div>
            <div class="product-wrap-2">
                <div class="product-img">
                    <a href="product-details.html">
                        <img class="default-img" src="<?=base_url()?>public/assets/img/product/hm18-pro-3.jpg" alt="">
                        <img class="hover-img" src="<?=base_url()?>public/assets/img/product/hm18-pro-3.jpg" alt="">
                    </a>
                    <span class="purple">New</span>
                    <div class="product-action-2">
                        <a title="Add To Cart" href="#"><i class="fa fa-shopping-cart"></i></a>
                        <a title="Quick View" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa fa-eye"></i></a>
                        <a title="Compare" href="#"><i class="fa fa-retweet"></i></a>
                    </div>
                </div>
                <div class="product-content-2">
                    <div class="title-price-wrap-2">
                        <h3><a href="product-details.html">We Are Going Down</a></h3>
                        <div class="price-2">
                            <span>$ 70.00</span>
                        </div>
                    </div>
                    <div class="pro-wishlist-2">
                        <a title="Wishlist" href="wishlist.html"><i class="fa fa-heart-o"></i></a>
                    </div>
                </div>
            </div>
            <div class="product-wrap-2">
                <div class="product-img">
                    <a href="product-details.html">
                        <img class="default-img" src="<?=base_url()?>public/assets/img/product/hm18-pro-4.jpg" alt="">
                        <img class="hover-img" src="<?=base_url()?>public/assets/img/product/hm18-pro-4.jpg" alt="">
                    </a>
                    <span class="purple">New</span>
                    <div class="product-action-2">
                        <a title="Add To Cart" href="#"><i class="fa fa-shopping-cart"></i></a>
                        <a title="Quick View" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa fa-eye"></i></a>
                        <a title="Compare" href="#"><i class="fa fa-retweet"></i></a>
                    </div>
                </div>
                <div class="product-content-2">
                    <div class="title-price-wrap-2">
                        <h3><a href="product-details.html">History of Moon</a></h3>
                        <div class="price-2">
                            <span>$ 30.00</span>
                        </div>
                    </div>
                    <div class="pro-wishlist-2">
                        <a title="Wishlist" href="wishlist.html"><i class="fa fa-heart-o"></i></a>
                    </div>
                </div>
            </div>
            <div class="product-wrap-2">
                <div class="product-img">
                    <a href="product-details.html">
                        <img class="default-img" src="<?=base_url()?>public/assets/img/product/hm18-pro-2.jpg" alt="">
                        <img class="hover-img" src="<?=base_url()?>public/assets/img/product/hm18-pro-2.jpg" alt="">
                    </a>
                    <span class="purple">New</span>
                    <div class="product-action-2">
                        <a title="Add To Cart" href="#"><i class="fa fa-shopping-cart"></i></a>
                        <a title="Quick View" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa fa-eye"></i></a>
                        <a title="Compare" href="#"><i class="fa fa-retweet"></i></a>
                    </div>
                </div>
                <div class="product-content-2">
                    <div class="title-price-wrap-2">
                        <h3><a href="product-details.html">Tour Gide for Africa </a></h3>
                        <div class="price-2">
                            <span>$ 40.00</span>
                        </div>
                    </div>
                    <div class="pro-wishlist-2">
                        <a title="Wishlist" href="wishlist.html"><i class="fa fa-heart-o"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="brand-logo-area">
    <div class="container">
        <div class="bg-gray-6 brand-logo-wrap">
            <div class="brand-logo-active-2 owl-carousel owl-dot-none">
                <div class="single-brand-logo2">
                    <img src="<?=base_url()?>public/assets/img/brand-logo/barnd-logo-6.png" alt="">
                </div>
                <div class="single-brand-logo2">
                    <img src="<?=base_url()?>public/assets/img/brand-logo/barnd-logo-7.png" alt="">
                </div>
                <div class="single-brand-logo2">
                    <img src="<?=base_url()?>public/assets/img/brand-logo/barnd-logo-8.png" alt="">
                </div>
                <div class="single-brand-logo2">
                    <img src="<?=base_url()?>public/assets/img/brand-logo/barnd-logo-9.png" alt="">
                </div>
                <div class="single-brand-logo2">
                    <img src="<?=base_url()?>public/assets/img/brand-logo/barnd-logo-7.png" alt="">
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>