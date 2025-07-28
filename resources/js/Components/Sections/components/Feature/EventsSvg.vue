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
                    id="eventGradient"
                    x1="0%"
                    y1="0%"
                    x2="100%"
                    y2="100%"
                >
                    <stop offset="0%" stop-color="#fbbf24" />
                    <stop offset="100%" stop-color="#f59e0b" />
                </linearGradient>
            </defs>

            <!-- Background -->
            <rect width="600" height="600" rx="20" fill="#f9fafb" />

            <!-- Event 1 -->
            <g class="event-1">
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
                <circle cx="80" cy="100" r="15" fill="url(#eventGradient)" />
                <text
                    x="80"
                    y="108"
                    text-anchor="middle"
                    fill="white"
                    font-size="14"
                    font-family="'Urbanist', sans-serif"
                >
                    🎤
                </text>
                <text
                    x="110"
                    y="100"
                    fill="#1f2937"
                    font-size="14"
                    font-weight="600"
                    font-family="'Urbanist', sans-serif"
                >
                    UI/UX Workshop
                </text>
                <text
                    x="110"
                    y="120"
                    fill="#6b7280"
                    font-size="11"
                    font-family="'Urbanist', sans-serif"
                >
                    Date: July 25
                </text>
                <text
                    x="110"
                    y="140"
                    fill="#6b7280"
                    font-size="11"
                    font-family="'Urbanist', sans-serif"
                >
                    Location: Jakarta
                </text>
            </g>

            <!-- Event 2 -->
            <g class="event-2">
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
                <circle cx="80" cy="200" r="15" fill="url(#eventGradient)" />
                <text
                    x="80"
                    y="208"
                    text-anchor="middle"
                    fill="white"
                    font-size="14"
                    font-family="'Urbanist', sans-serif"
                >
                    🎤
                </text>
                <text
                    x="110"
                    y="200"
                    fill="#1f2937"
                    font-size="14"
                    font-weight="600"
                    font-family="'Urbanist', sans-serif"
                >
                    Startup Seminar
                </text>
                <text
                    x="110"
                    y="220"
                    fill="#6b7280"
                    font-size="11"
                    font-family="'Urbanist', sans-serif"
                >
                    Date: August 10
                </text>
                <text
                    x="110"
                    y="240"
                    fill="#6b7280"
                    font-size="11"
                    font-family="'Urbanist', sans-serif"
                >
                    Location: Bandung
                </text>
            </g>

            <!-- Event 3 -->
            <g class="event-3">
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
                <circle cx="80" cy="300" r="15" fill="url(#eventGradient)" />
                <text
                    x="80"
                    y="308"
                    text-anchor="middle"
                    fill="white"
                    font-size="14"
                    font-family="'Urbanist', sans-serif"
                >
                    🎤
                </text>
                <text
                    x="110"
                    y="300"
                    fill="#1f2937"
                    font-size="14"
                    font-weight="600"
                    font-family="'Urbanist', sans-serif"
                >
                    Coding Bootcamp
                </text>
                <text
                    x="110"
                    y="320"
                    fill="#6b7280"
                    font-size="11"
                    font-family="'Urbanist', sans-serif"
                >
                    Date: September 15
                </text>
                <text
                    x="110"
                    y="340"
                    fill="#6b7280"
                    font-size="11"
                    font-family="'Urbanist', sans-serif"
                >
                    Location: Surabaya
                </text>
            </g>

            <!-- Event 4 -->
            <g class="event-4">
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
                <circle cx="80" cy="400" r="15" fill="url(#eventGradient)" />
                <text
                    x="80"
                    y="408"
                    text-anchor="middle"
                    fill="white"
                    font-size="14"
                    font-family="'Urbanist', sans-serif"
                >
                    🎤
                </text>
                <text
                    x="110"
                    y="400"
                    fill="#1f2937"
                    font-size="14"
                    font-weight="600"
                    font-family="'Urbanist', sans-serif"
                >
                    Networking Event
                </text>
                <text
                    x="110"
                    y="420"
                    fill="#6b7280"
                    font-size="11"
                    font-family="'Urbanist', sans-serif"
                >
                    Date: October 20
                </text>
                <text
                    x="110"
                    y="440"
                    fill="#6b7280"
                    font-size="11"
                    font-family="'Urbanist', sans-serif"
                >
                    Location: Bali
                </text>
            </g>

            <!-- Event Stats -->
            <g class="event-stats">
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
                    📈
                </text>
                <text
                    x="110"
                    y="500"
                    fill="#1f2937"
                    font-size="14"
                    font-weight="600"
                    font-family="'Urbanist', sans-serif"
                >
                    Event Stats
                </text>
                <text
                    x="110"
                    y="520"
                    fill="#10b981"
                    font-size="11"
                    font-weight="600"
                    font-family="'Urbanist', sans-serif"
                >
                    1,500+ Participants
                </text>
                <text
                    x="110"
                    y="540"
                    fill="#10b981"
                    font-size="11"
                    font-weight="600"
                    font-family="'Urbanist', sans-serif"
                >
                    95% Satisfaction
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
