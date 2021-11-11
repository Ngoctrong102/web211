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
                    Edit Information
                </a>
            </li>
        </ul>
    </div>
</div>
<div class="container">
    <div style="margin: 0 auto" class="part1">
        <h5>Select Your Address</h5>
        <form>
            <select class="input input1">
                <?php foreach ($addresses as $address) { ?>
                    <option class="option" value="<?php echo $address["id"] ?>"><?php echo $address["address"] ?></option>
                <?php } ?>
            </select>
            <a class="linktoaccount" href="/account">
                <p class="orderlink">Add</p>
            </a>
        </form>
        <br><br>
        <form>
            <input readonly type="text" class="input" value="<?php echo $phonenumber["phone"] ?>">
            <a class="linktoaccount" href="/account">
                <p class="orderlink">Change</p>
            </a>
        </form>
    </div>
    <div>
        <a id="editorder" style="text-decoration: none;" href="<?php echo $order_id ?>">
            <p style="margin: 0 auto; margin: 30px auto" class="khung">Save</p>
        </a>
    </div>
</div>