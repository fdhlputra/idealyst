<template>
    <section class="relative py-32 px-6 md:px-0 bg-white">
        <div class="max-w-7xl mx-auto">
            <!-- Header Section -->
            <div class="text-start mb-20 space-y-8">
                <!-- Mobile Layout -->
                <div class="block md:hidden text-center space-y-6">
                    <h4
                        class="uppercase text-sm font-semibold tracking-widest text-brand-secondary"
                    >
                        Testimoni Mereka
                    </h4>
                    <h2
                        class="text-2xl font-heading font-medium leading-tight tracking-wide text-gray-900"
                    >
                        Inilah Kisah Nyata dari
                        <span class="text-brand-secondary">500+ Mahasiswa</span>

                        yang Berhasil Mewujudkan
                        <span class="text-brand-primary">Potensi</span> Mereka
                    </h2>
                    <p
                        class="font-body text-base leading-relaxed text-gray-600 max-w-2xl mx-auto"
                    >
                        Lihat bagaimana ratusan mahasiswa berhasil mengubah
                        <span class="text-black font-semibold"
                            >ide sederhana</span
                        >
                        menjadi
                        <span class="text-black font-semibold"
                            >solusi nyata yang berdampak</span
                        >, dan bagaimana investor mulai menaruh perhatian serius
                        pada
                        <span class="text-black font-semibold"
                            >potensi besar</span
                        >
                        yang mereka tawarkan.
                    </p>
                </div>

                <!-- Desktop Layout -->
                <div class="hidden md:block space-y-8">
                    <h4
                        class="uppercase text-lg font-semibold tracking-widest text-brand-secondary font-heading"
                    >
                        Testimoni Mereka
                    </h4>
                    <h2
                        class="text-3xl md:text-6xl font-medium leading-10 tracking-wide text-gray-900 font-heading"
                    >
                        Inilah Kisah Nyata dari
                        <span class="text-brand-secondary">500+ Mahasiswa</span>

                        yang Berhasil Mewujudkan
                        <span class="text-brand-primary">Potensi</span> Mereka
                    </h2>
                    <p
                        class="font-body text-lg text-gray-600 leading-relaxed w-full"
                    >
                        Lihat bagaimana ratusan mahasiswa berhasil mengubah
                        <span class="text-black font-semibold"
                            >ide sederhana</span
                        >
                        menjadi
                        <span class="text-black font-semibold"
                            >solusi nyata yang berdampak</span
                        >, dan bagaimana investor mulai menaruh perhatian serius
                        pada
                        <span class="text-black font-semibold"
                            >potensi besar</span
                        >
                        yang mereka tawarkan.
                    </p>
                </div>
            </div>

            <!-- Testimonials Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 mb-16">
                <div
                    v-for="(testimonial, index) in testimonials"
                    :key="index"
                    :class="[
                        'group p-8 relative',
                        index === 1 || index === 3 || index === 5
                            ? 'bg-gradient-to-br from-brand-primary/5 to-yellow-50'
                            : 'bg-white',
                    ]"
                >
                    <!-- Quote Icon -->
                    <div class="absolute top-6 right-6">
                        <i
                            class="mdi mdi-format-quote-close text-5xl text-brand-primary opacity-50"
                        ></i>
                    </div>

                    <!-- Rating Stars -->
                    <div class="flex items-center space-x-1 mb-4">
                        <i
                            v-for="star in 5"
                            :key="star"
                            class="mdi mdi-star text-yellow-400 text-xl"
                        ></i>
                    </div>

                    <!-- Testimonial Content -->
                    <blockquote
                        class="font-body text-lg text-gray-800 leading-relaxed mb-6"
                    >
                        "{{ testimonial.content }}"
                    </blockquote>

                    <!-- Author Info -->
                    <div class="flex items-center space-x-4">
                        <!-- Avatar -->
                        <div
                            class="w-10 h-10 bg-brand-primary text-brand-secondary rounded-full flex items-center justify-center font-heading"
                        >
                            <span
                                class="text-brand-secondary font-bold text-sm"
                            >
                                {{ testimonial.name[0] }}
                            </span>
                        </div>

                        <!-- Text Info -->
                        <div class="font-body leading-snug">
                            <h4 class="font-semibold text-gray-900 text-base">
                                {{ testimonial.name }}
                            </h4>
                            <p class="text-sm text-gray-600">
                                {{ testimonial.role }}
                            </p>
                            <p
                                class="text-sm text-gray-500 italic"
                                v-if="
                                    testimonial.university ||
                                    testimonial.company
                                "
                            >
                                {{
                                    testimonial.university ||
                                    testimonial.company
                                }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>

<script setup>
const props = defineProps({
    userTestimonials: {
        type: Array,
        default: () => [],
    },
});

const testimonials =
    props.userTestimonials.length > 0
        ? props.userTestimonials
        : [
              {
                  name: "Andi Pratama",
                  role: "Mahasiswa Teknik Informatika",
                  university: "Universitas Indonesia",
                  content:
                      "Ide aplikasi e-commerce saya berhasil terjual dengan harga yang fantastis! Prosesnya sangat mudah dan transparan. Dalam 2 minggu, saya sudah mendapat pembeli serius yang langsung execute ide tersebut.",
              },
              {
                  name: "Sari Wijaya",
                  role: "Mahasiswa Bisnis",
                  university: "Institut Teknologi Bandung",
                  content:
                      "Platform ini membuka mata saya bahwa ide-ide saya ternyata bernilai ekonomi tinggi. Saya sudah menjual 3 konsep startup dan hasilnya bisa untuk biaya kuliah semester depan!",
              },
              {
                  name: "David Chen",
                  role: "Angel Investor",
                  company: "StartupCorp Ventures",
                  content:
                      "Kualitas ide dari mahasiswa di platform ini luar biasa fresh dan inovatif. Saya sudah mengakuisisi 5 konsep startup yang sekarang sedang dikembangkan oleh tim saya. ROI sangat menguntungkan!",
              },
              {
                  name: "Lisa Permata",
                  role: "Mahasiswa Desain",
                  university: "Universitas Bina Nusantara",
                  content:
                      "Konsep aplikasi desain yang saya submit langsung mendapat tawaran dari 3 investor berbeda. Proses negosiasi difasilitasi dengan baik dan saya mendapat harga yang adil untuk karya saya.",
              },
              {
                  name: "Michael Tanuwijaya",
                  role: "Venture Capitalist",
                  company: "Digital Innovation Fund",
                  content:
                      "Ini seperti tambang emas ide-ide startup! Mahasiswa Indonesia sangat kreatif, dan platform ini memudahkan kami menemukan konsep-konsep brilliant untuk diinvestasikan dan dikembangkan.",
              },
              {
                  name: "Maya Indira",
                  role: "Mahasiswa Kedokteran",
                  university: "Universitas Gadjah Mada",
                  content:
                      "Ide healthtech saya yang sempat tertunda karena tidak ada modal, kini dihargai tinggi oleh investor. Mereka tidak hanya beli ide, tapi juga menawarkan saya posisi sebagai co-founder!",
              },
          ];

const partnershipStats = [
    { value: "250+", label: "Ide Terjual" },
    { value: "150+", label: "Investor Aktif" },
    { value: "50+", label: "Universitas Partner" },
    { value: "95%", label: "Tingkat Kepuasan" },
];
</script>

<style scoped>
/* Ensure smooth transitions */
* {
    transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
}

@keyframes pulse-soft {
    0%,
    100% {
        opacity: 1;
    }
    50% {
        opacity: 0.8;
    }
}

.animate-pulse-soft {
    animation: pulse-soft 3s ease-in-out infinite;
}
</style>
