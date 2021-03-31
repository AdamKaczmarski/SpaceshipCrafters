/*
This code will delete the failure/success modal from the screen and will also remove the error code after ? from the link 
so that if user reloading the page wouldn't see the same error twice.
*/
const deleteModal=(name)=>{
  document.getElementById(name).parentNode.removeChild(document.getElementById(name));
  document.getElementById('toggleModalScript').parentNode.removeChild(document.getElementById('toggleModalScript'));
  window.location.href = window.location.href.replace(window.location.search,'');

}

