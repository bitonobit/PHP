function clienteList(){
    /*  definimos una constante con el metodo  */
   const options = {
        method: "GET"
    };
  
  // Hacemos la Petición HTTP con la url y las opciones
  fetch('http://localhost/MVC/Public/cliente/table', options)
    .then(response => response.text())  // procesa la respuesta
    .then(data => {
      /* Procesar los datos */  
      var responseData = JSON.parse(data);
      
      if (responseData.success) {
        const clienteTableBody=document.getElementById(`clienteTableBody`);
        clienteTableBody.innerHTML='';
        responseData.result.forEach(item => {
          clienteTableBody.insertAdjacentHTML('beforeend', `<tr>
          <td>${item.nombre}</td>
          <td>${item.apellidos}</td>
          <td>${item.direccion}</td>
          <td><a href="http://localhost/MVC/Public/cliente/edit/?id=${item.id}">
          <button>Editar</button>
          </a>
          </td>
          <td>
          <button onclick="eliminarCliente(${item.id})">Eliminar</button>
          </td>
          </tr>`)
        });
      }

    });
  

}

clienteList();

function eliminarCliente(id){
  const options = {
    method: "DELETE",
    body: JSON.stringify({id})
  };

// Hacemos la Petición HTTP con la url y las opciones
fetch('http://localhost/MVC/Public/cliente/delete', options)
.then(response => response.text())  // procesa la respuesta
.then(data => {
  /* Procesar los datos */  
  var responseData = JSON.parse(data);
  console.log(responseData);
  clienteList();
});

}

