import { getLocalUser } from './helpers/auth';

var user = getLocalUser();

export default {

    state: {
        currentUser: user,
        isLoggedIn: !!user,
        loading: false,
        auth_error: null,
        products: [] 
    },
    getters:{
        isLoading(state){
            return state.loading;
        },
        isLoggedIn(state){
            return state.isLoggedIn;
        },
        currentUser(state){
            return state.currentUser;
        },
        authError(state){
            return state.auth_error;
        },
        products(state){
            return state.products;
        },
    },
    mutations:{
        login(state){
            state.loading = true;
            state.auth_error = null;
        },
        loginSuccess(state, payload) {
            state.auth_error = null;
            state.isLoggedIn = true;
            state.loading = false;
            state.currentUser = payload;
            console.log(payload);
            localStorage.setItem("user", JSON.stringify(state.currentUser));
        },
        loginFailed(state, payload){
            state.loading = false;
            state.auth_error = payload.error;
        },
        logout(state) {
            localStorage.removeItem("user");
            state.isLoggedIn = false;
            state.currentUser = null;
        },
        updateproducts(state, payload){
            console.log("hello" + payload);
            state.products = payload;
        }
    },
    actions:{
        login(context){
            context.commit("login");
        },
        getProducts(context){
            // console.log("goodbye" + context.state.currentUser.token.token);
            axios.get(
                '/api/getAllProducts', {
                    headers: {
                        // "X-Requested-With": `XMLHttpRequest`,
                        // "Content-Type": `application/json`,
                        "Authorization": `Bearer ${context.state.currentUser.token.token}`
                    }
                })
                .then((response) => {
                    // console.log(headers);
                    // console.log(response.headers);
                    
                    context.commit('updateproducts', response.data);
                })
        },
        sendReview(context, payload){
            // console.log("goodbye" + context.state.currentUser.token.token);
            axios.post(
                '/api/createReview', {
                    headers: {
                        // "X-Requested-With": `XMLHttpRequest`,
                        // "Content-Type": `application/json`,
                        "Authorization": `Bearer ${context.state.currentUser.token}`
                    }, payload
                })
                .then((Response) => {
                    // res(Response.data);
                    console.log(Response.data);
                })
                .catch((err) =>{
                    rej("Wrong email or password");
                })
        }
    }
}