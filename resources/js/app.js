import { createInertiaApp } from "@inertiajs/inertia-vue3";
import { InertiaProgress } from "@inertiajs/progress";
import { resolvePageComponent } from "laravel-vite-plugin/inertia-helpers";
import { createApp, h } from "vue";
import { ZiggyVue } from "../../vendor/tightenco/ziggy/dist/vue.m";
import "../scss/app.scss";
import "./bootstrap";

import.meta.glob(["../images/**"]);

const appName =
	window.document.getElementsByTagName("title")[0]?.innerText || "Car Rental";

createInertiaApp({
	title: (title) => `${title} - ${appName}`,
	resolve: (name) =>
		resolvePageComponent(
			`./Pages/${name}.vue`,
			import.meta.glob("./Pages/**/*.vue")
		),
	setup({ el, app, props, plugin }) {
		return createApp({ render: () => h(app, props) })
			.use(plugin)
			.use(ZiggyVue, Ziggy)
			.mount(el);
	},
});

InertiaProgress.init({ color: "#564aeb" });
