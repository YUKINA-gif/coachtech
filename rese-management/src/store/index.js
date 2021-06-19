import Vue from "vue";
import Vuex from "vuex";
import createPersistedState from "vuex-persistedstate";
import axios from "axios";
import router from "../router/index";

Vue.use(Vuex);

export default new Vuex.Store({
  plugins: [createPersistedState()],
  state: {
    auth: "",
    manager: "",
  },
  mutations: {
    auth(state, payload) {
      state.auth = payload;
    },
    manager(state, payload) {
      state.manager = payload;
    },
    logout(state, payload) {
      state.auth = payload;
    },
  },
  actions: {
    async login({ commit }, { login_id, password }) {
      const responseLogin = await axios
        .post("https://rese-booking.herokuapp.com/api/manage/login", {
          login_id: login_id,
          password: password,
        })
        .catch(() => {
          alert("ログインできませんでした");
        });
      const responseManager = await axios.get(
        "https://rese-booking.herokuapp.com/api/manage",
        {
          params: {
            login_id: login_id,
          },
        }
      );
      commit("auth", responseLogin.data.auth);
      commit("manager", responseManager.data.manager);
      router.replace("/manager");
    },
    logout({ commit }) {
      axios
        .post("https://rese-booking.herokuapp.com/api/logout", {
          auth: this.state.auth,
        })
        .then((response) => {
          console.log(response);
          commit("logout", response.data.auth);
          router.replace("/");
        })
        .catch((error) => {
          console.log(error);
        });
    },
  },
});
