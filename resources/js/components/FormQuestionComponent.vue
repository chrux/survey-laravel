<template>
  <div class="row justify-content-center">
    <div class="col-md-8">
      <h1 class="text-center">{{ $t('New Question') }}</h1>
      <form action="" method="post" v-on:submit.prevent="newQuestion()">
        <div class="container-fluid">
          <div class="form-group row mt-3">
            <div class="col">
              <input type="text" class="form-control" name="question[title]" :placeholder="$t('Question')" v-model="questionTitle">
            </div>
          </div>
          <div class="form-group row mt-3">
            <div class="col">
              <input type="text" class="form-control" name="question[description]" :placeholder="$t('(Optional) Description')">
            </div>
          </div>
          <div class="form-group row mt-3">
            <div class="col">
              <input type="number" class="form-control" name="question[maxCheck]" aria-describedby="questionMaxCheck" :placeholder="$t('(Optional) Default: 1. Maximum number of options to be selected')">
              <small id="questionMaxCheck" class="form-text text-muted">
                {{ $t('Enter 0 (zero) to do not limit the maximum.') }}
              </small>
            </div>
          </div>
          <div class="row">
            <div class="col">
              <h3>Options</h3>
            </div>
          </div>
          <div class="options">
            <form-option-item :number="1"></form-option-item>
            <form-option-item :number="2"></form-option-item>
          </div>
          <div class="row mt-3">
            <div class="col">
              <small id="questionMaxCheck" class="form-text text-muted">
                {{ $t('Enter to add a new option') }}
              </small>
            </div>
          </div>
          <hr />
          <div class="row mt-3">
            <div class="col-md-4 ml-auto">
              <button class="btn btn-primary btn-lg btn-block" type="submit" v-bind:disabled="!isValid">{{ $t('Create') }}</button>
            </div>
          </div>
        </div>
      </form>
    </div>
  </div>
</template>

<script>
export default {
  name: 'FormQuestion',
  mounted() {
  },
  data() {
    return {
      questionTitle: '',
    }
  },
  computed: {
    isValid() {
      return this.questionTitle;
    }
  },
  methods: {
    newQuestion() {
      alert(this.questionTitle);
    }
  }
};
</script>
