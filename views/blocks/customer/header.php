<div id="header">
    <div id="header-top">
        <div class="container">
            <div id="header-row">
                <div id="currency">
                    <div><a><span id="currency-active"></span><i style="font-size: 10px; height:10px; width:10px" class="fa fa-chevron-down"></i></a>
                        <ul id="currency-unit">
                            <li onclick="changeUnittoVND()"><a class="unit">VNĐ</a></li>
                            <li onclick="changeUnittoUSD()"><a class="unit">USD</a></li>
                        </ul>
                    </div>
                </div>


                <div id="header-top-menu">
                    <ul>
                        <li><a class="top_menu" href="#">My Account</a></li>
                        <li><a class="top_menu" href="#">Wishlist</a></li>
                        <li><a class="top_menu" href="#">Checkout</a></li>
                        <li><a class="top_menu" href="#">Sign in</a></li>
                        <li><a class="top_menu" href="#">Register</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!--header-bottom-->
    <div id="header-bottom">
        <div class="container">
            <div class="header-bottom-content">
                <!--logo-->
                <div id="cover-logo">
                    <div id="logo">
                        <a href="#"><img alt="logo" src="/public/images/headerlogo.png" /></a>
                    </div>
                </div>
                <!--right bar-->
                <div id="cover-right">
                    <div id="cover-right-top">
                        <!--phone-->
                        <div id="phone">
                            <img style="width: 40px; height: 35px; margin:auto 0px" src="https://cdn.shopify.com/s/files/1/0049/8407/8400/files/icon-phone_small.png?v=1543293717">
                            <p style="margin-left: 5px">Phone:<br />+84 282 828 289</p>
                        </div>
                        <!--search-->
                        <div id="search">
                            <form action="#" target="_blank">
                                <input id="input" type="text" placeholder="Search...">
                                <button type="submit"><span style="-webkit-transform: rotate(90deg); color: white; font-size: 25px" class="material-icons-outlined">
                                        search
                                    </span>
                                </button>
                            </form>
                        </div>
                        <!--cart-->
                        <div id="cart">
                            <div onmouseover="total()" id="hover-objects">
                                <a href="#"><span class="material-icons-outlined" style="padding: 0 10px; width: 60px; height: 60px; font-size: 50px; margin: auto">
                                        shopping_bag</span><span>Shopping Cart</span></a>
                                <br />
                                <ul>
                                    <li class="product-detail">
                                        <a href="#"><img src="/public/images/e71.jpg" width="70px" height="70px" style="border: 0.1pt solid #dddddd" /></a>
                                        <p><span class="count">1</span><span>&nbspx&nbsp</span><span id="gia-e71"></span><span class="currency-unit"></span></p>
                                    </li>

                                    <li class="product-detail">
                                        <a href="#"><img src="/public/images/e72.jpg" width="70px" height="70px" style="border: 0.1pt solid #dddddd" /></a>
                                        <p><span class="count">1</span><span>&nbspx&nbsp</span><span id="gia-e72"></span><span class="currency-unit"></span></p>
                                    </li>
                                    <br>
                                    <div style="font-size: 20px">
                                        <p>Total:&nbsp;</p>
                                        <p><span id="price-total"></span><span style="font-size: 16px" class="currency-unit"></span></p>
                                    </div>
                                    <hr style="width: 100%; height:0.5px; margin:0">
                                    <div id="cart-button">
                                        <p><a href="#"><span>Checkout</span></a></p>
                                        <p><a href="#"><span>View cart</span></a></p>
                                    </div>
                                </ul>
                            </div>
                        </div>


                    </div>

                    <div id="cover-right-bottom">
                        <ul>
                            <li><a href="/">HOME<i class="fa fa-chevron-down"></i></a>
                                <ul class="direction">
                                    <li><a href="#">Home 1</a></li>
                                    <li><a href="#">Home 2</a></li>
                                </ul>
                            </li>
                            <li><a href="/shop">SHOP<i class="fa fa-chevron-down"></i></a>
                                <ul class="direction">
                                    <li><a href="#">Home 1</a></li>
                                    <li><a href="#">Home 2</a></li>
                                </ul>
                            </li>
                            <li><a href="#">PAGES<i class="fa fa-chevron-down"></i></a>
                                <ul class="direction">
                                    <li><a href="#">Col 1</a></li>
                                    <li><a href="#">Account</a></li>
                                </ul>
                            </li>
                            <li><a href="/news">BLOG</a></li>
                            <li><a href="#">CONTACT</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>