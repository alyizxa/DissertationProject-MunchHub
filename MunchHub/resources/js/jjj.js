var loadImage = function(event) {
    var imgPreview = document.getElementById('imgPreview');
    imgPreview.src = URL.createObjectURL(event.target.files[0]);
};