import router from "@Admin/router";

const state = {
    services: [],
    service: {}
};

const getters = {
    getAllServices: state => state.services,
    getSingleService: state => state.service
};

const actions = {
    async fetchListServices({ commit }, paged = null) {
        let query = paged !== null ? `?page=${paged}` : "";
        const response = await axios.get(`${urlApi}video${query}`);

        commit("SHOW_LIST_SERVICE", response.data);
        commit("SET_META_DATA", response.data, { root: true });
    },
    async storeService({ commit, dispatch }, data) {
        try {
            const response = await axios.post(`${urlApi}service`, data);

            commit("NEW_SERVICE", response);
            commit("RESET_NEW_SERVICE")
            dispatch("resetService")
            router.push("/admin/services");
        } catch (e) {
            commit("SET_ERRORS", e.response.data.errors);
        }
    },
    resetService({ commit }) {
        commit("RESET_NEW_SERVICE");
    }
};

const mutations = {
    SHOW_LIST_SERVICE: (state, data) => {
        state.services = data.data;
    },
    NEW_SERVICE: (state, data) => {
        state.services.unshift(data);
    },
    RESET_NEW_SERVICE: state => {
        state.service = {};
    }
};

export default {
    state,
    getters,
    actions,
    mutations
};
