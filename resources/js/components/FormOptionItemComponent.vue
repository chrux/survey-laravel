<template>
  <div class="form-group row mt-3">
    <div class="col">
      <input type="text" class="form-control" name="question[options][][title]" :placeholder="$t('Option ') + `${number}`">
    </div>
    <div class="col-auto" v-if="isRemovable">
      <button class="btn btn-danger"><i class="icon ion-md-trash"></i></button>
    </div>
  </div>
</template>

<script>
export default {
  name: 'FormOptionItem',
  props: {
    number: Number,
    isRemovable: {
      type: Boolean,
      required: false,
    }
  },
  mounted() {
  }
};
</script>
