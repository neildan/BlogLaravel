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

Vue.component(
    "post-modal",
    require("./components/PostModalComponent.vue").default
);

Vue.component(
    "post-list-default",
    require("./components/PostListDefaultComponent.vue").default
);

const app = new Vue({
    el: "#app",
    router,
    mounted: function() {
        console.log("[app.js] Se carga VUE");
    }
});
