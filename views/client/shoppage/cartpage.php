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
                    <tbody>
                        <tr>
                        <td class="pro-image"><a href="#"><img src="public/images/e71.jpg"/></a></td>
                        <td class="pro-title"><a href="#">title</a></td>
                        <td class="pro-price"><span class="price">price</span></td>
                        <td class="pro-quantity"><div class="product-quantity">
                                                  <input type="text" value="1" name="updates[]">
                                                  <p><a href="#" class="inc-btn">+</a><br/>
                                                  <a href="#" class="dec-btn">-</a></p>
                                                 </div>
                        </td>
                        <td class="pro-total"><span class="total">350000</span></td>
                        <td class="pro-remove"><a href="#"><span class="material-icons-outlined">
                                                               delete_forever
                                                           </span>
                                                </a>                    
                        </td>  
                        </tr>
                    </tbody>
                </table>
            </div>
        </form>
    </div>
</div>