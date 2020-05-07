/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require("./bootstrap");

import router from "./assets/router.js";

import ClassicEditor from "@ckeditor/ckeditor5-build-classic";

ClassicEditor.create(document.querySelector("#content"))
    .then(editor => {})
    .catch(error => {});

/**
 * The following block of code msay be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

/**
 * Esa es la estructura basica vue
 */
// Vue.component(
//     "example-component",
//     require("./components/ExampleComponent.vue").default
// );

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

// Vue.component(
//     "post-list",
//     require("./components/PostListComponent.vue").default
// );

Vue.component(
    "post-modal",
    require("./components/PostModalComponent.vue").default
);

const app = new Vue({
    el: "#app",
    router,
    mounted: function() {
        console.log("[app.js] Se carga VUE");
    }
});
