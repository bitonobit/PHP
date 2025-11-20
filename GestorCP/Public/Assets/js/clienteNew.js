const clienteFormulario=document.getElementById('clienteFormulario');
// Escuchamos el submit del formulario
clienteFormulario.addEventListener('submit', (e)=>{
    e.preventDefault();
    clienteFormularioSubmit();
});


function clienteFormularioSubmit() {
    let cliente={};
    cliente.nombre=document.getElementById('nombre').value;
    cliente.apellidos=document.getElementById('apellidos').value;
    cliente.direccion=document.getElementById('direccion').value;
    cliente.id=document.getElementById('id').value;
    let ruta= cliente.id > 0 ? 'update': 'create';
    console.log(ruta);
      const options = {
      method: "POST",
      body:JSON.stringify(cliente)
      }

    fetch('http://localhost/MVC/Public/cliente/'+ ruta, options)
    .then(response => response.text())   
  }

