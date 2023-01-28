<script setup>
	import { Link } from '@inertiajs/vue3';</script>

<template>
	<header class="uk-sticky uk-background-default"
	        uk-sticky="animation: uk-animation-slide-top;sel-target: .uk-navbar-container; cls-active: uk-navbar-sticky"
	>
		<div class="uk-navbar-container">
			<div class="uk-container uk-container-xlarge">
				<nav class="uk-navbar" uk-navbar>
					<div class="uk-navbar-left">
						<Link class="uk-navbar-item uk-logo" :href="route('home')">
							<img alt="Spark Cars Logo" height="40" src="../../images/logo.svg"
							     width="194"
							>
						</Link>
					</div>
					<div class="uk-navbar-center">
						<ul class="uk-navbar-nav">
							<li>
								<Link :href="route('home')">Home</Link>
							</li>
							<li>
								<a href="#">Why Us</a>
							</li>
							<li>
								<Link :href="route('fleet')">
									Our Fleet
								</Link>
							</li>
							<li>
								<a href="mailto:info@bonge-inc.co.ke">Contact Us</a>
							</li>
						</ul>
					</div>
					<div class="uk-navbar-right">
						<div class="uk-navbar-item">
							<button class="uk-button uk-button-default">
								Get a quote
							</button>
						</div>
						<div class="uk-navbar-item">
							<button class="uk-button uk-button-primary">
								Book Now
							</button>
						</div>
					</div>
				</nav>
			</div>
		</div>
	</header>
</template>

<style scoped>
	.uk-navbar-container {
		background-color: inherit;
		border-bottom: 1px solid #ededed;
	}
</style>
