window.addEventListener('scroll', (e) => {
  var navbar = document.querySelector('nav');
  var img_pos = document.querySelector('#img_pos');
  var logo = document.querySelector('.logo');
  var ul_nav = document.querySelector('.nav_ul');
  // if(window.scrollY === 100){
  //   document.body.style.marginTop = '100px';
  // }
  // if(window.scrollY < 100){
  //   document.body.style.marginTop = '0';
  // }
  if(window.scrollY > 0){
    navbar.style.position = 'fixed';
    navbar.style.top = '0';
    navbar.style.left = '0';
    logo.style.margin = '0';
    logo.style.float = 'left';
    logo.style.marginRight = '574px';
    img_pos.style.width = '100px';
    ul_nav.style.display = 'block';
    ul_nav.style.float = 'left';
    ul_nav.style.paddingTop = '30px';
    ul_nav.style.paddingBottom = '30px';
  }
  if(window.scrollY === 0){
    navbar.style.position = '';
    logo.style.margin = '0 auto';
    logo.style.float = 'none';
    logo.style.marginRight = '0';
    img_pos.style.width = '220px';
    ul_nav.style.display = '';
    ul_nav.style.float = '';
    ul_nav.style.paddingTop = '';
  }
});
window.addEventListener('load', () => {
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
function automaticSlider(img, images){
  var i = 0;
  setInterval(() => {
    if (i < images.length -1) {
      i += 1;
      img.src = images[i];
    }
  }, 5000)
}
