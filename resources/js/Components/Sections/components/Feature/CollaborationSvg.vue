<template>
    <div class="feature-svg">
        <svg
            width="100%"
            height="600"
            viewBox="0 0 600 600"
            xmlns="http://www.w3.org/2000/svg"
        >
            <defs>
                <linearGradient
                    id="primaryGradient"
                    x1="0%"
                    y1="0%"
                    x2="100%"
                    y2="100%"
                >
                    <stop offset="0%" stop-color="#4b6cb7" />
                    <stop offset="100%" stop-color="#182848" />
                </linearGradient>
                <filter
                    id="shadow"
                    x="-50%"
                    y="-50%"
                    width="200%"
                    height="200%"
                >
                    <feDropShadow
                        dx="0"
                        dy="4"
                        stdDeviation="6"
                        flood-color="#000"
                        flood-opacity="0.1"
                    />
                </filter>
                <marker
                    id="arrowhead"
                    markerWidth="10"
                    markerHeight="7"
                    refX="0"
                    refY="3.5"
                    orient="auto"
                >
                    <polygon points="0 0, 10 3.5, 0 7" fill="#9ca3af" />
                </marker>
            </defs>

            <!-- Background -->
            <rect width="600" height="600" rx="20" fill="#f9fafb" />

            <!-- Step 1: Individual Profiles -->
            <g class="step-1">
                <rect
                    x="50"
                    y="70"
                    width="120"
                    height="100"
                    rx="12"
                    fill="white"
                    filter="url(#shadow)"
                />
                <circle cx="80" cy="100" r="15" fill="url(#primaryGradient)" />
                <text
                    x="80"
                    y="108"
                    text-anchor="middle"
                    fill="white"
                    font-size="14"
                    font-family="'Urbanist', sans-serif"
                >
                    🎨
                </text>
                <text
                    x="110"
                    y="100"
                    fill="#1f2937"
                    font-size="12"
                    font-weight="600"
                    font-family="'Urbanist', sans-serif"
                >
                    UI/UX Designer
                </text>
                <text
                    x="110"
                    y="120"
                    fill="#6b7280"
                    font-size="10"
                    font-family="'Urbanist', sans-serif"
                >
                    3+ years experience
                </text>
                <text
                    x="110"
                    y="140"
                    fill="#6b7280"
                    font-size="10"
                    font-family="'Urbanist', sans-serif"
                >
                    Design, Prototyping
                </text>

                <rect
                    x="200"
                    y="70"
                    width="120"
                    height="100"
                    rx="12"
                    fill="white"
                    filter="url(#shadow)"
                />
                <circle cx="230" cy="100" r="15" fill="url(#primaryGradient)" />
                <text
                    x="230"
                    y="108"
                    text-anchor="middle"
                    fill="white"
                    font-size="14"
                    font-family="'Urbanist', sans-serif"
                >
                    💻
                </text>
                <text
                    x="260"
                    y="100"
                    fill="#1f2937"
                    font-size="12"
                    font-weight="600"
                    font-family="'Urbanist', sans-serif"
                >
                    Full Stack Dev
                </text>
                <text
                    x="260"
                    y="120"
                    fill="#6b7280"
                    font-size="10"
                    font-family="'Urbanist', sans-serif"
                >
                    5+ years experience
                </text>
                <text
                    x="260"
                    y="140"
                    fill="#6b7280"
                    font-size="10"
                    font-family="'Urbanist', sans-serif"
                >
                    Coding, Backend
                </text>

                <rect
                    x="350"
                    y="70"
                    width="120"
                    height="100"
                    rx="12"
                    fill="white"
                    filter="url(#shadow)"
                />
                <circle cx="380" cy="100" r="15" fill="url(#primaryGradient)" />
                <text
                    x="380"
                    y="108"
                    text-anchor="middle"
                    fill="white"
                    font-size="14"
                    font-family="'Urbanist', sans-serif"
                >
                    📊
                </text>
                <text
                    x="410"
                    y="100"
                    fill="#1f2937"
                    font-size="12"
                    font-weight="600"
                    font-family="'Urbanist', sans-serif"
                >
                    Growth Marketer
                </text>
                <text
                    x="410"
                    y="120"
                    fill="#6b7280"
                    font-size="10"
                    font-family="'Urbanist', sans-serif"
                >
                    4+ years experience
                </text>
                <text
                    x="410"
                    y="140"
                    fill="#6b7280"
                    font-size="10"
                    font-family="'Urbanist', sans-serif"
                >
                    SEO, Campaigns
                </text>
            </g>

            <!-- Arrows from Profiles to Matching Algorithm -->
            <path
                d="M110,170 Q205,180 300,190"
                stroke="#9ca3af"
                stroke-width="2"
                fill="none"
                marker-end="url(#arrowhead)"
            />
            <path
                d="M260,170 Q280,180 300,190"
                stroke="#9ca3af"
                stroke-width="2"
                fill="none"
                marker-end="url(#arrowhead)"
            />
            <path
                d="M410,170 Q355,180 300,190"
                stroke="#9ca3af"
                stroke-width="2"
                fill="none"
                marker-end="url(#arrowhead)"
            />

            <!-- Step 2: Matching Algorithm -->
            <g class="step-2">
                <rect
                    x="200"
                    y="190"
                    width="200"
                    height="80"
                    rx="12"
                    fill="white"
                    stroke="#e5e7eb"
                    stroke-width="1"
                />
                <circle cx="230" cy="220" r="15" fill="url(#primaryGradient)" />
                <text
                    x="230"
                    y="228"
                    text-anchor="middle"
                    fill="white"
                    font-size="14"
                    font-family="'Urbanist', sans-serif"
                >
                    🤖
                </text>
                <text
                    x="260"
                    y="220"
                    fill="#1f2937"
                    font-size="14"
                    font-weight="600"
                    font-family="'Urbanist', sans-serif"
                >
                    AI Matching
                </text>
                <text
                    x="260"
                    y="235"
                    fill="#6b7280"
                    font-size="11"
                    font-family="'Urbanist', sans-serif"
                >
                    Based on:
                </text>
                <text
                    x="260"
                    y="250"
                    fill="#6b7280"
                    font-size="11"
                    font-family="'Urbanist', sans-serif"
                >
                    Skills, Vision, Commitment
                </text>
            </g>

            <!-- Arrow from Matching Algorithm to Team Formation -->
            <line
                x1="300"
                y1="270"
                x2="300"
                y2="290"
                stroke="#9ca3af"
                stroke-width="2"
                marker-end="url(#arrowhead)"
            />

            <!-- Step 3: Team Formation -->
            <g class="step-3">
                <rect
                    x="200"
                    y="290"
                    width="200"
                    height="80"
                    rx="12"
                    fill="white"
                    stroke="#e5e7eb"
                    stroke-width="1"
                />
                <circle cx="230" cy="320" r="15" fill="url(#primaryGradient)" />
                <text
                    x="230"
                    y="328"
                    text-anchor="middle"
                    fill="white"
                    font-size="14"
                    font-family="'Urbanist', sans-serif"
                >
                    🚀
                </text>
                <text
                    x="260"
                    y="320"
                    fill="#1f2937"
                    font-size="14"
                    font-weight="600"
                    font-family="'Urbanist', sans-serif"
                >
                    Team Formation
                </text>
                <text
                    x="260"
                    y="340"
                    fill="#6b7280"
                    font-size="11"
                    font-family="'Urbanist', sans-serif"
                >
                    Complementary Skills
                </text>
                <text
                    x="260"
                    y="360"
                    fill="#6b7280"
                    font-size="11"
                    font-family="'Urbanist', sans-serif"
                >
                    Shared Vision & Commitment
                </text>
            </g>

            <!-- Step 4: Collaboration Tools -->
            <g class="step-4">
                <rect
                    x="50"
                    y="390"
                    width="200"
                    height="80"
                    rx="12"
                    fill="white"
                    stroke="#e5e7eb"
                    stroke-width="1"
                />
                <circle cx="80" cy="420" r="15" fill="url(#primaryGradient)" />
                <text
                    x="80"
                    y="428"
                    text-anchor="middle"
                    fill="white"
                    font-size="14"
                    font-family="'Urbanist', sans-serif"
                >
                    💬
                </text>
                <text
                    x="110"
                    y="420"
                    fill="#1f2937"
                    font-size="14"
                    font-weight="600"
                    font-family="'Urbanist', sans-serif"
                >
                    Collaboration Tools
                </text>
                <text
                    x="110"
                    y="440"
                    fill="#6b7280"
                    font-size="11"
                    font-family="'Urbanist', sans-serif"
                >
                    Chat, Tasks, Files
                </text>
                <text
                    x="110"
                    y="460"
                    fill="#6b7280"
                    font-size="11"
                    font-family="'Urbanist', sans-serif"
                >
                    Easy Integration
                </text>
            </g>

            <!-- Step 5: Project Progress -->
            <g class="step-5">
                <rect
                    x="350"
                    y="390"
                    width="200"
                    height="80"
                    rx="12"
                    fill="white"
                    stroke="#e5e7eb"
                    stroke-width="1"
                />
                <circle cx="380" cy="420" r="15" fill="url(#primaryGradient)" />
                <text
                    x="380"
                    y="428"
                    text-anchor="middle"
                    fill="white"
                    font-size="14"
                    font-family="'Urbanist', sans-serif"
                >
                    📈
                </text>
                <text
                    x="410"
                    y="420"
                    fill="#1f2937"
                    font-size="14"
                    font-weight="600"
                    font-family="'Urbanist', sans-serif"
                >
                    Project Progress
                </text>
                <text
                    x="410"
                    y="440"
                    fill="#6b7280"
                    font-size="11"
                    font-family="'Urbanist', sans-serif"
                >
                    50% Complete
                </text>
                <text
                    x="410"
                    y="460"
                    fill="#6b7280"
                    font-size="11"
                    font-family="'Urbanist', sans-serif"
                >
                    Deadline: 2 months
                </text>
            </g>

            <!-- Success Indicators -->
            <g class="success">
                <rect
                    x="200"
                    y="500"
                    width="200"
                    height="60"
                    rx="12"
                    fill="white"
                    stroke="#e5e7eb"
                    stroke-width="1"
                />
                <circle cx="230" cy="530" r="15" fill="#10b981" />
                <text
                    x="230"
                    y="538"
                    text-anchor="middle"
                    fill="white"
                    font-size="14"
                    font-family="'Urbanist', sans-serif"
                >
                    ✓
                </text>
                <text
                    x="260"
                    y="530"
                    fill="#1f2937"
                    font-size="14"
                    font-weight="600"
                    font-family="'Urbanist', sans-serif"
                >
                    Success Metrics
                </text>
                <text
                    x="260"
                    y="550"
                    fill="#10b981"
                    font-size="11"
                    font-family="'Urbanist', sans-serif"
                >
                    90% Team Satisfaction
                </text>
            </g>
        </svg>
    </div>
</template>

<style scoped>
.feature-svg {
    width: 100%;
    max-width: 600px;
    margin: 0 auto;
}
</style>
