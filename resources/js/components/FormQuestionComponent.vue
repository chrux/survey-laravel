<template>
  <div class="row justify-content-center">
    <div class="col-md-8">
      <h1 class="text-center">{{ $t('New Question') }}</h1>
      <div class="container-fluid">
        <div class="form-group row mt-3">
          <div class="col">
            <input type="text" class="form-control" name="question[title]" :placeholder="$t('Question')" v-model="question.title" autofocus>
          </div>
        </div>
        <div class="form-group row mt-3">
          <div class="col">
            <input type="text" class="form-control" name="question[description]" :placeholder="$t('(Optional) Description')" v-model="question.description">
          </div>
        </div>
        <div class="form-group row mt-3">
          <div class="col">
            <input type="number" class="form-control" name="question[maxCheck]" aria-describedby="questionMaxCheck" :placeholder="$t('(Optional) Default: 1. Maximum number of options to be selected')" v-model="question.maxCheck">
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
          <form-option-item
            v-for="(choice, index) in choices"
            :key="index"
            :number="index+1"
            :option="choice.option"
            :isRemovable="choice.isRemovable"
            ref="optionInputs"
            @enter="handleEnter"
            @remove="removeOption"></form-option-item>
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
            <button
              class="btn btn-primary btn-lg btn-block"
              type="button"
              :disabled="!isValid"
              @click="newQuestion">{{ $t('Create') }}</button>
          </div>
        </div>
      </div>
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
      question: {
        title: '',
        description: '',
        maxCheck: null
      },
      // Show 2 empty options by default
      choices: [
        { option: { title: '' } },
        { option: { title: '' } },
      ]
    }
  },
  computed: {
    isValid() {
      return this.question.title &&
        this.choices.filter(choice => choice.option.title.trim().length > 0).length >= 2;
    }
  },
  methods: {
    newQuestion() {
      const params = Object.assign({},
        this.question,
        { options: this.choices
          .filter(choice => choice.option.title.trim().length > 0)
          .map(choice => Object.assign({}, choice.option) ) });
      axios.post('/questions', params)
        .then(() => window.location.href = '/questions');
        // .catch(e => console.log('e', e));
    },
    addOption() {
      this.choices.push({ option: { title: '' }, isRemovable: true });
    },
    focusOption(idx) {
      this.$refs.optionInputs[idx].focusInput();
    },
    handleEnter(option) {
      const idx = this.choices.findIndex(choice => choice.option === option);
      if (this.choices.length-1 === idx) {
        this.addOption();
      } else {
        this.focusOption(idx + 1);
      }
    },
    removeOption(option) {
      this.choices = this.choices.filter(choice => choice.option !== option);
    }
  }
};
</script>
