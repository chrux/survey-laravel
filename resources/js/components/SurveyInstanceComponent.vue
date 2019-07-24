<template>
  <div>
    <div class="row">
      <div class="col">
        <h1 class="display-4 text-center">{{ question.title }}</h1>
      </div>
    </div>
    <div class="row">
      <div class="col">
        <p class="lead text-center">{{ question.description }}</p>
      </div>
    </div>
    <div class="row">
      <div class="col">
        <div class="choices container-fluid">
          <!-- A. PHP -->
          <option-item v-for="(option, index) in question.options" :key="index" :option="option" :number="index+1"></option-item>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col">Please select one</div>
    </div>
    <hr />
    <div class="row">
      <div class="col-md-3 ml-auto">
        <button class="btn btn-primary btn-lg btn-block">{{ $t('Send') }}</button>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: 'Survey',
  props: {
    question: Object,
  },
  mounted() {
    console.log("Component mounted.");
  }
};
</script>
