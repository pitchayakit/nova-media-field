<template>
  <od-modal ref="isModalOpen" v-if="isModalOpen" :name="'isModalOpen'" :align="'flex justify-end'" width="1315">
    <div slot="container">
      <div class="flex flex-wrap justify-between mb-6 modal-header">
        <h2 class="text-xl font-normal text-90">Edit media</h2>
      </div>
      <edit-image v-if="file" :file="file.data" />
      <div class="loader-container" v-else>
        <div class="loader" />
        <div class="small-loader" />
      </div>
    </div>
    <div slot="buttons" class="flex w-full">
      <div class="flex justify-end w-full">
        <button type="button" @click.prevent="closeModalAndSave" class="mr-3 btn btn-default btn-primary">
          {{ __('Apply and close') }}
        </button>
        <button type="button" @click.prevent="closeModal" class="btn btn-default btn-danger">
          {{ __('Close') }}
        </button>
      </div>
    </div>
  </od-modal>
</template>

<script>
import debounce from './../debounce';

export default {
  props: ['isModalOpen', 'file'],

  methods: {
    openModal() {
      this.$emit('update:isModalOpen', true);
    },

    closeModal() {
      this.listenUploadArea = false;
      this.$emit('update:isModalOpen', false);
    },

    closeModalAndSave() {
      this.$emit('update:isModalOpen', false);
      this.$toasted.show('Update successful', { type: 'success' });
    },
  },
};
</script>
