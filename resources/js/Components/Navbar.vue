<script setup>

</script>

<template>
	<header class="uk-sticky uk-background-default"
			uk-sticky="animation: uk-animation-slide-top;sel-target: .uk-navbar-container; cls-active: uk-navbar-sticky">
		<div class="uk-navbar-container">
			<div class="uk-container uk-container-xlarge">
				<nav class="uk-navbar" uk-navbar="">
					<div class="uk-navbar-left">
						<a class="uk-navbar-item uk-logo" href="#">
							<img alt="Spark Cars Logo" height="40" src="../../images/logo.svg"
								 width="194">
						</a>
					</div>
					<div class="uk-navbar-center">
						<ul class="uk-navbar-nav">
							<li>
								<a href="#">Home</a>
							</li>
							<li>
								<a href="#">Why Us</a>
							</li>
							<li>
								<a href="#">Our Fleet</a>
							</li>
							<li>
								<a href="#">Contact Us</a>
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
