$(".info-wrapper #edit-phone").click(function(e) {
    e.preventDefault();
    let phoneEle = $(".info-wrapper #phone");
    $(phoneEle).replaceWith(createEditFieldElement((value, ele) => {
        update
    }, (ele) => {

    }, $(phoneEle).text()));
});