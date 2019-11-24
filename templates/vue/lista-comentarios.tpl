{literal}
<section id="template-vue-comentarios">

    <h3> {{ subtitle }} </h3>

    <ul>
       <li v-for="comentario in comentarios">

           <span v-if="task.finalizada == 1"> <strike>{{ task.titulo }} - {{task.descripcion}} </strike></span>
           <span v-else> {{ task.titulo }} - {{task.descripcion}} </span> 

           <span v-if="task.finalizada == 0 && auth">
                <a data-id="{{task.id}}" class="btn-eliminar" href="#">eliminar</a>
                <a data-id="{{task.id}}" class="btn-completar" href="#">completar</a>
           </span>
       </li> 
    </ul>

</section>
{/literal}
