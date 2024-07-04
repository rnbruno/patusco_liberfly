<script setup>

    import { useForm } from '@inertiajs/vue3';
    import {router} from '@inertiajs/vue3';
    import Swal from '../../plugins/sweetalert2';

    defineProps({
        usuarios: Object
    });



</script>
<style scoped>
/* Seus estilos aqui */
</style>
<template>
    <h2>Teste..</h2>
    <div class="card col-10 offset-1">
         <div class="card-body">
            <h3>Usu&aacute;rios Operadores do Sistema</h3>
      <div class="table-responsive small">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">C&oacute;d.</th>
              <th scope="col">Nome</th>
              <th scope="col">Email</th>
              <th scope="col">Telefone</th>
              <th scope="col">Header</th>
            </tr>
          </thead>
          <tbody>
            <tr v-for="(usuario,index) in usuarios" :key="index">
              <td><div class="badge text-bg-secondary">{{index+1}}</div></td>
              <td>{{usuario.pessoa_id}}</td>
              <td>{{ usuario.nome }}</td>
              <td>{{ usuario.usuario }}</td>
              <td>{{ usuario.telefone }}</td>
              <td><button type="button" class="btn btn-warning m-1">Editar</button>
                <button type="button" class="btn btn-danger" v-if="usuario.pessoa_inativo == 0">Desativar</button>
                <button type="button" class="btn btn-success" v-else>Ativar</button>
              </td>
            </tr>
            
            
           
           
            
            
          </tbody>
        </table>
      </div>
        </div>
    </div>
</template>

<script>
export default {
    name: 'Usuarios'
}
</script>
