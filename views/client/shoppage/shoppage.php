<div class="container">
    <div class="breadcum">
        <ul>
            <li>
                <a href="#">
                    <i class="fas fa-home"></i>
                    Home
                </a>
            </li>
            <li class="active">
                <a href="#">
                    Products
                </a>
            </li>
        </ul>
    </div>
</div>
<div class="container">
    <div class="shoppage">
        <div class="row">
            <div class="col-3">
                <div class="checkbox-filter">
                    <h3 class="sidebar-title">PRODUCT CATEGORIES</h3>
                    <ul class="product-categories">
                        <?php foreach ($categories as $category) {
                            $href = "/shop";
                            if ($category["id"] != $_GET["category"]) {
                                $href .= "?category=" . $category["id"] . "&page=1";
                            }
                        ?>
                            <li>
                                <a href="<?php echo $href; ?>" <?php echo $category["id"] == $_GET["category"] ? 'class="active"' : ""; ?>>
                                    <i class="far fa-<?php echo $category["id"] == $_GET["category"] ? 'check-' : ""; ?>square"></i><?php echo $category["title"]; ?>
                                </a>
                            </li>
                        <?php } ?>
                    </ul>
                </div>
                <div class="toprate">
                    <h3 class="sidebar-title">PRODUCT CATEGORIES</h3>
                    <div class="top-rated-product-container">
                        <div class="single-top-rated-product">
                            <div class="image">
                                <a href="#">
                                    <img src="//cdn.shopify.com/s/files/1/0049/8407/8400/products/03_e4e8c045-f356-4963-b02f-0b8eacfc58bd_large.png?v=1544513368" class="img-fluid" alt="3. Variable product">
                                </a>
                            </div>
                            <div class="content">
                                <p><a href="#">3. Variable product</a></p>
                                <p>
                                <div class="rateit" data-rateit-ispreset="true" data-rateit-readonly="true" data-rateit-value="3.6"></div>
                                </p>
                                <p class="product-price">
                                    <span class="price" data-currency-usd="$40.00">$40.00</span>
                                    <span class="main-price" data-currency-usd="$85.00">$85.00</span>
                                </p>
                            </div>
                        </div>
                        <div class="single-top-rated-product">
                            <div class="image">
                                <a href="#">
                                    <img src="//cdn.shopify.com/s/files/1/0049/8407/8400/products/03_e4e8c045-f356-4963-b02f-0b8eacfc58bd_large.png?v=1544513368" class="img-fluid" alt="3. Variable product">
                                </a>
                            </div>
                            <div class="content">
                                <p><a href="#">3. Variable product</a></p>
                                <p>
                                <div class="rateit" data-rateit-ispreset="true" data-rateit-readonly="true" data-rateit-value="3.6"></div>
                                </p>
                                <p class="product-price">
                                    <span class="price" data-currency-usd="$40.00">$40.00</span>
                                </p>
                            </div>
                        </div>
                        <div class="single-top-rated-product">
                            <div class="image">
                                <a href="#">
                                    <img src="//cdn.shopify.com/s/files/1/0049/8407/8400/products/03_e4e8c045-f356-4963-b02f-0b8eacfc58bd_large.png?v=1544513368" class="img-fluid" alt="3. Variable product">
                                </a>
                            </div>
                            <div class="content">
                                <p><a href="#">3. Variable product</a></p>
                                <p>
                                <div class="rateit" data-rateit-ispreset="true" data-rateit-readonly="true" data-rateit-value="3.6"></div>
                                </p>
                                <p class="product-price">
                                    <span class="price" data-currency-usd="$40.00">$40.00</span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tags-product">
                    <h3 class="sidebar-title">PRODUCT CATEGORIES</h3>
                    <ul class="tags">
                        <li><a href="#" class="active">Beans</a></li>
                        <li><a href="#">Birds</a></li>
                        <li><a href="#">Bread</a></li>
                        <li><a href="#">Deal Products</a></li>
                        <li><a href="#">Eggs</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-9">
                <div class="shoppage-banner">
                    <img src="/public/images/shop-banner.jpg" alt="">
                </div>
                <div class="filter">
                    <div class="col-lg-12 col-md-12 col-sm-12 d-flex flex-column flex-sm-row justify-content-between align-items-left align-items-sm-center">
                        <div class="d-flex align-items-center mb-xs-10">
                            <p style="margin-right: 10px;">Sort by</p>
                            <select name="SortBy" id="SortBy">
                                <option value="manual">Featured</option>
                                <option value="best-selling">Best Selling</option>
                                <option value="title-ascending">Alphabetically, A-Z</option>
                                <option value="title-descending">Alphabetically, Z-A</option>
                                <option value="price-ascending">Price, low to high</option>
                                <option value="price-descending">Price, high to low</option>
                                <option value="created-descending">Date, new to old</option>
                                <option value="created-ascending">Date, old to new</option>
                            </select>
                        </div>
                        <form class="search" action="/shop" method="GET">
                            <input type="text" name="category" value="<?php echo $_GET["category"]; ?>" style="visibility: hidden; width:0px; margin:0px !important;">
                            <input type="text" name="q" placeholder="Enter to search ..." value="<?php echo $_GET["q"]; ?>">
                            <button><i class="fas fa-search"></i></button>
                        </form>
                    </div>
                </div>
                <div class="grid-products row grid" style="margin: 0px;">
                    <?php foreach ($products as $product) { ?>
                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-12 p-0">
                            <div class="card-product">
                                <div class="image">
                                    <a href="/detail/<?php echo $product["id"] ?>">
                                        <?php if ($product["quantity"] == 0) { ?>
                                            <span class="badge">Soldout</span>
                                        <?php } ?>
                                        <img class="mini_img" src="<?php echo $product["thumbnails"]; ?>" alt="11. Product with video">
                                    </a>
                                    <!-- <div class="product-hover-icons">
                                        <a class="cart-disable cart_btn" data-tooltip="Add to cart">
                                            <span class="icon">
                                                <svg id="i-cart" xmlns="http://www.w3.org/2000/svg" viewBox="-21 -22 75 75" fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                                                    <path d="M6 6 L30 6 27 19 9 19 M27 23 L10 23 5 2 2 2" />
                                                    <circle cx="25" cy="27" r="2" />
                                                    <circle cx="12" cy="27" r="2" />
                                                </svg>
                                            </span>
                                        </a>
                                        <a class="action-plus" data-tooltip="Quickview" data-toggle="modal" data-target="#quickViewModal" href="javascript:void(0);" onclick="quiqview('11-product-with-video')">
                                            <span class="icon" style="transform: rotateY(180deg);">
                                                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="-71 -80 290 290" xmlns:xlink="http://www.w3.org/1999/xlink" enable-background="new 0 0 129 129" stroke="#fff" fill="#fff">
                                                    <g>
                                                        <path d="M51.6,96.7c11,0,21-3.9,28.8-10.5l35,35c0.8,0.8,1.8,1.2,2.9,1.2s2.1-0.4,2.9-1.2c1.6-1.6,1.6-4.2,0-5.8l-35-35   c6.5-7.8,10.5-17.9,10.5-28.8c0-24.9-20.2-45.1-45.1-45.1C26.8,6.5,6.5,26.8,6.5,51.6C6.5,76.5,26.8,96.7,51.6,96.7z M51.6,14.7   c20.4,0,36.9,16.6,36.9,36.9C88.5,72,72,88.5,51.6,88.5c-20.4,0-36.9-16.6-36.9-36.9C14.7,31.3,31.3,14.7,51.6,14.7z" />
                                                    </g>
                                                </svg>
                                            </span>
                                        </a><a class="same-action" href="/account/login" data-tooltip="Add to wishlist">
                                            <span class="icon">
                                                <svg id="i-heart" xmlns="http://www.w3.org/2000/svg" viewBox="-18 -17 65 65" fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                                                    <path d="M4 16 C1 12 2 6 7 4 12 2 15 6 16 8 17 6 21 2 26 4 31 6 31 12 28 16 25 20 16 28 16 28 16 28 7 20 4 16 Z" />
                                                </svg>
                                            </span>
                                        </a>
                                    </div> -->
                                </div>
                                <div class="product-content">
                                    <div class="product-categories">
                                        <?php echo join(", ", array_map(function ($category) {
                                            return '<a href="/">' . $category["title"] . '</a>';
                                        }, $product["categories"])); ?>
                                    </div>
                                    <h3 class="product-title"><a href="/detail/<?php echo $product["id"] ?>"><?php echo $product["name"] ?></a></h3>
                                    <div class="price-box">
                                        <span class="price" data-currency-usd="$39.00"><?php echo $product["price"] ?>đ</span>
                                        <span class="main-price" data-currency-usd="$39.00">$39.00</span>
                                    </div>
                                </div>
                            </div>

                        </div>
                    <?php } ?>
                </div>
                <div class="pagination-container">
                    <ul>
                        <li class="<?php echo $_GET["page"] == 1 ? "disabled" : ""; ?> prev">
                            <a href="/shop?category=<?php echo $_GET["category"];?>&q=<?php echo $_GET["q"];?>&page=<?php echo $_GET["page"] - 1; ?>"><i class="fas fa-chevron-left"></i></a>
                        </li>
                        <?php 
                        $num_pages = ceil(floatval($number_products) / 9);
                        for ($i = 0; $i < $num_pages; $i++) { ?>
                            <li class="<?php echo $_GET["page"] == $i + 1 ? "active" : ""; ?>"><a href="/shop?category=<?php echo $_GET["category"];?>&q=<?php echo $_GET["q"];?>&page=<?php echo $i + 1; ?>"><?php echo $i + 1; ?></a></li>
                        <?php } ?>
                        <li class="<?php echo $_GET["page"] == $num_pages ? "disabled" : ""; ?> next"><a href="/shop?category=<?php echo $_GET["category"];?>&q=<?php echo $_GET["q"];?>&page=<?php echo $_GET["page"] + 1; ?>" title="Next »"><i class="fas fa-chevron-right"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>