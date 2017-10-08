
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');
import Vue from 'vue'
import Vuex from 'vuex'
import VueI18n from 'vue-i18n'

// ready translated locales
var locales = {
  en: {
    message: {
      hello: 'hello world'
    }
  },
  ja: {
    message: {
      hello: 'こんにちは、世界'
    }
  }
}

// install plugin
Vue.use(VueI18n)


// set lang
Vue.config.lang = 'ja'

// set locales
Object.keys(locales).forEach(function (lang) {
  Vue.locale(lang, locales[lang])
})

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */
// console.log('app.js')
// Vue.component('example', require('./components/Example.vue'));

const app = new Vue({
    el: '#app',
 //    data: {
	//    message: 'Hello Vue!'
	// }
});
