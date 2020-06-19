import router from "@Admin/router";

const state = {
    orders: []
};

const getters = {
    getAllOrders: state => state.orders,
};

const actions = {
    async fetchListOrders({ commit }, paged = null) {
        let query = paged !== null ? `?page=${paged}` : "";
        const response = await axios.get(`${urlApi}order${query}`);

        commit("SHOW_LIST_ORDER", response.data);
        commit("SET_META_DATA", response.data, { root: true });
    },
};

const mutations = {
    SHOW_LIST_ORDER: (state, data) => {
        state.orders = data.data;
    }
};

export default {
    state,
    getters,
    actions,
    mutations
};
