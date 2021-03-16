const deleteModal=(name)=>{
  document.getElementById(name).parentNode.removeChild(document.getElementById(name));
  document.getElementById('toggleModalScript').parentNode.removeChild(document.getElementById('toggleModalScript'));
  window.location.href = window.location.href.replace(window.location.search,'');

}

