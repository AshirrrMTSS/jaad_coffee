import VueRouter from "vue-router";
// router setup
import routes from "./routes";
// configure router

let instance = null;
export const appRouter = () => {
    if (instance === null) {
        instance = new VueRouter({
            routes,
            linkActiveClass: "active",
            mode: "history",
            scrollBehavior(to, from, savedPosition) {
                return {
                    x: 0,
                    y: 0
                };
            }
        });
        return instance;
    }

    return instance;
};


