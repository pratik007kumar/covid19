function initialState() {
    return {
        all: [],
        relationships: {},
        query: {},
        loading: false,
    };
}

const getters = {
    data: (state) => {
        let rows = state.all;
        console.log(rows);

        //     if (state.query.sort) {
        // rows = _.orderBy(state.all, state.query.sort, state.query.order);
        //     }

        data1 = {};
        for (i = 0; i < rows.length; i++) {
            data1.push({ id: rows[i].id, end: rows[i].end });
        }

        return data1;
        // return rows.slice(
        //     state.query.offset,
        //     state.query.offset + state.query.limit
        // );
        // },
        // total: (state) => state.all.length,
        // loading: (state) => state.loading,
        // relationships: (state) => state.relationships,
    },
};
const actions = {
    fetchData({ commit, state }) {
        commit("setLoading", true);

        axios
            .get("/api/v1/appointments")
            .then((response) => {
                commit("setAll", response.data.data);
            })
            .catch((error) => {
                message = error.response.data.message || error.message;
                commit("setError", message);
                console.log(message);
            })
            .finally(() => {
                commit("setLoading", false);
            });
    },
    destroyData({ commit, state }, id) {
        axios
            .delete("/api/v1/appointments/" + id)
            .then((response) => {
                commit(
                    "setAll",
                    state.all.filter((item) => {
                        return item.id != id;
                    })
                );
            })
            .catch((error) => {
                message = error.response.data.message || error.message;
                commit("setError", message);
                console.log(message);
            });
    },
    setQuery({ commit }, value) {
        commit("setQuery", purify(value));
    },
    resetState({ commit }) {
        commit("resetState");
    },
};

const mutations = {
    setAll(state, items) {
        state.all = items;
    },
    setLoading(state, loading) {
        state.loading = loading;
    },
    setQuery(state, query) {
        state.query = query;
    },
    resetState(state) {
        state = Object.assign(state, initialState());
        console.log(state);
    },
};

export default {
    namespaced: true,
    state: initialState,
    getters,
    actions,
    mutations,
};
