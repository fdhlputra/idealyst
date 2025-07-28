<template>
    <section class="bg-white py-12 md:py-20 px-4 md:px-6 lg:px-10">
        <div class="max-w-7xl mx-auto">
            <!-- Mobile Layout -->
            <div class="block md:hidden">
                <!-- Header Text -->
                <div class="text-center mb-12">
                    <p
                        class="uppercase text-sm font-semibold tracking-widest text-brand-secondary mb-4"
                    >
                        Dari Ide ke Implementasi
                    </p>
                    <h2
                        class="text-2xl font-medium leading-tight tracking-wide text-gray-900 font-heading mb-6"
                    >
                        Perjalanan
                        <span class="text-brand-primary">Startup </span>
                        <span class="text-brand-secondary">Mahasiswa</span>
                        Dimulai dari Sini
                    </h2>
                </div>

                <!-- Hero Image -->


                <!-- Mobile Steps -->
                <div class="space-y-12">
                    <div
                        v-for="(step, index) in steps"
                        :key="index"
                        class="relative flex flex-col items-center text-center"
                    >
                        <div
                            class="flex items-center justify-center w-12 h-12 rounded-full bg-brand-primary text-brand-secondary mb-6"
                        >
                            <i
                                :class="`mdi ${step.icon} text-xl text-brand-secondary`"
                            ></i>
                        </div>
                        <h4
                            class="text-2xl font-semibold text-brand-secondary mb-3 font-heading"
                        >
                            {{ step.title }}
                        </h4>
                        <p
                            class="font-body text-base text-gray-600 leading-relaxed mb-6 max-w-sm"
                        >
                            {{ step.description }}
                        </p>
                        <div
                            class="w-full h-48 bg-gray-100 rounded-lg overflow-hidden"
                        >
                            <img
                                :src="step.image"
                                :alt="step.title + ' Illustration'"
                                class="w-full h-full object-cover"
                            />
                        </div>
                    </div>
                    <div class="text-center mb-12">
                        <p
                            class="font-body text-base text-gray-600 leading-relaxed"
                        >
                            Idealyst bukan sekadar tempat mengumpulkan ide, tapi
                            <span class="text-black font-semibold"
                                >pendamping</span
                            >
                            dalam setiap langkah,
                            <span class="text-black font-semibold"
                                >semua dalam satu platform.</span
                            >
                            Idealyst dirancang dengan
                            <span class="text-black font-semibold"
                                >fitur-fitur</span
                            >
                            yang benar-benar mendukung
                            <span class="text-black font-semibold">
                                proses nyata
                            </span>
                            bukan sekadar teori.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Desktop Layout (Original) -->
            <div class="hidden md:grid md:grid-cols-2 gap-16 items-start">
                <!-- Kiri: Alur Visual -->
                <div class="relative">
                    <!-- Image header -->
                    <div
                        class="relative w-full min-h-[420px] bg-gray-100 rounded-lg overflow-hidden mb-28"
                    >
                        <img
                            src="https://images.unsplash.com/photo-1512758017271-d7b84c2113f1?q=80&w=870&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                            alt="Idealyst Process Overview"
                            class="absolute inset-0 w-full h-full object-cover"
                        />
                    </div>

                    <!-- Connecting Line -->
                    <div
                        class="absolute right-7 top-[600px] bottom-24 w-px bg-brand-secondary/20"
                    ></div>

                    <div class="space-y-24">
                        <!-- Dynamic Steps -->
                        <div
                            v-for="(step, index) in steps"
                            :key="index"
                            class="relative flex items-start justify-between"
                        >
                            <div class="flex-1 pr-8">
                                <h4
                                    class="text-3xl font-semibold text-brand-secondary mb-2 font-heading"
                                >
                                    {{ step.title }}
                                </h4>
                                <p
                                    class="font-body text-lg text-gray-600 leading-relaxed mb-6"
                                >
                                    {{ step.description }}
                                </p>
                                <!-- Image -->
                                <div
                                    class="w-full h-80 bg-gray-100 rounded-lg flex items-center justify-center"
                                >
                                    <img
                                        :src="step.image"
                                        :alt="step.title + ' Illustration'"
                                        class="w-full h-full object-cover rounded-lg"
                                    />
                                </div>
                            </div>
                            <div class="flex-shrink-0 relative z-10 mt-6">
                                <div
                                    class="flex items-center justify-center w-14 h-14 rounded-full bg-brand-primary text-brand-secondary"
                                >
                                    <i
                                        :class="`mdi ${step.icon} text-2xl text-brand-secondary`"
                                    ></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Kanan: Narasi (Sticky) -->
                <div class="text-left space-y-6 sticky top-20">
                    <p
                        class="uppercase text-lg font-semibold tracking-widest text-brand-secondary"
                    >
                        Dari Ide ke Implementasi
                    </p>
                    <h2
                        class="text-3xl md:text-6xl font-medium leading-10 tracking-wide text-gray-900 font-heading"
                    >
                        Perjalanan
                        <span class="text-brand-primary">Startup </span>
                        <span class="text-brand-secondary">Mahasiswa</span>
                        Dimulai dari Sini
                    </h2>
                    <p class="font-body text-lg text-gray-600 leading-relaxed">
                        Idealyst bukan sekadar tempat mengumpulkan ide, tapi
                        <span class="text-black font-semibold">pendamping</span>
                        dalam setiap langkah,
                        <span class="text-black font-semibold"
                            >semua dalam satu platform.</span
                        >
                        Idealyst dirancang dengan
                        <span class="text-black font-semibold"
                            >fitur-fitur</span
                        >
                        yang benar-benar mendukung
                        <span class="text-black font-semibold">
                            proses nyata
                        </span>
                        bukan sekadar teori.
                    </p>
                </div>
            </div>
        </div>
    </section>
</template>

<script setup>
// Data untuk steps
const steps = [
    {
        title: "Ajukan Ide",
        description:
            "Mulai perjalanan startup dengan ide awal yang siap dieksekusi dan tervalidasi — termasuk brainstorming, riset masalah, dan rencana awal.",
        icon: "mdi-lightbulb-on-outline",
        image: "https://images.unsplash.com/photo-1512314889357-e157c22f938d?q=80&w=871&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D",
    },
    {
        title: "Pantau Perkembangan",
        description:
            "Kelola progres lewat milestone, dokumentasi hasil validasi, feedback mentor, dan pembagian peran tim.",
        icon: "mdi-timeline-text",
        image: "https://images.unsplash.com/photo-1543286386-713bdd548da4?q=80&w=870&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D",
    },
    {
        title: "Tampilkan ke Publik",
        description:
            "Publikasikan ide Anda ke galeri, temukan kolaborator, mentor, bahkan investor potensial.",
        icon: "mdi-monitor-eye",
        image: "https://images.unsplash.com/photo-1505373877841-8d25f7d46678?q=80&w=812&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D",
    },
];
</script>
