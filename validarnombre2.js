function validar2() {
    const input = document.getElementById('nombre');

    if(!input.checkValidity()) {
      alert('El campo nombre no es válido ya que no debe tener números.');
    } else {
      ;
    }
 
}