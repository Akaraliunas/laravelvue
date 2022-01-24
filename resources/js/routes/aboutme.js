const aboutMe = () =>import ( '../components/AboutMe.vue')

export default [
    {
        path: '/about',
        component: aboutMe,
        name: 'About',
    },
]