<script setup>
	import { Link } from '@inertiajs/vue3';
	import { computed } from 'vue'

	const props = defineProps({
		car: Object,
	});

	const image_alt = computed(() => `${props.car.title} Image`)

</script>

<template>
	<a class="uk-position-relative uk-cover-container">
		<img :src="car.image_url"
		     :alt="image_alt"
		     width="460"
		     height="680"
		     loading="lazy"
		     uk-cover
		>
		<canvas width="460" height="680"></canvas>
		<div class="uk-overlay-default uk-overlay-gradient uk-position-cover"></div>
		<footer
			class="uk-position-bottom uk-overlay uk-light uk-padding uk-text-white"
		>
			<div class="uk-grid uk-grid-small uk-child-width-1-1" uk-grid>
				<div class="uk-panel uk-flex uk-flex-middle uk-flex-between">
					<div class="uk-flex uk-flex-baseline">
						<span class="uk-icon uk-text-bold uk-text-warning uk-text-capitalize"
						      uk-icon="icon: airline-seat"
						></span>
						<span class="uk-margin-small-left uk-text-bold uk-text-warning">{{ car.seat_count }}</span>
					</div>
					<div class="uk-flex uk-flex-baseline">
						<span class="uk-icon uk-text-bold uk-text-warning uk-text-capitalize"
						      uk-icon="icon: gearbox"
						></span>
						<span class="uk-margin-small-left uk-text-bold uk-text-warning uk-text-capitalize">
							{{ car.transmission }}
						</span>
					</div>
				</div>
				<div class="uk-panel uk-flex uk-flex-middle uk-flex-between">
					<div class="uk-flex uk-flex-baseline">
						<span class="uk-icon uk-text-bold uk-text-warning"
						      uk-icon="icon: fuel"
						></span>
						<span
							class="uk-margin-small-left uk-text-bold uk-text-warning uk-text-capitalize"
						>
							{{ car.fuel_type }}
						</span>
					</div>
					<div class="uk-flex uk-flex-baseline">
						<span class="uk-icon uk-text-bold uk-text-warning"
						      uk-icon="icon: category"
						></span>
						<span class="uk-margin-small-left uk-text-bold uk-text-warning uk-text-capitalize">
							{{ car.car_type.label }}
						</span>
					</div>
				</div>
				<div class="uk-width-1-1 uk-panel">
					<h4 class="uk-h3 uk-text-bold uk-margin-small-bottom">
						{{ car.title }}
					</h4>
				</div>
				<div class="uk-grid uk-child-width-1-2@m uk-grid-small uk-child-width-1-1 uk-flex-middle" uk-grid>
					<div class="uk-panel">
						<h5 class="uk-width-1-1 uk-h3 uk-margin-remove">
							<span class="uk-text-success uk-text-bold">{{ car.price }}</span>
							<span class="uk-text-emphasis">/d</span>
						</h5>
					</div>
					<div class="uk-panel">
						<Link href="" class="uk-button uk-button-primary book-now uk-width-1-1">
							Book now
						</Link>
					</div>
				</div>
			</div>
		</footer>
	</a>
</template>

<style scoped>
	.book-now {
		background-color: #564aeb;
		border-color: #564aeb;
		color: #fff;
	}

	.book-now:hover, .book-now:focus, .book-now:focus-visible {
		background-color: #fff;
		border-color: #fff;
		color: #1a1e23;
	}

</style>
