/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

import Vue from 'vue';
import VueRouter from 'vue-router';
import VueBreadcrumbs from 'vue-breadcrumbs';

import Home from './components/Home.vue';
import Blog from './components/Blog.vue';
import Detail from './components/Detail.vue';

require('./bootstrap');

Vue.prototype.$http = window.axios;

Vue.use(VueRouter);
Vue.use(VueBreadcrumbs, {
  template:
    '<nav class="breadcrumb is-small has-succeeds-separator" aria-label="breadcrumbs" v-if="$breadcrumbs.length">' +
      '<ul>' +
        '<router-link tag="li" v-for="(crumb, key) in $breadcrumbs" :to="linkProp(crumb)" :key="key" aria-current="page" exact>' +
          '<a>{{ crumb | crumbText }}</a>' +
        '</router-link> ' +
      '</ul>' +
    '</nav>',
});

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('home', Home);
Vue.component('blog', Blog);
Vue.component('detail', Detail);

const router = new VueRouter({
  mode: 'history',
  linkActiveClass: 'is-active',
  routes: [
    {
      path: '/',
      name: 'home',
      component: Home,
      meta: {
        breadcrumb: 'Home',
        title: 'Home2',
      },
      children:
      [
        {
          path: '/blog',
          component: Blog,
          meta: {
            breadcrumb: 'Blog',
            title: 'Home3',
          },
          children:
          [
            {
              path: 'detail/:id?',
              component: Detail,
              meta: {
                breadcrumb: 'Detail',
              },
            },
          ],
        },
      ],
    },
  ],
});

router.beforeEach((to, from, next) => {
  if (to.meta.title) {
    document.title = to.meta.title;
  }
  next();
});

const app = new Vue({
  router,
});

app.$mount('#app');
