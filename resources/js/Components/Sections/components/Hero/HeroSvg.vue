<template>
    <div class="relative">
        <div
            class="relative transform hover:scale-105 transition-transform duration-500"
        >
            <svg
                width="100%"
                height="500"
                viewBox="0 0 600 500"
                xmlns="http://www.w3.org/2000/svg"
                class="drop-shadow-2xl"
            >
                <defs>
                    <!-- Gradients -->
                    <linearGradient
                        id="primaryGradient"
                        x1="0%"
                        y1="0%"
                        x2="100%"
                        y2="100%"
                    >
                        <stop
                            offset="0%"
                            style="stop-color: #fbde37; stop-opacity: 1"
                        />
                        <stop
                            offset="100%"
                            style="stop-color: #f59e0b; stop-opacity: 1"
                        />
                    </linearGradient>

                    <linearGradient
                        id="cardGradient"
                        x1="0%"
                        y1="0%"
                        x2="100%"
                        y2="100%"
                    >
                        <stop
                            offset="0%"
                            style="stop-color: #324491; stop-opacity: 1"
                        />
                        <stop
                            offset="100%"
                            style="stop-color: #283673; stop-opacity: 1"
                        />
                    </linearGradient>

                    <linearGradient
                        id="sidebarGradient"
                        x1="0%"
                        y1="0%"
                        x2="100%"
                        y2="100%"
                    >
                        <stop
                            offset="0%"
                            style="stop-color: #1f2b55; stop-opacity: 1"
                        />
                        <stop
                            offset="100%"
                            style="stop-color: #1c2549; stop-opacity: 1"
                        />
                    </linearGradient>

                    <!-- Filters -->
                    <filter id="glow">
                        <feGaussianBlur stdDeviation="3" result="coloredBlur" />
                        <feMerge>
                            <feMergeNode in="coloredBlur" />
                            <feMergeNode in="SourceGraphic" />
                        </feMerge>
                    </filter>

                    <filter id="softGlow">
                        <feGaussianBlur stdDeviation="2" result="coloredBlur" />
                        <feMerge>
                            <feMergeNode in="coloredBlur" />
                            <feMergeNode in="SourceGraphic" />
                        </feMerge>
                    </filter>
                </defs>

                <!-- Main Dashboard Background -->
                <rect
                    width="600"
                    height="500"
                    rx="30"
                    fill="#fffceb"
                    stroke="url(#primaryGradient)"
                    stroke-width="4"
                />

                <!-- Header Section -->
                <rect
                    x="20"
                    y="20"
                    width="560"
                    height="60"
                    rx="12"
                    fill="#283673"
                    filter="url(#softGlow)"
                />

                <!-- Logo Area -->
                <rect
                    x="40"
                    y="35"
                    width="140"
                    height="30"
                    rx="15"
                    fill="url(#secondaryGradient)"
                />

                <!-- Logo Icon (MDI Lightbulb) -->
                <image href="/logo.svg" x="40" y="36" width="32" height="32" />

                <text
                    x="78"
                    y="58"
                    fill="#FBDE37"
                    font-family="'Urbanist', Arial, sans-serif"
                    font-size="18"
                    font-weight="700"
                >
                    Idealyst
                </text>

                <!-- Header Navigation Icons -->
                <!-- Notification Icon (MDI Bell) -->
                <circle cx="520" cy="50" r="18" fill="#324491" opacity="0.8" />
                <g transform="translate(512, 42)">
                    <path
                        d="M10,21H14A2,2 0 0,1 12,23A2,2 0 0,1 10,21M21,19V20H3V19L5,17V11C5,7.9 7.03,5.17 10,4.29C10,4.19 10,4.1 10,4A2,2 0 0,1 12,2A2,2 0 0,1 14,4C14,4.1 14,4.19 14,4.29C16.97,5.17 19,7.9 19,11V17L21,19Z"
                        fill="url(#primaryGradient)"
                        transform="scale(0.6)"
                    />
                </g>

                <!-- Profile Icon (MDI Account) -->
                <circle cx="550" cy="50" r="18" fill="#324491" opacity="0.8" />
                <g transform="translate(542, 42)">
                    <path
                        d="M12,4A4,4 0 0,1 16,8A4,4 0 0,1 12,12A4,4 0 0,1 8,8A4,4 0 0,1 12,4M12,14C16.42,14 20,15.79 20,18V20H4V18C4,15.79 7.58,14 12,14Z"
                        fill="url(#primaryGradient)"
                        transform="scale(0.6)"
                    />
                </g>

                <!-- Sidebar -->
                <rect
                    x="20"
                    y="100"
                    width="140"
                    height="380"
                    rx="12"
                    fill="#263573"
                    filter="url(#softGlow)"
                />

                <!-- Sidebar Menu Items -->
                <!-- Active Menu Item -->
                <rect
                    x="35"
                    y="120"
                    width="110"
                    height="32"
                    rx="8"
                    fill="url(#primaryGradient)"
                    filter="url(#glow)"
                />

                <!-- Dashboard Icon  -->
                <g transform="translate(45, 128) scale(0.7)">
                    <path
                        fill="#1C2549"
                        stroke="#1C2549"
                        stroke-width="1.5"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M3.75 6A2.25 2.25 0 0 1 6 3.75h2.25A2.25 2.25 0 0 1 10.5 6v2.25a2.25 2.25 0 0 1-2.25 2.25H6a2.25 2.25 0 0 1-2.25-2.25V6ZM3.75 15.75A2.25 2.25 0 0 1 6 13.5h2.25a2.25 2.25 0 0 1 2.25 2.25V18a2.25 2.25 0 0 1-2.25 2.25H6A2.25 2.25 0 0 1 3.75 18v-2.25ZM13.5 6a2.25 2.25 0 0 1 2.25-2.25H18A2.25 2.25 0 0 1 20.25 6v2.25A2.25 2.25 0 0 1 18 10.5h-2.25a2.25 2.25 0 0 1-2.25-2.25V6ZM13.5 15.75a2.25 2.25 0 0 1 2.25-2.25H18a2.25 2.25 0 0 1 2.25 2.25V18A2.25 2.25 0 0 1 18 20.25h-2.25A2.25 2.25 0 0 1 13.5 18v-2.25Z"
                    />
                </g>

                <text
                    x="65"
                    y="141"
                    fill="#1C2549"
                    font-family="'Urbanist', Arial, sans-serif"
                    font-size="11"
                    font-weight="600"
                >
                    Dashboard
                </text>

                <!-- Other Menu Items -->
                <g transform="translate(45, 168) scale(0.6)">
                    <path
                        fill="none"
                        stroke="#94A3B8"
                        stroke-width="1.5"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M6 6.878V6a2.25 2.25 0 0 1 2.25-2.25h7.5A2.25 2.25 0 0 1 18 6v.878m-12 0c.235-.083.487-.128.75-.128h10.5c.263 0 .515.045.75.128m-12 0A2.25 2.25 0 0 0 4.5 9v.878m13.5-3A2.25 2.25 0 0 1 19.5 9v.878m0 0a2.246 2.246 0 0 0-.75-.128H5.25c-.263 0-.515.045-.75.128m15 0A2.25 2.25 0 0 1 21 12v6a2.25 2.25 0 0 1-2.25 2.25H5.25A2.25 2.25 0 0 1 3 18v-6c0-.98.626-1.813 1.5-2.122"
                    />
                </g>

                <text
                    x="65"
                    y="177"
                    fill="#94A3B8"
                    font-family="'Urbanist', Arial, sans-serif"
                    font-size="11"
                >
                    Projects
                </text>

                <g transform="translate(45, 198)">
                    <path
                        d="M16,6L18.29,8.29L13.41,13.17L9.41,9.17L2,16.59L3.41,18L9.41,12L13.41,16L19.71,9.71L22,12V6H16Z"
                        fill="#94A3B8"
                        transform="scale(0.6)"
                    />
                </g>
                <text
                    x="65"
                    y="207"
                    fill="#94A3B8"
                    font-family="'Urbanist', Arial, sans-serif"
                    font-size="11"
                >
                    Analytics
                </text>

                <g transform="translate(45, 227) scale(0.6)">
                    <path
                        fill="none"
                        stroke="#94A3B8"
                        stroke-width="1.5"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M12 18v-5.25m0 0a6.01 6.01 0 0 0 1.5-.189m-1.5.189a6.01 6.01 0 0 1-1.5-.189m3.75 7.478a12.06 12.06 0 0 1-4.5 0m3.75 2.383a14.406 14.406 0 0 1-3 0M14.25 18v-.192c0-.983.658-1.823 1.508-2.316a7.5 7.5 0 1 0-7.517 0c.85.493 1.509 1.333 1.509 2.316V18"
                    />
                </g>

                <text
                    x="65"
                    y="237"
                    fill="#94A3B8"
                    font-family="'Urbanist', Arial, sans-serif"
                    font-size="11"
                >
                    Ideas
                </text>

                <!-- Dashboard Stats Cards -->

                <!-- Card 1 - Active Ideas -->
                <rect
                    x="180"
                    y="100"
                    width="120"
                    height="80"
                    rx="12"
                    fill="url(#cardGradient)"
                    filter="url(#softGlow)"
                />

                <!-- Ikon baru dari Heroicons -->
                <circle cx="275" cy="125" r="15" fill="#FBDE37" opacity="0.2" />
                <g transform="translate(268, 118) scale(0.6)">
                    <path
                        fill="none"
                        stroke="#FBDE37"
                        stroke-width="1.5"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M15.59 14.37a6 6 0 0 1-5.84 7.38v-4.8m5.84-2.58a14.98 14.98 0 0 0 6.16-12.12A14.98 14.98 0 0 0 9.631 8.41m5.96 5.96a14.926 14.926 0 0 1-5.841 2.58m-.119-8.54a6 6 0 0 0-7.381 5.84h4.8m2.581-5.84a14.927 14.927 0 0 0-2.58 5.84m2.699 2.7c-.103.021-.207.041-.311.06a15.09 15.09 0 0 1-2.448-2.448 14.9 14.9 0 0 1 .06-.312m-2.24 2.39a4.493 4.493 0 0 0-1.757 4.306 4.493 4.493 0 0 0 4.306-1.758M16.5 9a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Z"
                    />
                </g>

                <!-- Text -->
                <text
                    x="190"
                    y="155"
                    fill="#FBDE37"
                    font-family="'Urbanist', Arial, sans-serif"
                    font-size="18"
                    font-weight="700"
                >
                    24
                </text>
                <text
                    x="190"
                    y="170"
                    fill="#ADB8E2"
                    font-family="'Urbanist', Arial, sans-serif"
                    font-size="11"
                >
                    Active Ideas
                </text>

                <!-- Card 2 - In Progress -->
                <rect
                    x="320"
                    y="120"
                    width="120"
                    height="80"
                    rx="12"
                    fill="url(#cardGradient)"
                />
                <circle cx="415" cy="145" r="15" fill="#FBDE37" opacity="0.2" />

                <!-- Ikon dari Heroicons (trend arrow) -->
                <g transform="translate(408, 137) scale(0.6)">
                    <path
                        fill="none"
                        stroke="#FBDE37"
                        stroke-width="1.5"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M2.25 18 9 11.25l4.306 4.306a11.95 11.95 0 0 1 5.814-5.518l2.74-1.22m0 0-5.94-2.281m5.94 2.28-2.28 5.941"
                    />
                </g>

                <text
                    x="330"
                    y="175"
                    fill="#FBDE37"
                    font-family="'Urbanist', Arial, sans-serif"
                    font-size="18"
                    font-weight="700"
                >
                    12
                </text>
                <text
                    x="330"
                    y="190"
                    fill="#ADB8E2"
                    font-family="'Urbanist', Arial, sans-serif"
                    font-size="11"
                >
                    In Progress
                </text>

                <!-- Card 3 - Teams -->
                <rect
                    x="460"
                    y="120"
                    width="120"
                    height="80"
                    rx="12"
                    fill="url(#cardGradient)"
                />
                <circle cx="555" cy="145" r="15" fill="#FBDE37" opacity="0.2" />
                <g transform="translate(548, 137)">
                    <path
                        d="M12,5.5A3.5,3.5 0 0,1 15.5,9A3.5,3.5 0 0,1 12,12.5A3.5,3.5 0 0,1 8.5,9A3.5,3.5 0 0,1 12,5.5M5,8C5.56,8 6.08,8.15 6.53,8.42C6.38,9.85 6.8,11.27 7.66,12.38C7.16,13.34 6.16,14 5,14A3,3 0 0,1 2,11A3,3 0 0,1 5,8M19,8A3,3 0 0,1 22,11A3,3 0 0,1 19,14C17.84,14 16.84,13.34 16.34,12.38C17.2,11.27 17.62,9.85 17.47,8.42C17.92,8.15 18.44,8 19,8M5.5,18.25C5.5,16.18 8.41,14.5 12,14.5C15.59,14.5 18.5,16.18 18.5,18.25V20H5.5V18.25M0,20V18.5C0,17.11 1.89,15.94 4.45,15.6C3.86,16.28 3.5,17.22 3.5,18.25V20H0M24,20H20.5V18.25C20.5,17.22 20.14,16.28 19.55,15.6C22.11,15.94 24,17.11 24,18.5V20Z"
                        fill="#FBDE37"
                        transform="scale(0.6)"
                    />
                </g>
                <text
                    x="470"
                    y="175"
                    fill="#FBDE37"
                    font-family="'Urbanist', Arial, sans-serif"
                    font-size="18"
                    font-weight="700"
                >
                    8
                </text>
                <text
                    x="470"
                    y="190"
                    fill="#ADB8E2"
                    font-family="'Urbanist', Arial, sans-serif"
                    font-size="11"
                >
                    Teams
                </text>

                <!-- Main Content Table -->
                <rect
                    x="180"
                    y="220"
                    width="400"
                    height="240"
                    rx="12"
                    fill="#283673"
                    stroke="#FBDE37"
                    stroke-width="1"
                    filter="url(#softGlow)"
                />

                <!-- Table Header -->
                <rect
                    x="190"
                    y="235"
                    width="380"
                    height="30"
                    rx="6"
                    fill="url(#primaryGradient)"
                />
                <text
                    x="200"
                    y="255"
                    fill="#1C2549"
                    font-family="'Urbanist', Arial, sans-serif"
                    font-size="13"
                    font-weight="700"
                >
                    Ide Startup Terbaru
                </text>

                <!-- Table Rows with alternating colors -->
                <rect
                    x="190"
                    y="275"
                    width="380"
                    height="25"
                    rx="4"
                    fill="#324491"
                    opacity="0.5"
                />
                <rect
                    x="190"
                    y="310"
                    width="380"
                    height="25"
                    rx="4"
                    fill="#1F2B55"
                />
                <rect
                    x="190"
                    y="345"
                    width="380"
                    height="25"
                    rx="4"
                    fill="#324491"
                    opacity="0.5"
                />
                <rect
                    x="190"
                    y="380"
                    width="380"
                    height="25"
                    rx="4"
                    fill="#1F2B55"
                />
                <rect
                    x="190"
                    y="415"
                    width="380"
                    height="25"
                    rx="4"
                    fill="#324491"
                    opacity="0.5"
                />

                <!-- Sample Table Content -->
                <text
                    x="200"
                    y="292"
                    fill="#ADB8E2"
                    font-family="'Urbanist', Arial, sans-serif"
                    font-size="11"
                >
                    EcoTech Solutions
                </text>
                <text
                    x="200"
                    y="327"
                    fill="#ADB8E2"
                    font-family="'Urbanist', Arial, sans-serif"
                    font-size="11"
                >
                    FinanceAI Platform
                </text>
                <text
                    x="200"
                    y="362"
                    fill="#ADB8E2"
                    font-family="'Urbanist', Arial, sans-serif"
                    font-size="11"
                >
                    HealthCare Connect
                </text>
                <text
                    x="200"
                    y="397"
                    fill="#ADB8E2"
                    font-family="'Urbanist', Arial, sans-serif"
                    font-size="11"
                >
                    EduLearn VR
                </text>
                <text
                    x="200"
                    y="432"
                    fill="#ADB8E2"
                    font-family="'Urbanist', Arial, sans-serif"
                    font-size="11"
                >
                    Smart City IoT
                </text>

                <!-- Status Indicators -->
                <circle cx="540" cy="287.5" r="5" fill="#22C55E" />
                <circle cx="540" cy="322.5" r="5" fill="#EAB308" />
                <circle cx="540" cy="357.5" r="5" fill="#22C55E" />
                <circle cx="540" cy="392.5" r="5" fill="#F59E0B" />
                <circle cx="540" cy="427.5" r="5" fill="#22C55E" />

                <!-- Floating Action Button -->
                <circle
                    cx="540"
                    cy="420"
                    r="28"
                    fill="url(#primaryGradient)"
                    filter="url(#glow)"
                />

                <!-- Plus Icon (MDI Plus) -->
                <g transform="translate(530, 410)">
                    <path
                        d="M19,13H13V19H11V13H5V11H11V5H13V11H19V13Z"
                        fill="#1C2549"
                        transform="scale(0.8)"
                    />
                </g>
            </svg>
        </div>

        <!-- Floating Animation Elements -->
        <div
            class="absolute -top-4 -right-4 w-8 h-8 bg-yellow-400/30 rounded-full blur-sm animate-bounce"
            style="animation-delay: 1.2s; animation-duration: 3s"
        ></div>
        <div
            class="absolute -bottom-6 -left-6 w-6 h-6 bg-yellow-400/20 rounded-full blur-sm animate-pulse"
            style="animation-delay: 1.8s; animation-duration: 4s"
        ></div>
        <div
            class="absolute top-1/2 -right-8 w-4 h-4 bg-blue-400/20 rounded-full blur-sm animate-ping"
            style="animation-delay: 2.5s; animation-duration: 2.5s"
        ></div>
    </div>
</template>

<script setup>
// No additional imports needed for this component
// All icons are now inline SVG using MDI paths
</script>

<style scoped>
/* Custom animations for floating elements */
@keyframes float {
    0%,
    100% {
        transform: translateY(0px) rotate(0deg);
    }
    50% {
        transform: translateY(-10px) rotate(180deg);
    }
}

.animate-float {
    animation: float 3s ease-in-out infinite;
}

/* Enhance hover effects */
.relative:hover .animate-bounce {
    animation-play-state: paused;
}

.relative:hover .animate-pulse {
    animation-play-state: paused;
}

.relative:hover .animate-ping {
    animation-play-state: paused;
}
</style>
