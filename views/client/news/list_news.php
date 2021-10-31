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
                    My account
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
                        <li><a href="#" class="active"><i class="far fa-check-square"></i>Beans</a></li>
                        <li><a href="#"><i class="far fa-square"></i>Birds</a></li>
                        <li><a href="#"><i class="far fa-square"></i>Bánh mỳ</a></li>
                        <li><a href="#"><i class="far fa-square"></i>Deal Products</a></li>
                        <li><a href="#"><i class="far fa-square"></i>Eggs</a></li>
                    </ul>
                </div>
                <div class="checkbox-filter">
                    <h3 class="sidebar-title">PRODUCT CATEGORIES</h3>
                    <ul class="product-categories">
                        <li><a href="#" class="active"><i class="far fa-check-square"></i>Beans</a></li>
                        <li><a href="#"><i class="far fa-square"></i>Birds</a></li>
                        <li><a href="#"><i class="far fa-square"></i>Bread</a></li>
                        <li><a href="#"><i class="far fa-square"></i>Deal Products</a></li>
                        <li><a href="#"><i class="far fa-square"></i>Eggs</a></li>
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
                <div class="row">
                    <?php foreach ($list_news as $news) { ?>
                        <div class="col-6">
                            <div class="card">
                                <img src="<?php echo $news["thumbnails"]; ?>" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h4 class="card-title"><?php echo $news["title"]; ?></h4>
                                    <small><b>Posted on: </b><?php echo $news["created_at"]; ?></small>
                                    <hr>
                                    <p class="card-text"><?php echo $news["description"]; ?></p>
                                    <a href="/news/<?php echo $news["id"] ?>" class="btn">Continue</a>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
                <div class="pagination-container">
                    <ul>
                        <li class="disabled prev">
                            <a><i class="fas fa-chevron-left"></i></a>
                        </li>
                        <li class="active"><a href="#">1</a></li>
                        <li>
                            <a href="/collections/all?page=2" title="">2</a>
                        </li>
                        <li>
                            <a href="/collections/all?page=3" title="">3</a>
                        </li>
                        <li>
                            <a href="/collections/all?page=4" title="">4</a>
                        </li>
                        <li class="next"><a href="/collections/all?page=2" title="Next »"><i class="fas fa-chevron-right"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>