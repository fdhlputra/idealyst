<template>
    <div
        class="relative p-8 rounded-2xl bg-gradient-to-r from-brand-primary to-yellow-400 text-brand-secondary overflow-hidden"
    >
        <div class="absolute inset-0 opacity-10">
            <div
                class="absolute top-0 left-0 w-24 h-24 bg-white rounded-full -translate-x-12 -translate-y-12"
            ></div>
            <div
                class="absolute bottom-0 right-0 w-32 h-32 bg-white rounded-full translate-x-16 translate-y-16"
            ></div>
        </div>
        <div
            class="relative z-10 text-center md:text-left md:flex md:items-center md:justify-between"
        >
            <div class="text-start space-y-2 md:space-y-3">
                <h3
                    class="text-3xl font-semibold text-brand-secondary font-heading"
                >
                    Siap Menjadi Bagian dari Cerita Sukses Berikutnya?
                </h3>
                <p class="font-body text-lg text-gray-800 leading-relaxed">
                    Gabung bersama ratusan mahasiswa yang telah membuktikan
                    bahwa ide sederhana bisa jadi langkah besar. Saatnya memulai
                    perjalananmu.
                </p>
            </div>
            <div
                class="flex flex-col sm:flex-row gap-4 md:flex-shrink-0 mt-8 md:mt-0 md:ml-12"
            >
                <Link
                    :href="route('register')"
                    class="w-full sm:w-auto bg-brand-secondary text-white px-8 py-4 rounded-full font-heading font-bold text-lg text-center transition-all duration-300 hover:bg-slate-700 hover:scale-105 shadow-lg"
                >
                    Daftar Gratis
                </Link>

                <Link
                    href="#ideas"
                    class="w-full sm:w-auto border-2 border-brand-secondary text-brand-secondary px-8 py-4 rounded-full font-heading font-bold text-lg text-center transition-all duration-300 hover:bg-brand-secondary hover:text-brand-primary"
                >
                    <span class="flex items-center justify-center space-x-3">
                        <span>Eksplor Ide</span>
                        <i class="mdi mdi-telescope text-xl"></i>
                    </span>
                </Link>
            </div>
        </div>
    </div>
</template>

<script setup>
import { Link } from "@inertiajs/vue3";
</script>

<style scoped>
/* Tambahkan style custom jika diperlukan */
</style>
