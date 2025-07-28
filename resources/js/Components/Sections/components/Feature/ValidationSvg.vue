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
                    id="ideaGradient"
                    x1="0%"
                    y1="0%"
                    x2="100%"
                    y2="100%"
                >
                    <stop offset="0%" stop-color="#f59e0b" />
                    <stop offset="100%" stop-color="#ea580c" />
                </linearGradient>
                <linearGradient
                    id="validationGradient"
                    x1="0%"
                    y1="0%"
                    x2="100%"
                    y2="100%"
                >
                    <stop offset="0%" stop-color="#10b981" />
                    <stop offset="100%" stop-color="#059669" />
                </linearGradient>
                <linearGradient
                    id="feedbackGradient"
                    x1="0%"
                    y1="0%"
                    x2="100%"
                    y2="100%"
                >
                    <stop offset="0%" stop-color="#3b82f6" />
                    <stop offset="100%" stop-color="#1d4ed8" />
                </linearGradient>
            </defs>

            <!-- Background -->
            <rect width="600" height="600" rx="20" fill="#f9fafb" />

            <!-- Step 1: Initial Idea -->
            <g class="step-1">
                <rect
                    x="50"
                    y="70"
                    width="200"
                    height="80"
                    rx="12"
                    fill="white"
                    stroke="#e5e7eb"
                    stroke-width="1"
                />
                <circle cx="80" cy="100" r="15" fill="url(#ideaGradient)" />
                <text
                    x="80"
                    y="107"
                    text-anchor="middle"
                    fill="white"
                    font-size="14"
                    font-family="'Urbanist', sans-serif"
                >
                    💡
                </text>
                <text
                    x="110"
                    y="100"
                    fill="#1f2937"
                    font-size="14"
                    font-weight="600"
                    font-family="'Urbanist', sans-serif"
                >
                    Initial Idea
                </text>
                <text
                    x="110"
                    y="120"
                    fill="#6b7280"
                    font-size="11"
                    font-family="'Urbanist', sans-serif"
                >
                    Digital Skills E-learning
                </text>
                <text
                    x="110"
                    y="140"
                    fill="#6b7280"
                    font-size="11"
                    font-family="'Urbanist', sans-serif"
                >
                    Platform
                </text>
            </g>

            <!-- Step 2: Community Feedback -->
            <g class="step-2">
                <rect
                    x="50"
                    y="170"
                    width="200"
                    height="80"
                    rx="12"
                    fill="white"
                    stroke="#e5e7eb"
                    stroke-width="1"
                />
                <circle cx="80" cy="200" r="15" fill="url(#feedbackGradient)" />
                <text
                    x="80"
                    y="208"
                    text-anchor="middle"
                    fill="white"
                    font-size="14"
                    font-family="'Urbanist', sans-serif"
                >
                    👥
                </text>
                <text
                    x="110"
                    y="200"
                    fill="#1f2937"
                    font-size="14"
                    font-weight="600"
                    font-family="'Urbanist', sans-serif"
                >
                    Community Feedback
                </text>
                <text
                    x="110"
                    y="220"
                    fill="#6b7280"
                    font-size="11"
                    font-family="'Urbanist', sans-serif"
                >
                    Great idea!
                </text>
                <text
                    x="110"
                    y="240"
                    fill="#6b7280"
                    font-size="11"
                    font-family="'Urbanist', sans-serif"
                >
                    Needs differentiation
                </text>
            </g>

            <!-- Step 3: Market Survey -->
            <g class="step-3">
                <rect
                    x="50"
                    y="270"
                    width="200"
                    height="80"
                    rx="12"
                    fill="white"
                    stroke="#e5e7eb"
                    stroke-width="1"
                />
                <circle
                    cx="80"
                    cy="300"
                    r="15"
                    fill="url(#validationGradient)"
                />
                <text
                    x="80"
                    y="308"
                    text-anchor="middle"
                    fill="white"
                    font-size="14"
                    font-family="'Urbanist', sans-serif"
                >
                    📊
                </text>
                <text
                    x="110"
                    y="300"
                    fill="#1f2937"
                    font-size="14"
                    font-weight="600"
                    font-family="'Urbanist', sans-serif"
                >
                    Market Survey
                </text>
                <text
                    x="110"
                    y="320"
                    fill="#6b7280"
                    font-size="11"
                    font-family="'Urbanist', sans-serif"
                >
                    78% Urbanistested
                </text>
                <text
                    x="110"
                    y="340"
                    fill="#6b7280"
                    font-size="11"
                    font-family="'Urbanist', sans-serif"
                >
                    Fair price: $50
                </text>
            </g>

            <!-- Step 4: Expert Mentoring -->
            <g class="step-4">
                <rect
                    x="350"
                    y="170"
                    width="200"
                    height="80"
                    rx="12"
                    fill="white"
                    stroke="#e5e7eb"
                    stroke-width="1"
                />
                <circle
                    cx="380"
                    cy="200"
                    r="15"
                    fill="url(#validationGradient)"
                />
                <text
                    x="380"
                    y="208"
                    text-anchor="middle"
                    fill="white"
                    font-size="14"
                    font-family="'Urbanist', sans-serif"
                >
                    👨‍💼
                </text>
                <text
                    x="410"
                    y="200"
                    fill="#1f2937"
                    font-size="14"
                    font-weight="600"
                    font-family="'Urbanist', sans-serif"
                >
                    Expert Mentoring
                </text>
                <text
                    x="410"
                    y="220"
                    fill="#10b981"
                    font-size="11"
                    font-family="'Urbanist', sans-serif"
                >
                    ✓ Right timing
                </text>
                <text
                    x="410"
                    y="240"
                    fill="#f59e0b"
                    font-size="11"
                    font-family="'Urbanist', sans-serif"
                >
                    ⚠ Needs uniqueness
                </text>
            </g>

            <!-- Step 5: Validation Results -->
            <g class="step-5">
                <rect
                    x="350"
                    y="270"
                    width="200"
                    height="80"
                    rx="12"
                    fill="white"
                    stroke="#e5e7eb"
                    stroke-width="1"
                />
                <circle
                    cx="380"
                    cy="300"
                    r="15"
                    fill="url(#validationGradient)"
                />
                <text
                    x="380"
                    y="308"
                    text-anchor="middle"
                    fill="white"
                    font-size="14"
                    font-family="'Urbanist', sans-serif"
                >
                    📈
                </text>
                <text
                    x="410"
                    y="300"
                    fill="#1f2937"
                    font-size="14"
                    font-weight="600"
                    font-family="'Urbanist', sans-serif"
                >
                    Validation Results
                </text>
                <text
                    x="410"
                    y="320"
                    fill="#10b981"
                    font-size="11"
                    font-family="'Urbanist', sans-serif"
                >
                    Score: 75%
                </text>
                <text
                    x="410"
                    y="340"
                    fill="#10b981"
                    font-size="11"
                    font-family="'Urbanist', sans-serif"
                >
                    Proceed!
                </text>
            </g>

            <!-- Step 6: Launch Plan -->
            <g class="step-6">
                <rect
                    x="350"
                    y="370"
                    width="200"
                    height="80"
                    rx="12"
                    fill="white"
                    stroke="#e5e7eb"
                    stroke-width="1"
                />
                <circle cx="380" cy="400" r="15" fill="url(#ideaGradient)" />
                <text
                    x="380"
                    y="408"
                    text-anchor="middle"
                    fill="white"
                    font-size="14"
                    font-family="'Urbanist', sans-serif"
                >
                    🚀
                </text>
                <text
                    x="410"
                    y="400"
                    fill="#1f2937"
                    font-size="14"
                    font-weight="600"
                    font-family="'Urbanist', sans-serif"
                >
                    Launch Plan
                </text>
                <text
                    x="410"
                    y="420"
                    fill="#6b7280"
                    font-size="11"
                    font-family="'Urbanist', sans-serif"
                >
                    Timeline: 3 months
                </text>
                <text
                    x="410"
                    y="440"
                    fill="#6b7280"
                    font-size="11"
                    font-family="'Urbanist', sans-serif"
                >
                    Target: 1,000 users
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
