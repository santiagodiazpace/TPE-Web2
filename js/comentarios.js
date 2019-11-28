"use strict"

function getComentarios() {
    fetch("api/comentarios")
    .then(response => response.json())
    .then(comentarios => {
        app.comentarios = comentarios;
    })
    .catch(error => console.log(error));
}


// event listeners
document.querySelector("#form-comentario").addEventListener('submit', addComentario);

// define la app Vue
let app = new Vue({
    el: "#vue-comentarios",
    data: {
        subtitle: "Comentarios renderizados usando Vue.js",
        comentarios: [], 
        auth: true
    }
});


function addComentario(e) {
    e.preventDefault();
    
    let data = {
        id_producto:  document.querySelector("input[name=id_producto]").value,
        descripcion:  document.querySelector("input[name=descripcion]").value,
        puntos:  document.querySelector("input[name=puntos]").value,
        nombre_usuario:  document.querySelector("input[name=nombre_usuario]").value
    }

    fetch('api/comentarios', {
        method: 'POST',
        headers: {'Content-Type': 'application/json'},       
        body: JSON.stringify(data) 
     })
     .then(response => {
         getComentarios();
     })
     .catch(error => console.log(error));
}

// obtiene los comentarios al inicio
getComentarios();
