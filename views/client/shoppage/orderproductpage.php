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
                    Your Order Products
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
                    <?php foreach ($orderproducts as $orderproduct) { ?>


                        <tbody>
                            <tr>
                                <td class="pro-image"><a href="/detail/<?php echo $orderproduct["id"] ?>"><img src="<?php echo $orderproduct["thumbnails"] ?>" /></a></td>
                                <td class="pro-title"><a href="#"><?php echo $orderproduct["name"] ?></a></td>
                                <td class="pro-price"><span class="price"><?php echo $orderproduct["price"] ?></span></td>
                                <td class="pro-quantity">
                                    <div class="product-quantity">
                                        <input type="text" value="<?php echo $orderproduct["quantity"] ?>" name="quantity">
                                        <div><a style="cursor: pointer" class="inc-btn"><span class="inc" data-product-id="<?php echo $orderproduct["id"]; ?>">+</span></a>
                                            <a style="cursor: pointer" class="dec-btn"><span class="dec" data-product-id="<?php echo $orderproduct["id"]; ?>">-</span></a>
                                        </div>
                                    </div>
                                </td>
                                <td class="pro-total"><span class="total"><?php echo $orderproduct["price"] * $orderproduct["quantity"] ?></span></td>
                                <td class="pro-remove"><a href="/cart/productDeleted/<?php echo $orderproduct["id"]; ?>"><span class="material-icons-outlined">
                                            delete_forever
                                        </span>
                                    </a>
                                </td>
                            </tr>
                        </tbody>
                    <?php } ?>
                </table>
                <?php if (count($orderproducts) == 0) { ?>
                    <h5 id="empty" style="text-align: center; margin-top: 20px">Empty</h5>
                <?php } ?>
            </div>
        </form>
    </div>
</div>