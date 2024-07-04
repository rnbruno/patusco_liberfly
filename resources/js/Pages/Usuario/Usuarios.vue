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
    <div class="card col-9 offset-2">
         <div class="card-body">
            <h2>Usuários</h2>
      <div class="table-responsive small">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">Cód.</th>
              <th scope="col">Tipo</th>
              <th scope="col">Nome</th>
              <th scope="col">Header</th>
              <th scope="col">Header</th>
            </tr>
          </thead>
          <tbody>
            <tr v-for="usuario in usuarios">
              <td>{{usuario.usuario_id}}</td>
              <td>random</td>
              <td>{{ usuario.usuario }}</td>
              <td>placeholder</td>
              <td>text</td>
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
