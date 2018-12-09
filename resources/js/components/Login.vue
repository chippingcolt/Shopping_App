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
                  <template>Log in</template>
                </div>
                <v-form>
                  <v-text-field v-model="user.email" light="light" prepend-icon="email" label="Email" type="email"></v-text-field>
                  <v-text-field v-model="user.password" light="light" prepend-icon="lock" label="Password" type="password"></v-text-field>
                  <v-checkbox light="light" label="Stay logged in?" hide-details="hide-details"></v-checkbox>
                  <v-btn @click.prevent="authenticate" block="block" type="submit">Sign in</v-btn>
                </v-form>
              </v-card-text>
            </v-card>
            <div>Don't have an account?
              <v-btn light="light" :to="'register'">Sign up</v-btn>
            </div>
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
import {login} from '../helpers/auth'
export default {
    name: 'Login',
    data() {
        return{
            error: '',
            user:{
                email: '',
                password: ''
            },
        }
    },
    methods: {
         authenticate() {
            this.$store.dispatch('login');

            login(this.$data.user)
                .then((res) => {
                    console.log(res);
                    this.$store.commit('loginSuccess', Object.assign({}, this.$data.user, {token: res}));
                    this.$router.push({path: '/'});
                })
                .catch((error) => {
                    this.$store.commit('loginFailed', {error});
                });
        }
    }
}
</script>

