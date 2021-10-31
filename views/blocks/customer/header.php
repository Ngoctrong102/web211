
<div id="header">
    <div id="header-top">
        <div class="container">
            <div id="header-row">
                <div id="currency">
                    <!--<div><a><span id="currency-active"></span><i style="font-size: 10px; height:10px; width:10px" class="fa fa-chevron-down"></i></a>
                        <ul id="currency-unit">
                          <li onclick="changeUnittoVND()"><a class="unit">VNĐ</a></li>
                          <li onclick="changeUnittoUSD()"><a class="unit">USD</a></li>
                        </ul>
                    </div>-->
                    Welcome!
                </div>


                <div id="header-top-menu">
                    <ul>
                         <li><a class="top_menu" href="#">My Account</a></li>
                         <li><a class="top_menu" href="#">Wishlist</a></li>
                         <li><a class="top_menu" href="#">Checkout</a></li>
                         <li><a class="top_menu" href="login">Sign in</a></li>
                         <li><a class="top_menu" href="#">Register</a></li>
                    </ul>
                </div>
             </div>
        </div>
    </div>
                              <!--header-bottom-->
    <div id="header-bottom">
        <div class="container">
          <div class="header-bottom-content">                       <!--logo-->
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
                         <img style="width: 40px; height: 35px; margin:auto 0px" 
                            src="https://cdn.shopify.com/s/files/1/0049/8407/8400/files/icon-phone_small.png?v=1543293717">
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
                        <div onmouseover="total()"id="hover-objects">
                            <a href="#" id="icon"><span>Shopping Cart</span><span class="material-icons-outlined" style="padding: 0 10px; width: 60px; height: 60px; font-size: 50px; margin: auto">
                                       shopping_bag</span></a>
                            <ul>
                            <?php foreach ($cartproducts as $cartproduct){ ?>
                                 <li class="product-detail">
                                     <div style="height: 70px; width: 70px" class="pro-image">
                                         <a href="#"><img src="<?php echo $cartproduct["thumbnails"] ?>" width="70px" height="70px" style="border: 0.1pt solid #dddddd" /> </a> 
                                     </div>
                                     <div style="height: 70px; width: 80%" class="title-price">
                                        <p class="pro title"><?php echo $cartproduct["name"] ?></p>
                                        <div style="display: flex;  justify-content: space-between; height: 35px"><p class="pro price"><span class="count">5</span><span>&nbsp;x&nbsp;</span><span></span>10000<span class="currency-unit"></span></p>
                                        <p class="remove">
                                              <span class="material-icons-outlined">
                                              clear
                                              </span>
                                         </p>
                                         </div>
                                      </div>
                                 </li>
                                 <?php } ?>
                                  <br>
                                    <div class="total" style="font-size: 20px">
                                          <p>Total:&nbsp;</p><p><span id="price-total"></span><span style="font-size: 16px" class="currency-unit"></span></p>
                                    </div>
                                           <hr style="width: 100%; height:0.5px; margin:0">
                                    <div id="cart-button">
                                          <p><a href="#"><span>Checkout</span></a></p>
                                          <p><a href="/cart"><span>View cart</span></a></p>
                                    </div>
                            </ul>
                        </div>
                     </div> 
                     
                     
                </div>
                          
                <div id="cover-right-bottom">
                    <ul>
                        <li><a href="#">HOME<i class="fa fa-chevron-down"></i></a>
                            <ul class="direction">
                                 <li><a href="#">Home 1</a></li>
                                 <li><a href="#">Home 2</a></li>
                            </ul>
                        </li>
                        <li><a href="#">SHOP<i class="fa fa-chevron-down"></i></a>
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
                        <li><a href="#">BLOG</a></li>
                        <li><a href="#">CONTACT</a></li>
                    </ul>
                </div>
            </div>
          </div>
        </div>
    </div>
</div>