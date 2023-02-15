<script setup>
import { useForm } from "@inertiajs/vue3";
import LocationInput from "@/Components/LocationInput.vue";
import { watch } from "vue";

const form = useForm({
	pickUpLocation: null,
	dropOffLocation: null,
	pickUpDate: null,
	pickUpTime: null,
	dropOffDate: null,
	dropOffTime: null,
	isDropOffSameAsPickup: true,
});

watch(
	() => form.isDropOffSameAsPickup,
	(newValue, oldValue) => {
		if (newValue === true && form.dropOffLocation?.length) {
			form.dropOffLocation = null;
		}
	}
);
</script>

<template>
	<div class="uk-tile uk-tile-default uk-padding-small-top uk-border-rounded">
		<form
			class="uk-form-stacked uk-grid uk-child-width-1-1 uk-grid-medium"
			id="form"
			uk-grid
			@submit.prevent
		>
			<div>
				<fieldset class="uk-fieldset">
					<legend class="uk-h2 uk-text-bold">
						Choose & Search the ride that fits your taste!
					</legend>
				</fieldset>
			</div>
			<div
				class="uk-grid uk-grid-small uk-child-width-1-3@m uk-child-width-auto"
				uk-grid
			>
				<div>
					<label
						class="uk-form-label uk-button uk-button-primary"
						for="type"
					>
						<input
							id="type"
							checked
							class="uk-radio uk-hidden"
							type="radio"
						/>
						Budget
					</label>
				</div>
				<div>
					<label
						class="uk-form-label uk-button uk-button-default"
						for="type"
					>
						<input
							id="type"
							class="uk-radio uk-hidden"
							type="radio"
						/>
						Corporate
					</label>
				</div>
				<div>
					<label
						class="uk-form-label uk-button uk-button-default"
						for="type"
					>
						<input
							id="type"
							class="uk-radio uk-hidden"
							type="radio"
						/>
						Luxury
					</label>
				</div>
			</div>
			<LocationInput
				v-model:location="form.pickUpLocation"
				v-model:error="form.errors.pickUpLocation"
				label="pickup location"
				placeholder="Pick up location, Neighbourhood, City, County"
			/>
			<div>
				<label class="uk-form-label" for="drop_off">
					<input
						id="drop_off"
						v-model="form.isDropOffSameAsPickup"
						class="uk-checkbox uk-border-rounded uk-margin-small-right"
						type="checkbox"
					/>
					Drop off location, same as pick-up location
				</label>
			</div>
			<template v-if="!form.isDropOffSameAsPickup">
				<LocationInput
					v-model:location="form.dropOffLocation"
					v-model:error="form.errors.dropOffLocation"
					label="dropoff location"
					placeholder="Drop off location, Neighbourhood, City, County"
				/>
			</template>

			<div>
				<label class="uk-form-label uk-hidden" for="location">
					Pick up Date
				</label>
				<div class="uk-form-controls uk-inline uk-width-1-1">
					<span
						class="uk-form-icon"
						uk-icon="icon: calendar-plus"
					></span>
					<input
						aria-label="Not clickable icon"
						class="uk-input uk-border-rounded"
						placeholder="Pick up date"
						type="date"
					/>
				</div>
			</div>
			<div>
				<label class="uk-form-label uk-hidden" for="location">
					Pick up Time
				</label>
				<div class="uk-form-controls uk-inline uk-width-1-1">
					<span class="uk-form-icon" uk-icon="icon: clock"></span>
					<input
						aria-label="Not clickable icon"
						class="uk-input uk-border-rounded"
						placeholder="Pick up date"
						type="time"
					/>
				</div>
			</div>
			<div>
				<label class="uk-form-label uk-hidden" for="location">
					Drop Off Date
				</label>
				<div class="uk-form-controls uk-inline uk-width-1-1">
					<span
						class="uk-form-icon"
						uk-icon="icon: calendar-minus"
					></span>
					<input
						aria-label="Not clickable icon"
						class="uk-input uk-border-rounded"
						placeholder="Drop Off Date"
						type="date"
					/>
				</div>
			</div>
			<div>
				<label class="uk-form-label uk-hidden" for="location">
					Pick up Time
				</label>
				<div class="uk-form-controls uk-inline uk-width-1-1">
					<span class="uk-form-icon" uk-icon="icon: clock"></span>
					<input
						aria-label="Not clickable icon"
						class="uk-input uk-border-rounded"
						placeholder="Pick up date"
						type="time"
					/>
				</div>
			</div>
			<div>
				<button
					class="uk-button uk-button-primary uk-button-large uk-width-1-1"
				>
					Search
				</button>
			</div>
		</form>
	</div>
</template>

<style scoped>
@media (min-width: 1200px) {
}

label.uk-button {
	background-color: #868686;
	border-color: #868686;
	color: #ededed;
}
</style>
