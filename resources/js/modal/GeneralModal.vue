<!-- Modal.vue -->
<template>
  <div v-if="active_2" class="modal">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">{{ title }}</h5>
          <button type="button" class="btn-close" @click="closeModal"></button>
        </div>
        <div class="modal-body">
          <slot name="body2"></slot>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-success" @click="confirm2">{{button_[0]}}</button>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  props: {
    title: String,
    active_2: Boolean,
    type: String,
    button_: Array,
    input_: Array,
  },
  active_2: {
      type: Boolean,
      required: true,
  },
  methods: {
    closeModal() {
      console.log('Closing modal');
      this.$emit('insert:active_2', false);
    },
    confirm2() {
        console.log('Confirm button clicked');
        this.$emit('confirm2');
        // Mostrar uma mensagem de sucesso
        // Fechar o modal
        this.$emit('insert:active_2', false);

    },
    
  },
  created() {
    console.log('Modal created with title:', this.title);
    console.log('Modal active_2 status:', this.active_2);
  },
  watch: {
    active_2(newVal) {
      console.log('Modal active_2 status changed:', newVal);
    },
    title(newVal) {
      console.log('Modal title changed:', newVal);
    },
  },
};
</script>

<style scoped>
.modal {
  /* Estilos para o modal */
}
</style>
