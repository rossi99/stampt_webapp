require('./bootstrap');

// standard imports
import router from "./routes"
import VueRouter from "vue-router";

// component imports
import Index from "./index";
import navHeader from "./components/nav/header"

window.Vue = require('vue').default;

Vue.component('nav-header', navHeader)





Vue.use(VueRouter)

const app = new Vue({
    el: '#app', // mounts vue into div with id of 'app'
    router,
    components: {
        "index": Index
    },
});
