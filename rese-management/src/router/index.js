import Vue from 'vue'
import VueRouter from 'vue-router'
import Login from "../views/ManagerLogin.vue";
import StoreManagerCreate from "../views/StoreManagerCreate.vue";
import CreateManager from '../views/ManagerCreate.vue'
import store from "../store/index";

Vue.use(VueRouter)

const routes = [
  {
    path: "/",
    name: "Login",
    component: Login,
  },
  {
    path: "/manager/store-manager/create",
    name: "StoreManagerCreate",
    component: StoreManagerCreate,
    meta: {
      requiresAuth: true,
    },
  },
  {
    path: "/manager/create",
    name: "CreateManager",
    component: CreateManager,
    meta: {
      requiresAuth: true,
    },
  },
];

const router = new VueRouter({
  mode: 'history',
  base: process.env.BASE_URL,
  routes
})

router.beforeEach((to, from, next) => {
  if (
    to.matched.some((record) => record.meta.requiresAuth) &&
    !store.state.auth
  ) {
    next({
      path: "/login",
      query: {
        redirect: to.fullPath,
      },
    });
  } else {
    next();
  }
});

export default router
