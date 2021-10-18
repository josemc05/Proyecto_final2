var loadFile = function(event) {
	var image = document.getElementById('output');
	image.src = URL.createObjectURL(event.target.files[0]);
};


document.addEventListener("DOMContentLoaded", function() {
    document.getElementById("registro").addEventListener('submit', validarFormulario); 
  });
  
  function validarFormulario(evento) {
    evento.preventDefault();
    var password1 = document.getElementById('pass').value;
    var password2 = document.getElementById('pass2').value;
    if(password1!=password2) {
      alert('contrasenas no coinciden');
      return;
    }
    this.submit();
  }

    function comprobarClave(){
        clave = document.registro.password.value
        clave2 = document.registro.password2.value
    
        if (clave == clave2){
           alert("Datos guardados")

           return false}
        else{
           alert("Las Contraseñas no coinciden")
          return true}
    }
