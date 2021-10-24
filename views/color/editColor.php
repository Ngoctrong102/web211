<form action="/color/editColor/<?php echo $color["id"]; ?>" method="post">
    <input type="text" name="color" placeholder="Enter color" value="<?php echo $color["color_name"] ?>">
    <button type="submit">Xong</button>
</form>

<a href="/color">Hủy</a>