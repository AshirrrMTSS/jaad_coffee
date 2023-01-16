<template>
    <div>
        {{base_url}}
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
