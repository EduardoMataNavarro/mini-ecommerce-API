import Vue from 'vue'
import VueRouter from 'vue-router'
import store from '../store'


const example = ()=> import('../components/ExampleComponent.vue');
const router = new VueRouter({
    mode: 'history',
    routes: [{
        name: 'index',
        path: '/index', 
    
    }]
})

export default router;