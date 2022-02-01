
import { createRouter, createWebHistory } from "vue-router";
import Home from "../components/Home.vue";
import Projects from "../components/Projects.vue";
import About from "../components/AboutMe.vue";
import Contacts from "../components/Contact.vue";

const routes = [
    {
        path: '/',
        name: 'home',
        component: Home
    },
    {
        path: '/about',
        name: 'about',
        component: About
    },
    {
        path: '/projects',
        name: 'projects',
        component: Projects
    },
    {
        path: '/contacts',
        name: 'contacts',
        component: Contacts
    }
];

export default createRouter({
    history: createWebHistory(),
    routes
})