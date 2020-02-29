// 此文件仅用于首页，请按需加载

/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');
// lx-new
require('./olr/imagesloaded.pkgd.min.js');
require('./olr/isInViewport.jquery.js');
require('./olr/jquery.magnific-popup.min.js');
require('./olr/scrolla.jquery.min.js');
require('./olr/jquery.validate.min.js');
require('./olr/jquery-validate.bootstrap-tooltip.min.js');
require('./olr/odometer.min.js');
require('./olr/owl.carousel.min.js');
require('./olr/custom.js');
// lx-end

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i);
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default));

// Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('feedback-component', require('./components/FeedbackComponent.vue').default);
Vue.component('banner-component', require('./components/HomeBanner.vue').default);
/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const front = new Vue({
    el: '#home'
});
