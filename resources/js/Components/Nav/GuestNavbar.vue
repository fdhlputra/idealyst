<script setup>
import ApplicationLogo from "../UI/ApplicationLogo.vue";
import Platform from "./SubNav/Platform.vue";
import TentangKami from "./SubNav/TentangKami.vue";
import { ref, onMounted, onUnmounted } from "vue";
import { Link } from "@inertiajs/vue3";

const isMegaMenuOpen = ref(false);
const isAboutMenuOpen = ref(false);
const isMobileMenuOpen = ref(false);
let hoverTimeout = null;
let aboutHoverTimeout = null;

// Platform menu handlers
const showMegaMenu = () => {
    if (hoverTimeout) clearTimeout(hoverTimeout);
    // Close about menu when opening platform menu
    isAboutMenuOpen.value = false;
    if (aboutHoverTimeout) clearTimeout(aboutHoverTimeout);

    isMegaMenuOpen.value = true;
};

const hideMegaMenu = () => {
    hoverTimeout = setTimeout(() => {
        isMegaMenuOpen.value = false;
    }, 100);
};

const keepMegaMenuOpen = () => {
    if (hoverTimeout) clearTimeout(hoverTimeout);
};

// About menu handlers
const showAboutMenu = () => {
    if (aboutHoverTimeout) clearTimeout(aboutHoverTimeout);
    // Close platform menu when opening about menu
    isMegaMenuOpen.value = false;
    if (hoverTimeout) clearTimeout(hoverTimeout);

    isAboutMenuOpen.value = true;
};

const hideAboutMenu = () => {
    aboutHoverTimeout = setTimeout(() => {
        isAboutMenuOpen.value = false;
    }, 100);
};

const keepAboutMenuOpen = () => {
    if (aboutHoverTimeout) clearTimeout(aboutHoverTimeout);
};

// Mobile menu handlers
const toggleMobileMenu = () => {
    isMobileMenuOpen.value = !isMobileMenuOpen.value;
    // Close desktop menus when mobile menu is opened
    if (isMobileMenuOpen.value) {
        isMegaMenuOpen.value = false;
        isAboutMenuOpen.value = false;
    }
};

const closeMobileMenu = () => {
    isMobileMenuOpen.value = false;
};

// Scroll behavior
const showNavbar = ref(true);
let lastScrollY = window.scrollY;

const handleScroll = () => {
    const currentScroll = window.scrollY;

    if (currentScroll < 50) {
        showNavbar.value = true;
        lastScrollY = currentScroll;
        return;
    }

    if (currentScroll > lastScrollY + 10) {
        showNavbar.value = false;
        // Close mobile menu when scrolling down
        isMobileMenuOpen.value = false;
    } else if (currentScroll < lastScrollY - 10) {
        showNavbar.value = true;
    }

    lastScrollY = currentScroll;
};

onMounted(() => {
    window.addEventListener("scroll", handleScroll);
});

onUnmounted(() => {
    window.removeEventListener("scroll", handleScroll);
});
</script>

<template>
    <nav
        class="fixed top-0 inset-x-0 z-50 px-4 sm:px-6 bg-brand-secondary font-semibold text-lg tracking-wide transition-transform duration-300"
        :class="showNavbar ? 'translate-y-0' : '-translate-y-full'"
    >
        <div class="max-w-7xl mx-auto flex items-center justify-between">
            <!-- Logo -->
            <div class="flex items-center space-x-2 py-4">
                <ApplicationLogo height="h-6 sm:h-8" width="w-6 sm:w-8" />
                <span
                    class="font-heading text-xl sm:text-2xl lg:text-3xl font-bold text-brand-primary"
                >
                    Idealyst
                </span>
            </div>

            <!-- Desktop Menu -->
            <div class="hidden lg:flex items-center font-heading">
                <!-- Tentang Kami with Mega Menu -->
                <div
                    class="relative"
                    @mouseenter="showAboutMenu"
                    @mouseleave="hideAboutMenu"
                >
                    <Link
                        href="#about"
                        class="flex items-center space-x-1 px-4 py-8 text-gray-300 transition duration-300 border-b-2"
                        :class="{
                            'text-white border-brand-primary': isAboutMenuOpen,
                            'border-transparent': !isAboutMenuOpen,
                        }"
                    >
                        <span>Tentang Kami</span>
                        <i
                            class="mdi mdi-chevron-down text-sm transition-transform duration-200"
                            :class="{ 'rotate-180': isAboutMenuOpen }"
                        ></i>
                    </Link>
                </div>

                <!-- Platform with Mega Menu -->
                <div
                    class="relative"
                    @mouseenter="showMegaMenu"
                    @mouseleave="hideMegaMenu"
                >
                    <Link
                        href="#platform"
                        class="flex items-center space-x-1 px-4 py-8 text-gray-300 transition duration-300 border-b-2"
                        :class="{
                            'text-white border-brand-primary': isMegaMenuOpen,
                            'border-transparent': !isMegaMenuOpen,
                        }"
                    >
                        <span>Platform</span>
                        <i
                            class="mdi mdi-chevron-down text-sm transition-transform duration-200"
                            :class="{ 'rotate-180': isMegaMenuOpen }"
                        ></i>
                    </Link>
                </div>

                <Link
                    href="#ideas"
                    class="px-4 py-6 text-gray-300 hover:text-white transition duration-300 border-b-2 border-transparent hover:border-brand-primary"
                >
                    Eksplor Ide
                </Link>
                <Link
                    href="#help"
                    class="px-4 py-6 text-gray-300 hover:text-white transition duration-300 border-b-2 border-transparent hover:border-brand-primary"
                >
                    Panduan
                </Link>
            </div>

            <!-- Desktop Auth Buttons -->
            <div class="hidden lg:flex items-center space-x-4">
                <Link
                    href="/login"
                    class="text-gray-300 hover:text-white font-heading font-medium transition duration-300"
                >
                    Masuk
                </Link>
                <Link
                    href="/register"
                    class="group inline-flex items-center bg-brand-primary text-brand-secondary px-4 xl:px-5 py-2 rounded-full font-heading font-semibold transition duration-300 shadow hover:shadow-lg hover:bg-yellow-400"
                >
                    <span class="hidden xl:inline">Gabung Sekarang</span>
                    <span class="xl:hidden">Gabung</span>
                    <i
                        class="mdi mdi-arrow-right ml-2 text-lg transform group-hover:translate-x-1 transition-all duration-300"
                    ></i>
                </Link>
            </div>

            <!-- Mobile Menu Button -->
            <button
                @click="toggleMobileMenu"
                class="lg:hidden flex items-center justify-center w-10 h-10 rounded-md text-gray-300 hover:text-white hover:bg-brand-secondary/50 transition duration-300"
                :class="{
                    'text-white bg-brand-secondary/50': isMobileMenuOpen,
                }"
            >
                <i
                    class="mdi text-2xl transition-transform duration-300"
                    :class="isMobileMenuOpen ? 'mdi-close' : 'mdi-menu'"
                ></i>
            </button>
        </div>

        <!-- Desktop Mega Menus -->
        <TentangKami
            :is-open="isAboutMenuOpen"
            @mouseenter="keepAboutMenuOpen"
            @mouseleave="hideAboutMenu"
        />

        <Platform
            :is-open="isMegaMenuOpen"
            @mouseenter="keepMegaMenuOpen"
            @mouseleave="hideMegaMenu"
        />

        <!-- Mobile Menu -->
        <div
            class="lg:hidden transition-all duration-300 ease-in-out overflow-hidden font-heading"
            :class="
                isMobileMenuOpen
                    ? 'max-h-screen opacity-100'
                    : 'max-h-0 opacity-0'
            "
        >
            <div
                class="px-2 pt-2 pb-6 space-y-2 bg-brand-secondary border-t border-gray-600"
            >
                <!-- Mobile Navigation Links -->
                <div class="space-y-1">
                    <Link
                        href="#about"
                        @click="closeMobileMenu"
                        class="block px-4 py-3 text-gray-300 hover:text-white hover:bg-brand-secondary/50 rounded-lg transition duration-300"
                    >
                        Tentang Kami
                    </Link>
                    <Link
                        href="#platform"
                        @click="closeMobileMenu"
                        class="block px-4 py-3 text-gray-300 hover:text-white hover:bg-brand-secondary/50 rounded-lg transition duration-300"
                    >
                        Platform
                    </Link>
                    <Link
                        href="#ideas"
                        @click="closeMobileMenu"
                        class="block px-4 py-3 text-gray-300 hover:text-white hover:bg-brand-secondary/50 rounded-lg transition duration-300"
                    >
                        Eksplor Ide
                    </Link>
                    <Link
                        href="#help"
                        @click="closeMobileMenu"
                        class="block px-4 py-3 text-gray-300 hover:text-white hover:bg-brand-secondary/50 rounded-lg transition duration-300"
                    >
                        Panduan
                    </Link>
                </div>

                <!-- Mobile Auth Buttons -->
                <div class="pt-4 space-y-3 border-t border-gray-600">
                    <Link
                        href="/login"
                        @click="closeMobileMenu"
                        class="block px-4 py-3 text-center text-gray-300 hover:text-white hover:bg-brand-secondary/50 rounded-lg transition duration-300 font-heading font-medium"
                    >
                        Masuk
                    </Link>
                    <Link
                        href="/register"
                        @click="closeMobileMenu"
                        class="block px-4 py-3 text-center bg-brand-primary text-brand-secondary rounded-lg font-heading font-semibold transition duration-300 hover:bg-yellow-400"
                    >
                        Gabung Sekarang
                    </Link>
                </div>
            </div>
        </div>
    </nav>
</template>
