<script setup>
import ApplicationLogo from "../UI/ApplicationLogo.vue";
import { Link } from "@inertiajs/vue3";
import CTASection from "./CTASection.vue";
</script>

<template>
    <footer
        class="relative bg-brand-secondary px-6 py-16 border-t border-brand-primary/20"
    >
        <div class="max-w-7xl mx-auto">
            <!-- CTA -->
            <div class="mb-16">
                <CTASection />
            </div>
            <!-- Main Footer Mobile -->
            <div class="block md:hidden">
                <!-- Main Footer Content -->
                <div
                    class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 mb-16 pt-16 border-t border-brand-primary/20"
                >
                    <!-- Company Info -->
                    <div class="space-y-6">
                        <div
                            class="flex items-center space-x-3 justify-center md:justify-start"
                        >
                            <!-- <LinkpplicationLogo height="h-8" width="w-8" />
                        <span class="font-heading text-2xl font-bold text-brand-primary">
                            Idealyst
                        </span> -->
                            <img
                                src="/logo-full.svg"
                                alt="logo"
                                class="h-fill w-60"
                            />
                        </div>
                        <p
                            class="font-body text-gray-300 text-lg leading-relaxed text-center md:text-left"
                        >
                            Platform kolaboratif untuk mahasiswa mengembangkan
                            ide startup inovatif dengan dukungan mentoring dan
                            komunitas yang solid.
                        </p>
                        <div
                            class="flex space-x-6 justify-center md:justify-start"
                        >
                            <Link
                                href="#"
                                class="w-16 h-16 bg-brand-primary/10 rounded-lg flex items-center justify-center text-brand-primary hover:bg-brand-primary hover:text-brand-secondary transition-all duration-300"
                            >
                                <i class="mdi mdi-instagram text-2xl"></i>
                            </Link>
                            <Link
                                href="#"
                                class="w-16 h-16 bg-brand-primary/10 rounded-lg flex items-center justify-center text-brand-primary hover:bg-brand-primary hover:text-brand-secondary transition-all duration-300"
                            >
                                <i class="mdi mdi-twitter text-2xl"></i>
                            </Link>
                            <Link
                                href="#"
                                class="w-16 h-16 bg-brand-primary/10 rounded-lg flex items-center justify-center text-brand-primary hover:bg-brand-primary hover:text-brand-secondary transition-all duration-300"
                            >
                                <i class="mdi mdi-linkedin text-2xl"></i>
                            </Link>
                            <Link
                                href="#"
                                class="w-16 h-16 bg-brand-primary/10 rounded-lg flex items-center justify-center text-brand-primary hover:bg-brand-primary hover:text-brand-secondary transition-all duration-300"
                            >
                                <i class="mdi mdi-youtube text-2xl"></i>
                            </Link>
                        </div>
                    </div>

                    <!-- Platform Links -->
                    <div class="space-y-6">
                        <h3
                            class="font-heading text-white font-bold text-2xl text-center md:text-left"
                        >
                            Platform
                        </h3>
                        <ul class="space-y-3">
                            <li class="flex justify-center md:justify-start">
                                <Link
                                    href="/fitur/pengajuan"
                                    class="font-body text-gray-300 hover:text-brand-primary transition-colors duration-300 text-md flex items-center group"
                                >
                                    <i
                                        class="mdi mdi-lightbulb-outline text-base mr-2 group-hover:text-brand-primary"
                                    ></i>
                                    Submit Ide Kreatif
                                </Link>
                            </li>
                            <li class="flex justify-center md:justify-start">
                                <Link
                                    href="/fitur/mentoring"
                                    class="font-body text-gray-300 hover:text-brand-primary transition-colors duration-300 text-md flex items-center group"
                                >
                                    <i
                                        class="mdi mdi-account-supervisor text-base mr-2 group-hover:text-brand-primary"
                                    ></i>
                                    Mentoring & Bimbingan
                                </Link>
                            </li>
                            <li class="flex justify-center md:justify-start">
                                <Link
                                    href="/fitur/tracking"
                                    class="font-body text-gray-300 hover:text-brand-primary transition-colors duration-300 text-md flex items-center group"
                                >
                                    <i
                                        class="mdi mdi-chart-timeline-variant text-base mr-2 group-hover:text-brand-primary"
                                    ></i>
                                    Progress Tracking
                                </Link>
                            </li>
                            <li class="flex justify-center md:justify-start">
                                <Link
                                    href="/fitur/showcase"
                                    class="font-body text-gray-300 hover:text-brand-primary transition-colors duration-300 text-md flex items-center group"
                                >
                                    <i
                                        class="mdi mdi-presentation text-base mr-2 group-hover:text-brand-primary"
                                    ></i>
                                    Student Showcase
                                </Link>
                            </li>
                        </ul>
                    </div>

                    <!-- Community & Resources -->
                    <div class="space-y-6">
                        <h3
                            class="font-heading text-white font-bold text-2xl text-center md:text-left"
                        >
                            Komunitas
                        </h3>
                        <ul class="space-y-3">
                            <li class="flex justify-center md:justify-start">
                                <Link
                                    href="/fitur/collaboration"
                                    class="font-body text-gray-300 hover:text-brand-primary transition-colors duration-300 text-md flex items-center group"
                                >
                                    <i
                                        class="mdi mdi-account-group text-base mr-2 group-hover:text-brand-primary"
                                    ></i>
                                    Tim & Kolaborasi
                                </Link>
                            </li>
                            <li class="flex justify-center md:justify-start">
                                <Link
                                    href="/fitur/forum"
                                    class="font-body text-gray-300 hover:text-brand-primary transition-colors duration-300 text-md flex items-center group"
                                >
                                    <i
                                        class="mdi mdi-forum text-base mr-2 group-hover:text-brand-primary"
                                    ></i>
                                    Discussion Hub
                                </Link>
                            </li>
                            <li class="flex justify-center md:justify-start">
                                <Link
                                    href="/learning/startup-fundamentals"
                                    class="font-body text-gray-300 hover:text-brand-primary transition-colors duration-300 text-md flex items-center group"
                                >
                                    <i
                                        class="mdi mdi-school text-base mr-2 group-hover:text-brand-primary"
                                    ></i>
                                    Startup Fundamentals
                                </Link>
                            </li>
                            <li class="flex justify-center md:justify-start">
                                <Link
                                    href="/resources/templates"
                                    class="font-body text-gray-300 hover:text-brand-primary transition-colors duration-300 text-md flex items-center group"
                                >
                                    <i
                                        class="mdi mdi-file-document-multiple text-base mr-2 group-hover:text-brand-primary"
                                    ></i>
                                    Business Templates
                                </Link>
                            </li>
                        </ul>
                    </div>

                    <!-- Company & Support -->
                    <div class="space-y-6">
                        <h3
                            class="font-heading text-white font-bold text-2xl text-center md:text-left"
                        >
                            Tentang Kami
                        </h3>
                        <ul class="space-y-3">
                            <li class="flex justify-center md:justify-start">
                                <Link
                                    href="#about"
                                    class="font-body text-gray-300 hover:text-brand-primary transition-colors duration-300 text-md flex items-center group"
                                >
                                    <i
                                        class="mdi mdi-information-outline text-base mr-2 group-hover:text-brand-primary"
                                    ></i>
                                    Tentang Idealyst
                                </Link>
                            </li>
                            <li class="flex justify-center md:justify-start">
                                <Link
                                    href="/success-stories"
                                    class="font-body text-gray-300 hover:text-brand-primary transition-colors duration-300 text-md flex items-center group"
                                >
                                    <i
                                        class="mdi mdi-trophy text-base mr-2 group-hover:text-brand-primary"
                                    ></i>
                                    Success Stories
                                </Link>
                            </li>
                            <li class="flex justify-center md:justify-start">
                                <Link
                                    href="#help"
                                    class="font-body text-gray-300 hover:text-brand-primary transition-colors duration-300 text-md flex items-center group"
                                >
                                    <i
                                        class="mdi mdi-help-circle-outline text-base mr-2 group-hover:text-brand-primary"
                                    ></i>
                                    Panduan & FAQ
                                </Link>
                            </li>
                            <li class="flex justify-center md:justify-start">
                                <Link
                                    href="/funding/student-grants"
                                    class="font-body text-gray-300 hover:text-brand-primary transition-colors duration-300 text-md flex items-center group"
                                >
                                    <i
                                        class="mdi mdi-currency-usd text-base mr-2 group-hover:text-brand-primary"
                                    ></i>
                                    Student Funding
                                </Link>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Main Footer Desktop -->
            <div class="hidden md:block">
                <div
                    class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 mb-16 pt-16 border-t border-brand-primary/20"
                >
                    <!-- Company Info -->
                    <div class="space-y-6">
                        <div class="flex items-center space-x-3">
                            <!-- <LinkpplicationLogo height="h-8" width="w-8" />
                             <span class="font-heading text-2xl font-bold text-brand-primary">
                                 Idealyst
                             </span> -->
                            <img
                                src="/logo-full.svg"
                                alt="logo"
                                class="h-fill w-60"
                            />
                        </div>
                        <p
                            class="font-body text-gray-300 text-sm leading-relaxed"
                        >
                            Platform kolaboratif untuk mahasiswa mengembangkan
                            ide startup inovatif dengan dukungan mentoring dan
                            komunitas yang solid.
                        </p>
                        <div class="flex space-x-4">
                            <Link
                                href="#"
                                class="w-10 h-10 bg-brand-primary/10 rounded-lg flex items-center justify-center text-brand-primary hover:bg-brand-primary hover:text-brand-secondary transition-all duration-300"
                            >
                                <i class="mdi mdi-instagram text-lg"></i>
                            </Link>
                            <Link
                                href="#"
                                class="w-10 h-10 bg-brand-primary/10 rounded-lg flex items-center justify-center text-brand-primary hover:bg-brand-primary hover:text-brand-secondary transition-all duration-300"
                            >
                                <i class="mdi mdi-twitter text-lg"></i>
                            </Link>
                            <Link
                                href="#"
                                class="w-10 h-10 bg-brand-primary/10 rounded-lg flex items-center justify-center text-brand-primary hover:bg-brand-primary hover:text-brand-secondary transition-all duration-300"
                            >
                                <i class="mdi mdi-linkedin text-lg"></i>
                            </Link>
                            <Link
                                href="#"
                                class="w-10 h-10 bg-brand-primary/10 rounded-lg flex items-center justify-center text-brand-primary hover:bg-brand-primary hover:text-brand-secondary transition-all duration-300"
                            >
                                <i class="mdi mdi-youtube text-lg"></i>
                            </Link>
                        </div>
                    </div>

                    <!-- Platform Links -->
                    <div class="space-y-6">
                        <h3 class="font-heading text-white font-bold text-lg">
                            Platform
                        </h3>
                        <ul class="space-y-3">
                            <li>
                                <Link
                                    href="/fitur/pengajuan"
                                    class="font-body text-gray-300 hover:text-brand-primary transition-colors duration-300 text-sm flex items-center group"
                                >
                                    <i
                                        class="mdi mdi-lightbulb-outline text-base mr-2 group-hover:text-brand-primary"
                                    ></i>
                                    Submit Ide Kreatif
                                </Link>
                            </li>
                            <li>
                                <Link
                                    href="/fitur/mentoring"
                                    class="font-body text-gray-300 hover:text-brand-primary transition-colors duration-300 text-sm flex items-center group"
                                >
                                    <i
                                        class="mdi mdi-account-supervisor text-base mr-2 group-hover:text-brand-primary"
                                    ></i>
                                    Mentoring & Bimbingan
                                </Link>
                            </li>
                            <li>
                                <Link
                                    href="/fitur/tracking"
                                    class="font-body text-gray-300 hover:text-brand-primary transition-colors duration-300 text-sm flex items-center group"
                                >
                                    <i
                                        class="mdi mdi-chart-timeline-variant text-base mr-2 group-hover:text-brand-primary"
                                    ></i>
                                    Progress Tracking
                                </Link>
                            </li>
                            <li>
                                <Link
                                    href="/fitur/showcase"
                                    class="font-body text-gray-300 hover:text-brand-primary transition-colors duration-300 text-sm flex items-center group"
                                >
                                    <i
                                        class="mdi mdi-presentation text-base mr-2 group-hover:text-brand-primary"
                                    ></i>
                                    Student Showcase
                                </Link>
                            </li>
                        </ul>
                    </div>

                    <!-- Community & Resources -->
                    <div class="space-y-6">
                        <h3 class="font-heading text-white font-bold text-lg">
                            Komunitas
                        </h3>
                        <ul class="space-y-3">
                            <li>
                                <Link
                                    href="/fitur/collaboration"
                                    class="font-body text-gray-300 hover:text-brand-primary transition-colors duration-300 text-sm flex items-center group"
                                >
                                    <i
                                        class="mdi mdi-account-group text-base mr-2 group-hover:text-brand-primary"
                                    ></i>
                                    Tim & Kolaborasi
                                </Link>
                            </li>
                            <li>
                                <Link
                                    href="/fitur/forum"
                                    class="font-body text-gray-300 hover:text-brand-primary transition-colors duration-300 text-sm flex items-center group"
                                >
                                    <i
                                        class="mdi mdi-forum text-base mr-2 group-hover:text-brand-primary"
                                    ></i>
                                    Discussion Hub
                                </Link>
                            </li>
                            <li>
                                <Link
                                    href="/learning/startup-fundamentals"
                                    class="font-body text-gray-300 hover:text-brand-primary transition-colors duration-300 text-sm flex items-center group"
                                >
                                    <i
                                        class="mdi mdi-school text-base mr-2 group-hover:text-brand-primary"
                                    ></i>
                                    Startup Fundamentals
                                </Link>
                            </li>
                            <li>
                                <Link
                                    href="/resources/templates"
                                    class="font-body text-gray-300 hover:text-brand-primary transition-colors duration-300 text-sm flex items-center group"
                                >
                                    <i
                                        class="mdi mdi-file-document-multiple text-base mr-2 group-hover:text-brand-primary"
                                    ></i>
                                    Business Templates
                                </Link>
                            </li>
                        </ul>
                    </div>

                    <!-- Company & Support -->
                    <div class="space-y-6">
                        <h3 class="font-heading text-white font-bold text-lg">
                            Tentang Kami
                        </h3>
                        <ul class="space-y-3">
                            <li>
                                <Link
                                    href="#about"
                                    class="font-body text-gray-300 hover:text-brand-primary transition-colors duration-300 text-sm flex items-center group"
                                >
                                    <i
                                        class="mdi mdi-information-outline text-base mr-2 group-hover:text-brand-primary"
                                    ></i>
                                    Tentang Idealyst
                                </Link>
                            </li>
                            <li>
                                <Link
                                    href="/success-stories"
                                    class="font-body text-gray-300 hover:text-brand-primary transition-colors duration-300 text-sm flex items-center group"
                                >
                                    <i
                                        class="mdi mdi-trophy text-base mr-2 group-hover:text-brand-primary"
                                    ></i>
                                    Success Stories
                                </Link>
                            </li>
                            <li>
                                <Link
                                    href="#help"
                                    class="font-body text-gray-300 hover:text-brand-primary transition-colors duration-300 text-sm flex items-center group"
                                >
                                    <i
                                        class="mdi mdi-help-circle-outline text-base mr-2 group-hover:text-brand-primary"
                                    ></i>
                                    Panduan & FAQ
                                </Link>
                            </li>
                            <li>
                                <Link
                                    href="/funding/student-grants"
                                    class="font-body text-gray-300 hover:text-brand-primary transition-colors duration-300 text-sm flex items-center group"
                                >
                                    <i
                                        class="mdi mdi-currency-usd text-base mr-2 group-hover:text-brand-primary"
                                    ></i>
                                    Student Funding
                                </Link>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Bottom Footer -->
            <div class="pt-8 border-t border-brand-primary/20">
                <div
                    class="flex flex-col md:flex-row items-center justify-between space-y-4 md:space-y-0"
                >
                    <div
                        class="flex flex-col md:flex-row items-center space-y-2 md:space-y-0 md:space-x-6"
                    >
                        <p class="font-body text-gray-400 text-sm">
                            &copy; 2024 Idealyst. Semua hak cipta dilindungi.
                        </p>
                        <div class="flex items-center space-x-4 text-sm">
                            <Link
                                href="/privacy"
                                class="font-body text-gray-400 hover:text-brand-primary transition-colors duration-300"
                            >
                                Kebijakan Privasi
                            </Link>
                            <span class="text-gray-600">•</span>
                            <Link
                                href="/terms"
                                class="font-body text-gray-400 hover:text-brand-primary transition-colors duration-300"
                            >
                                Syarat & Ketentuan
                            </Link>
                        </div>
                    </div>
                    <div
                        class="flex items-center space-x-2 text-gray-400 text-sm"
                    >
                        <i class="mdi mdi-heart text-brand-primary"></i>
                        <span class="font-body"
                            >Dibuat untuk mahasiswa Indonesia</span
                        >
                    </div>
                </div>
            </div>
        </div>
    </footer>
</template>
