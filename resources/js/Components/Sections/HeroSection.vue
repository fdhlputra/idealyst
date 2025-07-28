<template>
    <section
        class="relative px-6 py-32 bg-brand-secondary overflow-hidden flex items-center"
    >
        <div class="max-w-7xl mx-auto relative z-10 w-full">
            <!-- Floating Background Elements -->
            <div
                class="absolute top-60 left-10 w-20 h-20 bg-brand-primary/20 rounded-full blur-xl"
            ></div>

            <div
                class="absolute top-40 right-20 w-32 h-32 bg-brand-secondary/30 rounded-full blur-2xl"
            ></div>

            <div
                class="absolute top-80 left-1/4 w-16 h-16 bg-brand-primary/10 rounded-full blur-lg"
            ></div>

            <!-- Main Content Grid -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-20 items-center">
                <!-- Left Content -->
                <div class="space-y-8">
                    <!-- Main Heading -->
                    <div class="space-y-4">
                        <h1
                            class="font-heading text-6xl md:text-7xl font-semibold sm:leading-relaxed leading-normal tracking-wide text-white"
                        >
                            <span
                                class="block bg-brand-primary bg-clip-text text-transparent relative"
                            >
                                Ide Ideal

                                <!-- divider -->
                                <div
                                    class="hidden md:block absolute -bottom-2 -right-44 w-full h-1 bg-gradient-to-r from-brand-primary/50 to-transparent rounded-full"
                                ></div>
                                <div
                                    class="hidden md:block absolute bottom-12 -right-[700px] w-full h-1 bg-gradient-to-r from-brand-primary/50 to-transparent rounded-full"
                                ></div>
                                <div
                                    class="hidden md:block absolute -bottom-64 -right-[500px] w-full h-1 bg-gradient-to-r from-brand-primary/50 to-transparent rounded-full"
                                ></div>
                            </span>
                            <span class="block">Mahasiswa</span>
                            <span class="block"
                                >jadi
                                <span class="text-brand-primary">Startup</span>
                            </span>
                            <span class="block"
                                >bersama
                                <span class="text-brand-primary">Idealyst</span>
                            </span>
                        </h1>
                    </div>

                    <!-- Description -->
                    <div class="space-y-4">
                        <p
                            class="text-xl md:text-2xl text-gray-300 leading-relaxed font-light"
                        >
                            <span class="font-semibold text-brand-primary"
                                >Idealyst</span
                            >
                            Platform digital bagi mahasiswa untuk mengajukan,
                            mengembangkan, dan <br />
                            mempublikasikan ide startup secara terstruktur.
                        </p>
                    </div>

                    <!-- CTA Buttons -->
                    <div class="flex flex-col sm:flex-row gap-4 font-heading">
                        <button
                            class="group relative bg-brand-primary text-brand-secondary px-8 py-4 rounded-full font-bold text-lg transition-all duration-300 shadow-2xl hover:shadow-brand-primary/40 hover:scale-105 hover:-translate-y-1 overflow-hidden"
                        >
                            <div
                                class="absolute inset-0 bg-gradient-to-r from-yellow-400 to-brand-primary opacity-0 group-hover:opacity-100 transition-opacity duration-300"
                            ></div>
                            <span
                                class="relative flex items-center justify-center space-x-3"
                            >
                                <i class="mdi mdi-rocket-launch text-xl"></i>
                                <span class="font-bold"
                                    >Ajukan Ide Startup</span
                                >
                                <i
                                    class="mdi mdi-arrow-right text-xl group-hover:translate-x-1 transition-transform duration-300"
                                ></i>
                            </span>
                        </button>

                        <button
                            class="group relative border-2 border-brand-primary/50 text-brand-primary px-8 py-4 rounded-full font-bold text-lg hover:bg-brand-primary hover:text-brand-secondary transition-all duration-300 hover:border-brand-primary backdrop-blur-sm"
                        >
                            <span
                                class="flex items-center justify-center space-x-3"
                            >
                                <i class="mdi mdi-telescope text-xl"></i>
                                <span>Jelajahi Ide</span>
                            </span>
                        </button>
                    </div>
                </div>

                <!-- Right Content -->
                <div class="relative overflow-visible lg:pl-8">
                    <div
                        class="hidden md:block absolute md:-right-28 md:-top-56 scale-95 shadow-2xl"
                        style="
                            transform: rotateX(20deg) rotateY(-15deg)
                                rotateZ(20deg);
                        "
                    >
                        <HeroSvg />
                    </div>
                </div>
            </div>

            <!-- Partnership Logos Section -->
            <div class="mt-0 md:pt-40">
                <div class="grid grid-cols-1 lg:grid-cols-6 gap-8 items-center">
                    <!-- Left Text - 1 column (20%) -->
                    <div class="lg:col-span-2 text-start">
                        <h4
                            class="uppercase text-md font-medium tracking-widest text-gray-400 leading-relaxed font-sans"
                        >
                            Dipercaya oleh universitas unggulan dan startup
                            inovatif di Indonesia
                        </h4>
                    </div>

                    <!-- Right Logos - Swiper (4 columns - 80%) -->
                    <div class="lg:col-span-4">
                        <Swiper
                            :modules="modules"
                            :slides-per-view="4"
                            :space-between="20"
                            :loop="true"
                            :autoplay="{
                                delay: 2500,
                                disableOnInteraction: false,
                            }"
                            :breakpoints="{
                                320: { slidesPerView: 2, spaceBetween: 5 },
                                640: { slidesPerView: 3, spaceBetween: 10 },
                                768: { slidesPerView: 4, spaceBetween: 15 },
                                1024: { slidesPerView: 4, spaceBetween: 15 },
                            }"
                            class="opacity-60 hover:opacity-90 transition-opacity duration-500"
                        >
                            <!-- UI -->
                            <SwiperSlide>
                                <div
                                    class="flex justify-center items-center h-32"
                                >
                                    <img
                                        src="/logos/ui.svg"
                                        alt="Universitas Indonesia"
                                        class="max-w-32 max-h-32 object-contain filter grayscale hover:grayscale-0 transition-all duration-300"
                                    />
                                </div>
                            </SwiperSlide>

                            <!-- ITB -->
                            <SwiperSlide>
                                <div
                                    class="flex justify-center items-center h-32"
                                >
                                    <img
                                        src="/logos/itb.svg"
                                        alt="Institut Teknologi Bandung"
                                        class="max-w-32 max-h-32 object-contain filter grayscale hover:grayscale-0 transition-all duration-300"
                                    />
                                </div>
                            </SwiperSlide>

                            <!-- Tokopedia -->
                            <SwiperSlide>
                                <div
                                    class="flex justify-center items-center h-32"
                                >
                                    <img
                                        src="/logos/tokopedia.svg"
                                        alt="Tokopedia"
                                        class="max-w-32 max-h-24 object-contain filter grayscale hover:grayscale-0 transition-all duration-300"
                                    />
                                </div>
                            </SwiperSlide>

                            <!-- Ruangguru -->
                            <SwiperSlide>
                                <div
                                    class="flex justify-center items-center h-32"
                                >
                                    <img
                                        src="/logos/ruangguru.svg"
                                        alt="Ruangguru"
                                        class="max-w-32 max-h-24 object-contain filter grayscale hover:grayscale-0 transition-all duration-300"
                                    />
                                </div>
                            </SwiperSlide>

                            <!-- Kredivo -->
                            <SwiperSlide>
                                <div
                                    class="flex justify-center items-center h-32"
                                >
                                    <img
                                        src="/logos/kredivo.svg"
                                        alt="Kredivo"
                                        class="max-w-36 max-h-32 object-contain filter grayscale hover:grayscale-0 transition-all duration-300"
                                    />
                                </div>
                            </SwiperSlide>

                            <!-- Dicoding -->
                            <SwiperSlide>
                                <div
                                    class="flex justify-center items-center h-32"
                                >
                                    <img
                                        src="/logos/dicoding.svg"
                                        alt="Dicoding"
                                        class="max-w-40 max-h-24 object-contain filter grayscale hover:grayscale-0 transition-all duration-300"
                                    />
                                </div>
                            </SwiperSlide>
                        </Swiper>
                    </div>
                </div>
            </div>
        </div>

        <!-- Background Gradient Overlay -->
        <div
            class="absolute inset-0 bg-gradient-to-br from-brand-secondary via-brand-secondary to-indigo-900 -z-10"
        ></div>

        <!-- Animated Background Pattern -->
        <div class="absolute inset-0 opacity-10 -z-10">
            <div
                class="absolute top-20 left-20 w-2 h-2 bg-brand-primary rounded-full"
            ></div>
            <div
                class="absolute top-40 right-40 w-1 h-1 bg-brand-primary rounded-full"
            ></div>
            <div
                class="absolute bottom-40 left-40 w-1.5 h-1.5 bg-brand-primary rounded-full"
            ></div>
            <div
                class="absolute top-60 right-60 w-1 h-1 bg-brand-primary rounded-full"
            ></div>
        </div>
    </section>
</template>

<script setup>
import HeroSvg from "./components/Hero/HeroSvg.vue";
import { Swiper, SwiperSlide } from "swiper/vue";
import { Autoplay } from "swiper/modules";

const modules = [Autoplay];
</script>
