<script setup>
import { ref } from "vue";

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
            <div class="max-w-7xl mx-auto">
                <div class="grid grid-cols-3 divide-x divide-brand-primary/40">
                    <!-- Section 1: Visi & Misi -->
                    <div class="pr-8 py-10">
                        <h3
                            class="font-heading text-sm font-semibold text-white uppercase tracking-widest mb-6"
                        >
                            Visi & Misi
                        </h3>

                        <!-- Visi -->
                        <div
                            class="p-4 rounded-lg hover:bg-brand-primary/10 transition duration-200"
                        >
                            <div class="flex items-start space-x-4">
                                <div
                                    class="flex-shrink-0 w-12 h-12 bg-brand-primary/10 rounded-xl flex items-center justify-center"
                                >
                                    <i
                                        class="mdi mdi-target-variant text-2xl text-brand-primary"
                                    ></i>
                                </div>
                                <div>
                                    <h4
                                        class="font-heading font-bold text-gray-100 text-lg mb-2"
                                    >
                                        Visi Kami
                                    </h4>
                                    <p
                                        class="font-body text-gray-300 text-sm leading-relaxed tracking-wide font-normal"
                                    >
                                        Mendorong lahirnya generasi
                                        technopreneur muda melalui inkubasi ide
                                        startup yang terstruktur, kolaboratif,
                                        dan terbuka untuk dunia.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- Misi -->
                        <div
                            class="p-4 rounded-lg hover:bg-brand-primary/10 transition duration-200"
                        >
                            <div class="flex items-start space-x-4">
                                <div
                                    class="flex-shrink-0 w-12 h-12 bg-brand-primary/10 rounded-xl flex items-center justify-center"
                                >
                                    <i
                                        class="mdi mdi-sprout text-2xl text-brand-primary"
                                    ></i>
                                </div>
                                <div>
                                    <h4
                                        class="font-heading font-bold text-gray-100 text-lg mb-2"
                                    >
                                        Misi Kami
                                    </h4>
                                    <p
                                        class="font-body text-gray-300 text-sm leading-relaxed tracking-wide font-normal"
                                    >
                                        Memfasilitasi ekosistem entrepreneurial
                                        thinking sejak bangku kuliah dengan
                                        platform yang sistematis, terbuka, dan
                                        berdaya kolaborasi.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- Quote -->
                        <div
                            class="mt-4 p-6 rounded-xl bg-gradient-to-br from-brand-primary/10 to-brand-secondary/5 shadow-sm"
                        >
                            <p
                                class="font-heading font-medium text-gray-200 text-base leading-relaxed tracking-wide italic"
                            >
                                “Ide hebat tak cukup hanya dicetuskan ia perlu
                                ruang untuk tumbuh, diuji, dan diterjemahkan
                                menjadi dampak nyata.”
                            </p>
                            <div class="mt-4 text-right">
                                <span
                                    class="font-heading text-brand-primary text-sm font-medium italic"
                                    >– Tim Idealyst</span
                                >
                            </div>
                        </div>
                    </div>

                    <!-- Section 2: Tentang Platform -->
                    <div class="px-8 py-10">
                        <h3
                            class="font-heading text-sm font-semibold text-white uppercase tracking-widest mb-6"
                        >
                            Tentang Platform
                        </h3>

                        <!-- Apa itu Idealyst -->
                        <div
                            class="p-4 rounded-lg hover:bg-brand-primary/10 transition duration-200"
                        >
                            <div class="flex items-start space-x-4">
                                <div
                                    class="flex-shrink-0 w-12 h-12 bg-brand-primary/10 rounded-xl flex items-center justify-center"
                                >
                                    <i
                                        class="mdi mdi-rocket-launch text-2xl text-brand-primary"
                                    ></i>
                                </div>
                                <div>
                                    <h4
                                        class="font-heading font-bold text-gray-100 text-lg mb-2"
                                    >
                                        Apa Itu Idealyst?
                                    </h4>
                                    <p
                                        class="font-body text-gray-300 text-sm leading-relaxed tracking-wide font-normal mb-3"
                                    >
                                        Idealyst adalah platform digital yang
                                        memfasilitasi mahasiswa mengembangkan
                                        ide startup secara menyeluruh dari
                                        pengajuan, pendampingan, hingga
                                        publikasi terbuka.
                                    </p>

                                    <ul class="space-y-2 text-xs text-gray-400">
                                        <li class="flex items-center space-x-2">
                                            <i
                                                class="mdi mdi-check-circle text-brand-primary text-sm"
                                            ></i>
                                            <span
                                                >Pengajuan ide terstruktur</span
                                            >
                                        </li>
                                        <li class="flex items-center space-x-2">
                                            <i
                                                class="mdi mdi-check-circle text-brand-primary text-sm"
                                            ></i>
                                            <span>Tracking milestone tim</span>
                                        </li>
                                        <li class="flex items-center space-x-2">
                                            <i
                                                class="mdi mdi-check-circle text-brand-primary text-sm"
                                            ></i>
                                            <span>Showcase untuk eksposur</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- Pembeda -->
                        <div
                            class="p-4 rounded-lg hover:bg-brand-primary/10 transition duration-200"
                        >
                            <div class="flex items-start space-x-4">
                                <div
                                    class="flex-shrink-0 w-12 h-12 bg-brand-primary/10 rounded-xl flex items-center justify-center"
                                >
                                    <i
                                        class="mdi mdi-star-outline text-2xl text-brand-primary"
                                    ></i>
                                </div>
                                <div>
                                    <h4
                                        class="font-heading font-bold text-gray-100 text-lg mb-2"
                                    >
                                        Yang Membuat Berbeda
                                    </h4>
                                    <p
                                        class="font-body text-gray-300 text-sm leading-relaxed tracking-wide font-normal"
                                    >
                                        Platform ini dirancang untuk adaptif,
                                        efisien, dan langsung dapat digunakan di
                                        berbagai universitas tanpa proses
                                        integrasi yang kompleks, namun mendalam
                                        secara fungsional.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Section 3: Tim & Filosofi -->
                    <div class="pl-8 py-10">
                        <h3
                            class="font-heading text-sm font-semibold text-white uppercase tracking-widest mb-6"
                        >
                            Tim & Filosofi
                        </h3>

                        <!-- Tim -->
                        <div
                            class="bg-gradient-to-br from-brand-primary to-brand-secondary rounded-2xl p-6 text-white mb-6"
                        >
                            <div class="flex items-center space-x-3 mb-4">
                                <div
                                    class="w-8 h-8 bg-white/20 rounded-lg flex items-center justify-center"
                                >
                                    <i
                                        class="mdi mdi-account-group text-lg"
                                    ></i>
                                </div>
                                <span
                                    class="font-heading text-xs font-medium bg-white/20 px-3 py-1 rounded-full"
                                    >TIM MULTIDISIPLIN</span
                                >
                            </div>
                            <h4 class="font-heading font-bold text-lg mb-2">
                                Siapa di Balik Idealyst?
                            </h4>
                            <p
                                class="font-body text-white/90 text-sm mb-4 leading-relaxed"
                            >
                                Kami adalah kolaborasi antara praktisi
                                pendidikan, teknologi, dan startup yang punya
                                satu tujuan: menciptakan wadah strategis bagi
                                ide-ide mahasiswa berkembang menjadi inovasi
                                nyata.
                            </p>
                        </div>

                        <!-- Filosofi -->
                        <div class="bg-white/5 rounded-xl p-5 mb-6">
                            <div class="flex items-center space-x-3 mb-3">
                                <i
                                    class="mdi mdi-flag-checkered text-brand-primary text-xl"
                                ></i>
                                <h4
                                    class="font-heading font-semibold text-gray-100 text-sm"
                                >
                                    Idealyst Adalah Awal, Bukan Akhir
                                </h4>
                            </div>
                            <p
                                class="font-body text-gray-300 text-sm leading-relaxed"
                            >
                                Kami percaya satu ide yang diasah dengan
                                bimbingan tepat bisa menjadi awal dari perubahan
                                yang besar baik bagi mahasiswa, kampus, maupun
                                ekosistem inovasi nasional.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </transition>
</template>
