const projects = () =>import ( '../components/Projects.vue')

export default [
    {
        path: '/my-projects',
        component: projects,
        name: 'Projects',
    },
]