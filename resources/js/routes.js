import VueRouter from "vue-router";

// components for routes
import home from "./components/landing/landing";
import builder from "./components/card/builder";
import marketplace from "./components/card/marketplace";
import singleCard from "./components/card/single-card";
import faqs from "./components/faqs/faqs";
import login from "./components/auth/login";
import register from "./components/auth/register";

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
        path: "/loyalty-cards/:id",
        component: singleCard,
        name: "singleCard",
    },
    {
        path: "/faqs",
        component: faqs,
        name: "faqs",
    },
    {
        path: "/auth/login",
        component: login,
        name: "login",
    },
    {
        path: "/auth/register",
        component: register,
        name: "register",
    },
];

const router = new VueRouter({
    routes, // short hand for routes:routes
    mode: "history", // removes # that vue adds to URL
});

// makes router available to app.js
export default router;
