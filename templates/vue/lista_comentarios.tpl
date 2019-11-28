{literal}

<section id="vue-comentarios">
    <h3> {{ subtitle }} </h3>
    <ul>
       <li v-for="comentario in comentarios">
           <span> {{ comentario.id_producto }} - {{comentario.descripcion}} - {{comentario.puntos}} - {{comentario.nombre_usuario}}</span>
       </li> 
    </ul>
</section>

{/literal}
