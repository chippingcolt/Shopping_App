<template>
<div>
<div>
     <v-content >
      <v-container fill-height="fill-height">
        <v-layout align-center="align-center" justify-center="justify-center">
          <v-flex class="login-form text-xs-center">
            <v-card light="light">
              <v-card-text>
                <div class="subheading">
                  <template>{{products.name}}</template>
                </div>
                <v-form>
                  <v-textarea  v-model="data.review" light="light" labe="Add Review"></v-textarea>
                  <v-btn @click.prevent="send" block="block" type="submit">Submit</v-btn>
                </v-form>
              </v-card-text>
            </v-card>
          </v-flex>
        </v-layout>
      </v-container>
    </v-content>

</div>
</div>
</template>
<script>
export default {
    name: 'product',
    data() {
        return {
            data:{
                user_id: 1,
                product_id: null,
    		    review: ""
            },
           
        }
    },
    mounted() {
        this.$store.dispatch('getProducts');
        // this.product_id = this.$route.params.id
        // this.product = this.$store.getters.products[this.$route.params.id];
    },
    computed: {
        products() {
            // this.$store.getters.products
        //     this.product = product[this.$route.params.id]
        //     // console.log(product[this.$route.params.id].name);
            return this.$store.getters.products[this.$route.params.id - 1];
        }
    },
    methods:{
        send() {
            this.$store.dispatch('sendReview', this.data);
        }
    }
}
</script>

