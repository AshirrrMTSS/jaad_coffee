<template>
    <div>
        <v-row>
            <v-col cols="12" sm="12" md="12">
                <v-toolbar elevation="4" color="#0F4743">
                    <v-row>
                        <v-col align="center">
                            <v-toolbar-title class="white--text fontColor"> Indonasian <b style="color:#BDEADC;font-size: x-large;">Speciality</b> Coffee </v-toolbar-title>
                        </v-col>
                    </v-row>
                </v-toolbar>
            </v-col>
        </v-row>
        <!-- <v-container> -->
            <v-row no-gutters>
                <v-col align="center" cols="12" sm="12" md="6" style="background-color:#231F20;">
                    <img width="350px" src="/images/1.png" >
                    <v-col align="center" cols="12" sm="12" md="6">
                        <h2 style="color: white;">A <b style="color:#BDEADC;font-size: x-large;">hidden treasure.</b> 
                            <br/> A gift from us, to you ! 
                        </h2>
                    </v-col>

                    <v-col align="center" cols="12" sm="12" md="6">
                        <h2 style="color: white;"> Coming Soon !
                        </h2>
                    </v-col>
                    
                    <v-col align="center" cols="12" sm="12" md="6">
                        <v-row>
                            <v-col cols="12" sm="12" md="6">
                                <a href="mailto:connect@jaadfood.com">
                                    <v-btn rounded x-large  color="#BDEADC"><v-icon>mdi-email-outline</v-icon>Enquiries</v-btn>
                                </a>
                            </v-col>
                            <v-col cols="12" sm="12" md="6">
                                <a href="tel:+6281573116980">
                                    <v-btn style="z-index: 5" rounded x-large outlined class="fontColor"><v-icon>mdi-phone</v-icon>Contact Us</v-btn>
                                </a>
                            </v-col>
                        </v-row>
                    </v-col>
                </v-col>
                <v-col cols="12" sm="12" md="6">
                    <img contain height="100%" width="100%" src="/images/CoffeeImg.png">
                </v-col>
            </v-row>
        <!-- </v-container> -->

        <v-footer color="#0F4743" height="100px">
            <v-col align="center" cols="12" sm="12" md="4">
                <h3 class="white--text fontColor" href="https://vuetifyjs.com" target="_blank" style="padding-left: 20px;"><v-icon class="fontColor">mdi-phone</v-icon> Middle East 0900 78601</h3>
            </v-col>
            <v-col align="center" cols="12" sm="12" md="4">
                <h3 class="white--text fontColor" href="https://vuetifyjs.com" target="_blank" style="padding-left: 20px;"><v-icon class="fontColor">mdi-phone</v-icon> Middle East 0900 78601</h3>
            </v-col>
            <v-col align="center" cols="12" sm="12" md="4">
                <h3 class="white--text fontColor" href="https://vuetifyjs.com" target="_blank" style="padding-left: 20px;"><v-icon class="fontColor">mdi-phone</v-icon> Middle East 0900 78601</h3>
            </v-col>
        </v-footer>
    </div>
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

.fontColor {
    color: white;
}
</style>