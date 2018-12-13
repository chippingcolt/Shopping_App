<template>
<v-toolbar dark>
    <v-toolbar-title>
        Shopping Application
    </v-toolbar-title>
    <v-spacer></v-spacer>

    <v-toolbar-items v-show="!isLoggedIn">
        <v-btn raised :to="'/'" exact>Home</v-btn>
        <v-btn raised :to="'register'" exact>Register</v-btn>
        <v-btn raised :to="'login'" exact>Login</v-btn>
    </v-toolbar-items>
    <v-toolbar-items v-show="isLoggedIn">
        <v-btn raised :to="'/'" exact>Home</v-btn>
        <v-btn raised :to="'products'" exact>Get All Products</v-btn>
        <v-btn raised @click.prevent="logout" :to="'login'" exact>Logout</v-btn>
    </v-toolbar-items>
</v-toolbar>
</template>
<script>
export default {
    name: 'Header',
    computed: {
        isLoggedIn() {
            return this.$store.getters.isLoggedIn
        }
    },
    methods: {
        logout() {
            this.$store.commit('logout');
            // this.$router.push({path:'login'});
        }
    }
}
</script>

