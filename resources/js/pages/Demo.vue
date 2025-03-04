<script setup>
import AlertMessage from '@/components/custom/AlertMessage.vue';
import Weather from '@/components/custom/Weather.vue';
</script>

<template>
  <h1>Demo form inertia js</h1>
  <p>This is a Blade template</p>
  <AlertMessage message="Hello" type="success" />
  <AlertMessage message="Hello" type="danger" />
<div class="flex justify-center">
  
  <Weather name="Dhaka" condition="Sunny" temperature="28" windSpeed="15" humidity="60" />
  <Weather name="sirajgonj" condition="Rainy" temperature="28" windSpeed="15" humidity="60" />
  <Weather name="pabna" condition="Cloudy" temperature="28" windSpeed="15" humidity="60" />
  <Weather name="rajshahi" condition="Stormy" temperature="28" windSpeed="15" humidity="60" />
  <Weather name="Kishoregonj" condition="Snowy" temperature="28" windSpeed="15" humidity="60" />

</div>
</template>

<style scoped>
</style>
