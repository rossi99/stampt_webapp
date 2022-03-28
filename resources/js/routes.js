import VueRouter from "vue-router";

// components for routes
import home from "./components/landing/landing";
import builder from "./components/card/builder";
import marketplace from "./components/card/marketplace";
import singleCard from "./components/card/single-card";

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
    {
        path: "/marketplace",
        component: marketplace,
        name: "marketplace",
    },
    {
        path: "/single-card",
        component: singleCard,
        name: "singleCard",
    },
];

const router = new VueRouter({
    routes, // short hand for routes:routes
    mode: "history", // removes # that vue adds to URL
});

// makes router available to app.js
export default router;
