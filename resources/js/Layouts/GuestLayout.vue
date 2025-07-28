<script setup>
import GuestNavbar from "@/Components/Nav/GuestNavbar.vue";
import SiteFooter from "@/Components/Sections/SiteFooter.vue";
</script>

<template>
    <div class="min-h-screen flex flex-col bg-slate-900 text-white">
        <GuestNavbar />

        <main class="flex-grow">
            <slot />
        </main>

        <SiteFooter />
    </div>
</template>
