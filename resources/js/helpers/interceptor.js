import Axios from "axios";
import {get} from "lodash";

export default function setup(store) {
	Axios.interceptors.request.use(
		config => {
			if (config.url.indexOf("api") > -1) {
				if (store.getters && !!store.getters["auth/token"]) {
					const token = store.getters["auth/token"];
					if (token !== null) {
						config.headers.Authorization = `Bearer ${localStorage.getItem('access_token')}`;
					}
				}
			}
			return config;
		},
		err => Promise.reject(err)
	);

	// const interceptor = Axios.interceptors.response.use(
	// 	undefined,
	// 	({ response }) => {
	// 		const { status, config } = response;
	// 		const error = get(response, "data.message");
	// 		if (status !== 401 || config.url.includes('user/logout') || config.url.includes('oauth/token' )) {
	// 			return Promise.reject(error);
	// 		}
	// 		if(status == 401){
	// 			store.dispatch('redirectLogin')
	// 		}

	// 		Axios.interceptors.response.eject(interceptor);

	// 		return store
	// 			.dispatch("auth/refreshToken")
	// 			.catch(() => store.dispatch("userLogout"))
	// 			.finally(setup(store));

	// 	}
	// );
}
