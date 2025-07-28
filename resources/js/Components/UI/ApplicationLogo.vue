<script setup>
defineProps({
    height: {
        type: String,
        default: "h-20",
    },
    width: {
        type: String,
        default: "w-auto",
    },
    center: {
        type: Boolean,
        default: false,
    },
});
</script>

<template>
    <img
        src="/logo.svg"
        alt="Logo"
        :class="[height, width, center ? 'mx-auto' : '']"
    />
</template>
