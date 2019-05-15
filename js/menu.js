window.addEventListener('load', () => {
  showImg();
});
function showImg(){
  var i = 0;
  var images = ['../pebbles/5.jpg', '../pebbles/6.jpg', '../pebbles/9.jpg', '../pebbles/10.jpg']
  var  next_btn = document.querySelector('.next');
  var  prev_btn = document.querySelector('.previous');
  var  img = document.querySelector('.slider_container img');
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
