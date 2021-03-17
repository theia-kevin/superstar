<template>
  <button v-on:click="increment" type="button" class="inline-flex items-center px-6 py-3 border border-transparent text-base font-medium rounded-full shadow-sm text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
    {{ label }} {{ count }} times
  </button>
</template>

<script>
export default {
  name: 'ButtonCounter',
  data () {
    return {
      label: 'Clicked',
    };
  },
  computed: {
    count () {
      return this.$store.state.count
    }
  },
  methods: {
    increment () {
      this.$store.commit('increment');
    }
  }
};
</script>

<style scoped>
</style>
