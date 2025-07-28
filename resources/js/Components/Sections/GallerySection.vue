<template>
    <section class="py-16 md:py-32 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Mobile Layout -->
            <div class="block lg:hidden">
                <!-- Header Section - Always First on Mobile -->
                <div
                    class="p-8 bg-yellow-50 text-center space-y-6 border-b border-brand-primary/20"
                >
                    <h4
                        class="uppercase text-sm font-semibold tracking-widest text-brand-secondary"
                    >
                        Dari Kampus Untuk Dunia
                    </h4>
                    <h2
                        class="text-2xl md:text-3xl font-medium leading-tight tracking-wide text-gray-900 font-heading"
                    >
                        Jelajahi
                        <span class="text-brand-primary">Ide Startup</span>
                        <span class="text-brand-secondary">Inovatif</span><br />
                        dari
                        <span class="text-brand-secondary">Mahasiswa</span> yang
                        Siap Membentuk Masa Depan
                    </h2>
                    <p
                        class="font-body text-base text-gray-600 leading-relaxed max-w-2xl mx-auto"
                    >
                        Kumpulan
                        <span class="text-black font-semibold"
                            >ide visioner</span
                        >
                        dari
                        <span class="text-black font-semibold"
                            >mahasiswa terbaik</span
                        >
                        yang sedang dalam tahap pengembangan menghadirkan solusi
                        nyata dan
                        <span class="text-black font-semibold">berdampak</span>
                        untuk berbagai tantangan di
                        <span class="text-black font-semibold"
                            >era modern.</span
                        >
                    </p>
                </div>

                <!-- Mobile Ideas Grid - Desktop Style -->
                <div
                    class="grid grid-cols-1 md:grid-cols-2 divide-x divide-y divide-brand-primary/20"
                >
                    <div
                        v-for="(idea, index) in featuredIdeas.slice(0, 4)"
                        :key="idea.id"
                        :class="getCardClass(index)"
                    >
                        <IdeaCard :idea="idea" />
                    </div>

                    <!-- Mobile CTA -->
                    <div :class="['group', getCardClass(8), 'md:col-span-2']">
                        <div
                            class="flex flex-col items-center justify-center h-full space-y-6 text-center"
                        >
                            <h3
                                class="text-2xl md:text-3xl font-medium leading-tight text-gray-900 font-heading"
                            >
                                Lihat Semua <br />
                                <span class="text-brand-primary"
                                    >Ide Startup
                                </span>
                                <span class="text-brand-secondary"
                                    >Mahasiswa</span
                                >
                            </h3>
                            <Link
                                :href="route('ideas.index')"
                                class="group relative w-full max-w-sm text-brand-primary px-8 py-4 rounded-full font-bold text-lg transition-all duration-300 backdrop-blur-sm lg:group-hover:bg-brand-primary lg:group-hover:text-brand-secondary lg:group-hover:border-brand-primary"
                            >
                                <!-- Placeholder for Link -->
                                <button
                                    class="w-full bg-brand-primary text-brand-secondary px-8 py-4 rounded-full font-bold text-lg transition-all duration-300 hover:bg-brand-secondary hover:text-brand-primary"
                                >
                                    <span
                                        class="flex items-center justify-center space-x-3 font-heading"
                                    >
                                        <span>Jelajahi Semua Ide</span>
                                        <i
                                            class="mdi mdi-telescope text-xl"
                                        ></i>
                                    </span>
                                </button>
                            </Link>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Desktop Layout (Original Grid) -->
            <div class="hidden lg:block">
                <div
                    class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 divide-x divide-y divide-brand-primary/20"
                >
                    <!--  Startup pertama -->
                    <div :class="getCardClass(0)">
                        <IdeaCard :idea="featuredIdeas[0]" />
                    </div>

                    <!-- Header -->
                    <div
                        class="lg:col-span-2 flex flex-col justify-center items-center p-10 bg-yellow-50 text-start mx-auto px-6 md:px-0 max-w-7xl font-heading space-y-8"
                    >
                        <h4
                            class="uppercase w-full text-start text-lg font-semibold tracking-widest text-brand-secondary"
                        >
                            Dari Kampus Untuk Dunia
                        </h4>
                        <h2
                            class="text-3xl md:text-6xl font-medium leading-10 tracking-wide text-gray-900"
                        >
                            Jelajahi
                            <span class="text-brand-primary"
                                >Ide Startup
                                <span class="text-brand-secondary"
                                    >Inovatif</span
                                ></span
                            ><br />
                            dari
                            <span class="text-brand-secondary">Mahasiswa</span>
                            yang Siap Membentuk Masa Depan
                        </h2>

                        <p
                            class="font-body text-lg text-gray-600 leading-relaxed"
                        >
                            Kumpulan
                            <span class="text-black font-semibold"
                                >ide visioner</span
                            >
                            dari
                            <span class="text-black font-semibold"
                                >mahasiswa terbaik</span
                            >
                            yang sedang dalam tahap pengembangan menghadirkan
                            solusi nyata dan
                            <span class="text-black font-semibold"
                                >berdampak</span
                            >
                            untuk berbagai tantangan di
                            <span class="text-black font-semibold"
                                >era modern.</span
                            >
                        </p>
                    </div>

                    <!-- Card 3+: Sisa startup -->
                    <div
                        v-for="(idea, index) in featuredIdeas.slice(1)"
                        :key="idea.id"
                        :class="getCardClass(index + 1)"
                    >
                        <IdeaCard :idea="idea" />
                    </div>

                    <!-- CTA  -->
                    <div :class="['group', getCardClass(8)]">
                        <div
                            class="flex flex-col items-start justify-between h-full space-y-6"
                        >
                            <div>
                                <h2
                                    class="text-3xl md:text-6xl font-medium leading-10 tracking-wide text-gray-900 font-heading"
                                >
                                    Lihat Semua <br />
                                    <span class="text-brand-primary"
                                        >Ide Startup</span
                                    ><br /><span class="text-brand-secondary"
                                        >Mahasiswa</span
                                    >
                                </h2>
                            </div>

                            <!-- Tombol -->
                            <Link
                                :href="route('ideas.index')"
                                class="group relative w-full text-brand-primary px-8 py-4 rounded-full font-bold text-lg transition-all duration-300 backdrop-blur-sm lg:group-hover:bg-brand-primary lg:group-hover:text-brand-secondary lg:group-hover:border-brand-primary"
                            >
                                <span
                                    class="flex items-center justify-center space-x-3 font-heading"
                                >
                                    <span>Jelajahi Semua Ide</span>
                                    <i class="mdi mdi-telescope text-xl"></i>
                                </span>
                            </Link>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>

<script setup>
import { computed } from "vue";
import { Link } from "@inertiajs/vue3";
import IdeaCard from "./components/Gallery/IdeaCard.vue";

const props = defineProps({
    ideas: {
        type: Array,
        default: () => [],
    },
});

const featuredIdeas = computed(() => {
    if (props.ideas && props.ideas.length > 0) {
        return props.ideas.slice(0, 9);
    }

    return [
        {
            id: 1,
            name: "EcoCart",
            tagline:
                "Platform marketplace untuk produk ramah lingkungan dengan sistem reward point sustainability untuk mengurangi jejak karbon",
            status: "Pengembangan",
            category: "E-commerce",
            founder: "Andi Pratama",
            university: "Universitas Indonesia",
            milestones: "8/10",
            founded: "Mar 2024",
        },
        {
            id: 2,
            name: "StudyBuddy AI",
            tagline:
                "Asisten belajar berbasis AI yang membantu mahasiswa memahami materi kuliah dengan mudah dan personal",
            status: "MVP Ready",
            category: "EdTech",
            founder: "Sari Wijaya",
            university: "Institut Teknologi Bandung",
            milestones: "12/12",
            founded: "Jan 2024",
        },
        {
            id: 3,
            name: "FarmTech",
            tagline:
                "IoT solution untuk monitoring tanaman hidroponik dengan sistem otomatis dan analytics real-time",
            status: "Prototype",
            category: "AgriTech",
            founder: "Budi Santoso",
            university: "Institut Pertanian Bogor",
            milestones: "6/10",
            founded: "Apr 2024",
        },
        {
            id: 4,
            name: "HealthTracker",
            tagline:
                "Aplikasi monitoring kesehatan terintegrasi dengan wearable device khusus untuk mahasiswa aktif",
            status: "Beta Testing",
            category: "HealthTech",
            founder: "Maya Indira",
            university: "Universitas Airlangga",
            milestones: "9/11",
            founded: "Feb 2024",
        },
        {
            id: 5,
            name: "WasteWise",
            tagline:
                "Platform pengelolaan sampah cerdas dengan sistem reward untuk komunitas kampus berkelanjutan",
            status: "Ideation",
            category: "GreenTech",
            founder: "Riko Mahendra",
            university: "Universitas Gajah Mada",
            milestones: "3/8",
            founded: "Mei 2024",
        },
        {
            id: 6,
            name: "FinanceEdu",
            tagline:
                "Aplikasi edukasi keuangan dan investasi khusus untuk mahasiswa dan fresh graduate Indonesia",
            status: "Launch Ready",
            category: "FinTech",
            founder: "Lisa Permata",
            university: "BINUS",
            milestones: "10/10",
            founded: "Des 2023",
        },
        {
            id: 7,
            name: "ConnectCampus",
            tagline:
                "Platform networking mahasiswa untuk mencari partner project, mentor, dan kolaborasi lintas universitas",
            status: "Pengembangan",
            category: "Social",
            founder: "Dicky Rahman",
            university: "Universitas Padjadjaran",
            milestones: "7/9",
            founded: "Jun 2024",
        },
        {
            id: 8,
            name: "SkillBoost",
            tagline:
                "Marketplace kursus online dari mahasiswa untuk mahasiswa dengan sistem mentoring peer-to-peer",
            status: "MVP Ready",
            category: "EdTech",
            founder: "Putri Ayu",
            university: "Institut Teknologi Sepuluh Nopember",
            milestones: "11/12",
            founded: "Jan 2024",
        },
        {
            id: 9,
            name: "LocalBiz",
            tagline:
                "Platform digitalisasi UMKM sekitar kampus dengan sistem pembayaran digital dan inventory management",
            status: "Prototype",
            category: "E-commerce",
            founder: "Fajar Nugroho",
            university: "Universitas Diponegoro",
            milestones: "5/9",
            founded: "Mar 2024",
        },
    ];
});

const getCardClass = () => {
    return [
        "relative group p-8 transition-all duration-300 lg:hover:bg-gradient-to-br lg:hover:from-brand-primary/5 lg:hover:to-yellow-50 lg:cursor-pointer",
        "bg-white",
    ];
};
</script>

<style scoped>
/* Desktop Grid Borders */
@media (min-width: 1024px) {
    .grid > *:nth-child(0),
    .grid > *:nth-child(3),
    .grid > *:nth-child(6),
    .grid > *:nth-child(9) {
        border-left: 0 !important;
    }

    .grid > *:nth-child(1),
    .grid > *:nth-child(2) {
        border-top: 0 !important;
    }
}

/* Mobile Grid Borders */
@media (max-width: 1023px) {
    .grid > *:nth-child(odd) {
        border-left: 0 !important;
    }

    .grid > *:nth-child(1),
    .grid > *:nth-child(2) {
        border-top: 0 !important;
    }
}
</style>
