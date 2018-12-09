<template>
    <v-app id="app">
        <Header/>
        <router-view/>
    </v-app>
</template>

<script>
 import Header from './Header.vue';
    export default {
        name: 'main-component',
        components: {
            Header
        }
    }
</script>
