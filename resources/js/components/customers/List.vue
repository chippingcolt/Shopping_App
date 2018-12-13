<template>
<div>
     <v-card v-for="product in products" :key="product.id">
        <v-container
          fluid
          grid-list-lg
        >
          <v-layout row wrap>
            <v-flex xs12>
              <v-card >
                <v-layout>
                  <v-flex xs5>
                    <v-img
                      src="https://images.unsplash.com/photo-1535043205849-513fe27db33e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&w=1000&q=80"
                      height="125px"
                      contain
                    ></v-img>
                  </v-flex>
                  <v-flex xs7>
                    <v-card-title primary-title>
                      <div>
                        <div class="headline">{{product.name}}</div>
                        <div height="100px">{{product.discription}}</div>
                      </div>
                    </v-card-title>
                  </v-flex>
                </v-layout>
                <v-divider light></v-divider>
                <v-card-actions class="pa-3">
                  Rate this Product
                  <v-spacer></v-spacer>
                  <v-icon>star_border</v-icon>
                  <v-icon>star_border</v-icon>
                  <v-icon>star_border</v-icon>
                  <v-icon>star_border</v-icon>
                  <v-icon>star_border</v-icon>
                  <router-link :to="`product/${product.id}`" exact>Add Comment</router-link>
                </v-card-actions>
              </v-card>
            </v-flex>
          </v-layout>
        </v-container>
      </v-card>
</div>
    
</template>
<script>
export default {
    name: 'productList',
    mounted() {
        this.$store.dispatch('getProducts');
    },
    computed: {
        products() {
            return this.$store.getters.products;
        }
    }
}
</script>

