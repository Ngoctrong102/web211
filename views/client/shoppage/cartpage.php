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
                    Your Shopping Cart
                </a>
            </li>
        </ul>
    </div>
</div>


  <!--cart-->
<div class="container">
    <div id="cart-section">
        <form>
            <div id="cart-table">
                <table id="table">
                    <thead>
                     <tr>
                      <th class="pro-image">Image</th>
                      <th class="pro-title">Product</th>
                      <th class="pro-price">Price</th>
                      <th class="pro-quantity">Quantity</th>
                      <th class="pro-total">Total</th>
                      <th class="pro-remove">Remove</th>
                     </tr>                    
                    </thead>

                    <?php foreach ($cartproducts as $cartproduct){ ?>
         
       
                    <tbody>
                        <tr>
                        <td class="pro-image"><a href="#"><img src="<?php echo $cartproduct["thumbnails"] ?>"/></a></td>
                        <td class="pro-title"><a href="#"><?php echo $cartproduct["name"] ?></a></td>
                        <td class="pro-price"><span class="price"><?php echo $cartproduct["price"] ?></span></td>
                        <td class="pro-quantity"><div class="product-quantity">
                                                  <input type="text" value="<?php echo $cartproduct["quantity"] ?>" name="updates[]">
                                                  <div><a href="#" class="inc-btn"><span class="inc">+</span></a>
                                                       <a href="#" class="dec-btn"><span class="dec">-</span></a></div>
                                                 </div>
                        </td>
                        <td class="pro-total"><span class="total"><?php echo $cartproduct["price"]*$cartproduct["quantity"] ?></span></td>
                        <td class="pro-remove"><a href="#"><span class="material-icons-outlined">
                                                               delete_forever
                                                           </span>
                                                </a>                    
                        </td>  
                        </tr>
                    </tbody>
                    <?php } ?>
                </table>
            </div>
        </form>
    </div>
</div>