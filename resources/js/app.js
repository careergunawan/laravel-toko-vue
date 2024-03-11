import './bootstrap';
import '../css/app.css';

import {
  createApp,
  h,
} from 'vue';

import { resolvePageComponent } from 'laravel-vite-plugin/inertia-helpers';

import { createInertiaApp } from '@inertiajs/vue3';

import { ZiggyVue } from '../../vendor/tightenco/ziggy';
import Sidebar from './Components/Sidebar.vue';

const appName = import.meta.env.VITE_APP_NAME || 'Laravel';

createInertiaApp({
    title: (title) => `${title} - ${appName}`,
    resolve: (name) => resolvePageComponent(`./Pages/${name}.vue`, import.meta.glob('./Pages/**/*.vue')),
    setup({ el, App, props, plugin }) {
        return createApp({ render: () => h(App, props) })
            .use(plugin)
            .use(ZiggyVue)
            .component('Sidebar', Sidebar)
            .mount(el);
    },
    progress: {
        color: '#4B5563',
    },
});
