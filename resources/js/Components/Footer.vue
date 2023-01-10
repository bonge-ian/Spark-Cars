<script setup>

import { computed } from 'vue';

const currentDateAsJson = computed(() => new Date().toJSON());

const formattedDate = computed(() => new Intl.DateTimeFormat(document.documentElement.lang, {
	year: 'numeric',
}).format());

</script>

<template>
	<footer class="uk-section uk-section-large">
		<div class="uk-container uk-container-xlarge">
			<div class="uk-section-muted uk-border-rounded uk-padding-medium-horizontal">

				<div class="uk-grid uk-child-width-1-1 uk-grid-medium uk-grid-divider"
					 uk-grid>

					<div class="uk-tile uk-tile-small">


							<div class="uk-grid-margin uk-grid" uk-grid>

								<div class="uk-width-1-4@m uk-flex-first uk-first-column">
									<div class="uk-panel uk-margin uk-text-left@s uk-text-center">
										<img src="../../images/logo.svg" alt="Spark Cars Logo" loading="eager"
											 width="194" height="40">
										<p class="uk-text-lead">
											Get a car wherever and whenever you need it
											with a few clicks.
										</p>
									</div>
								</div>
								<div class="uk-width-1-2 uk-width-1-3@s uk-width-1-4@m uk-flex-first">
									<h6 class="uk-text-bold">Location</h6>
									<address class="uk-panel uk-margin">
										Main Street<br>
										Nairobi<br>
										Kenya
									</address>
								</div>
								<div class="uk-width-1-2 uk-width-1-3@s uk-width-1-4@m">
									<h6 class="uk-text-bold">Contact</h6>
									<div class="uk-panel uk-margin">
										<a class="uk-link-text" href="mailto:info@bonge-inc.co.ke">info@bonge-inc
											.co.ke</a><br>
										<a class="uk-link-text" href="tel:+254712345678">+ 254 712 345 678</a>
									</div>
								</div>
								<div class="uk-width-1-2 uk-width-1-3@s uk-width-1-4@m uk-flex-first@s">
									<h6 class="uk-text-bold">Office Hours</h6>
									<ul class="uk-list uk-list-collapse">
										<li>
											<div
												class="uk-child-width-expand@s uk-grid-column-small uk-grid-row-collapse uk-grid" uk-grid>
												<div class="uk-width-small@s uk-text-break uk-first-column">
													<span>Mon - Fri</span>
												</div>
												<div >
													<span>8 am – 5 pm</span>
												</div>
											</div>
										</li>
										<li>
											<div
												class="uk-child-width-expand@s uk-grid-column-small uk-grid-row-collapse uk-grid" uk-grid>
												<div class="uk-width-small@s uk-text-break uk-first-column uk-panel">
													<span>Sat</span>
												</div>
												<div class="uk-panel">
													<span>9 am – 2 pm</span>
												</div>
											</div>
										</li>
										<li>
											<div
												class="uk-child-width-expand@s uk-grid-column-small uk-grid-row-collapse uk-grid" uk-grid>
												<div class="uk-width-small@s uk-text-break uk-first-column uk-panel">
													<span>Holidays</span>
												</div>
												<div class="uk-panel">
													<span>9 am – 1 pm</span>
												</div>
											</div>
										</li>
									</ul>
								</div>
								<div class="uk-width-1-2 uk-width-1-3@s uk-width-1-4@m uk-hidden@s">
									<h6 class="uk-text-bold uk-hidden@s">Company</h6>
									<ul class="uk-list uk-list-collapse uk-hidden@s">
										<li>
											<a href="#">About us</a>
										</li>
										<li>
											<a href="#">Our Fleet</a>
										</li>
										<li>
											<a href="#">Contact us</a>
										</li>
									</ul>
								</div>
							</div>

							<div class="uk-grid" uk-grid>
								<div class="uk-width-1-4@m uk-first-column"> </div>
								<div class="uk-width-1-2 uk-width-1-3@s uk-width-1-4@m">
									<h6 class="uk-text-bold">Information</h6>
									<ul class="uk-nav">
										<li><a href="#">How it works</a></li>
										<li><a href="#">FAQ</a></li>
									</ul>
								</div>
								<div class="uk-width-1-3@s uk-width-1-4@m uk-visible@s">
									<ul class="uk-nav">
										<li><a href="#">About</a></li>
										<li><a href="#">Fleet</a></li>
									</ul>
								</div>
							</div>


					</div>

					<div class="uk-tile uk-tile-small">

							<div class="uk-grid uk-child-width-1-1 uk-child-width-1-2@m" uk-grid>
								<div>
									<div class="uk-panel uk-text-small uk-text-left@m uk-text-center">
										©
										<time :datetime="currentDateAsJson">{{ formattedDate }}</time>
										Spark Cars. All rights reserved. Cobbled together
										by
										<a
											class="uk-link-heading"
											href="https://bonge-inc.co.ke/"
											target="_blank"
										>
											Bonge Inc
										</a>
										.
									</div>
								</div>
								<div>
									<ul class="uk-iconnav uk-text-center uk-flex-right@m" uk-margin>
										<li><a href="#" uk-icon="icon: facebook"></a></li>
										<li><a href="#" uk-icon="icon: twitter"></a></li>
										<li><a href="#" uk-icon="icon: instagram"></a></li>
									</ul>
								</div>
							</div>

					</div>
				</div>
			</div>
		</div>
	</footer>
</template>

<style scoped>

</style>
