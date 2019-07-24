<template>
  <div>
    <div v-if="voted">
      <div class="row">
        <div class="col">
          <h1 class="display-4 text-center">{{ $t('Thanks for your participation!') }}</h1>
        </div>
      </div>
    </div>
    <div v-else>
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
            <option-item 
              v-for="(option, index) in question.options"
              :key="index"
              :option="option"
              :number="index+1"
              :selected="isSelected(option)"
              @change="toggleOption"></option-item>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col">
          Please select
          <span v-if="question.maxCheck === 0">all that applies</span>
          <span v-else>{{ question.maxCheck || 1 }}</span>
        </div>
      </div>
      <hr />
      <div class="row">
        <div class="col-md-3 ml-auto">
          <button
            type="button"
            class="btn btn-primary btn-lg btn-block"
            :disabled="!isValid"
            @click="vote"
            >{{ $t('Send') }}</button>
        </div>
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
  data() {
    return {
      selectedOptions: [],
      voted: false
    }
  },
  computed: {
    isValid() {
      return this.selectedOptions.length >= 1;
    }
  },
  methods: {
    isSelected(option) {
      return this.selectedOptions.indexOf(option.id) !== -1;
    },
    toggleOption(e) {
      const maxCheck = this.question.maxCheck || 1;
      if (this.selectedOptions.length === maxCheck) {
        return;
      }

      if (e.selected) {
        this.selectedOptions.push(e.option.id);
      } else {
        this.selectedOptions = this.selectedOptions.filter(id => id !== e.option.id);
      }
    },
    vote() {
      const params = Object.assign({}, this.selectedOptions);
      axios.post('/vote', params)
        .then(() => this.voted = true);
        // .catch(e => console.log('e', e));
    }
  },
  mounted() {
  }
};
</script>
