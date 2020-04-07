function validaSignup() {
  console.log(document.getElementById('txt_contrasena').value);
  if(document.getElementById('txt_contrasena').value == document.getElementById('txt_conf_contr').value) {
    return true;
  } else {
    alert('Las contraseñas no coinciden');
    return false;
  }
}

function limpiaSignup() {
  
}
