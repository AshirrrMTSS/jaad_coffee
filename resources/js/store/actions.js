import axios from "axios";
import { appRouter } from "../router";
import {GET_BASE_URL} from "./mutation-types";

const router = appRouter();

export default {
    async initPlatform({ commit, dispatch }) {
        const {
          history: {
            current: { path }
          }
        } = router;
        dispatch("getBaseURL")
        // dispatch("auth/getUser")
        // dispatch("auth/getEachUsers")
        // dispatch("isos/getAllIsos")
          .then(() => {
            // if (path.includes("/login")) {
            //   router.push({
            //     path: "/"
            //   });
            // }
          })
          .catch(err => {
            console.log("error", err);
            // commit(INIT_PLATFORM_FAILURE, err);
            // if (!path.includes("/login")) {
            //   router.push({
            //     path: "/login"
            //   });
            // }
          });
      },
      getBaseURL({ commit }) {
        commit(GET_BASE_URL, window.location.host);
      },
}