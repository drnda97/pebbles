window.addEventListener('load', (e) => {
  var form = document.forms[0];
  var inputs = [].slice.call(form.elements);
  inputs.length = 2;
  var submit = document.querySelector('[name="button"]');
  checkInput(form, inputs, submit);
});
