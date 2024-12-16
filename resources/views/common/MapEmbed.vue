<template>
    <iframe class="rounded h-100 w-100" :style="{ height: height }" :src="mapUrl" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</template>

<script setup>
// Define the component props
const props = defineProps({
    lat: {
        type: Number,
        required: true,
    },
    lng: {
        type: Number,
        required: true,
    },
    height: {
        type: String,
        default: '400px',
    },
});

// Compute the Google Maps embed URL
const mapUrl = computed(() => {
    return `https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14573.550489221964!2d${lng}!3d${lat}!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2z!5e0!3m2!1sen!2sbd!4v1694259649153!5m2!1sen!2sbd`;
});
</script>

<style scoped>
</style>