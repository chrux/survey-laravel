<template>
  <div class="form-group row mt-3">
    <div class="col">
      <input 
        type="text"
        class="form-control"
        name="question[options][][title]"
        v-model="option.title"
        ref="title"
        :placeholder="$t('Option ') + `${number}`"
        @keyup="handleKey"
        >
    </div>
    <div class="col-auto" v-if="isRemovable">
      <button type="button" class="btn btn-danger" @click="handleRemove"><i class="icon ion-md-trash"></i></button>
    </div>
  </div>
</template>

<script>
export default {
  name: 'FormOptionItem',
  props: {
    number: Number,
    option: Object,
    isRemovable: {
      type: Boolean,
      required: false,
    }
  },
  methods: {
    handleKey(e) {
      e && e.preventDefault();
      if (e.keyCode === 13) {
        this.$emit('enter', this.option);
      }
    },
    handleRemove() {
      this.$emit('remove', this.option);
    },
    focusInput() {
      this.$refs.title.focus();
    }
  },
  mounted() {
    this.focusInput();
  }
};
</script>
