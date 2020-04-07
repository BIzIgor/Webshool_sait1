document.getElementById('gallery').onclick = function (event) {
    if (event.target.classList.contains("min-image")) {
        showBig(event.target.getAttribute("src"), event.target.getAttribute("id"));
    }
}

function showBig(src,  pictureId) {
    let image = document.createElement("img");
    image.setAttribute("src", src);
    let showBlock = document.getElementById('big-image-box');
    image.setAttribute("id","big-image");
    image.setAttribute("picture_id", pictureId);
    showBlock.innerHTML = "";
    showBlock.append(image);
    document.getElementById('buttons').style.display = 'flex';
}

function next() {
    let pictureId = Number(document.getElementById('big-image').getAttribute('picture_id'));
    if (pictureId == 10) {
        pictureId = 1;
    } else {
        pictureId++;
    }
    let picture = document.getElementById(pictureId);
    let pictureSrc = picture.getAttribute('src');
    showBig(pictureSrc, pictureId);
}

function prev() {
    let pictureId = Number(document.getElementById('big-image').getAttribute('picture_id'));
    if (pictureId == 1) {
        pictureId = 10;
    } else {
        pictureId--;
    }
    let picture = document.getElementById(pictureId);
    let pictureSrc = picture.getAttribute('src');
    showBig(pictureSrc, pictureId);
}