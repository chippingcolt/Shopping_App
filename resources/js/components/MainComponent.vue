<template>
    <v-app id="app">
        <router-view/>
    </v-app>
</template>

<script>
 import Home from './Header.vue';
    export default {
        name: 'main-component',
        components: {
            Home
        }
    }
</script>
