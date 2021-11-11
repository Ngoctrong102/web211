/*$("#quantity").bind("keyup mouseup", function () {
  let quanity = $("#quantity").val();
  $("#quantity").val(quanity);
});*/

$(".addbutton").click(function (e) {
  e.preventDefault();
  let quantity = parseInt($("#quantity").val());
  let product_id = $(e.currentTarget).data("productId");
  $.ajax({
    type: "post",
    url: "/detail/addtocart",
    data: { quantity, product_id },
    dataType: "json",
    success: function (response) {
      if (response.success) {
        var checkname = response.productinfo[0].name;
        var nameincart = $(".pro.title").text();
        let template = document.getElementById("cart-item-template");
        let newCartItemEle = template.content.cloneNode(true);
        $(newCartItemEle).find(".pro.title").text(response.productinfo[0].name);
        $(newCartItemEle)
          .find(".pro-image")
          .attr("src", response.productinfo[0].thumbnails);
        $(newCartItemEle).find(".count").text(response.productinfo[0].quantity);
        $(newCartItemEle)
          .find(".eachprice")
          .text(response.productinfo[0].price);
        var count_dup = nameincart.includes(checkname);
        if (count_dup == false) {
          $("#cart-items").prepend(newCartItemEle);
          $("#empty").css("display", "none");
          var total = parseFloat($("#price-total").text());
          total +=
            parseFloat(response.productinfo[0].price) *
            parseFloat(response.productinfo[0].quantity);
          $("#price-total").text(total);

          let checkname = $("#product_name_detailpage").text();
          $(".pro.title").each(function () {
            if ($(this).text() == checkname) {
              $(this)
                .next()
                .children(":first")
                .next()
                .children(":first")
                .attr(
                  "href",
                  "/cart/productDeleted/" + response.productinfo[0].id
                );
            }
          });
        } else {
          var total = parseFloat($("#price-total").text());
          total +=
            parseFloat(response.productinfo[0].price) *
            parseInt($("#quantity").val());
          $("#price-total").text(total);
          let checkname = $("#product_name_detailpage").text();
          $(".pro.title").each(function () {
            if ($(this).text() == checkname) {
              let current_quantity = $(this)
                .next()
                .children(":first")
                .children(":first")
                .text();
              $(this)
                .next()
                .children(":first")
                .children(":first")
                .text(
                  parseInt(current_quantity) + parseInt($("#quantity").val())
                );
              $(this)
                .next()
                .children(":first")
                .next()
                .children(":first")
                .attr(
                  "href",
                  "/cart/productDeleted/" + response.productinfo[0].id
                );
            }
          });
        }
      }
    },
  });
});
