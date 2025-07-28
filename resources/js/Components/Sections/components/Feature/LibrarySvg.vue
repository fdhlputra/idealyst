<template>
    <div class="feature-svg">
        <svg
            width="100%"
            height="600"
            viewBox="0 0 600 600"
            xmlns="http://www.w3.org/2000/svg"
        >
            <defs>
                <linearGradient id="primaryGradient" x1="0%" y1="0%" x2="100%" y2="100%">
                    <stop offset="0%" stop-color="#4b6cb7" />
                    <stop offset="100%" stop-color="#182848" />
                </linearGradient>
                <filter id="cardShadow" x="-50%" y="-50%" width="200%" height="200%">
                    <feDropShadow dx="0" dy="4" stdDeviation="6" flood-color="#000" flood-opacity="0.1"/>
                </filter>
            </defs>

            <rect width="600" height="600" rx="20" fill="#f9fafb" />

            <g class="categories">
                <rect x="50" y="50" width="220" height="500" rx="15" fill="white" filter="url(#cardShadow)" />
                <line x1="70" y1="95" x2="250" y2="95" stroke="#e5e7eb" stroke-width="1" />

                <g class="category-item active">
                    <rect x="70" y="110" width="180" height="45" rx="10" fill="url(#primaryGradient)" />
                    <text x="85" y="130" fill="white" font-size="16" font-family="'Urbanist', sans-serif">📄</text>
                    <text x="115" y="130" fill="white" font-size="14" font-weight="600" font-family="'Urbanist', sans-serif">Templates</text>
                    <text x="115" y="150" fill="rgba(255,255,255,0.8)" font-size="10" font-family="'Urbanist', sans-serif">150+ Business docs</text>
                </g>

                <g class="category-item">
                    <rect x="70" y="170" width="180" height="45" rx="10" fill="#f3f4f6" />
                    <text x="85" y="190" fill="#6b7280" font-size="16" font-family="'Urbanist', sans-serif">🎥</text>
                    <text x="115" y="190" fill="#374151" font-size="14" font-weight="600" font-family="'Urbanist', sans-serif">Video Courses</text>
                    <text x="115" y="210" fill="#6b7280" font-size="10" font-family="'Urbanist', sans-serif">80+ Hours of content</text>
                </g>

                <g class="category-item">
                    <rect x="70" y="230" width="180" height="45" rx="10" fill="#f3f4f6" />
                    <text x="85" y="250" fill="#6b7280" font-size="16" font-family="'Urbanist', sans-serif">🛠️</text>
                    <text x="115" y="250" fill="#374151" font-size="14" font-weight="600" font-family="'Urbanist', sans-serif">Business Tools</text>
                    <text x="115" y="270" fill="#6b7280" font-size="10" font-family="'Urbanist', sans-serif">25+ Calculators & Tools</text>
                </g>

                <g class="category-item">
                    <rect x="70" y="290" width="180" height="45" rx="10" fill="#f3f4f6" />
                    <text x="85" y="310" fill="#6b7280" font-size="16" font-family="'Urbanist', sans-serif">⚖️</text>
                    <text x="115" y="310" fill="#374151" font-size="14" font-weight="600" font-family="'Urbanist', sans-serif">Legal Docs</text>
                    <text x="115" y="330" fill="#6b7280" font-size="10" font-family="'Urbanist', sans-serif">40+ Legal templates</text>
                </g>

                <g class="category-item">
                    <rect x="70" y="350" width="180" height="45" rx="10" fill="#f3f4f6" />
                    <text x="85" y="370" fill="#6b7280" font-size="16" font-family="'Urbanist', sans-serif">📊</text>
                    <text x="115" y="370" fill="#374151" font-size="14" font-weight="600" font-family="'Urbanist', sans-serif">Financial Models</text>
                    <text x="115" y="390" fill="#6b7280" font-size="10" font-family="'Urbanist', sans-serif">30+ Excel templates</text>
                </g>
            </g>

            <g class="templates-flow">
                <rect x="300" y="50" width="250" height="80" rx="12" fill="white" filter="url(#cardShadow)" />
                <circle cx="330" cy="80" r="15" fill="#10b981" />
                <text x="330" y="87" text-anchor="middle" fill="white" font-size="14" font-family="'Urbanist', sans-serif">📄</text>
                <text x="360" y="80" fill="#1f2937" font-size="14" font-weight="600" font-family="'Urbanist', sans-serif">Business Plan Template</text>
                <text x="360" y="100" fill="#6b7280" font-size="11" font-family="'Urbanist', sans-serif">Complete 25-page template</text>
                <rect x="320" y="110" width="50" height="18" rx="8" fill="#dbeafe" />
                <text x="345" y="122" text-anchor="middle" fill="#1d4ed8" font-size="10" font-weight="600" font-family="'Urbanist', sans-serif">Download</text>

                <rect x="300" y="150" width="250" height="80" rx="12" fill="white" filter="url(#cardShadow)" />
                <circle cx="330" cy="180" r="15" fill="#f59e0b" />
                <text x="330" y="187" text-anchor="middle" fill="white" font-size="14" font-family="'Urbanist', sans-serif">📊</text>
                <text x="360" y="180" fill="#1f2937" font-size="14" font-weight="600" font-family="'Urbanist', sans-serif">Pitch Deck Template</text>
                <text x="360" y="200" fill="#6b7280" font-size="11" font-family="'Urbanist', sans-serif">Investor-ready slides</text>
                <rect x="320" y="210" width="50" height="18" rx="8" fill="#dbeafe" />
                <text x="345" y="222" text-anchor="middle" fill="#1d4ed8" font-size="10" font-weight="600" font-family="'Urbanist', sans-serif">Download</text>

                <rect x="300" y="250" width="250" height="80" rx="12" fill="white" filter="url(#cardShadow)" />
                <circle cx="330" cy="280" r="15" fill="#8b5cf6" />
                <text x="330" y="287" text-anchor="middle" fill="white" font-size="14" font-family="'Urbanist', sans-serif">⚖️</text>
                <text x="360" y="280" fill="#1f2937" font-size="14" font-weight="600" font-family="'Urbanist', sans-serif">Co-founder Agreement</text>
                <text x="360" y="300" fill="#6b7280" font-size="11" font-family="'Urbanist', sans-serif">Legal protection doc</text>
                <rect x="320" y="310" width="50" height="18" rx="8" fill="#dbeafe" />
                <text x="345" y="322" text-anchor="middle" fill="#1d4ed8" font-size="10" font-weight="600" font-family="'Urbanist', sans-serif">Download</text>

                <rect x="300" y="350" width="250" height="80" rx="12" fill="white" filter="url(#cardShadow)" />
                <circle cx="330" cy="380" r="15" fill="#3b82f6" />
                <text x="330" y="387" text-anchor="middle" fill="white" font-size="14" font-family="'Urbanist', sans-serif">📋</text>
                <text x="360" y="380" fill="#1f2937" font-size="14" font-weight="600" font-family="'Urbanist', sans-serif">Startup Guide</text>
                <text x="360" y="400" fill="#6b7280" font-size="11" font-family="'Urbanist', sans-serif">Initial business steps</text>
                <rect x="320" y="410" width="50" height="18" rx="8" fill="#dbeafe" />
                <text x="345" y="422" text-anchor="middle" fill="#1d4ed8" font-size="10" font-weight="600" font-family="'Urbanist', sans-serif">Download</text>
            </g>

            <g class="stats">
                <rect x="50" y="560" width="220" height="30" rx="12" fill="#e5e7eb" />
                <text x="60" y="580" fill="#4b6cb7" font-size="12" font-weight="600" font-family="'Urbanist', sans-serif">📈 1,247 downloads this month</text>
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
