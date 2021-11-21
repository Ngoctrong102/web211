Pusher.logToConsole = true;

var pusher = new Pusher("1dac25ccd137e736019b", {
    cluster: "ap1",
});
let uesrId = $("#noti-item").data("user-id");
var channel = pusher.subscribe("c_" + uesrId);
channel.bind("notification", function(data) {

    var myToastEl = document.getElementById('toast-noti')
    $(myToastEl).find(".toast-body").text(data.content);
    $(myToastEl).find("a").attr("href", data.url);
    var myToast = bootstrap.Toast.getOrCreateInstance(myToastEl)
    myToast.show();

    // viết thêm chèn notif mới vào trên list noti
});