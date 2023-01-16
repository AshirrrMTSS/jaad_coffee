import {GET_BASE_URL} from "./mutation-types";

export default {
    [GET_BASE_URL](state, payload) {
        state.base_url = payload;
    },
}