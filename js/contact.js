if (window.matchMedia("(min-width: 721px)").matches) {
  window.addEventListener('scroll', () => {
    var strech = document.querySelector('.contact');
    if (window.scrollY <= 100) {
      strech.style.marginTop = '230px';
    }
    if (window.scrollY == 0) {
      strech.style.marginTop = '0px';
    }
  });
}
window.addEventListener('load', (e) => {
  var form = document.querySelector('[name="contactForm"]');
  var inputs = [].slice.call(form.elements);
  var submit = inputs[inputs.length - 1];
  inputs.length = 4;

  checkInput(form, inputs, submit);
});
function checkInput(form, inputs, submit){
  var err = ['Fields can\'t be empty'];

  inputs.forEach(input => {
    input.addEventListener('focus', (e) => {
      e.target.style.border = '1px solid blue';
    });
    input.addEventListener('blur', (e) => {
      if (e.target.value.trim() == '') {
        input.placeholder = 'Required';
        input.style.border = '2px solid red';
      }
    });
  });

  if(submit){
    submit.addEventListener('click', () => {
      var i = 0;
      inputs.forEach(input => {
        if (input.value != '') {
          i++;
          if (i == inputs.length) {
            err.length = 0;
          }
        }
      });
      if (err.length > 0) {
        err.length = 1;
        alert(err);
      }else{
        form.submit();
      }
    });
  }
}
