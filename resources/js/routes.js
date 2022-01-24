import Vue from 'vue'
import VueRouter from 'vue-router'

import home from './routes/home';
import aboutMe from './routes/aboutme';

Vue.use(VueRouter);

export default new VueRouter({
    mode: 'history',
    scrollBehavior: (to, from, savedPosition) => ({ y: 0 }), 
    routes: [
        ...home,
        ...aboutMe,
    ],
});