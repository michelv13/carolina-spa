
(function() {
     'use strict';
     window.addEventListener('load', function() {
       // Seleccionar el formulario para validar
       var forms = document.getElementsByClassName('needs-validation');
       // Validar cada campo y prevenir que se envie
       var validation = Array.prototype.filter.call(forms, function(form) {
         form.addEventListener('submit', function(event) {
           if (form.checkValidity() === false) {
             event.preventDefault();
             event.stopPropagation();
           } else {
           
  //obtener valores del formulario

  var nombre = document.getElementById('nombre').value,
      email = document.getElementById('email').value,
      mensaje = document.getElementById('mensaje').value;
  
  //ejecutar ajax
  var xhr = new XMLHttpRequest();

  //abrir la conexion
  xhr.open('POST', 'http://localhost:50/carolina-spa/inc/enviar.php', true);
  //siempre que utilizas un form se debe agregar un header
  xhr.setRequestHeader('content-type', 'application/x-www-form-urllencoded');
  //revisar el estado
  xhr.onload = function(){
    if( xhr.status === 200){
      var respuesta = JSON.parse( xhr.responseText );
      console.log(respuesta);
    }
  }

  //enviar el request
  xhr.send('nombre='+nombre+'&email='+email+'&mensaje='+mensaje);

 }
form.classList.add('was-validate');
form.classList.add('was-validated');
          }, false);
       });
     }, false);
   })();
