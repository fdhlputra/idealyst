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
                    id="fundingGradient"
                    x1="0%"
                    y1="0%"
                    x2="100%"
                    y2="100%"
                >
                    <stop offset="0%" stop-color="#10b981" />
                    <stop offset="100%" stop-color="#059669" />
                </linearGradient>
                <linearGradient
                    id="connectGradient"
                    x1="0%"
                    y1="0%"
                    x2="100%"
                    y2="100%"
                >
                    <stop offset="0%" stop-color="#4b6cb7" />
                    <stop offset="100%" stop-color="#182848" />
                </linearGradient>
                <filter
                    id="cardShadow"
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
            </defs>

            <!-- Background -->
            <rect width="600" height="600" rx="20" fill="#f9fafb" />

            <!-- Startup Profile -->
            <g class="startup-card">
                <rect
                    x="50"
                    y="70"
                    width="500"
                    height="100"
                    rx="12"
                    fill="white"
                    filter="url(#cardShadow)"
                />
                <circle cx="80" cy="110" r="15" fill="url(#connectGradient)" />
                <text
                    x="80"
                    y="118"
                    text-anchor="middle"
                    fill="white"
                    font-size="14"
                    font-family="'Urbanist', sans-serif"
                >
                    🚀
                </text>
                <text
                    x="110"
                    y="110"
                    fill="#1f2937"
                    font-size="14"
                    font-weight="600"
                    font-family="'Urbanist', sans-serif"
                >
                    TechStart AI
                </text>
                <text
                    x="110"
                    y="130"
                    fill="#6b7280"
                    font-size="11"
                    font-family="'Urbanist', sans-serif"
                >
                    SaaS • Series A Ready
                </text>
                <text
                    x="300"
                    y="110"
                    fill="#059669"
                    font-size="11"
                    font-weight="600"
                    font-family="'Urbanist', sans-serif"
                >
                    📊 MRR: $45K
                </text>
                <text
                    x="300"
                    y="130"
                    fill="#059669"
                    font-size="11"
                    font-weight="600"
                    font-family="'Urbanist', sans-serif"
                >
                    👥 Users: 2.5K
                </text>
                <text
                    x="450"
                    y="110"
                    fill="#059669"
                    font-size="11"
                    font-weight="600"
                    font-family="'Urbanist', sans-serif"
                >
                    📈 Growth: 15%
                </text>
                <text
                    x="450"
                    y="130"
                    fill="#059669"
                    font-size="11"
                    font-weight="600"
                    font-family="'Urbanist', sans-serif"
                >
                    💰 Need: $2M
                </text>
            </g>

            <!-- AI Matching -->
            <g class="ai-match">
                <rect
                    x="50"
                    y="190"
                    width="500"
                    height="80"
                    rx="12"
                    fill="white"
                    filter="url(#cardShadow)"
                />
                <circle cx="80" cy="220" r="15" fill="url(#connectGradient)" />
                <text
                    x="80"
                    y="228"
                    text-anchor="middle"
                    fill="white"
                    font-size="14"
                    font-family="'Urbanist', sans-serif"
                >
                    🤖
                </text>
                <text
                    x="110"
                    y="220"
                    fill="#1f2937"
                    font-size="14"
                    font-weight="600"
                    font-family="'Urbanist', sans-serif"
                >
                    AI Matching Engine
                </text>
                <text
                    x="110"
                    y="240"
                    fill="#6b7280"
                    font-size="11"
                    font-family="'Urbanist', sans-serif"
                >
                    Industry Match
                </text>
                <text
                    x="110"
                    y="260"
                    fill="#6b7280"
                    font-size="11"
                    font-family="'Urbanist', sans-serif"
                >
                    Stage Fit • Ticket Size
                </text>
            </g>

            <!-- Investor 1 -->
            <g class="investor-1">
                <rect
                    x="50"
                    y="290"
                    width="250"
                    height="80"
                    rx="12"
                    fill="white"
                    filter="url(#cardShadow)"
                />
                <circle cx="80" cy="320" r="15" fill="url(#fundingGradient)" />
                <text
                    x="80"
                    y="328"
                    text-anchor="middle"
                    fill="white"
                    font-size="14"
                    font-family="'Urbanist', sans-serif"
                >
                    🏦
                </text>
                <text
                    x="110"
                    y="320"
                    fill="#1f2937"
                    font-size="14"
                    font-weight="600"
                    font-family="'Urbanist', sans-serif"
                >
                    Sequoia Capital
                </text>
                <text
                    x="110"
                    y="340"
                    fill="#6b7280"
                    font-size="11"
                    font-family="'Urbanist', sans-serif"
                >
                    Series A • $50M+ Fund
                </text>
                <text
                    x="110"
                    y="360"
                    fill="#059669"
                    font-size="11"
                    font-weight="600"
                    font-family="'Urbanist', sans-serif"
                >
                    92% Match
                </text>
            </g>

            <!-- Investor 2 -->
            <g class="investor-2">
                <rect
                    x="300"
                    y="290"
                    width="250"
                    height="80"
                    rx="12"
                    fill="white"
                    filter="url(#cardShadow)"
                />
                <circle cx="330" cy="320" r="15" fill="url(#fundingGradient)" />
                <text
                    x="330"
                    y="328"
                    text-anchor="middle"
                    fill="white"
                    font-size="14"
                    font-family="'Urbanist', sans-serif"
                >
                    💼
                </text>
                <text
                    x="360"
                    y="320"
                    fill="#1f2937"
                    font-size="14"
                    font-weight="600"
                    font-family="'Urbanist', sans-serif"
                >
                    Andreessen Horowitz
                </text>
                <text
                    x="360"
                    y="340"
                    fill="#6b7280"
                    font-size="11"
                    font-family="'Urbanist', sans-serif"
                >
                    Tech Focus • $100M Fund
                </text>
                <text
                    x="360"
                    y="360"
                    fill="#059669"
                    font-size="11"
                    font-weight="600"
                    font-family="'Urbanist', sans-serif"
                >
                    88% Match
                </text>
            </g>

            <!-- Connection Success -->
            <g class="success-notification">
                <rect
                    x="50"
                    y="390"
                    width="500"
                    height="80"
                    rx="12"
                    fill="white"
                    filter="url(#cardShadow)"
                />
                <circle cx="80" cy="420" r="15" fill="url(#fundingGradient)" />
                <text
                    x="80"
                    y="428"
                    text-anchor="middle"
                    fill="white"
                    font-size="14"
                    font-family="'Urbanist', sans-serif"
                >
                    ✓
                </text>
                <text
                    x="110"
                    y="420"
                    fill="#1f2937"
                    font-size="14"
                    font-weight="600"
                    font-family="'Urbanist', sans-serif"
                >
                    Connection Sent
                </text>
                <text
                    x="110"
                    y="440"
                    fill="#6b7280"
                    font-size="11"
                    font-family="'Urbanist', sans-serif"
                >
                    Sequoia Capital Notified
                </text>
                <text
                    x="110"
                    y="460"
                    fill="#6b7280"
                    font-size="11"
                    font-family="'Urbanist', sans-serif"
                >
                    Response in 48 hours
                </text>
            </g>

            <!-- Success Metrics -->
            <g class="success-metrics">
                <rect
                    x="50"
                    y="490"
                    width="500"
                    height="80"
                    rx="12"
                    fill="white"
                    filter="url(#cardShadow)"
                />
                <circle cx="80" cy="520" r="15" fill="#10b981" />
                <text
                    x="80"
                    y="528"
                    text-anchor="middle"
                    fill="white"
                    font-size="14"
                    font-family="'Urbanist', sans-serif"
                >
                    📈
                </text>
                <text
                    x="110"
                    y="520"
                    fill="#1f2937"
                    font-size="14"
                    font-weight="600"
                    font-family="'Urbanist', sans-serif"
                >
                    Success Metrics
                </text>
                <text
                    x="110"
                    y="540"
                    fill="#059669"
                    font-size="11"
                    font-weight="600"
                    font-family="'Urbanist', sans-serif"
                >
                    87% Success Rate
                </text>
                <text
                    x="110"
                    y="560"
                    fill="#059669"
                    font-size="11"
                    font-weight="600"
                    font-family="'Urbanist', sans-serif"
                >
                    $12M+ Raised
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
