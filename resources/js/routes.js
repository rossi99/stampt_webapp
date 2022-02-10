import VueRouter from "vue-router";

// components for routes
import home from "./components/landing/landing";
import builder from "./components/card/builder";

const routes = [
    {
        path: "/",
        component: home,
        name: "home",
    },
    {
        path: "/builder",
        component: builder,
        name: "builder",
    },
];

const router = new VueRouter({
    routes, // short hand for routes:routes
    mode: "history", // removes # that vue adds to URL
});

// makes router available to app.js
export default router;
