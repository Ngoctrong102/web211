<div class="container">
    <div class="grid-container">
        <?php foreach ($colors as $color){ ?>
          <div class="grid-item"> <div><?php echo $color["color_name"]; ?></div>
           <div>
             <a style="text-decoration: none; color: Blue; font-weight: 1000" href="/delete/<?php echo $color["id"]?>">Delete</a> 
             <a style="text-decoration: none; color: Blue; font-weight: 1000" href="/edit/<?php echo $color["id"]?>">Edit</a>
          </div>
          </div>
        <?php } ?>
    </div>
    <button type="button"><a style="text-decoration: none; color: black; font-weight: 1000" href="/add">Click to add</a></button>
</div>

<form>
        <input id="colorinput" type="text" placeholder="Add color using Ajax" name="addingcolorname">
        <button id="addcolorbtn" type="button">Add</button>
</form>
<button type="button"><a style="text-decoration: none; color: black; font-weight: 1000" href="/showcolor">Cancel</a></button>
