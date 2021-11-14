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
                    Your Orders
                </a>
            </li>
        </ul>
    </div>
</div>
<div class="container">
    <div class="cover">
        <table>
            <tr>
                <th class="row-title">Order Id</th>
                <th class="row-title">Full Name</th>
                <th class="row-title">Phone Number</th>
                <th class="row-title">Address</th>
                <th class="row-title">Date</th>
                <th class="row-title">Status</th>
                <th style="padding-left: 50px" class="row-title">Option</th>
            </tr>
            <?php foreach ($orders as $order) { ?>
                <tr>
                    <td class="orderId"><?php echo $order["id"] ?></td>
                    <td class="orderName"><?php echo ($order["first_name"] . ' ' . $order["last_name"]) ?></td>
                    <td class="orderPhone"><?php echo $order["phone"] ?></td>
                    <td class="orderAddress"><?php echo $order["address"] ?></td>
                    <td class="orderDate"><?php echo $order["created_at"] ?></td>
                    <th><span class="status <?php echo strtolower($order["status"]); ?>"><?php echo $order["status"]; ?></span></th>
                    <td><a class="link-option" href="/orderproduct">Detail</a>
                        <a class="link-option" href="">Checkout</a>
                        <a class="link-option" href="/order/orderCancelled/<?php echo $order["id"] ?>">Cancel</a>
                    </td>
                </tr>
            <?php  } ?>
        </table>

    </div>
</div>