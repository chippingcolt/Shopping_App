<template>
<v-app dark="dark">
    <v-content>
      <v-container fill-height="fill-height">
        <v-layout align-center="align-center" justify-center="justify-center">
          <v-flex class="login-form text-xs-center"> 
            <div class="display-1 mb-3">
              <v-icon class="mr-2" large="large">shop</v-icon> Let's Shop
            </div>
            <v-card light="light">
              <v-card-text>
                <div class="subheading">
                  <template>Register Right Now!</template>
                </div>
                <v-form>
                  <v-text-field  v-model="user.name" light="light" prepend-icon="person" label="Name"></v-text-field>
                  <v-text-field v-model="user.email" light="light" prepend-icon="email" label="Email" type="email"></v-text-field>
                  <v-text-field v-model="user.password" light="light" prepend-icon="email" label="Password" type="password"></v-text-field>
                  <v-text-field v-model="user.password_confirmation" light="light" prepend-icon="lock" label="Confirm Password" type="password"></v-text-field>
                  <v-btn @click.prevent="authenticate" block="block" type="submit">Sign Up</v-btn>
                </v-form>
              </v-card-text>
            </v-card>
          </v-flex>
        </v-layout>
      </v-container>
    </v-content>
    <v-footer app="app">
      <v-flex class="text-xs-center">© 2018. All rights reserved to Timothy Brumbaugh.</v-flex>
    </v-footer>
  </v-app>
</template>
<script>
import {register} from '../helpers/auth'
export default {
    name: 'Login',
    data() {
        return{
            error: '',
            user:{
                name: '',
                email: '',
                password: '',
                password: '',
            },
            options: {
                isLoggingIn: true,
                shouldStayLoggedIn: true,
            },
            
        }
    },
    methods: {
        authenticate() {
            register(this.$data.user)
                .then((res) => {
                    this.$router.push({path: '/login'});
                })
                .catch((error) => {
                    this.$store.commit('loginFailed', {error});
                });
        }
    }
}
</script>

