require("./bootstrap");
// import BootstrapVue from "bootstrap-vue"; //Importing

// Vue.use(BootstrapVue); // Telling Vue to use this in whole application

window.Vue = require("vue");
import { Form, HasError, AlertError } from "vform";
window.Form = Form;

Vue.component(HasError.name, HasError);
Vue.component(AlertError.name, AlertError);

import VueAxios from "vue-axios";
import axios from "axios";
Vue.use(VueAxios, axios);

import VueRouter from "vue-router";
Vue.use(VueRouter);

import { mdbDatatable } from "mdbvue";
require("mdbvue");

let routes = [{
        path: "/",
        //name: "profile",
        component: require("./components/profile.vue").default
    },
    {
        path: "/students",
        name: "students",
        component: require("./components/students/Students.vue").default
    },
    {
        path: "/add-students",
        name: "add-students",
        component: require("./components/students/Addstudents.vue").default
    }
];

Vue.component(
    "example-component",
    require("./components/ExampleComponent.vue").default
);
Vue.component("noti", require("./components/Noti.vue").default);
Vue.component("widget", require("./components/partials/Widget.vue").default);

const router = new VueRouter({
    mode: "history",
    routes: routes
});

const app = new Vue({ router }).$mount("#app");