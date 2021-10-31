$("#add-image-btn").click(function(e) {
    e.preventDefault();
    selectProductImages();
});

function selectProductImages() {
    CKFinder.popup({
        chooseFiles: true,
        width: 800,
        height: 600,
        onInit: function(finder) {
            finder.on('files:choose', function(evt) {
                // var file = .first();
                evt.data.files.forEach(file => {
                    let fileUrl = file.getUrl();
                    addNewImage(fileUrl);
                });
            });
            finder.on('file:choose:resizedImage', function(evt) {
                let fileUrl = evt.data.resizedUrl;
                addNewImage(fileUrl)
            });
        }
    });
}

function addNewImage(fileUrl) {
    let image = document.getElementById("template-image").content.cloneNode(true);
    $(image).find("button").data("imageUrl", fileUrl);
    $(image).find("img").attr("src", fileUrl);
    let inputImagesVal = $("#product_images_input").val();
    let newValue = inputImagesVal ? `${inputImagesVal}:_:_:${fileUrl}` : fileUrl;
    $("#product_images_input").val(newValue);
    let insertBtn = document.getElementById("add-image-btn");
    insertBtn.parentNode.insertBefore(image, insertBtn);
}