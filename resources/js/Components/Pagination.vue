<template>
	<nav v-if="meta.links.length > 3"
	     class="uk-margin-large uk-text-center"
	     role="navigation"
	     aria-label="Pagination Navigation"
	>
		<ul class="uk-pagination uk-margin-remove-bottom uk-flex-center" uk-margin>
			<li v-if="links.prev !== null">
				<Link :href="links.prev" title="Previous">
					<span class="uk-icon" uk-pagination-previous></span>
				</Link>
			</li>
			<li v-for="(link, index) in pages" :key="index" :class="{'uk-active' : link.active }">

				<template v-if="link.url === null ">
					<span v-html="link.label"></span>
				</template>

				<template v-else>
					<Link :href="link.url" v-html="link.label"/>
				</template>


			</li>

			<li v-if="links.next !== null">
				<Link :href="links.next" title="Next">
					<span uk-pagination-next></span>
				</Link>
			</li>
		</ul>

	</nav>
</template>

<script setup>
	import { Link } from '@inertiajs/vue3';
	import { computed } from 'vue';

	const props = defineProps({
		links: Object,
		meta: Object,
	})

	const pages = computed(() => props.meta.links.slice(1, -1));
</script>

<style scoped>

</style>
