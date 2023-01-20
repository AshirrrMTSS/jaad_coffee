<template>
    <v-app light>
    <v-toolbar style="background:#0F4743;">
      <v-spacer />
     <!-- <v-toolbar-side-icon><img :src="imageLink.logo" alt="Vuetify.js" height="100%"></v-toolbar-side-icon> -->
      <!-- <v-toolbar-title class="mx-0" v-text="title"></v-toolbar-title> -->
      <!-- <p>Beta</p> -->
      <v-toolbar-title class="white--text"> Indonasian <b style="color:#BDEADC;font-size: x-large;">Speciality</b> Coffee </v-toolbar-title>
      <v-spacer />
      <!-- <v-spacer></v-spacer> -->
    </v-toolbar>
    <v-main>
        <v-layout>
            <v-flex xs6 style="background:#231F20;">
                <v-flex xs12 class="d-flex justify-center align-center">
                  <img style="width: 50%;padding-top: 100px;" src="/images/commingSoon.png" >
                </v-flex>
                <v-flex xs12 class="d-flex justify-center align-center">
                  <div><h1 style="color: white;">A hidden treasure. </h1></div>
                  <span></span>
                  <div><h1 style="color: white;">A gift from us, to you! </h1></div>
                  <br/>
                  <div><h1 style="color: white;">Coming Soon</h1></div>
                </v-flex>
                <v-flex xs12 class="d-flex justify-center align-center">

                  <a href="mailto:connect@jaadfood.com">
                    <v-btn rounded x-large  color="#BDEADC"><v-icon>mdi-email-outline</v-icon>Enquiries</v-btn>
                  </a>
                  <div style="padding-left: 10px;"></div>
                  <a href="tel:+6281573116980">
                    <v-btn rounded x-large outlined color="white"><v-icon>mdi-phone</v-icon>Contact Us</v-btn>
                  </a>
                </v-flex>
            </v-flex>
            <v-flex xs6 class="justify-center">
              <!-- artwork here -->
              <img height="100%" widht="100%" src="/images/CoffeeImg.png">
            </v-flex>
        </v-layout>

      <v-footer style="background:#0F4743;" height="200px" absolute>


        <v-layout class="d-flex justify-center align-center">
          <div class="white--text ml-3 md4">
              <h3 class="white--text" href="https://vuetifyjs.com" target="_blank" style="padding-left: 20px;"><v-icon color="white">mdi-phone</v-icon> Middle East 0900 78601</h3>
          </div>
          <div class="white--text ml-3 md4">
            <h3 class="white--text" href="https://vuetifyjs.com" target="_blank" style="padding-left: 20px;"><v-icon color="white">mdi-phone</v-icon> Middle East 0900 78601</h3>
          </div>
          <div class="white--text ml-3 md4">
            <h3 class="white--text" href="https://vuetifyjs.com" target="_blank" style="padding-left: 20px;"><v-icon color="white">mdi-phone</v-icon> Middle East 0900 78601</h3>
          </div>
        </v-layout>
        
      </v-footer>

    </v-main>
</v-app>
</template>

<script>

  export default {
    data () {
        return {
            //states here
        }
    },
    computed: {
        base_url() {
            return this.$store.getters['base_url'];
        }
    },
    mounted() {

    },
    methods: {

    }
  }
</script>


<style scoped>
.finedTitle {
  font-weight: 900;
  text-shadow: 2px 2px #000000;
}

.social-icon {
  font-size: 21px;
  color: white;
}

.title-font-size * {
   font-size: 14px;
}
</style>