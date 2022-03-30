require('./bootstrap');

// standard imports
import router from "./routes"
import VueRouter from "vue-router"
import Vue from "vue"
import JQuery from 'jquery'

// component imports
import Index from "./index";
import navHeader from "./components/nav/header"
import sideBar from "./components/nav/sidebar"

// icon imports
/* import the fontawesome core */
import { library } from '@fortawesome/fontawesome-svg-core'

/* import specific icons */
import {
    faUser, faBars, faXmark, faCircleQuestion,
    faCircleXmark, faCreditCard, faStore,
    faQuestionCircle, faAlignCenter, faAlignLeft,
    faAlignRight, faCircle, faCircleDot, faSquare,
    faAngleDoubleLeft, faAngleDoubleRight, faTrash,
    faArrowUpFromBracket, faInfo, faPlus, faEye, faBan
} from '@fortawesome/free-solid-svg-icons'
import { faFacebook, faTwitter, faInstagram } from '@fortawesome/free-brands-svg-icons'

/* import font awesome icon component */
import { FontAwesomeIcon } from '@fortawesome/vue-fontawesome'

window.Vue = require('vue').default;

/* Adding Icons */
library.add(
    faUser, faBars, faXmark, faFacebook,
    faTwitter, faInstagram, faCircleQuestion,
    faCircleXmark, faCreditCard, faStore,
    faQuestionCircle, faAlignCenter, faAlignLeft,
    faAlignRight, faCircle, faCircleDot, faSquare,
    faAngleDoubleLeft, faAngleDoubleRight, faTrash,
    faArrowUpFromBracket, faInfo, faPlus, faEye, faBan
)

window.$ = JQuery;

Vue.config.productionTip = false

// global components
Vue.component('font-awesome-icon', FontAwesomeIcon)
Vue.component('nav-header', navHeader)
Vue.component('sideBar', sideBar)

Vue.use(VueRouter)

const app = new Vue({
    el: '#app', // mounts vue into div with id of 'app'
    router,
    components: {
        "index": Index
    },
});
