window.addEventListener('scroll', (e) => {
  var navbar = document.querySelector('nav');
  var img_pos = document.querySelector('#img_pos');
  var logo = document.querySelector('.logo');
  var ul_nav = document.querySelector('.nav_ul');
  if(window.scrollY === 100){
    document.body.style.marginTop = '100px';
  }
  if(window.scrollY < 100){
    document.body.style.marginTop = '0';
  }
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
  // var images = document.getElementsByClassName('lazyload');
  // const loadDistance = window.innerHeight + 100;
  // console.log(loadDistance);
//   function lazyLoad(images) {
//     // images.forEach((item) => {
//     Array.prototype.forEach.call(images, item => {
//       if (item.getBoundingClientRect().top <= loadDistance) {
//         item.classList.remove('lazyload');
//         item.setAttribute('src', item.getAttribute('data-src'));
//       }
//     });
//   }
//   lazyLoad(images);
// var debouncedLazy = _.debounce(lazyLoad, 200);
// var throttleLazy = _.throttle(lazyLoad, 100);
// window.addEventListener('resize', debouncedLazy);
// window.addEventListener('scroll', throttleLazy);
