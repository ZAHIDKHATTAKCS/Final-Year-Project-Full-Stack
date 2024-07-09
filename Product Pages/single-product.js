
// targetting the images

var bigImg = document.getElementById("big-img");
    var smallImg = document.getElementsByClassName("small-img");

    smallImg[0].onclick = function () {
      bigImg.src = smallImg[0].src;
    }

    smallImg[1].onclick = function () {
      bigImg.src = smallImg[1].src;
    }

    smallImg[2].onclick = function () {
      bigImg.src = smallImg[2].src;
    }

    smallImg[3].onclick = function () {
      bigImg.src = smallImg[3].src;
    }