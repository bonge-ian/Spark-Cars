<script setup>
import { computed, ref, watchEffect } from "vue";
import { debounce, unset } from "lodash";
import axios from "redaxios";
import UIkit from "uikit/dist/js/uikit-core.js";

const props = defineProps({
	location: String,
	label: String,
	error: String,
	placeholder: String,
	icon: {
		type: String,
		default: "location",
	},
});
const emits = defineEmits(["update:location", "update:error"]);
const locationDrop = ref(null);
const isSuggested = ref(false);
const suggestedLocations = ref([]);
const labelAsCamelCase = computed(() =>
	props.label.toLowerCase().split(" ").join("-")
);
const selectSuggestion = (autocompleteAddress) => {
	if (!isBlank(props.error)) {
		emits("update:error", null);
	}

	UIkit.drop(locationDrop.value).hide(false);
	isSuggested.value = true;

	if (
		!["Nairobi", "Mombasa", "Machakos"].includes(autocompleteAddress.county)
	) {
		emits(
			"update:error",
			"Sorry. We are yet to operate in your specified county"
		);
	}

	emits("update:location", autocompleteAddress.label);
};

const fetchSuggestions = debounce(async (userInput) => {
	if (isBlank(userInput) || isSuggested.value === true) {
		return;
	}

	const apiKey = import.meta.env.VITE_HERE_MAPS_API_KEY;

	let url = `https://autocomplete.search.hereapi.com/v1/autocomplete?q=${encodeURI(
		userInput
	)}&in=countryCode:KEN&limit=15&apiKey=${apiKey}`;

	try {
		const {
			data: { items: locations },
		} = await axios.get(url);

		if (!locations.length) {
			return;
		}

		suggestedLocations.value = locations.map(
			(location) => location.address
		);

		if (locationDrop.value !== null) {
			UIkit.drop(locationDrop.value).show();
		}
	} catch (error) {
		console.log(error);
	}
}, 150);
const isBlank = (value) =>
	value === "" || value === null || value === undefined;

watchEffect(() => fetchSuggestions(props.location));
</script>

<template>
	<div>
		<label :for="labelAsCamelCase" class="uk-form-label uk-text-capitalize">
			{{ label }}
		</label>
		<div class="uk-form-controls uk-inline uk-width-1-1">
			<div class="uk-width-1-1 uk-inline">
				<span
					class="uk-form-icon"
					:class="{ 'uk-text-danger': !isBlank(error) }"
					:uk-icon="`icon: ${icon}`"
				></span>
				<input
					:value="location"
					aria-label="Pickup location"
					:id="labelAsCamelCase"
					@input="
						$emit('update:location', $event.target.value);
						isSuggested = !isSuggested;
					"
					class="uk-input uk-border-rounded"
					:class="{ 'uk-form-danger': !isBlank(error) }"
					:placeholder="placeholder"
					type="text"
				/>
			</div>
			<div class="uk-width-1-1" v-if="!isBlank(error)">
				<p class="uk-text-danger uk-margin-remove" v-html="error"></p>
			</div>
			<template v-if="suggestedLocations.length">
				<div class="uk-width-1-1">
					<div
						ref="locationDrop"
						:id="`${labelAsCamelCase}-location-drop`"
						class="uk-card uk-card-body uk-card-small uk-box-shadow-large uk-tile-default uk-width-1-1 uk-overflow-auto"
						:uk-drop="`pos:bottom-center;target: #${labelAsCamelCase};boundary: #${labelAsCamelCase};offset: 0;shift: false;flip: false;auto-update:false;`"
					>
						<ul class="uk-list">
							<li
								v-for="(suggested, index) in suggestedLocations"
								:key="index"
							>
								<a
									@click.prevent="selectSuggestion(suggested)"
									class="uk-link uk-link-heading"
								>
									{{ suggested.label }}
								</a>
							</li>
						</ul>
					</div>
				</div>
			</template>
		</div>
	</div>
</template>

<style scoped></style>
