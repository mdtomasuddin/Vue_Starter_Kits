<script setup>
const props = defineProps(['message', 'type']);
</script>

<template>
    <div class="alert" :class="`alert-${type}`">
        {{ message }} {{ type }}
    </div>
</template>

<style scoped>


</style>