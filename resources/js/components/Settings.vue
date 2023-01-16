<template>
    <application>
        <template v-slot:content>
            <v-container class="pa-4" fluid>
                <v-card>
                    <v-card-title>
                        Settings
                    </v-card-title>
                    <v-card-text>
                        <v-select
                            v-model="dark"
                            :items="items"
                            filled
                            item-text="text"
                            item-value="value"
                            label="Dark Mode"
                            hint="Darkens the application's user interface."
                            persistent-hint
                            @change="handleChange()"
                        />
                    </v-card-text>
                </v-card>
            </v-container>
        </template>
    </application>
</template>

<script>
  export default {
    data: () => ({
        items: [
            { text: 'Enabled', value: true },
            { text: 'Disabled', value: false }
        ],
        dark: true
    }),
    methods: {
        handleChange() {
            this.$vuetify.theme.dark = !this.$vuetify.theme.dark;
        }
    }
  }
</script>
