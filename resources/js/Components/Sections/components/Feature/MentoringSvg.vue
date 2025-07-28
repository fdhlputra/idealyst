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
                    id="mentorGradient"
                    x1="0%"
                    y1="0%"
                    x2="100%"
                    y2="100%"
                >
                    <stop offset="0%" stop-color="#fbbf24" />
                    <stop offset="100%" stop-color="#f59e0b" />
                </linearGradient>
                <linearGradient
                    id="menteeGradient"
                    x1="0%"
                    y1="0%"
                    x2="100%"
                    y2="100%"
                >
                    <stop offset="0%" stop-color="#4b6cb7" />
                    <stop offset="100%" stop-color="#182848" />
                </linearGradient>
            </defs>

            <!-- Background -->
            <rect width="600" height="600" rx="20" fill="#f9fafb" />


            <!-- Mentor Profile -->
            <g class="mentor-profile">
                <rect
                    x="50"
                    y="70"
                    width="500"
                    height="80"
                    rx="12"
                    fill="white"
                    stroke="#e5e7eb"
                    stroke-width="1"
                />
                <circle cx="80" cy="100" r="15" fill="url(#mentorGradient)" />
                <text
                    x="80"
                    y="108"
                    text-anchor="middle"
                    fill="white"
                    font-size="14"
                    font-family="'Urbanist', sans-serif"
                >
                    👨‍🏫
                </text>
                <text
                    x="110"
                    y="100"
                    fill="#1f2937"
                    font-size="14"
                    font-weight="600"
                    font-family="'Urbanist', sans-serif"
                >
                    Expert Mentor
                </text>
                <text
                    x="110"
                    y="120"
                    fill="#6b7280"
                    font-size="11"
                    font-family="'Urbanist', sans-serif"
                >
                    10+ Years Experience
                </text>
                <text
                    x="110"
                    y="140"
                    fill="#6b7280"
                    font-size="11"
                    font-family="'Urbanist', sans-serif"
                >
                    Business Strategy Specialist
                </text>
            </g>

            <!-- Mentee Profile -->
            <g class="mentee-profile">
                <rect
                    x="50"
                    y="170"
                    width="500"
                    height="80"
                    rx="12"
                    fill="white"
                    stroke="#e5e7eb"
                    stroke-width="1"
                />
                <circle cx="80" cy="200" r="15" fill="url(#menteeGradient)" />
                <text
                    x="80"
                    y="208"
                    text-anchor="middle"
                    fill="white"
                    font-size="14"
                    font-family="'Urbanist', sans-serif"
                >
                    👩‍💻
                </text>
                <text
                    x="110"
                    y="200"
                    fill="#1f2937"
                    font-size="14"
                    font-weight="600"
                    font-family="'Urbanist', sans-serif"
                >
                    Startup Founder
                </text>
                <text
                    x="110"
                    y="220"
                    fill="#6b7280"
                    font-size="11"
                    font-family="'Urbanist', sans-serif"
                >
                    Tech Industry
                </text>
                <text
                    x="110"
                    y="240"
                    fill="#6b7280"
                    font-size="11"
                    font-family="'Urbanist', sans-serif"
                >
                    Early Stage
                </text>
            </g>

            <!-- Session Details -->
            <g class="session-details">
                <rect
                    x="50"
                    y="270"
                    width="500"
                    height="80"
                    rx="12"
                    fill="white"
                    stroke="#e5e7eb"
                    stroke-width="1"
                />
                <circle cx="80" cy="300" r="15" fill="url(#mentorGradient)" />
                <text
                    x="80"
                    y="308"
                    text-anchor="middle"
                    fill="white"
                    font-size="14"
                    font-family="'Urbanist', sans-serif"
                >
                    📅
                </text>
                <text
                    x="110"
                    y="300"
                    fill="#1f2937"
                    font-size="14"
                    font-weight="600"
                    font-family="'Urbanist', sans-serif"
                >
                    Mentoring Session
                </text>
                <text
                    x="110"
                    y="320"
                    fill="#6b7280"
                    font-size="11"
                    font-family="'Urbanist', sans-serif"
                >
                    Duration: 60 Minutes
                </text>
                <text
                    x="110"
                    y="340"
                    fill="#6b7280"
                    font-size="11"
                    font-family="'Urbanist', sans-serif"
                >
                    Format: 1-on-1
                </text>
            </g>

            <!-- Topics Covered -->
            <g class="topics-covered">
                <rect
                    x="50"
                    y="370"
                    width="500"
                    height="80"
                    rx="12"
                    fill="white"
                    stroke="#e5e7eb"
                    stroke-width="1"
                />
                <circle cx="80" cy="400" r="15" fill="url(#menteeGradient)" />
                <text
                    x="80"
                    y="408"
                    text-anchor="middle"
                    fill="white"
                    font-size="14"
                    font-family="'Urbanist', sans-serif"
                >
                    📋
                </text>
                <text
                    x="110"
                    y="400"
                    fill="#1f2937"
                    font-size="14"
                    font-weight="600"
                    font-family="'Urbanist', sans-serif"
                >
                    Topics Covered
                </text>
                <text
                    x="110"
                    y="420"
                    fill="#6b7280"
                    font-size="11"
                    font-family="'Urbanist', sans-serif"
                >
                    Marketing Strategy
                </text>
                <text
                    x="110"
                    y="440"
                    fill="#6b7280"
                    font-size="11"
                    font-family="'Urbanist', sans-serif"
                >
                    Product Development
                </text>
            </g>

            <!-- Outcome -->
            <g class="outcome">
                <rect
                    x="50"
                    y="470"
                    width="500"
                    height="80"
                    rx="12"
                    fill="white"
                    stroke="#e5e7eb"
                    stroke-width="1"
                />
                <circle cx="80" cy="500" r="15" fill="#10b981" />
                <text
                    x="80"
                    y="508"
                    text-anchor="middle"
                    fill="white"
                    font-size="14"
                    font-family="'Urbanist', sans-serif"
                >
                    ✓
                </text>
                <text
                    x="110"
                    y="500"
                    fill="#1f2937"
                    font-size="14"
                    font-weight="600"
                    font-family="'Urbanist', sans-serif"
                >
                    Mentoring Outcome
                </text>
                <text
                    x="110"
                    y="520"
                    fill="#10b981"
                    font-size="11"
                    font-family="'Urbanist', sans-serif"
                >
                    Clear Action Plan
                </text>
                <text
                    x="110"
                    y="540"
                    fill="#10b981"
                    font-size="11"
                    font-family="'Urbanist', sans-serif"
                >
                    20% Growth Expected
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
