$("#addcolorbtn").click(function(e){
        e.preventDefault();
        let color = $("#colorinput").val();
        $.ajax({
           type: "post",
           url: "/addcolorajax",
           data: {
               color:color
           },
           dataType: "json",
           success: function(response){
               console.log(response);
           }
        });
});