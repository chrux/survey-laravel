<template>
  <!-- .selected -->
  <div class="choice row mt-2 mb-2">
    <div class="key col-auto">
      <span>{{ number }}</span>
    </div>
    <div class="title col">{{ option.title }}</div>
    <div class="check col-auto"></div>
    <!-- <div class="check col-auto">
                <i class="icon ion-md-checkmark"></i>
              </div> -->
  </div>
</template>

<script>
export default {
  name: 'OptionItem',
  props: {
    option: Object,
    number: Number,
  },
  mounted() {
  }
};
</script>
