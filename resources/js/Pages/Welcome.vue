<script setup>
import GuestLayout from "@/Layouts/GuestLayout.vue";
import HeroSection from "@/Components/Sections/HeroSection.vue";
import AboutSection from "@/Components/Sections/AboutSection.vue";
import AboutToFeature from "@/Components/Sections/Bridge/AboutToFeature.vue";
import FeaturesSection from "@/Components/Sections/FeaturesSection.vue";
import FeatureToGallery from "@/Components/Sections/Bridge/FeatureToGallery.vue";
import GallerySection from "@/Components/Sections/GallerySection.vue";
import TestimoniSection from "@/Components/Sections/TestimoniSection.vue";

defineOptions({ layout: GuestLayout });
</script>

<template>
    <div>
        <HeroSection />
        <AboutSection />
        <AboutToFeature />
        <FeaturesSection />
        <FeatureToGallery />
        <GallerySection />
        <TestimoniSection />
    </div>
</template>

<style scoped>
@keyframes float {
    0%,
    100% {
        transform: translateY(0px);
    }
    50% {
        transform: translateY(-20px);
    }
}

.animate-float {
    animation: float 6s ease-in-out infinite;
}
</style>
