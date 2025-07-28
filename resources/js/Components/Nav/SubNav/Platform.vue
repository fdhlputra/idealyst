<script setup>
import { ref } from "vue";
import { Link } from "@inertiajs/vue3";

const props = defineProps({
    isOpen: {
        type: Boolean,
        default: false,
    },
});

const emit = defineEmits(["mouseenter", "mouseleave"]);

const handleMouseEnter = () => {
    emit("mouseenter");
};

const handleMouseLeave = () => {
    emit("mouseleave");
};
</script>

<template>
    <!-- Mega Menu Overlay -->
    <transition
        enter-active-class="transition ease-out duration-300"
        enter-from-class="opacity-0"
        enter-to-class="opacity-100"
        leave-active-class="transition ease-in duration-200"
        leave-from-class="opacity-100"
        leave-to-class="opacity-0"
    >
        <div
            v-show="isOpen"
            @mouseenter="handleMouseEnter"
            @mouseleave="handleMouseLeave"
            class="absolute top-full left-0 w-full bg-brand-secondary shadow-2xl border-t-2 border-brand-primary/40 z-40"
            style="min-height: 420px"
        >
            <!-- Content Container -->
            <div class="max-w-7xl mx-auto">
                <div class="grid grid-cols-3 divide-x divide-brand-primary/40">
                    <!-- Section 1: Fitur Utama -->
                    <div class="pr-8 py-10">
                        <h3
                            class="font-heading text-sm font-semibold text-white uppercase tracking-widest mb-6"
                        >
                            Fitur Utama
                        </h3>
                        <div class="">
                            <Link
                                href="/fitur/pengajuan"
                                class="group block p-4 rounded-lg hover:bg-brand-primary/10 transition duration-200"
                            >
                                <div class="flex items-start space-x-4">
                                    <div
                                        class="flex-shrink-0 w-12 h-12 bg-brand-primary/10 rounded-xl flex items-center justify-center group-hover:bg-brand-primary/20 transition duration-200"
                                    >
                                        <i
                                            class="mdi mdi-lightbulb-outline text-2xl text-brand-primary"
                                        ></i>
                                    </div>
                                    <div class="flex-1">
                                        <div
                                            class="flex items-center justify-between"
                                        >
                                            <h4
                                                class="font-heading font-bold text-gray-100 group-hover:text-brand-primary text-lg mb-2"
                                            >
                                                Submit Ide Kreatif
                                            </h4>
                                            <div
                                                class="w-8 h-8 rounded-full bg-tranparent flex items-center justify-center transition-all duration-200 transform -translate-x-2 group-hover:translate-x-0 group-hover:bg-brand-primary"
                                            >
                                                <i
                                                    class="mdi mdi-arrow-right text-brand-secondary group-hover:text-brand-secondary text-lg"
                                                ></i>
                                            </div>
                                        </div>
                                        <p
                                            class="font-body text-gray-300 text-sm leading-relaxed tracking-wide font-normal"
                                        >
                                            Platform terintegrasi untuk
                                            mahasiswa mengirim ide startup
                                            dengan validasi mentor dan feedback
                                            real-time
                                        </p>
                                    </div>
                                </div>
                            </Link>
                            <Link
                                href="/fitur/mentoring"
                                class="group block p-4 rounded-lg hover:bg-brand-primary/10 transition duration-200"
                            >
                                <div class="flex items-start space-x-4">
                                    <div
                                        class="flex-shrink-0 w-12 h-12 bg-brand-primary/10 rounded-xl flex items-center justify-center group-hover:bg-brand-primary/20 transition duration-200"
                                    >
                                        <i
                                            class="mdi mdi-account-supervisor text-2xl text-brand-primary"
                                        ></i>
                                    </div>
                                    <div class="flex-1">
                                        <div
                                            class="flex items-center justify-between"
                                        >
                                            <h4
                                                class="font-heading font-bold text-gray-100 group-hover:text-brand-primary text-lg mb-2"
                                            >
                                                Mentoring & Bimbingan
                                            </h4>
                                            <div
                                                class="w-8 h-8 rounded-full bg-tranparent flex items-center justify-center transition-all duration-200 transform -translate-x-2 group-hover:translate-x-0 group-hover:bg-brand-primary"
                                            >
                                                <i
                                                    class="mdi mdi-arrow-right text-brand-secondary group-hover:text-brand-secondary text-lg"
                                                ></i>
                                            </div>
                                        </div>
                                        <p
                                            class="font-body text-gray-300 text-sm leading-relaxed tracking-wide font-normal"
                                        >
                                            Dapatkan bimbingan langsung dari
                                            dosen dan praktisi industri untuk
                                            mengembangkan ide menjadi bisnis
                                            nyata
                                        </p>
                                    </div>
                                </div>
                            </Link>
                            <Link
                                href="/fitur/tracking"
                                class="group block p-4 rounded-lg hover:bg-brand-primary/10 transition duration-200"
                            >
                                <div class="flex items-start space-x-4">
                                    <div
                                        class="flex-shrink-0 w-12 h-12 bg-brand-primary/10 rounded-xl flex items-center justify-center group-hover:bg-brand-primary/20 transition duration-200"
                                    >
                                        <i
                                            class="mdi mdi-chart-timeline-variant text-2xl text-brand-primary"
                                        ></i>
                                    </div>
                                    <div class="flex-1">
                                        <div
                                            class="flex items-center justify-between"
                                        >
                                            <h4
                                                class="font-heading font-bold text-gray-100 group-hover:text-brand-primary text-lg mb-2"
                                            >
                                                Progress Tracking
                                            </h4>
                                            <div
                                                class="w-8 h-8 rounded-full bg-tranparent flex items-center justify-center transition-all duration-200 transform -translate-x-2 group-hover:translate-x-0 group-hover:bg-brand-primary"
                                            >
                                                <i
                                                    class="mdi mdi-arrow-right text-brand-secondary group-hover:text-brand-secondary text-lg"
                                                ></i>
                                            </div>
                                        </div>
                                        <p
                                            class="font-body text-gray-300 text-sm leading-relaxed tracking-wide font-normal"
                                        >
                                            Monitor perkembangan proyekmu dari
                                            ide hingga prototype dengan
                                            milestone yang terstruktur
                                        </p>
                                    </div>
                                </div>
                            </Link>
                        </div>
                    </div>

                    <!-- Section 2: Komunitas & Kolaborasi -->
                    <div class="px-8 py-10">
                        <h3
                            class="font-heading text-sm font-semibold text-white uppercase tracking-widest mb-6"
                        >
                            Komunitas & Kolaborasi
                        </h3>
                        <div class="">
                            <Link
                                href="/fitur/showcase"
                                class="group block p-4 rounded-lg hover:bg-brand-primary/10 transition duration-200"
                            >
                                <div class="flex items-start space-x-4">
                                    <div
                                        class="flex-shrink-0 w-12 h-12 bg-brand-primary/10 rounded-xl flex items-center justify-center group-hover:bg-brand-primary/20 transition duration-200"
                                    >
                                        <i
                                            class="mdi mdi-presentation text-2xl text-brand-primary"
                                        ></i>
                                    </div>
                                    <div class="flex-1">
                                        <div
                                            class="flex items-center justify-between"
                                        >
                                            <h4
                                                class="font-heading font-bold text-gray-100 group-hover:text-brand-primary text-lg mb-2"
                                            >
                                                Student Showcase
                                            </h4>
                                            <div
                                                class="w-8 h-8 rounded-full bg-tranparent flex items-center justify-center transition-all duration-200 transform -translate-x-2 group-hover:translate-x-0 group-hover:bg-brand-primary"
                                            >
                                                <i
                                                    class="mdi mdi-arrow-right text-brand-secondary group-hover:text-brand-secondary text-lg"
                                                ></i>
                                            </div>
                                        </div>
                                        <p
                                            class="font-body text-gray-300 text-sm leading-relaxed tracking-wide font-normal"
                                        >
                                            Tampilkan proyekmu kepada komunitas
                                            mahasiswa dan dapatkan dukungan
                                            serta feedback konstruktif
                                        </p>
                                    </div>
                                </div>
                            </Link>
                            <Link
                                href="/fitur/collaboration"
                                class="group block p-4 rounded-lg hover:bg-brand-primary/10 transition duration-200"
                            >
                                <div class="flex items-start space-x-4">
                                    <div
                                        class="flex-shrink-0 w-12 h-12 bg-brand-primary/10 rounded-xl flex items-center justify-center group-hover:bg-brand-primary/20 transition duration-200"
                                    >
                                        <i
                                            class="mdi mdi-account-group text-2xl text-brand-primary"
                                        ></i>
                                    </div>
                                    <div class="flex-1">
                                        <div
                                            class="flex items-center justify-between"
                                        >
                                            <h4
                                                class="font-heading font-bold text-gray-100 group-hover:text-brand-primary text-lg mb-2"
                                            >
                                                Tim & Kolaborasi
                                            </h4>
                                            <div
                                                class="w-8 h-8 rounded-full bg-tranparent flex items-center justify-center transition-all duration-200 transform -translate-x-2 group-hover:translate-x-0 group-hover:bg-brand-primary"
                                            >
                                                <i
                                                    class="mdi mdi-arrow-right text-brand-secondary group-hover:text-brand-secondary text-lg"
                                                ></i>
                                            </div>
                                        </div>
                                        <p
                                            class="font-body text-gray-300 text-sm leading-relaxed tracking-wide font-normal"
                                        >
                                            Temukan co-founder dan anggota tim
                                            dari berbagai jurusan untuk
                                            mewujudkan ide bersama
                                        </p>
                                    </div>
                                </div>
                            </Link>
                            <Link
                                href="/fitur/forum"
                                class="group block p-4 rounded-lg hover:bg-brand-primary/10 transition duration-200"
                            >
                                <div class="flex items-start space-x-4">
                                    <div
                                        class="flex-shrink-0 w-12 h-12 bg-brand-primary/10 rounded-xl flex items-center justify-center group-hover:bg-brand-primary/20 transition duration-200"
                                    >
                                        <i
                                            class="mdi mdi-forum text-2xl text-brand-primary"
                                        ></i>
                                    </div>
                                    <div class="flex-1">
                                        <div
                                            class="flex items-center justify-between group"
                                        >
                                            <h4
                                                class="font-heading font-bold text-gray-100 group-hover:text-brand-secp text-lg mb-2"
                                            >
                                                Discussion Hub
                                            </h4>
                                            <div
                                                class="w-8 h-8 rounded-full bg-tranparent flex items-center justify-center transition-all duration-200 transform -translate-x-2 group-hover:translate-x-0 group-hover:bg-brand-primary"
                                            >
                                                <i
                                                    class="mdi mdi-arrow-right text-brand-secondary group-hover:text-brand-secondary text-lg"
                                                ></i>
                                            </div>
                                        </div>

                                        <p
                                            class="font-body text-gray-300 text-sm leading-relaxed tracking-wide font-normal"
                                        >
                                            Forum diskusi untuk sharing
                                            pengalaman, tips, dan solusi
                                            challenge dalam entrepreneurship
                                        </p>
                                    </div>
                                </div>
                            </Link>
                        </div>
                    </div>

                    <!-- Section 3: Resources & Pembelajaran -->
                    <div class="pl-8 py-10">
                        <h3
                            class="font-heading text-sm font-semibold text-white uppercase tracking-widest mb-6"
                        >
                            Resources & Update
                        </h3>

                        <!-- Success Story Card -->
                        <div
                            class="bg-gradient-to-br from-brand-primary to-brand-secondary rounded-2xl p-6 text-white mb-6"
                        >
                            <div class="flex items-center space-x-3 mb-4">
                                <div
                                    class="w-8 h-8 bg-white/20 rounded-lg flex items-center justify-center"
                                >
                                    <i class="mdi mdi-trophy text-lg"></i>
                                </div>
                                <span
                                    class="font-heading text-xs font-medium bg-white/20 px-3 py-1 rounded-full"
                                >
                                    SUCCESS STORY
                                </span>
                            </div>
                            <h4 class="font-heading font-bold text-lg mb-2">
                                EcoTech by ITB Students
                            </h4>
                            <p
                                class="font-body text-white/90 text-sm mb-4 leading-relaxed"
                            >
                                Mahasiswa Teknik Lingkungan ITB berhasil
                                mengembangkan startup green technology yang kini
                                bermitra dengan 50+ UMKM
                            </p>
                            <Link
                                href="/success-stories/ecotech"
                                class="font-heading inline-flex items-center text-sm font-semibold hover:underline"
                            >
                                Baca kisah lengkap
                                <i class="mdi mdi-arrow-right text-sm ml-1"></i>
                            </Link>
                        </div>

                        <!-- Resource Links -->
                        <div class="space-y-3">
                            <Link
                                href="/learning/startup-fundamentals"
                                class="flex items-center justify-between p-3 bg-white/5 rounded-lg hover:bg-white/10 transition duration-200 group"
                            >
                                <div class="flex items-center space-x-3">
                                    <i
                                        class="mdi mdi-school text-lg text-brand-primary"
                                    ></i>
                                    <span
                                        class="font-heading font-medium text-gray-100 text-sm"
                                        >Startup Fundamentals</span
                                    >
                                </div>
                                <i
                                    class="mdi mdi-chevron-right text-gray-400 group-hover:text-brand-primary transition duration-200"
                                ></i>
                            </Link>
                            <Link
                                href="/resources/templates"
                                class="flex items-center justify-between p-3 bg-white/5 rounded-lg hover:bg-white/10 transition duration-200 group"
                            >
                                <div class="flex items-center space-x-3">
                                    <i
                                        class="mdi mdi-file-document-multiple text-lg text-brand-primary"
                                    ></i>
                                    <span
                                        class="font-heading font-medium text-gray-100 text-sm"
                                        >Business Plan Templates</span
                                    >
                                </div>
                                <i
                                    class="mdi mdi-chevron-right text-gray-400 group-hover:text-brand-primary transition duration-200"
                                ></i>
                            </Link>
                            <Link
                                href="/funding/student-grants"
                                class="flex items-center justify-between p-3 bg-white/5 rounded-lg hover:bg-white/10 transition duration-200 group"
                            >
                                <div class="flex items-center space-x-3">
                                    <i
                                        class="mdi mdi-currency-usd text-lg text-brand-primary"
                                    ></i>
                                    <span
                                        class="font-heading font-medium text-gray-100 text-sm"
                                        >Student Funding Guide</span
                                    >
                                </div>
                                <i
                                    class="mdi mdi-chevron-right text-gray-400 group-hover:text-brand-primary transition duration-200"
                                ></i>
                            </Link>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </transition>
</template>
