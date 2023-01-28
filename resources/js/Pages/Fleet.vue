<template>
	<Head title="Our Fleet"/>

	<GuestLayout>
		<section class="uk-section uk-section-default uk-border-rounded">
			<div class="uk-container uk-container-xlarge">
				<header class="uk-grid uk-grid-large uk-child-width-1-1 uk-flex-middle uk-grid-match" uk-grid>
					<div class="uk-width-1-3@m">
						<div class="uk-panel">
							<h1 class="uk-text-bold">
								Rent a car in easy steps.
							</h1>
							<p class="uk-text-muted">
								Renting a car brings you freedom, and we'll help you find the best car for you at a
								great price.
							</p>
						</div>
					</div>
					<div class="uk-width-expand@m">
						<div class="uk-panel uk-border uk-tile uk-tile-small uk-tile-default uk-border-rounded">
							<form class="uk-form-stacked uk-grid uk-grid-medium uk-child-width-1-1 uk-child-width-1-2@m"
							      uk-grid
							>
								<div>
									<label class="uk-form-label uk-text-bold">
										<span class="uk-icon uk-margin-small-right uk-text-primary"
										      uk-icon="icon: map-pin"
										></span>
										Pick-up
									</label>
									<div class="uk-form-controls">
										<input type="text"
										       class="uk-input uk-border-rounded"
										       placeholder="Buruburu, Nairobi"
										/>
									</div>
								</div>
								<div>
									<label class="uk-form-label uk-text-bold">
										<span class="uk-icon uk-margin-small-right uk-text-primary"
										      uk-icon="icon: map-pin"
										></span>
										Drop-off
									</label>
									<div class="uk-form-controls">
										<input type="text"
										       class="uk-input uk-border-rounded"
										       placeholder="Buruburu, Nairobi"
										/>
									</div>
								</div>
								<div>
									<div class="uk-grid uk-grid-small uk-child-width-1-2 uk-flex-middle" uk-grid>
										<div>
											<label class="uk-form-label uk-text-bold">
												<span class="uk-icon uk-margin-small-right uk-text-primary"
												      uk-icon="icon: calendar-days"
												></span>
												Pick-up Date
											</label>
											<div class="uk-form-controls">
												<input type="date" class="uk-input uk-border-rounded"/>
											</div>
										</div>
										<div>
											<label class="uk-form-label uk-text-bold">
												<span class="uk-icon uk-margin-small-right uk-text-primary"
												      uk-icon="icon: calendar-days"
												></span>
												Drop-off Date
											</label>
											<div class="uk-form-controls">
												<input type="date" class="uk-input uk-border-rounded"/>
											</div>
										</div>
									</div>
								</div>
								<div>
									<div class="uk-grid uk-grid-small uk-child-width-1-2 uk-flex-middle" uk-grid>
										<div>
											<label class="uk-form-label uk-text-bold">
												<span class="uk-icon uk-margin-small-right uk-text-primary"
												      uk-icon="icon: clock-play"
												></span>
												Pick-up Time
											</label>
											<div class="uk-form-controls">
												<input type="time" class="uk-input uk-border-rounded"/>
											</div>
										</div>
										<div>
											<label class="uk-form-label uk-text-bold">
												<span class="uk-icon uk-margin-small-right uk-text-primary"
												      uk-icon="icon: clock-stop"
												></span>
												Drop-off Time
											</label>
											<div class="uk-form-controls">
												<input type="time" class="uk-input uk-border-rounded"/>
											</div>
										</div>
									</div>
								</div>
							</form>
						</div>
					</div>
				</header>

			</div>
		</section>

		<div class="uk-sticky"
		     uk-sticky="start:0;offset: 80;end: true;show-on-up: true;animation: uk-animation-slide-top-small"
		>
			<section class="uk-section uk-section-small uk-section-default uk-border-top">
				<div class="uk-container uk-container-xlarge">
					<div class="uk-grid uk-grid-medium uk-flex-middle uk-flex-center" uk-grid>
						<div class="uk-width-expand@m">
							<div class="uk-panel">
								<div class="uk-grid uk-flex-middle uk-child-width-auto uk-flex-left@s uk-flex-center"
								     uk-grid
								>
									<div>
										<button type="button" class="uk-button uk-button-link" id="brand">
											Brand
											<span ref="sortIcon" class="uk-icon " uk-icon="icon: arrow-down"></span>
										</button>
										<div class="uk-dropdown uk-width-small@m"
										     @shown="changeIcon"
										     @hidden="changeIcon"
										     uk-dropdown="toggle: #brand;mode: click;animation: reveal-top; duration: 140; animate-out: true;offset: 20"
										>
											<form class="uk-grid uk-child-width-1-1 uk-grid-small" uk-grid>
												<div>
													<label>
														<input class="uk-checkbox uk-margin-small-right"
														       type="checkbox"
														>
														Category 1
													</label>
												</div>
												<div>
													<label>
														<input class="uk-checkbox uk-margin-small-right"
														       type="checkbox"
														>
														Category 1
													</label>
												</div>
												<div>
													<label>
														<input class="uk-checkbox uk-margin-small-right"
														       type="checkbox"
														>
														Category 1
													</label>
												</div>
												<div>
													<label>
														<input class="uk-checkbox uk-margin-small-right"
														       type="checkbox"
														>
														Category 1
													</label>
												</div>
											</form>

										</div>
									</div>
									<div>
										<button type="button" class="uk-button uk-button-link" id="category">
											Category
											<span ref="sortIcon" class="uk-icon " uk-icon="icon: arrow-down"></span>
										</button>
										<div class="uk-dropdown uk-width-small@m"
										     @shown="changeIcon"
										     @hidden="changeIcon"
										     uk-dropdown="toggle: #category;mode: click;animation: reveal-top; duration: 140; animate-out: true;offset: 20"
										>
											<form class="uk-grid uk-child-width-1-1 uk-grid-small" uk-grid>
												<div>
													<label>
														<input class="uk-checkbox uk-margin-small-right"
														       type="checkbox"
														>
														Category 1
													</label>
												</div>
												<div>
													<label>
														<input class="uk-checkbox uk-margin-small-right"
														       type="checkbox"
														>
														Category 1
													</label>
												</div>
												<div>
													<label>
														<input class="uk-checkbox uk-margin-small-right"
														       type="checkbox"
														>
														Category 1
													</label>
												</div>
												<div>
													<label>
														<input class="uk-checkbox uk-margin-small-right"
														       type="checkbox"
														>
														Category 1
													</label>
												</div>
											</form>

										</div>
									</div>
									<div>
										<button type="button" class="uk-button uk-button-link" id="location">
											Location
											<span ref="sortIcon" class="uk-icon " uk-icon="icon: arrow-down"></span>
										</button>
										<div class="uk-dropdown uk-width-small@m"
										     @shown="changeIcon"
										     @hidden="changeIcon"
										     uk-dropdown="toggle: #location;mode: click;animation: reveal-top; duration: 140; animate-out: true;offset: 20"
										>
											<form class="uk-grid uk-child-width-1-1 uk-grid-small" uk-grid>
												<div>
													<label>
														<input class="uk-checkbox uk-margin-small-right"
														       type="checkbox"
														>
														Category 1
													</label>
												</div>
												<div>
													<label>
														<input class="uk-checkbox uk-margin-small-right"
														       type="checkbox"
														>
														Category 1
													</label>
												</div>
												<div>
													<label>
														<input class="uk-checkbox uk-margin-small-right"
														       type="checkbox"
														>
														Category 1
													</label>
												</div>
												<div>
													<label>
														<input class="uk-checkbox uk-margin-small-right"
														       type="checkbox"
														>
														Category 1
													</label>
												</div>
											</form>

										</div>
									</div>
									<div>
										<button type="button" class="uk-button uk-button-link" id="passenger">
											Passengers
											<span ref="sortIcon" class="uk-icon " uk-icon="icon: arrow-down"></span>
										</button>
										<div class="uk-dropdown uk-width-small@m"
										     @shown="changeIcon"
										     @hidden="changeIcon"
										     uk-dropdown="toggle: #passenger;mode: click;animation: reveal-top; duration: 140; animate-out: true;offset: 20"
										>
											<form class="uk-grid uk-child-width-1-1 uk-grid-small" uk-grid>
												<div>
													<label>
														<input class="uk-checkbox uk-margin-small-right"
														       type="checkbox"
														>
														Category 1
													</label>
												</div>
												<div>
													<label>
														<input class="uk-checkbox uk-margin-small-right"
														       type="checkbox"
														>
														Category 1
													</label>
												</div>
												<div>
													<label>
														<input class="uk-checkbox uk-margin-small-right"
														       type="checkbox"
														>
														Category 1
													</label>
												</div>
												<div>
													<label>
														<input class="uk-checkbox uk-margin-small-right"
														       type="checkbox"
														>
														Category 1
													</label>
												</div>
											</form>

										</div>
									</div>
									<div>
										<button type="button" class="uk-button uk-button-link" id="car-type">
											Type
											<span ref="sortIcon" class="uk-icon " uk-icon="icon: arrow-down"></span>
										</button>
										<div class="uk-dropdown uk-width-small@m"
										     @shown="changeIcon"
										     @hidden="changeIcon"
										     uk-dropdown="toggle: #car-type;mode: click;animation: reveal-top; duration: 140; animate-out: true;offset: 20"
										>
											<form class="uk-grid uk-child-width-1-1 uk-grid-small" uk-grid>
												<div>
													<label>
														<input class="uk-checkbox uk-margin-small-right"
														       type="checkbox"
														>
														Category 1
													</label>
												</div>
												<div>
													<label>
														<input class="uk-checkbox uk-margin-small-right"
														       type="checkbox"
														>
														Category 1
													</label>
												</div>
												<div>
													<label>
														<input class="uk-checkbox uk-margin-small-right"
														       type="checkbox"
														>
														Category 1
													</label>
												</div>
												<div>
													<label>
														<input class="uk-checkbox uk-margin-small-right"
														       type="checkbox"
														>
														Category 1
													</label>
												</div>
											</form>

										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="uk-width-auto@m">
							<div class="uk-panel">
								<button type="button" class="uk-button uk-button-link" id="sort">
									Sort
									<span ref="sortIcon" class="uk-icon " uk-icon="icon: arrow-down"></span>
								</button>
								<div class="uk-dropdown"
								     @shown="changeIcon"
								     @hidden="changeIcon"
								     uk-dropdown="toggle: #sort;mode: click;pos: bottom-center;animation: reveal-top; duration: 300; animate-out: true;offset: 20"
								>
									<ul class="uk-nav uk-dropdown-nav">
										<li class="uk-nav-header">Sort Options</li>
										<li><a href="#">Price: Low to high</a></li>
										<li><a href="#">Price: High to low</a></li>
										<li><a href="#">Newest</a></li>
										<li><a href="#">Popular</a></li>
									</ul>

								</div>
							</div>
						</div>
					</div>
				</div>
			</section>

			<section class="uk-section uk-section-xsmall uk-section-secondary uk-preserve-color">
				<div class="uk-container uk-container-xlarge">
					<div class="uk-grid uk-grid-small uk-grid-divider uk-flex-middle" uk-grid>
						<div class="uk-width-auto">
							<h4 class="uk-margin-remove uk-text-white">Filters</h4>
						</div>
						<div class="uk-width-expand">
							<div class="uk-grid uk-child-width-auto uk-grid-small uk-flex-middle" uk-grid>
								<div v-for="i in [1,2,3,4,5,6]" :key="i">
								<span class="filter-label uk-background-muted uk-inline-flex uk-flex-middle uk-border-pill uk-text-small uk-text-secondary"
								>
									<span class="uk-text-secondary">Budget {{ i }}</span>
									<button type="button" class=" uk-margin-small-left uk-icon"
									        uk-icon="icon: close; ratio: .755"
									></button>
								</span>
								</div>
							</div>
						</div>
					</div>

				</div>
			</section>
		</div>

		<LargeSectionLayout class="uk-section-muted">
			<article class="uk-grid uk-child-width-1-4@xl uk-child-width-1-3@l uk-child-width-1-2@m uk-child-width-1-1"
			         uk-grid
			         uk-height-match="target: > div > .uk-panel > a > .uk-card > .uk-card-header"
			         x
			>
				<div v-for="car in cars.data" :key="car.model">
					<div class="uk-panel">
						<CarCard :car="car"/>
					</div>
				</div>
			</article>
			<Pagination :meta="cars.meta" :links="cars.links"/>
		</LargeSectionLayout>
	</GuestLayout>
</template>

<script setup>
	import { Head } from '@inertiajs/vue3';
	import GuestLayout from "@/Layouts/GuestLayout.vue";
	import LargeSectionLayout from "@/Layouts/Sections/LargeSectionLayout.vue";
	import CarCard from "@/Components/CarCard.vue";
	import { ref } from 'vue';
	import Pagination from "@/Components/Pagination.vue";

	const props = defineProps({
		cars: Object
	});

	const sortIcon = ref(null);

	const changeIcon = (e) => {
		if (e.target.classList.contains('uk-open')) {
			sortIcon.value.setAttribute('uk-icon', 'icon: arrow-up')
		} else {
			sortIcon.value.setAttribute('uk-icon', 'icon: arrow-down')
		}
	}
</script>

<style scoped>
	.filter-label {
		padding: .375rem .5rem .375rem .75rem;
		color: #1a1e23 !important;
	}
</style>
