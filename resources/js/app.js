import "../css/app.css";
import "./bootstrap";

import { createInertiaApp } from "@inertiajs/vue3";
import { resolvePageComponent } from "laravel-vite-plugin/inertia-helpers";
import { createApp, h } from "vue";
import { ZiggyVue } from "../../vendor/tightenco/ziggy";

// Vuetify
import "vuetify/styles";
import { createVuetify } from "vuetify";
import * as components from "vuetify/components";
import * as directives from "vuetify/directives";
import { mdi } from "vuetify/iconsets/mdi";
import "@mdi/font/css/materialdesignicons.css";

// Motion Plugin
import { MotionPlugin } from "@vueuse/motion";

// Vuetify Instance
const vuetify = createVuetify({
    components,
    directives,
    icons: {
        defaultSet: "mdi",
        sets: {
            mdi,
        },
    },
    theme: {
        defaultTheme: "light",
        themes: {
            light: {
                colors: {
                    primary: "#364C63",
                    secondary: "#F3B340",
                },
            },
        },
    },
});

const appName = import.meta.env.VITE_APP_NAME || "Laravel";

createInertiaApp({
    title: (title) => `${title} - ${appName}`,
    resolve: (name) =>
        resolvePageComponent(
            `./Pages/${name}.vue`,
            import.meta.glob("./Pages/**/*.vue")
        ),
    setup({ el, App, props, plugin }) {
        return createApp({ render: () => h(App, props) })
            .use(plugin)
            .use(ZiggyVue)
            .use(vuetify)
            .use(MotionPlugin)
            .mount(el);
    },
    progress: {
        color: "#4B5563",
    },
});
