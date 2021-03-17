<template>
  <div class="container mx-auto">
    <ButtonCounter/>
  </div>
</template>

<script>
import ButtonCounter from './components/ButtonCounter';

export default {
  name: 'App',
  components: {
    ButtonCounter,
  },
  data () {
    return {};
  },
};
</script>

<style scoped>
</style>
