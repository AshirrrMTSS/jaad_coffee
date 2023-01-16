import Vue from 'vue';
import Vuex from 'vuex';
import settings from './settings';
import getters from "./getters";
import actions from "./actions";
import mutations from "./mutations";
import setup from "../helpers/interceptor";

const getInitialState = () => ({
  //States here 
  base_url: "",
});
const initialState = getInitialState();

export default Vue => {
  Vue.use(Vuex);
  const store = new Vuex.Store({
    actions,
    getters,
    mutations: {
      ...mutations,
      reset(state) {
        const initial = getInitialState();
        Object.keys(initial).forEach(key => {
          state[key] = initial[key];
        });
      }
    },
    state: initialState,
    modules: {
      //modules here
    },
    // plugins: [createPersistedState({
    //   paths: ["auth"]
    // }), dealEvents]
  });
  setup(store);
  if(window.location.pathname != '/login')
    store.dispatch("initPlatform");
  return store;
};
