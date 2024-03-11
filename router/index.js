// router/index.js
import Vue from 'vue';

import Owners from 'resources/js/Components/OwnerList.vue';

Vue.use(VueRouter);

const routes = [
    {
      path: '/owners',
      name: 'Owners',
      component: Owners
    },
  ];

const router = createRouter({
    history: createWebHistory(),
    routes,
});

export default router;
