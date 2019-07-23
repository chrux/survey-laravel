<template>
  <div>
    <div class="row">
      <div class="col">
        <h1 class="display-4 text-center">What's your favorite programming language?</h1>
      </div>
    </div>
    <div class="row">
      <div class="col">
        <p class="lead text-center">Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Duis mollis, est non commodo luctus.</p>
      </div>
    </div>
    <div class="row">
      <div class="col">
        <div class="choices container-fluid">
          <!-- A. PHP -->
          <option-item></option-item>
          <!-- B. C# -->
          <option-item></option-item>
          <!-- C. Python -->
          <option-item></option-item>
          <!-- D. Javascript -->
          <option-item></option-item>
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
  mounted() {
    console.log("Component mounted.");
  }
};
</script>
