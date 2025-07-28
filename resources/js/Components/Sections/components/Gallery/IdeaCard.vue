<template>
    <div>
        <!-- Hover Icon -->
        <div
            class="absolute top-4 right-4 z-10 w-12 h-12 rounded-full transform -translate-x-2 transition-all duration-200 group-hover:translate-x-0 group-hover:bg-brand-primary flex items-center justify-center"
        >
            <i
                class="mdi mdi-arrow-right text-brand-secondary text-2xl group-hover:text-brand-secondary"
            ></i>
        </div>

        <!-- Badge Kategori -->
        <div class="mb-4">
            <span
                class="inline-block px-3 py-1 rounded-full text-sm font-medium font-heading"
                :class="getCategoryBadgeClass(idea.category)"
            >
                {{ idea.category }}
            </span>
        </div>

        <!-- Idea Content -->
        <div class="mb-4 pt-4">
            <h3
                class="text-3xl font-semibold text-brand-secondary mb-2 group-hover:text-brand-primary transition-colors font-heading"
            >
                {{ idea.name }}
            </h3>
            <p
                class="font-body text-lg text-gray-800 leading-relaxed mb-3 line-clamp-4"
            >
                {{ idea.tagline }}
            </p>
            <p class="text-sm text-gray-500 py-2">
                Status:
                <span class="text-brand-secondary">
                    {{ idea.status }}
                </span>
                &middot; Founded:
                <span class="text-brand-secondary">
                    {{ idea.founded }}
                </span>
            </p>
        </div>

        <!-- Founder Info -->
        <div class="flex items-center space-x-3 font-body">
            <div
                class="w-10 h-10 bg-gradient-to-r from-brand-primary to-yellow-400 rounded-full flex items-center justify-center"
            >
                <span class="text-brand-secondary font-bold text-sm">
                    {{ idea.founder.charAt(0) }}
                </span>
            </div>
            <div>
                <div class="font-medium text-brand-secondary text-lg">
                    {{ idea.founder }}
                </div>
                <div class="text-gray-500 text-md">
                    {{ idea.university }}
                </div>
            </div>
        </div>
    </div>
</template>

<script setup>
const props = defineProps({
    idea: Object,
});

const getCategoryBadgeClass = (category) => {
    const categoryClasses = {
        "E-commerce": "bg-blue-50 text-blue-700 border border-blue-200",
        EdTech: "bg-yellow-50 text-yellow-700 border border-yellow-200",
        AgriTech: "bg-green-50 text-green-700 border border-green-200",
        HealthTech: "bg-red-50 text-red-700 border border-red-200",
        GreenTech: "bg-emerald-50 text-emerald-700 border border-emerald-200",
        FinTech: "bg-indigo-50 text-indigo-700 border border-indigo-200",
        Social: "bg-pink-50 text-pink-700 border border-pink-200",
    };
    return categoryClasses[category] || "bg-gray-100 text-gray-700 border";
};
</script>
