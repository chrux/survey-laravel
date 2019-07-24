<template>
  <canvas ref="myChart"></canvas>
</template>

<script>
export default {
  name: 'FormOptionItem',
  props: {
    data: Object
  },
  mounted() {
    const ctx = this.$refs.myChart.getContext('2d');
    var chart = new Chart(ctx, this.data);
  }
};
</script>
