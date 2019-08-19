window.addEventListener('load', () => {
  var  img = document.querySelector('.slider_container img');
  var images = [];
  var getSrc = document.querySelectorAll('.location_slider');
  getSrc.forEach(src => {
    images.push(src.dataset.src);
  });
  showImg(img, images);
  automaticSlider(img, images);
});
function showImg(img, images){
  var i = 0;
  var  next_btn = document.querySelector('.next');
  var  prev_btn = document.querySelector('.previous');
  next_btn.addEventListener('click', () => {
    if (i < images.length -1) {
      i += 1;
      img.src = images[i];
    }
  });
  prev_btn.addEventListener('click', () => {
    if (i <= images.length && i > 0) {
      i = i - 1;
      img.src = images[i];
    }
  });
  img.src = images[i];
}
