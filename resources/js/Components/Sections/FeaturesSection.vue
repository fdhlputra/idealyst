<template>
    <section
        id="features"
        class="relative py-16 md:py-32 px-4 md:px-6 lg:px-0 bg-white"
    >
        <div class="max-w-7xl mx-auto">
            <!-- Mobile Layout -->
            <div class="block lg:hidden space-y-16">
                <div
                    v-for="(feature, index) in features"
                    :key="index"
                    class="text-center space-y-8"
                >
                    <!-- Feature Number -->
                    <div class="flex items-center justify-center space-x-4">
                        <div class="w-12 h-px bg-brand-primary"></div>
                        <div
                            class="flex items-center justify-center w-12 h-12 rounded-full bg-brand-primary text-brand-secondary"
                        >
                            <span class="font-heading text-lg font-bold">
                                {{ String(index + 1).padStart(2, "0") }}
                            </span>
                        </div>
                        <div class="w-12 h-px bg-brand-primary"></div>
                    </div>

                    <!-- Feature Content -->
                    <div class="space-y-4">
                        <h3
                            class="text-2xl md:text-3xl font-medium leading-tight tracking-wide text-brand-secondary font-heading"
                        >
                            {{ feature.title }}
                        </h3>
                        <p
                            class="font-body text-base text-gray-800 leading-relaxed max-w-md mx-auto"
                        >
                            {{ feature.description }}
                        </p>
                    </div>

                    <!-- Feature Visual -->
                    <div class="relative">
                        <div
                            class="relative max-h-[400px] flex items-center justify-center overflow-hidden"
                        >
                            <!-- Feature Component -->
                            <component
                                :is="feature.component"
                                class="relative z-10 w-full max-w-xs h-auto"
                            />
                        </div>
                    </div>
                </div>
            </div>

            <!-- Desktop Layout (Original) -->
            <div class="hidden lg:block space-y-0">
                <!-- Feature Item -->
                <div
                    v-for="(feature, index) in features"
                    :key="index"
                    class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-start mb-8 w-full"
                >
                    <!-- Description -->
                    <div class="lg:sticky lg:top-20 space-y-6">
                        <!-- Feature Number -->
                        <div class="flex items-center space-x-4">
                            <div
                                class="flex items-center justify-center w-14 h-14 rounded-full bg-brand-primary text-brand-secondary"
                            >
                                <span class="font-heading text-2xl font-bold">
                                    {{ String(index + 1).padStart(2, "0") }}
                                </span>
                            </div>
                            <div class="w-16 h-px bg-brand-primary"></div>
                        </div>

                        <!-- Feature Content -->
                        <div class="space-y-6">
                            <h3
                                class="text-3xl md:text-6xl font-medium leading-10 tracking-wide text-brand-secondary font-heading"
                            >
                                {{ feature.title }}
                            </h3>
                            <p
                                class="font-body text-lg text-gray-800 leading-relaxed"
                            >
                                {{ feature.description }}
                            </p>
                        </div>
                    </div>

                    <!-- Feature Visual -->
                    <div class="relative">
                        <div
                            class="relative min-h-[500px] flex items-center justify-center overflow-hidden"
                        >
                            <!-- Feature Component -->
                            <component
                                :is="feature.component"
                                class="relative z-10 w-full max-w-lg h-auto"
                            />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>

<script setup>
// Import your actual components here
import CollaborationSvg from "./components/Feature/CollaborationSvg.vue";
import ValidationSvg from "./components/Feature/ValidationSvg.vue";
import MentoringSvg from "./components/Feature/MentoringSvg.vue";
import LibrarySvg from "./components/Feature/LibrarySvg.vue";
import FundingSvg from "./components/Feature/FundingSvg.vue";
import EventsSvg from "./components/Feature/EventsSvg.vue";

const features = [
    {
        title: "Kolaborasi Tim",
        description:
            "Temukan co-founder dan anggota tim yang tepat. Platform kami membantu Anda menemukan co-founder dan anggota tim yang memiliki skill komplementer dengan sistem matching yang canggih berdasarkan keahlian, visi, dan komitmen yang sama.",
        component: CollaborationSvg,
    },
    {
        title: "Validasi Ide",
        description:
            "Dapatkan feedback dari komunitas dan mentor. Uji kelayakan ide startup Anda melalui feedback dari komunitas, survey target market, dan analisis mendalam dari mentor yang berpengalaman di industri yang relevan.",
        component: ValidationSvg,
    },
    {
        title: "Mentoring Expert",
        description:
            "Akses ke mentor profesional dan pengusaha sukses. Dapatkan bimbingan langsung dari mentor yang telah memiliki track record sukses membangun startup, dengan sesi konsultasi 1-on-1 dan group mentoring yang terstruktur.",
        component: MentoringSvg,
    },
    {
        title: "Resource Library",
        description:
            "Akses ribuan materi pembelajaran dan tools. Akses lengkap ke ribuan template, guide, video pembelajaran, business tools, dan dokumen legal yang dibutuhkan untuk membangun startup dari nol hingga berkembang.",
        component: LibrarySvg,
    },
    {
        title: "Funding Connect",
        description:
            "Terhubung dengan investor dan program akselerator. Hubungkan startup Anda dengan network investor, venture capital, dan program akselerator yang sesuai dengan stage dan industri bisnis Anda untuk mendapatkan pendanaan yang tepat.",
        component: FundingSvg,
    },
    {
        title: "Event & Workshop",
        description:
            "Ikuti berbagai event dan kompetisi startup. Ikuti berbagai workshop, masterclass, kompetisi startup, networking event, dan demo day yang dirancang untuk mengembangkan skill dan memperluas network Anda di ekosistem startup.",
        component: EventsSvg,
    },
];
</script>

<style scoped>
/* Ensure smooth transitions */
* {
    transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
}

/* Custom gradient line */
.gradient-line {
    background: linear-gradient(
        90deg,
        var(--brand-primary),
        var(--brand-secondary)
    );
}

/* Brand color variables */
:root {
    --brand-primary: #fbbf24;
    --brand-secondary: #1f2937;
}
</style>
