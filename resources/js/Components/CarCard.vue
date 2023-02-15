<script setup>
	import { computed } from 'vue';

	const props = defineProps({
		car: Object,
	});

	const imageAlt = computed(() => props.car.title + ' image');
</script>

<template>
	<a href="#" class="uk-link-toggle uk-link-reset uk-transition-toggle" tabindex="0">

		<div class="uk-card uk-card-hover uk-card-small uk-card-default uk-border-rounded uk-box-shadow-medium">
			<header class="uk-card-header">
				<h3 class="uk-card-title uk-text-bold uk-margin-remove-bottom uk-text-truncate">
					<span class="uk-link-heading">{{ car.title }}</span>

				</h3>
				<p class="uk-text-muted uk-margin-small-top uk-margin-remove">{{ car.car_type.label }}</p>
			</header>
			<div class="uk-card-media-top uk-card-body uk-cover-container">
				<img :src="car.image_url" :alt="imageAlt" width="480" height="480" uk-cover>
				<canvas width="370" height="370"></canvas>
				<div class="uk-transition-slide-bottom  uk-position-cover uk-overlay uk-overlay-primary">
				</div>
			</div>
			<footer class="uk-card-footer">
				<div class="uk-grid uk-flex-middle uk-grid-small" uk-grid>
					<div class="uk-width-expand">
						<div class="uk-grid uk-grid-auto uk-grid-small uk-flex-middle" uk-grid>
							<div>
							<span class="uk-text-primary uk-icon uk-margin-small-right"
							      uk-icon="icon: airline-seat"
							></span>
								<span class="uk-text-capitalize">{{ car.seat_count }}</span>
							</div>
							<div>
								<span class="uk-text-primary uk-icon uk-margin-small-right"
								      uk-icon="icon: gearbox"
								></span>
								<span class="uk-text-capitalize">{{ car.transmission }}</span>
							</div>
						</div>
					</div>
					<div class="uk-width-auto">
						<p class="uk-margin-remove">
							<span class="uk-text-bold uk-text-success">{{ car.price }}</span>
							<span>/ d</span>
						</p>
					</div>
				</div>
			</footer>
		</div>

	</a>
</template>

<style scoped>
	.uk-overlay-primary {
		background-color: rgba(86, 74, 235, 0.5);
	}

</style>
