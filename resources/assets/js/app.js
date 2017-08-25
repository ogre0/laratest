/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

import Vue from 'vue'
import VueRouter from 'vue-router'

import VueMeta from 'vue-meta'
import Breadcrumb from 'vue-bulma-breadcrumb/src/Breadcrumb.vue'

import Home from './components/Home.vue'
import Blog from './components/Blog.vue'
import Detail from './components/Detail.vue'
import Articles from './components/Articles.vue'

require('./bootstrap')

Vue.prototype.$http = window.axios

Vue.use(VueRouter)
Vue.use(VueMeta)

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('home', Home)
Vue.component('blog', Blog)
Vue.component('detail', Detail)
Vue.component('articles', Articles)
Vue.component('breadcrumb', Breadcrumb)

const router = new VueRouter({
  mode: 'history',
  linkActiveClass: 'is-active',
  routes: [
    {
      path: '/',
      component: Blog,
      meta: {
        breadcrumb: 'Home',
        title: 'Home2'
      },
      children:
      [
        {
          path: '',
          name: 'home',
          component: Home
        },
        {
          path: '/blog',
          component: Blog,
          meta: {
            breadcrumb: 'Blog',
            title: 'Home3'
          },
          children:
          [
            {
              path: '',
              component: Articles
            },
            {
              path: 'detail',
              component: Detail,
              meta: {
                breadcrumb: 'Detail'
              },
              children: [
                {
                  path: 'ab',
                  component: Home
                }
              ]
            }
          ]
        }
      ]
    }
  ]
})

/*
router.beforeEach((to, from, next) => {
  if (to.meta.title) {
    document.title = to.meta.title
  }
  next()
})
*/

const app = new Vue({
  router
})
app.$mount('#app')
