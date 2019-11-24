"use strict"

// event listeners
document.querySelector("#form-comentario").addEventListener('submit', addComentario);

// define la app Vue
let app = new Vue({
    el: "#template-vue-comentarios",
    data: {
        subtitle: "Estos comentarios se renderizan desde el cliente usando Vue.js",
        comentarios: [], 
        auth: true
    }
});

/**
 * Obtiene la lista de comentarios de la API y los renderiza con Vue.
 */
function getComentarios() {
    fetch("api/comentarios")
    .then(response => response.json())
    .then(comentarios => {
        app.comentarios = comentarios;
    })
    .catch(error => console.log(error));
}

/**
 * Inserta un comentario usando la API REST.
 */
function addComentario(e) {
    e.preventDefault();
    
    let data = {
        fecha:  document.querySelector("input[name=fecha]").value,
        idproducto:  document.querySelector("input[name=idproducto]").value,
        descripcion:  document.querySelector("input[name=descripcion]").value,
        puntos:  document.querySelector("input[name=puntos]").value
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
