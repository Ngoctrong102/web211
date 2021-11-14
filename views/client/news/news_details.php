<div class="container">
    <div class="breadcum">
        <ul>
            <li>
                <a href="#">
                    <i class="fas fa-home"></i>
                    Home
                </a>
            </li>
            <li>
                <a href="/news">
                    News
                </a>
            </li>
            <li class="active">
                <a href="/news/<?php echo $news["id"]; ?>">
                    <?php echo $news["title"]; ?>
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
                <div class="news-content">
                    <div class="title">
                        <h4><?php echo $news["title"]; ?></h4>
                        <small><b>Posted on: </b><?php echo $news["created_at"]; ?></small>
                    </div>
                    <hr>
                    <img class="thumbnails" src="<?php echo $news["thumbnails"]; ?>" alt="">
                    <div class="body">
                        <?php echo $news["content"]; ?>
                    </div>
                    <hr>
                </div>
                <div class="comments-wrapper">
                    <h4>Comments</h4>
                    <button class="load-more-btn">Load more</button>
                    <div id="comments" data-page="0" data-news-id="<?php echo $news["id"]; ?>">
                        <?php
                        $comments = array_reverse($comments);
                        foreach ($comments as $comment) {
                        ?>
                            <div class="comment">
                                <div class="avatar">
                                    <img src="<?php echo $comment["avatar"]; ?>" alt="">
                                </div>
                                <div class="body-comment">
                                    <h5><b><?php echo $comment["first_name"] . " " . $comment["last_name"]; ?></b></h5>
                                    <small><?php echo $comment["created_at"]; ?></small>
                                    <p class="content"><?php echo $comment["content"]; ?></p>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                    <?php if (isset($_SESSION["user_id"])) { ?>
                        <div class="comment">
                            <div class="avatar">
                                <img src="<?php echo $user["avatar"]; ?>" alt="">
                            </div>
                            <div class="body-comment">
                                <h5><b><?php echo $user["first_name"] . " " . $user["last_name"]; ?></b></h5>
                                <form id="form-comment" data-news-id="<?php echo $news["id"]; ?>">
                                    <textarea name="content" id="input-comment" rows="2"></textarea>
                                    <button>Submit</button>
                                </form>
                            </div>
                        </div>
                    <?php } else { ?> 
                        <div class="comment">
                            <a href="/redirectLogin?location=/news/<?php echo $news["id"];?>">Login to comment</a>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</div>

<template id="template-comment">
    <div class="comment">
        <div class="avatar">
            <img src="/upload/images/shin.jpg" alt="">
        </div>
        <div class="body-comment">
            <h5><b>Username</b></h5>
            <small>20:38 20/10/2021</small>
            <p class="content">Nội dung comment</p>
        </div>
    </div>
</template>