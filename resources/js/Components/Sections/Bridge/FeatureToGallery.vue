<template>
    <section class="bg-brand-secondary py-24 text-white relative">
        <div class="max-w-7xl mx-auto px-6">
            <!-- Header Section -->
            <div class="grid md:grid-cols-2 gap-12 mb-16">
                <!-- Left: Title & Stats -->
                <div class="text-left font-heading space-y-8">
                    <h2
                        class="uppercase text-lg font-semibold tracking-widest text-brand-primary"
                    >
                        Hasil Nyata
                    </h2>
                    <h3
                        class="text-3xl md:text-6xl font-medium leading-10 tracking-wide"
                    >
                        Inovasi
                        <span class="text-brand-primary">Mahasiswa</span> Tumbuh
                        Bersama Ekosistem Kami
                    </h3>
                    <p class="font-body text-lg leading-relaxed text-gray-200">
                        Platform kami menjadi ruang bertumbuh bagi ratusan
                        mahasiswa dalam mengembangkan solusi nyata yang
                        berdampak. Temukan kisah di balik
                        <span class="text-brand-primary font-semibold"
                            >ide-ide startup inovatif</span
                        >
                        yang sedang dibangun dengan semangat kolaborasi di
                        <span class="text-brand-primary font-semibold"
                            >era digital</span
                        >.
                    </p>

                    <!-- Stats Section -->
                    <div class="grid grid-cols-3 gap-6">
                        <!-- Proyek Dibuat -->
                        <div>
                            <div
                                class="text-3xl font-semibold text-brand-primary mb-1"
                            >
                                {{ totalProjects }}+
                            </div>
                            <div
                                class="font-body text-sm md:text-lg text-gray-200 leading-relaxed"
                            >
                                Proyek Dibuat
                            </div>
                        </div>

                        <!-- Mentor Terlibat -->
                        <div>
                            <div
                                class="text-3xl font-semibold text-brand-primary mb-1"
                            >
                                {{ mentorCount }}+
                            </div>
                            <div
                                class="font-body text-sm md:text-lg text-gray-200 leading-relaxed"
                            >
                                Mentor Terlibat
                            </div>
                        </div>

                        <!-- Success Rate -->
                        <div>
                            <div
                                class="text-3xl font-semibold text-brand-primary mb-1"
                            >
                                {{ successRate }}%
                            </div>
                            <div
                                class="font-body text-sm md:text-lg text-gray-200 leading-relaxed"
                            >
                                Success Rate
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Right: Swipeable Stacked Cards -->
                <div
                    class="relative w-full min-h-[500px] justify-center hidden md:block"
                >
                    <Swiper
                        :effect="'cards'"
                        :grabCursor="true"
                        :modules="[EffectCards]"
                        :cardsEffect="{
                            slideShadows: false,
                            transformEl: null,
                        }"
                        class="w-96 h-[500px]"
                        @slideChange="onSlideChange"
                    >
                        <SwiperSlide
                            v-for="(project, index) in projects"
                            :key="project.id"
                            :class="[
                                'rounded-xl bg-white overflow-hidden transition-all duration-300 ease-in-out',
                                index === currentSlide
                                    ? 'shadow-2xl shadow-brand-primary scale-105 z-10'
                                    : 'shadow-none blur-sm z-0',
                            ]"
                        >
                            <div
                                class="bg-white rounded-xl shadow-xl h-full w-full overflow-hidden hover:shadow-2xl transition-all duration-300 cursor-default"
                            >
                                <!-- Image -->
                                <div
                                    class="h-64 w-full bg-gradient-to-br from-gray-50 to-gray-100 relative overflow-hidden"
                                >
                                    <img
                                        :src="project.image"
                                        :alt="project.title"
                                        class="w-full h-full object-cover"
                                        @error="handleImageError"
                                    />
                                    <div class="absolute top-3 left-3">
                                        <span
                                            class="inline-block px-3 py-1 rounded-full text-sm font-medium font-heading"
                                            :class="project.categoryStyle"
                                        >
                                            {{ project.category }}
                                        </span>
                                    </div>
                                </div>

                                <!-- Content -->
                                <div
                                    class="p-5 h-[calc(100%-16rem)] flex flex-col justify-between"
                                >
                                    <div>
                                        <h4
                                            class="text-3xl font-semibold text-brand-secondary mb-2 font-heading"
                                        >
                                            {{ project.title }}
                                        </h4>
                                        <p
                                            class="font-body text-lg text-gray-800 leading-relaxed mb-3 line-clamp-3"
                                        >
                                            {{ project.description }}
                                        </p>
                                    </div>

                                    <!-- Footer -->
                                    <div
                                        class="mb-10 flex w-full items-center justify-between pt-2 border-t border-gray-100 font-body"
                                    >
                                        <div class="flex items-center gap-2.5">
                                            <div
                                                class="w-10 h-10 bg-brand-primary text-brand-secondary rounded-full flex items-center justify-center"
                                            >
                                                <span
                                                    class="text-brand-secondary font-bold text-sm"
                                                >
                                                    {{ project.creator[0] }}
                                                </span>
                                            </div>
                                            <div>
                                                <div
                                                    class="font-medium text-brand-secondary text-lg"
                                                >
                                                    {{ project.creator }}
                                                </div>
                                                <div
                                                    class="text-gray-500 text-md"
                                                >
                                                    {{ project.university }}
                                                </div>
                                            </div>
                                        </div>
                                        <div class="text-xs text-5ray-400">
                                            {{ project.date }}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </SwiperSlide>
                    </Swiper>

                    <!-- Badge -->
                    <Link
                        href="#ideas"
                        class="absolute -top-3 right-10 bg-brand-primary rounded-full px-4 py-2 text-md text-brand-secondary font-medium font-body shadow-lg z-50 hover:scale-105 transition-all duration-300"
                    >
                        Lihat Lebih Banyak
                        <i class="mdi mdi-arrow-right ml-2 text-lg"></i>
                    </Link>
                </div>
            </div>
        </div>
    </section>
</template>

<script setup>
import { ref, onMounted } from "vue";
import { Swiper, SwiperSlide } from "swiper/vue";
import { EffectCards } from "swiper/modules";
import { Link } from "@inertiajs/vue3";

// Import Swiper styles
import "swiper/css";
import "swiper/css/effect-cards";

// Props untuk data projects
const props = defineProps({
    projectsData: {
        type: Array,
        default: () => [],
    },
});

// Default projects data
const defaultProjects = [
    {
        id: 1,
        title: "EcoCart",
        description:
            "Marketplace berkelanjutan dengan sistem reward untuk mendorong konsumsi ramah lingkungan",
        category: "E-commerce",
        categoryStyle: "bg-blue-50 text-blue-700 border border-blue-200",
        image: "https://images.unsplash.com/photo-1556742049-0cfed4f6a45d?w=400&h=200&fit=crop",
        creator: "Andi Pratama",

        university: "Universitas Indonesia",
        date: "Mar 2024",
        status: "active",
    },
    {
        id: 2,
        title: "StudyBuddy AI",
        description:
            "Asisten pembelajaran berbasis AI yang membantu mahasiswa belajar lebih efektif",
        category: "EdTech",
        categoryStyle: "bg-yellow-50 text-yellow-700 border border-yellow-200",
        image: "https://images.unsplash.com/photo-1521737711867-e3b97375f902?w=400&h=200&fit=crop",
        creator: "Sarah Melinda",

        university: "Institut Teknologi Bandung",
        date: "Feb 2024",
        status: "active",
    },
    {
        id: 3,
        title: "CampusPay",
        description:
            "Solusi pembayaran digital terintegrasi untuk seluruh kebutuhan kehidupan kampus",
        category: "FinTech",
        categoryStyle: "bg-indigo-50 text-indigo-700 border border-indigo-200",
        image: "https://images.unsplash.com/photo-1556742502-ec7c0e9f34b1?w=400&h=200&fit=crop",
        creator: "Rini Kurnia",

        university: "Universitas Gadjah Mada",
        date: "Jan 2024",
        status: "development",
    },
    {
        id: 4,
        title: "SmartFarm",
        description:
            "Platform IoT monitoring untuk optimalisasi hasil pertanian dengan teknologi sensor",
        category: "AgriTech",
        categoryStyle: "bg-green-50 text-green-700 border border-green-200",
        image: "https://images.unsplash.com/photo-1574943320219-553eb213f72d?w=400&h=200&fit=crop",
        creator: "Doni Hermawan",

        university: "Institut Pertanian Bogor",
        date: "Apr 2024",
        status: "active",
    },
];

// Reactive data
const animatedCount = ref(0);
const totalProjects = ref(0);
const activeUsers = ref(0);
const mentorCount = ref(0);
const successRate = ref(0);

// Swiper specific data
const currentSlide = ref(0);
const projects = ref(
    props.projectsData.length > 0 ? props.projectsData : defaultProjects
);

// Swiper event handlers
const onSlideChange = (swiper) => {
    currentSlide.value = swiper.activeIndex;
};

// Handle image error
const handleImageError = (event) => {
    event.target.src = `https://via.placeholder.com/400x200/6366f1/ffffff?text=Project+Image`;
};

// Animation functions
const animateCounter = (target, current, increment = 1) => {
    if (current.value < target) {
        current.value += increment;
        setTimeout(() => animateCounter(target, current, increment), 50);
    }
};

// Lifecycle
onMounted(() => {
    // Animate counters when component mounts
    setTimeout(() => {
        animateCounter(150, animatedCount, 3);
        animateCounter(180, totalProjects, 4);
        animateCounter(320, activeUsers, 6);
        animateCounter(45, mentorCount, 1);
        animateCounter(87, successRate, 2);
    }, 500);
});
</script>
