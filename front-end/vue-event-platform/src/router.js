import { createRouter, createWebHistory } from 'vue-router';
import ApiContent from './components/ApiContent.vue';
import ApiTags from './components/ApiTags.vue';
import ComponentAbout from './components/ComponentAbout.vue';


const router = createRouter({
    history: createWebHistory(),
    routes: [
        {
            path: '/',
            name: 'home',
            component: ApiContent,
        },
        {
            path: '/tags',
            name: 'tags',
            component: ApiTags,
        },
        {
            path: '/about',
            name: 'about',
            component: ComponentAbout,
        }
    ]
});

export { router };