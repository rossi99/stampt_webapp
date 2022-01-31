require('./bootstrap');

// standard imports
import router from "./routes"
import VueRouter from "vue-router"
import Vue from "vue"
import JQuery from 'jquery'

// component imports
import Index from "./index";
import navHeader from "./components/nav/header"

// icon imports
/* import the fontawesome core */
import { library } from '@fortawesome/fontawesome-svg-core'

/* import specific icons */
import { faUser, faBars, faXmark} from '@fortawesome/free-solid-svg-icons'
import { faFacebook, faTwitter, faInstagram } from '@fortawesome/free-brands-svg-icons'

/* import font awesome icon component */
import { FontAwesomeIcon } from '@fortawesome/vue-fontawesome'

window.Vue = require('vue').default;
library.add(faUser, faBars, faXmark, faFacebook, faTwitter, faInstagram)
window.$ = JQuery;

Vue.config.productionTip = false

// global components
Vue.component('font-awesome-icon', FontAwesomeIcon)
Vue.component('nav-header', navHeader)





Vue.use(VueRouter)

const app = new Vue({
    el: '#app', // mounts vue into div with id of 'app'
    router,
    components: {
        "index": Index
    },
});
