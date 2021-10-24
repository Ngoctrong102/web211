<h1>Danh sách màu</h1>
<form>
    <input type="text" name="color" placeholder="Enter color" id="colorInput">
    <button id="addColorBtn" type="button">Thêm màu</button>
</form>
<ul id="list_color">
    <?php foreach ($colors as $color) { ?>
        <li><?php echo $color["color_name"]; ?> - <a href="/color/edit/<?php echo $color["id"]; ?>">Sửa</a> - <a href="/color/delete/<?php echo $color["id"]; ?>" style="color: red;">Xóa</a></li>
    <?php } ?>
</ul>

<a href="/color/add">Thêm màu mới</a>