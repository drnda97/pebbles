window.addEventListener('load', (e) => {
    var addNewBtnProduct = document.querySelector('.addNewBtn');
    var secretFormProduct = document.querySelector('.product');
    //displaying new form for product table
    displayNewForm(addNewBtnProduct, secretFormProduct);

    var addNewBtnItem = document.querySelector('.item_in_menu_btn');
    var secretFormItem = document.querySelector('.item');
    // displaying new form for menu table
    displayNewForm(addNewBtnItem, secretFormItem);

    // check if input in menu form  isn't empty
    var form1 = document.forms["newItemForm"];
    var inputs1 = [].slice.call(form1.elements);
    var submitItem = document.querySelector('[name="itemBtn"]')
    checkInputBtn(form1, inputs1, submitItem);

    // check if input in product form  isn't empty
    var form2 = document.forms["addNewForm"];
    var inputs2 = [].slice.call(form2.elements);
    inputs2.length = 2;
    var submitProduct = document.querySelector('[name="btn"]');
    checkInputBtn(form2, inputs2, submitProduct);
});
// function for displaying form
function displayNewForm(btn, form){
  btn.addEventListener('click', (e) => {
    e.preventDefault();
    form.classList.remove('secret');
    btn.classList.add('secret');
  });
}
