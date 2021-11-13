<nav style="--bs-breadcrumb-divider: '/';" aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Orders</li>
    </ol>
</nav>

<div class="card">
    <div class="card-body">
        <div class="wrapper-title">
            <h4 class="title">Orders</h4>
        </div>
        <table id="datatable" class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>User</th>
                    <th>Phone</th>
                    <th>Address</th>
                    <th>Order at</th>
                    <th>Status</th>
                    <th style="text-align: center;">Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($orders as $order) { ?>
                    <tr>
                        <td><?php echo $order["id"]; ?></td>
                        <td><?php echo $order["first_name"].' '.$order["last_name"]; ?></td>
                        <td><?php echo $order["phone"]; ?></td>
                        <td><?php echo $order["address"]; ?></td>
                        <td><?php echo $order["created_at"]; ?></td>
                        <th><span class="status <?php echo strtolower($order["status"]);?>"><?php echo $order["status"];?></span></th>
                        <td style="text-align: center;">
                            <div class="btn-group" style="border: 1px solid #1b2c3f; border-radius: .26rem">
                                <button type="button" class="btn dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                    Action
                                </button>
                                <ul class="dropdown-menu dropdown-menu-end">
                                    <li><a class="dropdown-item" href="/admin/orders/<?php echo $order["id"]; ?>">Detail</a></li>
                                    <li><a class="dropdown-item" href="/admin/orders/delete/<?php echo $order["id"]; ?>">Delivered</a></li>
                                    <li><a class="dropdown-item" href="/admin/orders/delete/<?php echo $order["id"]; ?>">Cancle</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                <?php } ?>

            </tbody>
        </table>
    </div>
</div>