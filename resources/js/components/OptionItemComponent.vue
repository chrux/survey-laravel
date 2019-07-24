<template>
  <div class="choice row mt-2 mb-2"
    :class="{ selected }"
    @click="handleClick">
    <div class="key col-auto">
      <span>{{ number }}</span>
    </div>
    <div class="title col">{{ option.title }}</div>
    <div class="check col-auto">
      <i class="icon ion-md-checkmark" v-if="selected"></i>
    </div>
  </div>
</template>

<script>
export default {
  name: 'OptionItem',
  props: {
    option: Object,
    number: Number,
    selected: {
      type: Boolean,
      default: false,
    }
  },
  methods: {
    handleClick() {
      this.$emit('change', { option: this.option, selected: !this.selected });
    }
  },
  mounted() {
  }
};
</script>
