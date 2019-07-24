/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');
// window.VueI18n = require('vue-i18n');
import VueI18n from 'vue-i18n';

Vue.use(VueI18n);

const i18n = new VueI18n({ locale: 'en' });

import Chart from 'chart.js';

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i);
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default));

Vue.component('form-option-item', require('./components/FormOptionItemComponent.vue').default);
Vue.component('form-question', require('./components/FormQuestionComponent.vue').default);
Vue.component('option-item', require('./components/OptionItemComponent.vue').default);
Vue.component('survey-instance', require('./components/SurveyInstanceComponent.vue').default);
Vue.component('chart-component', require('./components/ChartComponent.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
    i18n
});
