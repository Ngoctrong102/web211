$("#addColorBtn").click(function(e) {
    e.preventDefault();
    let color = $("#colorInput").val();
    $.ajax({
        type: "post",
        url: "/color/addNewColorAjax",
        data: {
            color
        },
        dataType: "json",
        success: function(response) {
            console.log(response);
            let li = document.createElement("li");
            li.innerHTML = `${response.color} - <a href="/color/edit/${response.id}">Sửa</a> - <a href="/color/delete/${response.id}" style="color: red;">Xóa</a>`;

            $("#list_color").append(li);
        }
    });
});