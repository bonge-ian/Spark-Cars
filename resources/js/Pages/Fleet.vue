<script setup>
import { Head, router, useForm } from "@inertiajs/vue3";
import GuestLayout from "@/Layouts/GuestLayout.vue";
import LargeSectionLayout from "@/Layouts/Sections/LargeSectionLayout.vue";
import CarCard from "@/Components/CarCard.vue";
import { computed, ref } from "vue";
import Pagination from "@/Components/Pagination.vue";
import { isNil, omitBy } from "lodash";
import LocationInput from "@/Components/LocationInput.vue";

const props = defineProps({
	cars: Object,
	filters: Object,
	selectedFilters: Object,
});

const sortIcon = ref(null);

const selectedFiltersAsArray = computed(() => {
	if (props.selectedFilters === undefined) {
		return null;
	}
	return Object.keys(removeFalselySelectedFilters());
});

const form = useForm({
	pickUpLocation: null,
	dropOffLocation: null,
	pickUpDate: null,
	pickUpTime: null,
	dropOffDate: null,
	dropOffTime: null,
	isDropOffSameAsPickup: true,
});

const addFilter = (filter, value) => {
	props.selectedFilters[filter] = value;

	router.get(route("fleet"), removeFalselySelectedFilters(), {
		replace: true,
		preserveState: true,
		preserveScroll: true,
	});
};

const removeFalselySelectedFilters = () => {
	if (props.selectedFilters) {
		return omitBy(props.selectedFilters, isNil);
	}
};

const removeFilter = (key) => {
	delete props.selectedFilters[key];

	router.get(route("fleet"), removeFalselySelectedFilters(), {
		replace: true,
		preserveState: true,
		preserveScroll: true,
	});
};

const changeIcon = (e) => {
	if (e.target.classList.contains("uk-open")) {
		sortIcon.value.setAttribute("uk-icon", "icon: arrow-up");
	} else {
		sortIcon.value.setAttribute("uk-icon", "icon: arrow-down");
	}
};
</script>

<template>
	<Head title="Our Fleet" />

	<GuestLayout>
		<section class="uk-section uk-section-default uk-border-rounded">
			<div class="uk-container uk-container-xlarge">
				<header
					class="uk-grid uk-grid-large uk-child-width-1-1 uk-flex-middle uk-grid-match"
					uk-grid
				>
					<div class="uk-width-1-3@m">
						<div class="uk-panel">
							<h1 class="uk-text-bold">
								Rent a car in easy steps.
							</h1>
							<p class="uk-text-muted">
								Renting a car brings you freedom, and we'll help
								you find the best car for you at a great price.
							</p>
						</div>
					</div>
					<div class="uk-width-expand@m">
						<div
							class="uk-panel uk-border uk-tile uk-tile-small uk-tile-default uk-border-rounded"
						>
							<form
								class="uk-form-stacked uk-grid uk-grid-medium uk-child-width-1-1 uk-child-width-1-2@m"
								uk-grid
							>
								<LocationInput
									v-model:location="form.pickUpLocation"
									v-model:error="form.errors.pickUpLocation"
									icon="map-pin"
									label="pick up"
									placeholder="Buruburu, Nairobi"
								/>
								<template v-if="form.isDropOffSameAsPickup">
									<div class="uk-flex-self-center">
										<label
											class="uk-form-label"
											for="drop_off"
										>
											<input
												id="drop_off"
												v-model="
													form.isDropOffSameAsPickup
												"
												class="uk-checkbox uk-border-rounded uk-margin-small-right"
												type="checkbox"
											/>
											Drop off location, same as pick-up
											location
										</label>
									</div>
								</template>
								<template v-else>
									<LocationInput
										v-model:location="form.dropOffLocation"
										v-model:error="
											form.errors.dropOffLocation
										"
										icon="map-pin"
										label="drop off"
										placeholder="Buruburu, Nairobi"
									/>
								</template>
								<div>
									<div
										class="uk-grid uk-grid-small uk-child-width-1-2 uk-flex-middle"
										uk-grid
									>
										<div>
											<label
												class="uk-form-label uk-text-bold"
											>
												<span
													class="uk-icon uk-margin-small-right uk-text-primary"
													uk-icon="icon: calendar-days"
												></span>
												Pick-up Date
											</label>
											<div class="uk-form-controls">
												<input
													type="date"
													class="uk-input uk-border-rounded"
												/>
											</div>
										</div>
										<div>
											<label
												class="uk-form-label uk-text-bold"
											>
												<span
													class="uk-icon uk-margin-small-right uk-text-primary"
													uk-icon="icon: calendar-days"
												></span>
												Drop-off Date
											</label>
											<div class="uk-form-controls">
												<input
													type="date"
													class="uk-input uk-border-rounded"
												/>
											</div>
										</div>
									</div>
								</div>
								<div>
									<div
										class="uk-grid uk-grid-small uk-child-width-1-2 uk-flex-middle"
										uk-grid
									>
										<div>
											<label
												class="uk-form-label uk-text-bold"
											>
												<span
													class="uk-icon uk-margin-small-right uk-text-primary"
													uk-icon="icon: clock-play"
												></span>
												Pick-up Time
											</label>
											<div class="uk-form-controls">
												<input
													type="time"
													class="uk-input uk-border-rounded"
												/>
											</div>
										</div>
										<div>
											<label
												class="uk-form-label uk-text-bold"
											>
												<span
													class="uk-icon uk-margin-small-right uk-text-primary"
													uk-icon="icon: clock-stop"
												></span>
												Drop-off Time
											</label>
											<div class="uk-form-controls">
												<input
													type="time"
													class="uk-input uk-border-rounded"
												/>
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

		<div
			class="uk-sticky"
			uk-sticky="start:0;offset: 80;end: true;show-on-up: true;animation: uk-animation-slide-top-small"
		>
			<section
				class="uk-section uk-section-small uk-section-default uk-border-top"
			>
				<div class="uk-container uk-container-xlarge">
					<div
						class="uk-grid uk-grid-medium uk-flex-middle uk-flex-center"
						uk-grid
					>
						<div class="uk-width-expand@m">
							<div class="uk-panel">
								<div
									class="uk-grid uk-flex-middle uk-child-width-auto uk-flex-left@s uk-flex-center"
									uk-grid
								>
									<div
										v-for="(filter, filterLabel) in filters"
										:key="filterLabel"
									>
										<button
											type="button"
											class="uk-button uk-button-link uk-text-capitalize"
											:id="filterLabel"
										>
											{{ filterLabel }}
											<span
												class="uk-icon"
												uk-icon="icon: arrow-down"
											></span>
										</button>
										<div
											class="uk-dropdown uk-width-small@m uk-height-max-medium uk-overflow-auto"
											:uk-dropdown="`toggle: #${filterLabel};mode: click;auto-update: false;animation: reveal-top; duration: 140; animate-out: true;offset: 20`"
										>
											<form
												class="uk-grid uk-child-width-1-1 uk-grid-small"
												uk-grid
											>
												<div
													v-for="(
														filterOption, label
													) in filter"
													:key="label"
												>
													<label
														class="uk-text-capitalize"
														:for="label"
													>
														<input
															class="uk-radio uk-margin-small-right uk-text-capitalize"
															type="radio"
															:id="label"
															:value="label"
															v-model="
																props
																	.selectedFilters[
																	filterLabel
																]
															"
															@change="
																addFilter(
																	filterLabel,
																	$event
																		.target
																		.value
																)
															"
														/>
														{{ filterOption }}
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
								<button
									type="button"
									class="uk-button uk-button-link"
									id="sort"
								>
									Sort
									<span
										ref="sortIcon"
										class="uk-icon"
										uk-icon="icon: arrow-down"
									></span>
								</button>
								<div
									class="uk-dropdown"
									@shown="changeIcon"
									@hidden="changeIcon"
									uk-dropdown="toggle: #sort;mode: click;auto-update: false;pos: bottom-center;animation: reveal-top; duration: 300; animate-out: true;offset: 20"
								>
									<ul class="uk-nav uk-dropdown-nav">
										<li class="uk-nav-header">
											Sort Options
										</li>
										<li class="uk-nav-divider"></li>
										<li>
											<a
												href="#"
												@click.prevent="
													addFilter('price', 'asc')
												"
											>
												Price: Low to high
											</a>
										</li>
										<li>
											<a
												href="#"
												@click.prevent="
													addFilter('price', 'desc')
												"
											>
												Price: High to low
											</a>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>

			<section
				v-if="selectedFiltersAsArray.length"
				class="uk-section uk-section-xsmall uk-section-secondary uk-preserve-color"
			>
				<div class="uk-container uk-container-xlarge">
					<div
						class="uk-grid uk-grid-small uk-grid-divider uk-flex-middle"
						uk-grid
					>
						<div class="uk-width-auto">
							<h4 class="uk-margin-remove uk-text-white">
								Filters
							</h4>
						</div>
						<div class="uk-width-expand">
							<div
								class="uk-grid uk-child-width-auto uk-grid-small uk-flex-middle"
								uk-grid
							>
								<div
									v-for="(
										value, key
									) in props.selectedFilters"
									:key="`${key}-${value}`"
								>
									<span
										class="filter-label uk-background-muted uk-inline-flex uk-flex-middle uk-border-pill uk-text-small uk-text-secondary"
									>
										<span
											class="uk-text-secondary uk-text-capitalize"
											>{{ key }}:
										</span>
										<span
											class="uk-text-success uk-text-bold"
										>
											{{ value }}
										</span>
										<button
											@click="removeFilter(key, value)"
											type="button"
											class="remove-filter uk-margin-small-left uk-icon"
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
			<article
				class="uk-grid uk-child-width-1-4@xl uk-child-width-1-3@l uk-child-width-1-2@m uk-child-width-1-1"
				uk-grid
				uk-height-match="target: > div > .uk-panel > a > .uk-card > .uk-card-header"
				x
			>
				<template v-if="cars.data.length">
					<div v-for="car in cars.data" :key="car.model">
						<div class="uk-panel">
							<CarCard :car="car" />
						</div>
					</div>
				</template>
				<template v-else>
					<div class="uk-width-1-1-">
						<div class="uk-container uk-container-small">
							<div class="uk-alert uk-alert-warning" uk-alert>
								<p>
									Sorry. We don't have a vehicle that matches
									your search.
								</p>
							</div>
						</div>
					</div>
				</template>
			</article>
			<Pagination :meta="cars.meta" :links="cars.links" />
		</LargeSectionLayout>
	</GuestLayout>
</template>

<style scoped>
.filter-label {
	padding: 0.375rem 0.5rem 0.375rem 0.75rem;
	color: #1a1e23 !important;
}

.remove-filter:hover {
	color: #fa0d0d;
}
</style>
