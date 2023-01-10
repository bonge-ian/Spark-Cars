<script setup>

import HighlightCarCard from "@/Components/HighlightCarCard.vue";
import RecommenderForm from "@/Components/RecommenderForm.vue";
import GuestLayout from "@/Layouts/GuestLayout.vue";
import LargeSectionLayout from "@/Layouts/Sections/LargeSectionLayout.vue";
import { Link } from "@inertiajs/inertia-vue3";
import KisumuLarge from '../../images/kisumu-large.jpg';
import KisumuMedium from '../../images/kisumu-medium.jpg';
import KisumuSmall from '../../images/kisumu-small.jpg';
import MombasaLarge from '../../images/mombasa-large.jpg';
import MombasaMedium from '../../images/mombasa-medium.jpg';
import MombasaSmall from '../../images/mombasa-small.jpg';
import NairobiLarge from '../../images/nairobi-large.jpg';
import NairobiMedium from '../../images/nairobi-medium.jpg';
import NairobiSmall from '../../images/nairobi-small.jpg';
import WhyUsLargeAlt from '../../images/why-us-alt-large.jpg';
import WhyUsMediumAlt from '../../images/why-us-alt-medium.jpg';
import WhyUsSmallAlt from '../../images/why-us-alt-small.jpg';
import WhyUsLarge from '../../images/why-us-large.jpg';
import WhyUsMedium from '../../images/why-us-medium.jpg';
import WhyUsSmall from '../../images/why-us-small.jpg';</script>


<template>
	<GuestLayout>
		<LargeSectionLayout class="uk-section-muted uk-padding-medium-top">
			<div class="uk-width-1-1 uk-inline">
				<div class="uk-grid uk-grid-large uk-child-width-1-1" uk-grid>
					<div class="uk-width-3-5@l">
						<div class="uk-panel">
							<h1 class="uk-heading-medium uk-text-bold uk-text-capitalize">
								Rent a car,<br class="uk-visible@m">
								the <span class="uk-text-background">easy way</span>
							</h1>
						</div>
					</div>
					<div class="uk-width-2-5@l">
						<div class="uk-hidden@l">
							<RecommenderForm/>
						</div>
						<div
							class="uk-visible@l uk-panel uk-tile uk-tile-small uk-padding-remove-top uk-tile-muted uk-width-2-5 uk-position-z-index panel-overlay uk-position-right@l">
							<RecommenderForm/>
						</div>
					</div>
					<div class="uk-width-1-1">
						<div class="uk-cover-container uk-border-rounded">
							<img alt="" class="uk-border-rounded" height="1920" src="../../images/hero.jpg"
								 uk-cover width="2560">
							<canvas height="900" width="1200"></canvas>
						</div>
					</div>
				</div>

			</div>
		</LargeSectionLayout>

		<LargeSectionLayout class="uk-section-default">
			<div
				class="uk-background-secondary uk-background-blend-color-dodge uk-tile uk-tile-large uk-background-image uk-background-cover
						uk-background-norepeat uk-background-center-center"
				data-src="data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' version='1.1' xmlns:xlink='http://www.w3.org/1999/xlink' xmlns:svgjs='http://svgjs.com/svgjs' width='1440' height='560' preserveAspectRatio='none' viewBox='0 0 1440 560'%3e%3cg mask='url(%26quot%3b%23SvgjsMask1324%26quot%3b)' fill='none'%3e%3cpath d='M-60.49 354.03L-60.49 354.03' stroke='rgba(33%2c 21%2c 186%2c 1)' stroke-width='1.5'%3e%3c/path%3e%3cpath d='M-60.49 354.03L-74.4 502.5' stroke='rgba(33%2c 21%2c 186%2c 1)' stroke-width='1.5'%3e%3c/path%3e%3cpath d='M-60.49 354.03L90.91 410.62' stroke='rgba(33%2c 21%2c 186%2c 1)' stroke-width='1.5'%3e%3c/path%3e%3cpath d='M-60.49 354.03L105.1 559.94' stroke='rgba(33%2c 21%2c 186%2c 1)' stroke-width='1.5'%3e%3c/path%3e%3cpath d='M-60.49 354.03L224.55 353.58' stroke='rgba(33%2c 21%2c 186%2c 1)' stroke-width='1.5'%3e%3c/path%3e%3cpath d='M-74.4 502.5L-74.4 502.5' stroke='rgba(33%2c 21%2c 186%2c 1)' stroke-width='1.5'%3e%3c/path%3e%3cpath d='M-74.4 502.5L-73.48 661.39' stroke='rgba(33%2c 21%2c 186%2c 1)' stroke-width='1.5'%3e%3c/path%3e%3cpath d='M-74.4 502.5L105.1 559.94' stroke='rgba(33%2c 21%2c 186%2c 1)' stroke-width='1.5'%3e%3c/path%3e%3cpath d='M-73.48 661.39L-73.48 661.39' stroke='rgba(33%2c 21%2c 186%2c 1)' stroke-width='1.5'%3e%3c/path%3e%3cpath d='M-73.48 661.39L85.38 680.55' stroke='rgba(33%2c 21%2c 186%2c 1)' stroke-width='1.5'%3e%3c/path%3e%3cpath d='M90.91 410.62L90.91 410.62' stroke='rgba(33%2c 21%2c 186%2c 1)' stroke-width='1.5'%3e%3c/path%3e%3cpath d='M90.91 410.62L224.55 353.58' stroke='rgba(33%2c 21%2c 186%2c 1)' stroke-width='1.5'%3e%3c/path%3e%3cpath d='M90.91 410.62L105.1 559.94' stroke='rgba(33%2c 21%2c 186%2c 1)' stroke-width='1.5'%3e%3c/path%3e%3cpath d='M90.91 410.62L192.12 538.71' stroke='rgba(33%2c 21%2c 186%2c 1)' stroke-width='1.5'%3e%3c/path%3e%3cpath d='M90.91 410.62L-74.4 502.5' stroke='rgba(33%2c 21%2c 186%2c 1)' stroke-width='1.5'%3e%3c/path%3e%3cpath d='M105.1 559.94L105.1 559.94' stroke='rgba(33%2c 21%2c 186%2c 1)' stroke-width='1.5'%3e%3c/path%3e%3cpath d='M105.1 559.94L192.12 538.71' stroke='rgba(33%2c 21%2c 186%2c 1)' stroke-width='1.5'%3e%3c/path%3e%3cpath d='M105.1 559.94L85.38 680.55' stroke='rgba(33%2c 21%2c 186%2c 1)' stroke-width='1.5'%3e%3c/path%3e%3cpath d='M105.1 559.94L218.29 663.73' stroke='rgba(33%2c 21%2c 186%2c 1)' stroke-width='1.5'%3e%3c/path%3e%3cpath d='M85.38 680.55L85.38 680.55' stroke='rgba(33%2c 21%2c 186%2c 1)' stroke-width='1.5'%3e%3c/path%3e%3cpath d='M85.38 680.55L218.29 663.73' stroke='rgba(33%2c 21%2c 186%2c 1)' stroke-width='1.5'%3e%3c/path%3e%3cpath d='M85.38 680.55L192.12 538.71' stroke='rgba(33%2c 21%2c 186%2c 1)' stroke-width='1.5'%3e%3c/path%3e%3cpath d='M85.38 680.55L-74.4 502.5' stroke='rgba(33%2c 21%2c 186%2c 1)' stroke-width='1.5'%3e%3c/path%3e%3cpath d='M85.38 680.55L90.91 410.62' stroke='rgba(33%2c 21%2c 186%2c 1)' stroke-width='1.5'%3e%3c/path%3e%3cpath d='M224.55 353.58L224.55 353.58' stroke='rgba(33%2c 21%2c 186%2c 1)' stroke-width='1.5'%3e%3c/path%3e%3cpath d='M224.55 353.58L340.33 347.81' stroke='rgba(33%2c 21%2c 186%2c 1)' stroke-width='1.5'%3e%3c/path%3e%3cpath d='M192.12 538.71L192.12 538.71' stroke='rgba(33%2c 21%2c 186%2c 1)' stroke-width='1.5'%3e%3c/path%3e%3cpath d='M192.12 538.71L218.29 663.73' stroke='rgba(33%2c 21%2c 186%2c 1)' stroke-width='1.5'%3e%3c/path%3e%3cpath d='M192.12 538.71L356.45 527.97' stroke='rgba(33%2c 21%2c 186%2c 1)' stroke-width='1.5'%3e%3c/path%3e%3cpath d='M218.29 663.73L218.29 663.73' stroke='rgba(33%2c 21%2c 186%2c 1)' stroke-width='1.5'%3e%3c/path%3e%3cpath d='M340.33 347.81L340.33 347.81' stroke='rgba(33%2c 21%2c 186%2c 1)' stroke-width='1.5'%3e%3c/path%3e%3cpath d='M340.33 347.81L356.45 527.97' stroke='rgba(33%2c 21%2c 186%2c 1)' stroke-width='1.5'%3e%3c/path%3e%3cpath d='M340.33 347.81L534.35 384.26' stroke='rgba(33%2c 21%2c 186%2c 1)' stroke-width='1.5'%3e%3c/path%3e%3cpath d='M340.33 347.81L192.12 538.71' stroke='rgba(33%2c 21%2c 186%2c 1)' stroke-width='1.5'%3e%3c/path%3e%3cpath d='M356.45 527.97L356.45 527.97' stroke='rgba(33%2c 21%2c 186%2c 1)' stroke-width='1.5'%3e%3c/path%3e%3cpath d='M356.45 527.97L529.46 532.85' stroke='rgba(33%2c 21%2c 186%2c 1)' stroke-width='1.5'%3e%3c/path%3e%3cpath d='M356.45 527.97L218.29 663.73' stroke='rgba(33%2c 21%2c 186%2c 1)' stroke-width='1.5'%3e%3c/path%3e%3cpath d='M356.45 527.97L520.23 645.93' stroke='rgba(33%2c 21%2c 186%2c 1)' stroke-width='1.5'%3e%3c/path%3e%3cpath d='M534.35 384.26L534.35 384.26' stroke='rgba(33%2c 21%2c 186%2c 1)' stroke-width='1.5'%3e%3c/path%3e%3cpath d='M534.35 384.26L529.46 532.85' stroke='rgba(33%2c 21%2c 186%2c 1)' stroke-width='1.5'%3e%3c/path%3e%3cpath d='M534.35 384.26L704.15 373.04' stroke='rgba(33%2c 21%2c 186%2c 1)' stroke-width='1.5'%3e%3c/path%3e%3cpath d='M534.35 384.26L653.31 244.45' stroke='rgba(33%2c 21%2c 186%2c 1)' stroke-width='1.5'%3e%3c/path%3e%3cpath d='M534.35 384.26L662.64 525.07' stroke='rgba(33%2c 21%2c 186%2c 1)' stroke-width='1.5'%3e%3c/path%3e%3cpath d='M534.35 384.26L356.45 527.97' stroke='rgba(33%2c 21%2c 186%2c 1)' stroke-width='1.5'%3e%3c/path%3e%3cpath d='M529.46 532.85L529.46 532.85' stroke='rgba(33%2c 21%2c 186%2c 1)' stroke-width='1.5'%3e%3c/path%3e%3cpath d='M529.46 532.85L520.23 645.93' stroke='rgba(33%2c 21%2c 186%2c 1)' stroke-width='1.5'%3e%3c/path%3e%3cpath d='M529.46 532.85L662.64 525.07' stroke='rgba(33%2c 21%2c 186%2c 1)' stroke-width='1.5'%3e%3c/path%3e%3cpath d='M529.46 532.85L704.15 373.04' stroke='rgba(33%2c 21%2c 186%2c 1)' stroke-width='1.5'%3e%3c/path%3e%3cpath d='M529.46 532.85L340.33 347.81' stroke='rgba(33%2c 21%2c 186%2c 1)' stroke-width='1.5'%3e%3c/path%3e%3cpath d='M520.23 645.93L520.23 645.93' stroke='rgba(33%2c 21%2c 186%2c 1)' stroke-width='1.5'%3e%3c/path%3e%3cpath d='M520.23 645.93L662.64 525.07' stroke='rgba(33%2c 21%2c 186%2c 1)' stroke-width='1.5'%3e%3c/path%3e%3cpath d='M520.23 645.93L534.35 384.26' stroke='rgba(33%2c 21%2c 186%2c 1)' stroke-width='1.5'%3e%3c/path%3e%3cpath d='M520.23 645.93L817.35 656.4' stroke='rgba(33%2c 21%2c 186%2c 1)' stroke-width='1.5'%3e%3c/path%3e%3cpath d='M653.31 244.45L653.31 244.45' stroke='rgba(33%2c 21%2c 186%2c 1)' stroke-width='1.5'%3e%3c/path%3e%3cpath d='M653.31 244.45L704.15 373.04' stroke='rgba(33%2c 21%2c 186%2c 1)' stroke-width='1.5'%3e%3c/path%3e%3cpath d='M704.15 373.04L704.15 373.04' stroke='rgba(33%2c 21%2c 186%2c 1)' stroke-width='1.5'%3e%3c/path%3e%3cpath d='M704.15 373.04L852.79 391.87' stroke='rgba(33%2c 21%2c 186%2c 1)' stroke-width='1.5'%3e%3c/path%3e%3cpath d='M704.15 373.04L662.64 525.07' stroke='rgba(33%2c 21%2c 186%2c 1)' stroke-width='1.5'%3e%3c/path%3e%3cpath d='M662.64 525.07L662.64 525.07' stroke='rgba(33%2c 21%2c 186%2c 1)' stroke-width='1.5'%3e%3c/path%3e%3cpath d='M662.64 525.07L847.01 522.11' stroke='rgba(33%2c 21%2c 186%2c 1)' stroke-width='1.5'%3e%3c/path%3e%3cpath d='M803.92 223.92L803.92 223.92' stroke='rgba(33%2c 21%2c 186%2c 1)' stroke-width='1.5'%3e%3c/path%3e%3cpath d='M803.92 223.92L653.31 244.45' stroke='rgba(33%2c 21%2c 186%2c 1)' stroke-width='1.5'%3e%3c/path%3e%3cpath d='M803.92 223.92L852.79 391.87' stroke='rgba(33%2c 21%2c 186%2c 1)' stroke-width='1.5'%3e%3c/path%3e%3cpath d='M803.92 223.92L704.15 373.04' stroke='rgba(33%2c 21%2c 186%2c 1)' stroke-width='1.5'%3e%3c/path%3e%3cpath d='M803.92 223.92L1002.22 188.2' stroke='rgba(33%2c 21%2c 186%2c 1)' stroke-width='1.5'%3e%3c/path%3e%3cpath d='M803.92 223.92L991.86 379.21' stroke='rgba(33%2c 21%2c 186%2c 1)' stroke-width='1.5'%3e%3c/path%3e%3cpath d='M852.79 391.87L852.79 391.87' stroke='rgba(33%2c 21%2c 186%2c 1)' stroke-width='1.5'%3e%3c/path%3e%3cpath d='M852.79 391.87L847.01 522.11' stroke='rgba(33%2c 21%2c 186%2c 1)' stroke-width='1.5'%3e%3c/path%3e%3cpath d='M852.79 391.87L991.86 379.21' stroke='rgba(33%2c 21%2c 186%2c 1)' stroke-width='1.5'%3e%3c/path%3e%3cpath d='M847.01 522.11L847.01 522.11' stroke='rgba(33%2c 21%2c 186%2c 1)' stroke-width='1.5'%3e%3c/path%3e%3cpath d='M847.01 522.11L817.35 656.4' stroke='rgba(33%2c 21%2c 186%2c 1)' stroke-width='1.5'%3e%3c/path%3e%3cpath d='M847.01 522.11L1002.54 542.87' stroke='rgba(33%2c 21%2c 186%2c 1)' stroke-width='1.5'%3e%3c/path%3e%3cpath d='M817.35 656.4L817.35 656.4' stroke='rgba(33%2c 21%2c 186%2c 1)' stroke-width='1.5'%3e%3c/path%3e%3cpath d='M817.35 656.4L985.19 650.68' stroke='rgba(33%2c 21%2c 186%2c 1)' stroke-width='1.5'%3e%3c/path%3e%3cpath d='M817.35 656.4L662.64 525.07' stroke='rgba(33%2c 21%2c 186%2c 1)' stroke-width='1.5'%3e%3c/path%3e%3cpath d='M974.62 -41.15L974.62 -41.15' stroke='rgba(33%2c 21%2c 186%2c 1)' stroke-width='1.5'%3e%3c/path%3e%3cpath d='M974.62 -41.15L1002.05 61.8' stroke='rgba(33%2c 21%2c 186%2c 1)' stroke-width='1.5'%3e%3c/path%3e%3cpath d='M974.62 -41.15L1125.18 -52.61' stroke='rgba(33%2c 21%2c 186%2c 1)' stroke-width='1.5'%3e%3c/path%3e%3cpath d='M974.62 -41.15L1002.22 188.2' stroke='rgba(33%2c 21%2c 186%2c 1)' stroke-width='1.5'%3e%3c/path%3e%3cpath d='M1002.05 61.8L1002.05 61.8' stroke='rgba(33%2c 21%2c 186%2c 1)' stroke-width='1.5'%3e%3c/path%3e%3cpath d='M1002.05 61.8L1002.22 188.2' stroke='rgba(33%2c 21%2c 186%2c 1)' stroke-width='1.5'%3e%3c/path%3e%3cpath d='M1002.05 61.8L1125.18 -52.61' stroke='rgba(33%2c 21%2c 186%2c 1)' stroke-width='1.5'%3e%3c/path%3e%3cpath d='M1002.22 188.2L1002.22 188.2' stroke='rgba(33%2c 21%2c 186%2c 1)' stroke-width='1.5'%3e%3c/path%3e%3cpath d='M1002.22 188.2L1135.94 226.94' stroke='rgba(33%2c 21%2c 186%2c 1)' stroke-width='1.5'%3e%3c/path%3e%3cpath d='M1002.22 188.2L991.86 379.21' stroke='rgba(33%2c 21%2c 186%2c 1)' stroke-width='1.5'%3e%3c/path%3e%3cpath d='M991.86 379.21L991.86 379.21' stroke='rgba(33%2c 21%2c 186%2c 1)' stroke-width='1.5'%3e%3c/path%3e%3cpath d='M991.86 379.21L1150.67 386.91' stroke='rgba(33%2c 21%2c 186%2c 1)' stroke-width='1.5'%3e%3c/path%3e%3cpath d='M991.86 379.21L1002.54 542.87' stroke='rgba(33%2c 21%2c 186%2c 1)' stroke-width='1.5'%3e%3c/path%3e%3cpath d='M1002.54 542.87L1002.54 542.87' stroke='rgba(33%2c 21%2c 186%2c 1)' stroke-width='1.5'%3e%3c/path%3e%3cpath d='M1002.54 542.87L985.19 650.68' stroke='rgba(33%2c 21%2c 186%2c 1)' stroke-width='1.5'%3e%3c/path%3e%3cpath d='M1002.54 542.87L1154.75 532.83' stroke='rgba(33%2c 21%2c 186%2c 1)' stroke-width='1.5'%3e%3c/path%3e%3cpath d='M1002.54 542.87L1130.47 641.66' stroke='rgba(33%2c 21%2c 186%2c 1)' stroke-width='1.5'%3e%3c/path%3e%3cpath d='M985.19 650.68L985.19 650.68' stroke='rgba(33%2c 21%2c 186%2c 1)' stroke-width='1.5'%3e%3c/path%3e%3cpath d='M985.19 650.68L1130.47 641.66' stroke='rgba(33%2c 21%2c 186%2c 1)' stroke-width='1.5'%3e%3c/path%3e%3cpath d='M985.19 650.68L847.01 522.11' stroke='rgba(33%2c 21%2c 186%2c 1)' stroke-width='1.5'%3e%3c/path%3e%3cpath d='M985.19 650.68L1154.75 532.83' stroke='rgba(33%2c 21%2c 186%2c 1)' stroke-width='1.5'%3e%3c/path%3e%3cpath d='M985.19 650.68L991.86 379.21' stroke='rgba(33%2c 21%2c 186%2c 1)' stroke-width='1.5'%3e%3c/path%3e%3cpath d='M1125.18 -52.61L1125.18 -52.61' stroke='rgba(33%2c 21%2c 186%2c 1)' stroke-width='1.5'%3e%3c/path%3e%3cpath d='M1125.18 -52.61L1295.91 -97.35' stroke='rgba(33%2c 21%2c 186%2c 1)' stroke-width='1.5'%3e%3c/path%3e%3cpath d='M1135.94 226.94L1135.94 226.94' stroke='rgba(33%2c 21%2c 186%2c 1)' stroke-width='1.5'%3e%3c/path%3e%3cpath d='M1135.94 226.94L1150.67 386.91' stroke='rgba(33%2c 21%2c 186%2c 1)' stroke-width='1.5'%3e%3c/path%3e%3cpath d='M1135.94 226.94L1245.09 347.01' stroke='rgba(33%2c 21%2c 186%2c 1)' stroke-width='1.5'%3e%3c/path%3e%3cpath d='M1135.94 226.94L1299.63 195.82' stroke='rgba(33%2c 21%2c 186%2c 1)' stroke-width='1.5'%3e%3c/path%3e%3cpath d='M1150.67 386.91L1150.67 386.91' stroke='rgba(33%2c 21%2c 186%2c 1)' stroke-width='1.5'%3e%3c/path%3e%3cpath d='M1150.67 386.91L1245.09 347.01' stroke='rgba(33%2c 21%2c 186%2c 1)' stroke-width='1.5'%3e%3c/path%3e%3cpath d='M1150.67 386.91L1154.75 532.83' stroke='rgba(33%2c 21%2c 186%2c 1)' stroke-width='1.5'%3e%3c/path%3e%3cpath d='M1154.75 532.83L1154.75 532.83' stroke='rgba(33%2c 21%2c 186%2c 1)' stroke-width='1.5'%3e%3c/path%3e%3cpath d='M1154.75 532.83L1130.47 641.66' stroke='rgba(33%2c 21%2c 186%2c 1)' stroke-width='1.5'%3e%3c/path%3e%3cpath d='M1130.47 641.66L1130.47 641.66' stroke='rgba(33%2c 21%2c 186%2c 1)' stroke-width='1.5'%3e%3c/path%3e%3cpath d='M1295.91 -97.35L1295.91 -97.35' stroke='rgba(33%2c 21%2c 186%2c 1)' stroke-width='1.5'%3e%3c/path%3e%3cpath d='M1295.91 -97.35L1404.31 -70.74' stroke='rgba(33%2c 21%2c 186%2c 1)' stroke-width='1.5'%3e%3c/path%3e%3cpath d='M1295.91 -97.35L1308.1 40.6' stroke='rgba(33%2c 21%2c 186%2c 1)' stroke-width='1.5'%3e%3c/path%3e%3cpath d='M1295.91 -97.35L1400.01 96' stroke='rgba(33%2c 21%2c 186%2c 1)' stroke-width='1.5'%3e%3c/path%3e%3cpath d='M1295.91 -97.35L1582.08 -86.42' stroke='rgba(33%2c 21%2c 186%2c 1)' stroke-width='1.5'%3e%3c/path%3e%3cpath d='M1308.1 40.6L1308.1 40.6' stroke='rgba(33%2c 21%2c 186%2c 1)' stroke-width='1.5'%3e%3c/path%3e%3cpath d='M1308.1 40.6L1400.01 96' stroke='rgba(33%2c 21%2c 186%2c 1)' stroke-width='1.5'%3e%3c/path%3e%3cpath d='M1299.63 195.82L1299.63 195.82' stroke='rgba(33%2c 21%2c 186%2c 1)' stroke-width='1.5'%3e%3c/path%3e%3cpath d='M1299.63 195.82L1423.08 217.08' stroke='rgba(33%2c 21%2c 186%2c 1)' stroke-width='1.5'%3e%3c/path%3e%3cpath d='M1299.63 195.82L1400.01 96' stroke='rgba(33%2c 21%2c 186%2c 1)' stroke-width='1.5'%3e%3c/path%3e%3cpath d='M1299.63 195.82L1308.1 40.6' stroke='rgba(33%2c 21%2c 186%2c 1)' stroke-width='1.5'%3e%3c/path%3e%3cpath d='M1299.63 195.82L1245.09 347.01' stroke='rgba(33%2c 21%2c 186%2c 1)' stroke-width='1.5'%3e%3c/path%3e%3cpath d='M1245.09 347.01L1245.09 347.01' stroke='rgba(33%2c 21%2c 186%2c 1)' stroke-width='1.5'%3e%3c/path%3e%3cpath d='M1245.09 347.01L1416.63 374.71' stroke='rgba(33%2c 21%2c 186%2c 1)' stroke-width='1.5'%3e%3c/path%3e%3cpath d='M1404.31 -70.74L1404.31 -70.74' stroke='rgba(33%2c 21%2c 186%2c 1)' stroke-width='1.5'%3e%3c/path%3e%3cpath d='M1404.31 -70.74L1308.1 40.6' stroke='rgba(33%2c 21%2c 186%2c 1)' stroke-width='1.5'%3e%3c/path%3e%3cpath d='M1404.31 -70.74L1400.01 96' stroke='rgba(33%2c 21%2c 186%2c 1)' stroke-width='1.5'%3e%3c/path%3e%3cpath d='M1404.31 -70.74L1582.08 -86.42' stroke='rgba(33%2c 21%2c 186%2c 1)' stroke-width='1.5'%3e%3c/path%3e%3cpath d='M1400.01 96L1400.01 96' stroke='rgba(33%2c 21%2c 186%2c 1)' stroke-width='1.5'%3e%3c/path%3e%3cpath d='M1423.08 217.08L1423.08 217.08' stroke='rgba(33%2c 21%2c 186%2c 1)' stroke-width='1.5'%3e%3c/path%3e%3cpath d='M1423.08 217.08L1400.01 96' stroke='rgba(33%2c 21%2c 186%2c 1)' stroke-width='1.5'%3e%3c/path%3e%3cpath d='M1423.08 217.08L1416.63 374.71' stroke='rgba(33%2c 21%2c 186%2c 1)' stroke-width='1.5'%3e%3c/path%3e%3cpath d='M1423.08 217.08L1587.96 211.33' stroke='rgba(33%2c 21%2c 186%2c 1)' stroke-width='1.5'%3e%3c/path%3e%3cpath d='M1416.63 374.71L1416.63 374.71' stroke='rgba(33%2c 21%2c 186%2c 1)' stroke-width='1.5'%3e%3c/path%3e%3cpath d='M1416.63 374.71L1459.3 518.56' stroke='rgba(33%2c 21%2c 186%2c 1)' stroke-width='1.5'%3e%3c/path%3e%3cpath d='M1416.63 374.71L1299.63 195.82' stroke='rgba(33%2c 21%2c 186%2c 1)' stroke-width='1.5'%3e%3c/path%3e%3cpath d='M1416.63 374.71L1587.96 211.33' stroke='rgba(33%2c 21%2c 186%2c 1)' stroke-width='1.5'%3e%3c/path%3e%3cpath d='M1416.63 374.71L1599.99 553.56' stroke='rgba(33%2c 21%2c 186%2c 1)' stroke-width='1.5'%3e%3c/path%3e%3cpath d='M1459.3 518.56L1459.3 518.56' stroke='rgba(33%2c 21%2c 186%2c 1)' stroke-width='1.5'%3e%3c/path%3e%3cpath d='M1459.3 518.56L1599.99 553.56' stroke='rgba(33%2c 21%2c 186%2c 1)' stroke-width='1.5'%3e%3c/path%3e%3cpath d='M1459.3 518.56L1561.75 645.41' stroke='rgba(33%2c 21%2c 186%2c 1)' stroke-width='1.5'%3e%3c/path%3e%3cpath d='M1391.28 687.75L1391.28 687.75' stroke='rgba(33%2c 21%2c 186%2c 1)' stroke-width='1.5'%3e%3c/path%3e%3cpath d='M1391.28 687.75L1561.75 645.41' stroke='rgba(33%2c 21%2c 186%2c 1)' stroke-width='1.5'%3e%3c/path%3e%3cpath d='M1391.28 687.75L1459.3 518.56' stroke='rgba(33%2c 21%2c 186%2c 1)' stroke-width='1.5'%3e%3c/path%3e%3cpath d='M1391.28 687.75L1599.99 553.56' stroke='rgba(33%2c 21%2c 186%2c 1)' stroke-width='1.5'%3e%3c/path%3e%3cpath d='M1391.28 687.75L1130.47 641.66' stroke='rgba(33%2c 21%2c 186%2c 1)' stroke-width='1.5'%3e%3c/path%3e%3cpath d='M1391.28 687.75L1154.75 532.83' stroke='rgba(33%2c 21%2c 186%2c 1)' stroke-width='1.5'%3e%3c/path%3e%3cpath d='M1391.28 687.75L1416.63 374.71' stroke='rgba(33%2c 21%2c 186%2c 1)' stroke-width='1.5'%3e%3c/path%3e%3cpath d='M1582.08 -86.42L1582.08 -86.42' stroke='rgba(33%2c 21%2c 186%2c 1)' stroke-width='1.5'%3e%3c/path%3e%3cpath d='M1582.08 -86.42L1602.22 79.73' stroke='rgba(33%2c 21%2c 186%2c 1)' stroke-width='1.5'%3e%3c/path%3e%3cpath d='M1582.08 -86.42L1400.01 96' stroke='rgba(33%2c 21%2c 186%2c 1)' stroke-width='1.5'%3e%3c/path%3e%3cpath d='M1602.22 79.73L1602.22 79.73' stroke='rgba(33%2c 21%2c 186%2c 1)' stroke-width='1.5'%3e%3c/path%3e%3cpath d='M1602.22 79.73L1587.96 211.33' stroke='rgba(33%2c 21%2c 186%2c 1)' stroke-width='1.5'%3e%3c/path%3e%3cpath d='M1602.22 79.73L1400.01 96' stroke='rgba(33%2c 21%2c 186%2c 1)' stroke-width='1.5'%3e%3c/path%3e%3cpath d='M1587.96 211.33L1587.96 211.33' stroke='rgba(33%2c 21%2c 186%2c 1)' stroke-width='1.5'%3e%3c/path%3e%3cpath d='M1587.96 211.33L1400.01 96' stroke='rgba(33%2c 21%2c 186%2c 1)' stroke-width='1.5'%3e%3c/path%3e%3cpath d='M1599.99 553.56L1599.99 553.56' stroke='rgba(33%2c 21%2c 186%2c 1)' stroke-width='1.5'%3e%3c/path%3e%3cpath d='M1599.99 553.56L1561.75 645.41' stroke='rgba(33%2c 21%2c 186%2c 1)' stroke-width='1.5'%3e%3c/path%3e%3cpath d='M1561.75 645.41L1561.75 645.41' stroke='rgba(33%2c 21%2c 186%2c 1)' stroke-width='1.5'%3e%3c/path%3e%3ccircle r='5' cx='-60.49' cy='354.03' fill='rgba(33%2c 21%2c 186%2c 1)'%3e%3c/circle%3e%3ccircle r='5' cx='-74.4' cy='502.5' fill='rgba(33%2c 21%2c 186%2c 1)'%3e%3c/circle%3e%3ccircle r='5' cx='-73.48' cy='661.39' fill='rgba(33%2c 21%2c 186%2c 1)'%3e%3c/circle%3e%3ccircle r='5' cx='90.91' cy='410.62' fill='rgba(33%2c 21%2c 186%2c 1)'%3e%3c/circle%3e%3ccircle r='5' cx='105.1' cy='559.94' fill='rgba(33%2c 21%2c 186%2c 1)'%3e%3c/circle%3e%3ccircle r='5' cx='85.38' cy='680.55' fill='rgba(33%2c 21%2c 186%2c 1)'%3e%3c/circle%3e%3ccircle r='5' cx='224.55' cy='353.58' fill='rgba(33%2c 21%2c 186%2c 1)'%3e%3c/circle%3e%3ccircle r='5' cx='192.12' cy='538.71' fill='rgba(33%2c 21%2c 186%2c 1)'%3e%3c/circle%3e%3ccircle r='5' cx='218.29' cy='663.73' fill='rgba(33%2c 21%2c 186%2c 1)'%3e%3c/circle%3e%3ccircle r='5' cx='340.33' cy='347.81' fill='rgba(33%2c 21%2c 186%2c 1)'%3e%3c/circle%3e%3ccircle r='5' cx='356.45' cy='527.97' fill='rgba(33%2c 21%2c 186%2c 1)'%3e%3c/circle%3e%3ccircle r='5' cx='534.35' cy='384.26' fill='rgba(33%2c 21%2c 186%2c 1)'%3e%3c/circle%3e%3ccircle r='5' cx='529.46' cy='532.85' fill='rgba(33%2c 21%2c 186%2c 1)'%3e%3c/circle%3e%3ccircle r='5' cx='520.23' cy='645.93' fill='rgba(33%2c 21%2c 186%2c 1)'%3e%3c/circle%3e%3ccircle r='5' cx='653.31' cy='244.45' fill='rgba(33%2c 21%2c 186%2c 1)'%3e%3c/circle%3e%3ccircle r='5' cx='704.15' cy='373.04' fill='rgba(33%2c 21%2c 186%2c 1)'%3e%3c/circle%3e%3ccircle r='5' cx='662.64' cy='525.07' fill='rgba(33%2c 21%2c 186%2c 1)'%3e%3c/circle%3e%3ccircle r='5' cx='803.92' cy='223.92' fill='rgba(33%2c 21%2c 186%2c 1)'%3e%3c/circle%3e%3ccircle r='5' cx='852.79' cy='391.87' fill='rgba(33%2c 21%2c 186%2c 1)'%3e%3c/circle%3e%3ccircle r='5' cx='847.01' cy='522.11' fill='rgba(33%2c 21%2c 186%2c 1)'%3e%3c/circle%3e%3ccircle r='5' cx='817.35' cy='656.4' fill='rgba(33%2c 21%2c 186%2c 1)'%3e%3c/circle%3e%3ccircle r='5' cx='974.62' cy='-41.15' fill='rgba(33%2c 21%2c 186%2c 1)'%3e%3c/circle%3e%3ccircle r='5' cx='1002.05' cy='61.8' fill='rgba(33%2c 21%2c 186%2c 1)'%3e%3c/circle%3e%3ccircle r='5' cx='1002.22' cy='188.2' fill='rgba(33%2c 21%2c 186%2c 1)'%3e%3c/circle%3e%3ccircle r='5' cx='991.86' cy='379.21' fill='rgba(33%2c 21%2c 186%2c 1)'%3e%3c/circle%3e%3ccircle r='5' cx='1002.54' cy='542.87' fill='rgba(33%2c 21%2c 186%2c 1)'%3e%3c/circle%3e%3ccircle r='5' cx='985.19' cy='650.68' fill='rgba(33%2c 21%2c 186%2c 1)'%3e%3c/circle%3e%3ccircle r='5' cx='1125.18' cy='-52.61' fill='rgba(33%2c 21%2c 186%2c 1)'%3e%3c/circle%3e%3ccircle r='5' cx='1135.94' cy='226.94' fill='rgba(33%2c 21%2c 186%2c 1)'%3e%3c/circle%3e%3ccircle r='5' cx='1150.67' cy='386.91' fill='rgba(33%2c 21%2c 186%2c 1)'%3e%3c/circle%3e%3ccircle r='5' cx='1154.75' cy='532.83' fill='rgba(33%2c 21%2c 186%2c 1)'%3e%3c/circle%3e%3ccircle r='5' cx='1130.47' cy='641.66' fill='rgba(33%2c 21%2c 186%2c 1)'%3e%3c/circle%3e%3ccircle r='5' cx='1295.91' cy='-97.35' fill='rgba(33%2c 21%2c 186%2c 1)'%3e%3c/circle%3e%3ccircle r='5' cx='1308.1' cy='40.6' fill='rgba(33%2c 21%2c 186%2c 1)'%3e%3c/circle%3e%3ccircle r='5' cx='1299.63' cy='195.82' fill='rgba(33%2c 21%2c 186%2c 1)'%3e%3c/circle%3e%3ccircle r='5' cx='1245.09' cy='347.01' fill='rgba(33%2c 21%2c 186%2c 1)'%3e%3c/circle%3e%3ccircle r='5' cx='1404.31' cy='-70.74' fill='rgba(33%2c 21%2c 186%2c 1)'%3e%3c/circle%3e%3ccircle r='5' cx='1400.01' cy='96' fill='rgba(33%2c 21%2c 186%2c 1)'%3e%3c/circle%3e%3ccircle r='5' cx='1423.08' cy='217.08' fill='rgba(33%2c 21%2c 186%2c 1)'%3e%3c/circle%3e%3ccircle r='5' cx='1416.63' cy='374.71' fill='rgba(33%2c 21%2c 186%2c 1)'%3e%3c/circle%3e%3ccircle r='5' cx='1459.3' cy='518.56' fill='rgba(33%2c 21%2c 186%2c 1)'%3e%3c/circle%3e%3ccircle r='5' cx='1391.28' cy='687.75' fill='rgba(33%2c 21%2c 186%2c 1)'%3e%3c/circle%3e%3ccircle r='5' cx='1582.08' cy='-86.42' fill='rgba(33%2c 21%2c 186%2c 1)'%3e%3c/circle%3e%3ccircle r='5' cx='1602.22' cy='79.73' fill='rgba(33%2c 21%2c 186%2c 1)'%3e%3c/circle%3e%3ccircle r='5' cx='1587.96' cy='211.33' fill='rgba(33%2c 21%2c 186%2c 1)'%3e%3c/circle%3e%3ccircle r='5' cx='1599.99' cy='553.56' fill='rgba(33%2c 21%2c 186%2c 1)'%3e%3c/circle%3e%3ccircle r='5' cx='1561.75' cy='645.41' fill='rgba(33%2c 21%2c 186%2c 1)'%3e%3c/circle%3e%3cpath d='M64.92 498.3L64.92 498.3' stroke='hsl(244.5%2c 80.1%25%2c 78.8%25)' stroke-width='1.5'%3e%3c/path%3e%3cpath d='M64.92 498.3L-84.87 502.6' stroke='hsl(244.5%2c 80.1%25%2c 78.8%25)' stroke-width='1.5'%3e%3c/path%3e%3cpath d='M64.92 498.3L221.05 492.92' stroke='hsl(244.5%2c 80.1%25%2c 78.8%25)' stroke-width='1.5'%3e%3c/path%3e%3cpath d='M64.92 498.3L61.58 711.61' stroke='hsl(244.5%2c 80.1%25%2c 78.8%25)' stroke-width='1.5'%3e%3c/path%3e%3cpath d='M61.58 711.61L61.58 711.61' stroke='hsl(244.5%2c 80.1%25%2c 78.8%25)' stroke-width='1.5'%3e%3c/path%3e%3cpath d='M61.58 711.61L242.95 648.23' stroke='hsl(244.5%2c 80.1%25%2c 78.8%25)' stroke-width='1.5'%3e%3c/path%3e%3cpath d='M61.58 711.61L-84.87 502.6' stroke='hsl(244.5%2c 80.1%25%2c 78.8%25)' stroke-width='1.5'%3e%3c/path%3e%3cpath d='M61.58 711.61L221.05 492.92' stroke='hsl(244.5%2c 80.1%25%2c 78.8%25)' stroke-width='1.5'%3e%3c/path%3e%3cpath d='M61.58 711.61L367.76 683.19' stroke='hsl(244.5%2c 80.1%25%2c 78.8%25)' stroke-width='1.5'%3e%3c/path%3e%3cpath d='M61.58 711.61L337.64 555.21' stroke='hsl(244.5%2c 80.1%25%2c 78.8%25)' stroke-width='1.5'%3e%3c/path%3e%3cpath d='M221.05 492.92L221.05 492.92' stroke='hsl(244.5%2c 80.1%25%2c 78.8%25)' stroke-width='1.5'%3e%3c/path%3e%3cpath d='M221.05 492.92L337.64 555.21' stroke='hsl(244.5%2c 80.1%25%2c 78.8%25)' stroke-width='1.5'%3e%3c/path%3e%3cpath d='M221.05 492.92L242.95 648.23' stroke='hsl(244.5%2c 80.1%25%2c 78.8%25)' stroke-width='1.5'%3e%3c/path%3e%3cpath d='M513.97 499.6L513.97 499.6' stroke='hsl(244.5%2c 80.1%25%2c 78.8%25)' stroke-width='1.5'%3e%3c/path%3e%3cpath d='M513.97 499.6L337.64 555.21' stroke='hsl(244.5%2c 80.1%25%2c 78.8%25)' stroke-width='1.5'%3e%3c/path%3e%3cpath d='M513.97 499.6L697.51 544.5' stroke='hsl(244.5%2c 80.1%25%2c 78.8%25)' stroke-width='1.5'%3e%3c/path%3e%3cpath d='M513.97 499.6L540.24 703.69' stroke='hsl(244.5%2c 80.1%25%2c 78.8%25)' stroke-width='1.5'%3e%3c/path%3e%3cpath d='M513.97 499.6L698.17 369.99' stroke='hsl(244.5%2c 80.1%25%2c 78.8%25)' stroke-width='1.5'%3e%3c/path%3e%3cpath d='M513.97 499.6L367.76 683.19' stroke='hsl(244.5%2c 80.1%25%2c 78.8%25)' stroke-width='1.5'%3e%3c/path%3e%3cpath d='M513.97 499.6L711.23 697.46' stroke='hsl(244.5%2c 80.1%25%2c 78.8%25)' stroke-width='1.5'%3e%3c/path%3e%3cpath d='M711.23 697.46L711.23 697.46' stroke='hsl(244.5%2c 80.1%25%2c 78.8%25)' stroke-width='1.5'%3e%3c/path%3e%3cpath d='M711.23 697.46L859.53 675' stroke='hsl(244.5%2c 80.1%25%2c 78.8%25)' stroke-width='1.5'%3e%3c/path%3e%3cpath d='M711.23 697.46L697.51 544.5' stroke='hsl(244.5%2c 80.1%25%2c 78.8%25)' stroke-width='1.5'%3e%3c/path%3e%3cpath d='M711.23 697.46L540.24 703.69' stroke='hsl(244.5%2c 80.1%25%2c 78.8%25)' stroke-width='1.5'%3e%3c/path%3e%3cpath d='M711.23 697.46L824.46 526.49' stroke='hsl(244.5%2c 80.1%25%2c 78.8%25)' stroke-width='1.5'%3e%3c/path%3e%3cpath d='M859.53 675L859.53 675' stroke='hsl(244.5%2c 80.1%25%2c 78.8%25)' stroke-width='1.5'%3e%3c/path%3e%3cpath d='M859.53 675L988.22 670.26' stroke='hsl(244.5%2c 80.1%25%2c 78.8%25)' stroke-width='1.5'%3e%3c/path%3e%3cpath d='M859.53 675L824.46 526.49' stroke='hsl(244.5%2c 80.1%25%2c 78.8%25)' stroke-width='1.5'%3e%3c/path%3e%3cpath d='M859.53 675L697.51 544.5' stroke='hsl(244.5%2c 80.1%25%2c 78.8%25)' stroke-width='1.5'%3e%3c/path%3e%3cpath d='M859.53 675L1011.59 515.85' stroke='hsl(244.5%2c 80.1%25%2c 78.8%25)' stroke-width='1.5'%3e%3c/path%3e%3cpath d='M859.53 675L1099.56 706.2' stroke='hsl(244.5%2c 80.1%25%2c 78.8%25)' stroke-width='1.5'%3e%3c/path%3e%3cpath d='M1011.59 515.85L1011.59 515.85' stroke='hsl(244.5%2c 80.1%25%2c 78.8%25)' stroke-width='1.5'%3e%3c/path%3e%3cpath d='M1011.59 515.85L962.69 392.01' stroke='hsl(244.5%2c 80.1%25%2c 78.8%25)' stroke-width='1.5'%3e%3c/path%3e%3cpath d='M1011.59 515.85L988.22 670.26' stroke='hsl(244.5%2c 80.1%25%2c 78.8%25)' stroke-width='1.5'%3e%3c/path%3e%3cpath d='M1011.59 515.85L824.46 526.49' stroke='hsl(244.5%2c 80.1%25%2c 78.8%25)' stroke-width='1.5'%3e%3c/path%3e%3cpath d='M988.22 670.26L988.22 670.26' stroke='hsl(244.5%2c 80.1%25%2c 78.8%25)' stroke-width='1.5'%3e%3c/path%3e%3cpath d='M988.22 670.26L1099.56 706.2' stroke='hsl(244.5%2c 80.1%25%2c 78.8%25)' stroke-width='1.5'%3e%3c/path%3e%3cpath d='M1440.91 -101.41L1440.91 -101.41' stroke='hsl(244.5%2c 80.1%25%2c 78.8%25)' stroke-width='1.5'%3e%3c/path%3e%3cpath d='M1440.91 -101.41L1431.26 43.51' stroke='hsl(244.5%2c 80.1%25%2c 78.8%25)' stroke-width='1.5'%3e%3c/path%3e%3cpath d='M1440.91 -101.41L1589.68 -92.91' stroke='hsl(244.5%2c 80.1%25%2c 78.8%25)' stroke-width='1.5'%3e%3c/path%3e%3cpath d='M-84.87 502.6L-84.87 502.6' stroke='hsl(244.5%2c 80.1%25%2c 78.8%25)' stroke-width='1.5'%3e%3c/path%3e%3cpath d='M-84.87 502.6L221.05 492.92' stroke='hsl(244.5%2c 80.1%25%2c 78.8%25)' stroke-width='1.5'%3e%3c/path%3e%3cpath d='M-84.87 502.6L242.95 648.23' stroke='hsl(244.5%2c 80.1%25%2c 78.8%25)' stroke-width='1.5'%3e%3c/path%3e%3cpath d='M-84.87 502.6L337.64 555.21' stroke='hsl(244.5%2c 80.1%25%2c 78.8%25)' stroke-width='1.5'%3e%3c/path%3e%3cpath d='M-84.87 502.6L367.76 683.19' stroke='hsl(244.5%2c 80.1%25%2c 78.8%25)' stroke-width='1.5'%3e%3c/path%3e%3cpath d='M242.95 648.23L242.95 648.23' stroke='hsl(244.5%2c 80.1%25%2c 78.8%25)' stroke-width='1.5'%3e%3c/path%3e%3cpath d='M242.95 648.23L367.76 683.19' stroke='hsl(244.5%2c 80.1%25%2c 78.8%25)' stroke-width='1.5'%3e%3c/path%3e%3cpath d='M242.95 648.23L337.64 555.21' stroke='hsl(244.5%2c 80.1%25%2c 78.8%25)' stroke-width='1.5'%3e%3c/path%3e%3cpath d='M337.64 555.21L337.64 555.21' stroke='hsl(244.5%2c 80.1%25%2c 78.8%25)' stroke-width='1.5'%3e%3c/path%3e%3cpath d='M337.64 555.21L367.76 683.19' stroke='hsl(244.5%2c 80.1%25%2c 78.8%25)' stroke-width='1.5'%3e%3c/path%3e%3cpath d='M367.76 683.19L367.76 683.19' stroke='hsl(244.5%2c 80.1%25%2c 78.8%25)' stroke-width='1.5'%3e%3c/path%3e%3cpath d='M367.76 683.19L540.24 703.69' stroke='hsl(244.5%2c 80.1%25%2c 78.8%25)' stroke-width='1.5'%3e%3c/path%3e%3cpath d='M367.76 683.19L221.05 492.92' stroke='hsl(244.5%2c 80.1%25%2c 78.8%25)' stroke-width='1.5'%3e%3c/path%3e%3cpath d='M540.24 703.69L540.24 703.69' stroke='hsl(244.5%2c 80.1%25%2c 78.8%25)' stroke-width='1.5'%3e%3c/path%3e%3cpath d='M698.17 369.99L698.17 369.99' stroke='hsl(244.5%2c 80.1%25%2c 78.8%25)' stroke-width='1.5'%3e%3c/path%3e%3cpath d='M698.17 369.99L859.83 377.47' stroke='hsl(244.5%2c 80.1%25%2c 78.8%25)' stroke-width='1.5'%3e%3c/path%3e%3cpath d='M698.17 369.99L697.51 544.5' stroke='hsl(244.5%2c 80.1%25%2c 78.8%25)' stroke-width='1.5'%3e%3c/path%3e%3cpath d='M698.17 369.99L824.46 526.49' stroke='hsl(244.5%2c 80.1%25%2c 78.8%25)' stroke-width='1.5'%3e%3c/path%3e%3cpath d='M698.17 369.99L962.69 392.01' stroke='hsl(244.5%2c 80.1%25%2c 78.8%25)' stroke-width='1.5'%3e%3c/path%3e%3cpath d='M697.51 544.5L697.51 544.5' stroke='hsl(244.5%2c 80.1%25%2c 78.8%25)' stroke-width='1.5'%3e%3c/path%3e%3cpath d='M697.51 544.5L824.46 526.49' stroke='hsl(244.5%2c 80.1%25%2c 78.8%25)' stroke-width='1.5'%3e%3c/path%3e%3cpath d='M859.83 377.47L859.83 377.47' stroke='hsl(244.5%2c 80.1%25%2c 78.8%25)' stroke-width='1.5'%3e%3c/path%3e%3cpath d='M859.83 377.47L962.69 392.01' stroke='hsl(244.5%2c 80.1%25%2c 78.8%25)' stroke-width='1.5'%3e%3c/path%3e%3cpath d='M859.83 377.47L824.46 526.49' stroke='hsl(244.5%2c 80.1%25%2c 78.8%25)' stroke-width='1.5'%3e%3c/path%3e%3cpath d='M859.83 377.47L1011.59 515.85' stroke='hsl(244.5%2c 80.1%25%2c 78.8%25)' stroke-width='1.5'%3e%3c/path%3e%3cpath d='M859.83 377.47L697.51 544.5' stroke='hsl(244.5%2c 80.1%25%2c 78.8%25)' stroke-width='1.5'%3e%3c/path%3e%3cpath d='M824.46 526.49L824.46 526.49' stroke='hsl(244.5%2c 80.1%25%2c 78.8%25)' stroke-width='1.5'%3e%3c/path%3e%3cpath d='M962.69 392.01L962.69 392.01' stroke='hsl(244.5%2c 80.1%25%2c 78.8%25)' stroke-width='1.5'%3e%3c/path%3e%3cpath d='M962.69 392.01L1102.79 346.25' stroke='hsl(244.5%2c 80.1%25%2c 78.8%25)' stroke-width='1.5'%3e%3c/path%3e%3cpath d='M1156.89 40.4L1156.89 40.4' stroke='hsl(244.5%2c 80.1%25%2c 78.8%25)' stroke-width='1.5'%3e%3c/path%3e%3cpath d='M1156.89 40.4L1258.29 95.36' stroke='hsl(244.5%2c 80.1%25%2c 78.8%25)' stroke-width='1.5'%3e%3c/path%3e%3cpath d='M1156.89 40.4L1090.08 203.31' stroke='hsl(244.5%2c 80.1%25%2c 78.8%25)' stroke-width='1.5'%3e%3c/path%3e%3cpath d='M1090.08 203.31L1090.08 203.31' stroke='hsl(244.5%2c 80.1%25%2c 78.8%25)' stroke-width='1.5'%3e%3c/path%3e%3cpath d='M1090.08 203.31L1102.79 346.25' stroke='hsl(244.5%2c 80.1%25%2c 78.8%25)' stroke-width='1.5'%3e%3c/path%3e%3cpath d='M1090.08 203.31L1258.29 95.36' stroke='hsl(244.5%2c 80.1%25%2c 78.8%25)' stroke-width='1.5'%3e%3c/path%3e%3cpath d='M1090.08 203.31L1289.41 262.12' stroke='hsl(244.5%2c 80.1%25%2c 78.8%25)' stroke-width='1.5'%3e%3c/path%3e%3cpath d='M1090.08 203.31L962.69 392.01' stroke='hsl(244.5%2c 80.1%25%2c 78.8%25)' stroke-width='1.5'%3e%3c/path%3e%3cpath d='M1102.79 346.25L1102.79 346.25' stroke='hsl(244.5%2c 80.1%25%2c 78.8%25)' stroke-width='1.5'%3e%3c/path%3e%3cpath d='M1102.79 346.25L1262.07 411.54' stroke='hsl(244.5%2c 80.1%25%2c 78.8%25)' stroke-width='1.5'%3e%3c/path%3e%3cpath d='M1099.56 706.2L1099.56 706.2' stroke='hsl(244.5%2c 80.1%25%2c 78.8%25)' stroke-width='1.5'%3e%3c/path%3e%3cpath d='M1099.56 706.2L1298.55 670.9' stroke='hsl(244.5%2c 80.1%25%2c 78.8%25)' stroke-width='1.5'%3e%3c/path%3e%3cpath d='M1099.56 706.2L1011.59 515.85' stroke='hsl(244.5%2c 80.1%25%2c 78.8%25)' stroke-width='1.5'%3e%3c/path%3e%3cpath d='M1258.29 95.36L1258.29 95.36' stroke='hsl(244.5%2c 80.1%25%2c 78.8%25)' stroke-width='1.5'%3e%3c/path%3e%3cpath d='M1258.29 95.36L1289.41 262.12' stroke='hsl(244.5%2c 80.1%25%2c 78.8%25)' stroke-width='1.5'%3e%3c/path%3e%3cpath d='M1258.29 95.36L1431.26 43.51' stroke='hsl(244.5%2c 80.1%25%2c 78.8%25)' stroke-width='1.5'%3e%3c/path%3e%3cpath d='M1289.41 262.12L1289.41 262.12' stroke='hsl(244.5%2c 80.1%25%2c 78.8%25)' stroke-width='1.5'%3e%3c/path%3e%3cpath d='M1289.41 262.12L1262.07 411.54' stroke='hsl(244.5%2c 80.1%25%2c 78.8%25)' stroke-width='1.5'%3e%3c/path%3e%3cpath d='M1262.07 411.54L1262.07 411.54' stroke='hsl(244.5%2c 80.1%25%2c 78.8%25)' stroke-width='1.5'%3e%3c/path%3e%3cpath d='M1262.07 411.54L1280.09 490.46' stroke='hsl(244.5%2c 80.1%25%2c 78.8%25)' stroke-width='1.5'%3e%3c/path%3e%3cpath d='M1280.09 490.46L1280.09 490.46' stroke='hsl(244.5%2c 80.1%25%2c 78.8%25)' stroke-width='1.5'%3e%3c/path%3e%3cpath d='M1280.09 490.46L1413.74 488.06' stroke='hsl(244.5%2c 80.1%25%2c 78.8%25)' stroke-width='1.5'%3e%3c/path%3e%3cpath d='M1280.09 490.46L1298.55 670.9' stroke='hsl(244.5%2c 80.1%25%2c 78.8%25)' stroke-width='1.5'%3e%3c/path%3e%3cpath d='M1280.09 490.46L1289.41 262.12' stroke='hsl(244.5%2c 80.1%25%2c 78.8%25)' stroke-width='1.5'%3e%3c/path%3e%3cpath d='M1280.09 490.46L1102.79 346.25' stroke='hsl(244.5%2c 80.1%25%2c 78.8%25)' stroke-width='1.5'%3e%3c/path%3e%3cpath d='M1298.55 670.9L1298.55 670.9' stroke='hsl(244.5%2c 80.1%25%2c 78.8%25)' stroke-width='1.5'%3e%3c/path%3e%3cpath d='M1298.55 670.9L1393.94 708.51' stroke='hsl(244.5%2c 80.1%25%2c 78.8%25)' stroke-width='1.5'%3e%3c/path%3e%3cpath d='M1298.55 670.9L1413.74 488.06' stroke='hsl(244.5%2c 80.1%25%2c 78.8%25)' stroke-width='1.5'%3e%3c/path%3e%3cpath d='M1298.55 670.9L1544.62 677.33' stroke='hsl(244.5%2c 80.1%25%2c 78.8%25)' stroke-width='1.5'%3e%3c/path%3e%3cpath d='M1298.55 670.9L1262.07 411.54' stroke='hsl(244.5%2c 80.1%25%2c 78.8%25)' stroke-width='1.5'%3e%3c/path%3e%3cpath d='M1431.26 43.51L1431.26 43.51' stroke='hsl(244.5%2c 80.1%25%2c 78.8%25)' stroke-width='1.5'%3e%3c/path%3e%3cpath d='M1431.26 43.51L1589.68 -92.91' stroke='hsl(244.5%2c 80.1%25%2c 78.8%25)' stroke-width='1.5'%3e%3c/path%3e%3cpath d='M1431.26 43.51L1289.41 262.12' stroke='hsl(244.5%2c 80.1%25%2c 78.8%25)' stroke-width='1.5'%3e%3c/path%3e%3cpath d='M1431.26 43.51L1156.89 40.4' stroke='hsl(244.5%2c 80.1%25%2c 78.8%25)' stroke-width='1.5'%3e%3c/path%3e%3cpath d='M1431.26 43.51L1090.08 203.31' stroke='hsl(244.5%2c 80.1%25%2c 78.8%25)' stroke-width='1.5'%3e%3c/path%3e%3cpath d='M1413.74 488.06L1413.74 488.06' stroke='hsl(244.5%2c 80.1%25%2c 78.8%25)' stroke-width='1.5'%3e%3c/path%3e%3cpath d='M1413.74 488.06L1545.19 403.08' stroke='hsl(244.5%2c 80.1%25%2c 78.8%25)' stroke-width='1.5'%3e%3c/path%3e%3cpath d='M1413.74 488.06L1262.07 411.54' stroke='hsl(244.5%2c 80.1%25%2c 78.8%25)' stroke-width='1.5'%3e%3c/path%3e%3cpath d='M1413.74 488.06L1583.3 538.94' stroke='hsl(244.5%2c 80.1%25%2c 78.8%25)' stroke-width='1.5'%3e%3c/path%3e%3cpath d='M1393.94 708.51L1393.94 708.51' stroke='hsl(244.5%2c 80.1%25%2c 78.8%25)' stroke-width='1.5'%3e%3c/path%3e%3cpath d='M1393.94 708.51L1544.62 677.33' stroke='hsl(244.5%2c 80.1%25%2c 78.8%25)' stroke-width='1.5'%3e%3c/path%3e%3cpath d='M1589.68 -92.91L1589.68 -92.91' stroke='hsl(244.5%2c 80.1%25%2c 78.8%25)' stroke-width='1.5'%3e%3c/path%3e%3cpath d='M1589.68 -92.91L1258.29 95.36' stroke='hsl(244.5%2c 80.1%25%2c 78.8%25)' stroke-width='1.5'%3e%3c/path%3e%3cpath d='M1589.68 -92.91L1156.89 40.4' stroke='hsl(244.5%2c 80.1%25%2c 78.8%25)' stroke-width='1.5'%3e%3c/path%3e%3cpath d='M1589.68 -92.91L1289.41 262.12' stroke='hsl(244.5%2c 80.1%25%2c 78.8%25)' stroke-width='1.5'%3e%3c/path%3e%3cpath d='M1589.68 -92.91L1545.19 403.08' stroke='hsl(244.5%2c 80.1%25%2c 78.8%25)' stroke-width='1.5'%3e%3c/path%3e%3cpath d='M1545.19 403.08L1545.19 403.08' stroke='hsl(244.5%2c 80.1%25%2c 78.8%25)' stroke-width='1.5'%3e%3c/path%3e%3cpath d='M1545.19 403.08L1583.3 538.94' stroke='hsl(244.5%2c 80.1%25%2c 78.8%25)' stroke-width='1.5'%3e%3c/path%3e%3cpath d='M1545.19 403.08L1544.62 677.33' stroke='hsl(244.5%2c 80.1%25%2c 78.8%25)' stroke-width='1.5'%3e%3c/path%3e%3cpath d='M1545.19 403.08L1280.09 490.46' stroke='hsl(244.5%2c 80.1%25%2c 78.8%25)' stroke-width='1.5'%3e%3c/path%3e%3cpath d='M1545.19 403.08L1262.07 411.54' stroke='hsl(244.5%2c 80.1%25%2c 78.8%25)' stroke-width='1.5'%3e%3c/path%3e%3cpath d='M1583.3 538.94L1583.3 538.94' stroke='hsl(244.5%2c 80.1%25%2c 78.8%25)' stroke-width='1.5'%3e%3c/path%3e%3cpath d='M1583.3 538.94L1544.62 677.33' stroke='hsl(244.5%2c 80.1%25%2c 78.8%25)' stroke-width='1.5'%3e%3c/path%3e%3cpath d='M1544.62 677.33L1544.62 677.33' stroke='hsl(244.5%2c 80.1%25%2c 78.8%25)' stroke-width='1.5'%3e%3c/path%3e%3cpath d='M1544.62 677.33L1413.74 488.06' stroke='hsl(244.5%2c 80.1%25%2c 78.8%25)' stroke-width='1.5'%3e%3c/path%3e%3cpath d='M1544.62 677.33L1280.09 490.46' stroke='hsl(244.5%2c 80.1%25%2c 78.8%25)' stroke-width='1.5'%3e%3c/path%3e%3ccircle r='25' cx='64.92' cy='498.3' fill='url(%23SvgjsRadialGradient1325)'%3e%3c/circle%3e%3ccircle r='25' cx='61.58' cy='711.61' fill='url(%23SvgjsRadialGradient1325)'%3e%3c/circle%3e%3ccircle r='25' cx='221.05' cy='492.92' fill='url(%23SvgjsRadialGradient1325)'%3e%3c/circle%3e%3ccircle r='25' cx='513.97' cy='499.6' fill='url(%23SvgjsRadialGradient1325)'%3e%3c/circle%3e%3ccircle r='25' cx='711.23' cy='697.46' fill='url(%23SvgjsRadialGradient1325)'%3e%3c/circle%3e%3ccircle r='25' cx='859.53' cy='675' fill='url(%23SvgjsRadialGradient1325)'%3e%3c/circle%3e%3ccircle r='25' cx='1011.59' cy='515.85' fill='url(%23SvgjsRadialGradient1325)'%3e%3c/circle%3e%3ccircle r='25' cx='988.22' cy='670.26' fill='url(%23SvgjsRadialGradient1325)'%3e%3c/circle%3e%3ccircle r='25' cx='1440.91' cy='-101.41' fill='url(%23SvgjsRadialGradient1325)'%3e%3c/circle%3e%3ccircle r='5' cx='-84.87' cy='502.6' fill='%23aba5f5'%3e%3c/circle%3e%3ccircle r='5' cx='242.95' cy='648.23' fill='%23aba5f5'%3e%3c/circle%3e%3ccircle r='5' cx='337.64' cy='555.21' fill='%23aba5f5'%3e%3c/circle%3e%3ccircle r='5' cx='367.76' cy='683.19' fill='%23aba5f5'%3e%3c/circle%3e%3ccircle r='5' cx='540.24' cy='703.69' fill='%23aba5f5'%3e%3c/circle%3e%3ccircle r='5' cx='698.17' cy='369.99' fill='%23aba5f5'%3e%3c/circle%3e%3ccircle r='5' cx='697.51' cy='544.5' fill='%23aba5f5'%3e%3c/circle%3e%3ccircle r='5' cx='859.83' cy='377.47' fill='%23aba5f5'%3e%3c/circle%3e%3ccircle r='5' cx='824.46' cy='526.49' fill='%23aba5f5'%3e%3c/circle%3e%3ccircle r='5' cx='962.69' cy='392.01' fill='%23aba5f5'%3e%3c/circle%3e%3ccircle r='5' cx='1156.89' cy='40.4' fill='%23aba5f5'%3e%3c/circle%3e%3ccircle r='5' cx='1090.08' cy='203.31' fill='%23aba5f5'%3e%3c/circle%3e%3ccircle r='5' cx='1102.79' cy='346.25' fill='%23aba5f5'%3e%3c/circle%3e%3ccircle r='5' cx='1099.56' cy='706.2' fill='%23aba5f5'%3e%3c/circle%3e%3ccircle r='5' cx='1258.29' cy='95.36' fill='%23aba5f5'%3e%3c/circle%3e%3ccircle r='5' cx='1289.41' cy='262.12' fill='%23aba5f5'%3e%3c/circle%3e%3ccircle r='5' cx='1262.07' cy='411.54' fill='%23aba5f5'%3e%3c/circle%3e%3ccircle r='5' cx='1280.09' cy='490.46' fill='%23aba5f5'%3e%3c/circle%3e%3ccircle r='5' cx='1298.55' cy='670.9' fill='%23aba5f5'%3e%3c/circle%3e%3ccircle r='5' cx='1431.26' cy='43.51' fill='%23aba5f5'%3e%3c/circle%3e%3ccircle r='5' cx='1413.74' cy='488.06' fill='%23aba5f5'%3e%3c/circle%3e%3ccircle r='5' cx='1393.94' cy='708.51' fill='%23aba5f5'%3e%3c/circle%3e%3ccircle r='5' cx='1589.68' cy='-92.91' fill='%23aba5f5'%3e%3c/circle%3e%3ccircle r='5' cx='1545.19' cy='403.08' fill='%23aba5f5'%3e%3c/circle%3e%3ccircle r='5' cx='1583.3' cy='538.94' fill='%23aba5f5'%3e%3c/circle%3e%3ccircle r='5' cx='1544.62' cy='677.33' fill='%23aba5f5'%3e%3c/circle%3e%3c/g%3e%3cdefs%3e%3cmask id='SvgjsMask1324'%3e%3crect width='1440' height='560' fill='white'%3e%3c/rect%3e%3c/mask%3e%3cradialGradient id='SvgjsRadialGradient1325'%3e%3cstop stop-color='white' offset='0.1'%3e%3c/stop%3e%3cstop stop-color='rgba(86%2c 74%2c 235%2c 1)' offset='0.2'%3e%3c/stop%3e%3cstop stop-color='rgba(86%2c 74%2c 235%2c 0)' offset='1'%3e%3c/stop%3e%3c/radialGradient%3e%3c/defs%3e%3c/svg%3e"

				uk-img="loading: eager"
				uk-scrollspy="target: [uk-scrollspy-class]; cls: uk-animation-slide-left-small; delay: 150;"
			>
				<div class="uk-padding-medium-horizontal">

					<div class="uk-width-1-1 uk-margin-large" uk-scrollspy-class>
						<h2 class="uk-text-white uk-heading-small uk-text-bold"><span
							class="uk-text-success">Simple steps</span>
							to make it more
							easier.</h2>
					</div>
					<div class="uk-grid uk-child-width-1-1 uk-grid-medium" uk-grid>
						<div class="uk-panel" uk-scrollspy-class>
							<h3 class="uk-text-success uk-margin-remove-bottom">1. Browse through our fleet
								catalogue</h3>
							<p class="uk-text-white">Search through our fleet of cars to find the
								perfect rental that
								suits you</p>
						</div>
						<div class="uk-panel" uk-scrollspy-class>
							<h3 class="uk-text-success uk-margin-remove-bottom">2. Select the best offer for you</h3>
							<p class="uk-text-white">
								Choose the best offer that suits your needs.
							</p>
						</div>
						<div class="uk-panel" uk-scrollspy-class>
							<h3 class="uk-text-success uk-margin-remove-bottom">3. Book your car</h3>
							<p class="uk-text-white">Tell us where, you want to be picked, the date, and
								how long you
								would want to rent the car</p>
						</div>
						<div class="uk-panel" uk-scrollspy-class>
							<h3 class="uk-text-success uk-margin-remove-bottom">3. Book your car, hassle free.</h3>
							<p class="uk-text-white">Tell us where, you want to be picked, the date, and
								how long you
								would want to rent the car</p>
						</div>
						<div class="uk-panel" uk-scrollspy-class>
							<h3 class="uk-text-success uk-margin-remove-bottom">4. Pay and Walla!</h3>
							<p class="uk-text-white">Make the necessary payment to reserve the car and
								wait for one of
								our representatives to call you.</p>
						</div>
						<div uk-scrollspy-class>
							<Link class="uk-button uk-button-large uk-button-primary start-now" href="">
								Start now
							</Link>
						</div>
					</div>
				</div>
			</div>
		</LargeSectionLayout>

		<LargeSectionLayout class="uk-section-muted"
							uk-scrollspy="target: [uk-scrollspy-class]; cls: uk-animation-slide-bottom-small; delay: 350;">
			<div class="uk-width-1-1 uk-text-center" uk-scrollspy-class>
				<h1 class="uk-h4 uk-text-uppercase">
					Recherché Cars at Less
				</h1>
				<hr class="uk-divider-small">
				<h2 class="uk-heading-medium uk-text-bold">
					Our Collection
				</h2>
				<p class="uk-text-lead uk-text-background">
					Explore out cars, you might like.
				</p>

			</div>
			<div class="uk-width-1-1 uk-margin" uk-filter="target: .cars-filter;animation: delayed-fade"
				 uk-scrollspy-class>
				<ul class="filter-actions uk-subnav uk-subnav-pill uk-flex-center uk-margin-medium-bottom">
					<li class="uk-active" uk-filter-control><a href="#">All</a></li>
					<li uk-filter-control=".tag-white"><a href="#">Popular</a></li>
					<li uk-filter-control=".tag-blue"><a href="#">Sedans</a></li>
					<li uk-filter-control=".tag-black"><a href="#">Premium</a></li>
					<li uk-filter-control=".tag-black"><a href="#">Vans</a></li>
					<li uk-filter-control=".tag-black"><a href="#">Buses</a></li>
					<li uk-filter-control=".tag-black"><a href="#">Cargo</a></li>
				</ul>
				<ul class="cars-filter uk-child-width-1-2@s uk-child-width-1-3@m uk-grid-match uk-grid" uk-grid
					uk-scrollspy-class="uk-animation-slide-left-small">
					<li class="tag-white">
						<HighlightCarCard :car="{brand: 'BWM', model: 'M340i'}"/>
					</li>
					<li class="tag-blue">
						<HighlightCarCard :car="{brand: 'BWM', model: 'M340i'}"/>
					</li>
					<li class="tag-black">
						<HighlightCarCard :car="{brand: 'BWM', model: 'M340i'}"/>
					</li>
					<li class="tag-white">
						<HighlightCarCard :car="{brand: 'BWM', model: 'M340i'}"/>
					</li>
					<li class="tag-blue">
						<HighlightCarCard :car="{brand: 'BWM', model: 'M340i'}"/>
					</li>
					<li class="tag-black">
						<HighlightCarCard :car="{brand: 'BWM', model: 'M340i'}"/>
					</li>


				</ul>
				<div class="uk-text-center uk-width-1-1 uk-margin-medium-top">
					<Link class="uk-button uk-button-large uk-button-secondary uk-width-1-5@m uk-width-1-1">
						See all cars
						<span class="uk-icon uk-margin-small-left" uk-icon="icon: arrow-right; ratio: 1.2"></span>
					</Link>
				</div>
			</div>
		</LargeSectionLayout>

		<LargeSectionLayout class="why-us uk-background-cover uk-background-center-center uk-background-image"
							data-src="data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' version='1.1' xmlns:xlink='http://www.w3.org/1999/xlink' xmlns:svgjs='http://svgjs.com/svgjs' width='1440' height='560' preserveAspectRatio='none' viewBox='0 0 1440 560'%3e%3cg mask='url(%26quot%3b%23SvgjsMask1013%26quot%3b)' fill='none'%3e%3crect width='1440' height='560' x='0' y='0' fill='rgba(86%2c 74%2c 235%2c 1)'%3e%3c/rect%3e%3cpath d='M1298.809951275105 614.7719467889207L1373.8652606755634 534.2849814666477 1293.3782953532905 459.2296720661893 1218.3229859528321 539.7166373884623z' fill='rgba(95%2c 81%2c 252%2c 0.4)' class='triangle-float2'%3e%3c/path%3e%3cpath d='M1220.89 225.42 a156.52 156.52 0 1 0 313.04 0 a156.52 156.52 0 1 0 -313.04 0z' fill='rgba(95%2c 81%2c 252%2c 0.4)' class='triangle-float1'%3e%3c/path%3e%3cpath d='M434.08 286.79 a97.25 97.25 0 1 0 194.5 0 a97.25 97.25 0 1 0 -194.5 0z' fill='rgba(95%2c 81%2c 252%2c 0.4)' class='triangle-float3'%3e%3c/path%3e%3cpath d='M386.52975472966483 168.4273245341603L541.2648585370135 157.60719202916422 375.70962222466875 13.692220726811627z' fill='rgba(95%2c 81%2c 252%2c 0.4)' class='triangle-float3'%3e%3c/path%3e%3cpath d='M713.0827448647893 338.3587523547659L750.0262680796618 439.8602481827255 883.806750214165 333.6942154464371z' fill='rgba(95%2c 81%2c 252%2c 0.4)' class='triangle-float3'%3e%3c/path%3e%3cpath d='M170.56043737662708 502.35090173280065L300.4091769391808 557.4684215936644 355.52669680004453 427.6196820311107 225.67795723749083 372.50216217024695z' fill='rgba(95%2c 81%2c 252%2c 0.4)' class='triangle-float3'%3e%3c/path%3e%3c/g%3e%3cdefs%3e%3cmask id='SvgjsMask1013'%3e%3crect width='1440' height='560' fill='white'%3e%3c/rect%3e%3c/mask%3e%3cstyle%3e %40keyframes float1 %7b 0%25%7btransform: translate(0%2c 0)%7d 50%25%7btransform: translate(-10px%2c 0)%7d 100%25%7btransform: translate(0%2c 0)%7d %7d .triangle-float1 %7b animation: float1 5s infinite%3b %7d %40keyframes float2 %7b 0%25%7btransform: translate(0%2c 0)%7d 50%25%7btransform: translate(-5px%2c -5px)%7d 100%25%7btransform: translate(0%2c 0)%7d %7d .triangle-float2 %7b animation: float2 4s infinite%3b %7d %40keyframes float3 %7b 0%25%7btransform: translate(0%2c 0)%7d 50%25%7btransform: translate(0%2c -10px)%7d 100%25%7btransform: translate(0%2c 0)%7d %7d .triangle-float3 %7b animation: float3 6s infinite%3b %7d %3c/style%3e%3c/defs%3e%3c/svg%3e"
							uk-img="loading: lazy"
		>
			<div class="uk-container uk-container-small">
				<div class="uk-width-1-1 uk-text-center uk-margin-large-bottom"
					 uk-scrollspy="target: [uk-scrollspy-class]; cls: uk-animation-slide-bottom-small; delay: fale;">
					<h2 class="uk-heading-small uk-text-bold uk-text-capitalize uk-text-white">
						Why we are the <span class="uk-text-success">best</span> in the car rental space?
					</h2>
					<p class="uk-text-lead uk-text-muted">
						Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad asperiores consequatur dolorem fuga
						qui quibusdam quidem, quod sit tenetur totam!
					</p>
				</div>
			</div>
			<article class="uk-grid uk-grid-medium uk-child-width-1-2@m uk-child-width-1-1 uk-grid-match" uk-grid>
				<div class="uk-panel uk-tile">
					<div class="">
						<aside class="uk-grid uk-child-width-1-1 uk-grid-medium" uk-grid>
							<div uk-parallax="x: -10,0;media: @m;easing: -2.5">
								<div
									class="uk-card uk-border-rounded uk-card-small uk-card-secondary uk-card-body uk-grid uk-grid-small uk-flex-middle"
									uk-grid>
									<div class="uk-width-auto ">
										<div class="uk-background-muted uk-border-rounded">
											<span class="uk-icon uk-text-warning"
												  uk-icon="icon: offline-bolt;ratio: 3"></span>
										</div>
									</div>
									<div class="uk-width-expand">
										<h5 class="uk-h3 uk-text-bold">Easy and fast booking process</h5>
									</div>
								</div>
							</div>
							<div uk-parallax="x: -20,0;media: @m;easing: -2.5">
								<div
									class="uk-card uk-border-rounded uk-card-small uk-card-secondary uk-card-body uk-grid uk-grid-small uk-flex-middle"
									uk-grid>
									<div class="uk-width-auto">
										<div class="uk-background-muted uk-border-rounded">
											<span class="uk-icon uk-text-warning"
												  uk-icon="icon: map-pin;ratio: 3"></span>
										</div>

									</div>
									<div class="uk-width-expand">
										<h5 class="uk-h3 uk-text-bold">Our rental services span across major cities
											country-wide</h5>
									</div>
								</div>
							</div>
							<div uk-parallax="x: -30,0;media: @m;easing: -2.5">
								<div
									class="uk-card uk-border-rounded uk-card-small uk-card-secondary uk-card-body uk-grid uk-grid-small uk-flex-middle"
									uk-grid>
									<div class="uk-width-auto">
										<div class="uk-background-muted uk-border-rounded">
											<span class="uk-icon uk-text-warning"
												  uk-icon="icon: discount-check;ratio: 3"></span>
										</div>

									</div>
									<div class="uk-width-expand">
										<h5 class="uk-h3 uk-text-bold">The best affordable prices in the market</h5>
									</div>
								</div>
							</div>
							<div uk-parallax="x: -40,0;media: @m;easing: -2.5">
								<div
									class="uk-card uk-border-rounded uk-card-small uk-card-secondary uk-card-body uk-grid uk-grid-small uk-flex-middle"
									uk-grid>
									<div class="uk-width-auto">
										<div class="uk-background-muted uk-border-rounded">
											<span class="uk-icon uk-text-warning" uk-icon="icon: gauge;ratio: 3"></span>
										</div>

									</div>
									<div class="uk-width-expand">
										<h5 class="uk-h3 uk-text-bold">Unlimited mileage. Travel across our
											beautiful Kenya.</h5>
									</div>
								</div>
							</div>
							<div uk-parallax="x: -50,0;media: @m;easing: -2.5">
								<div
									class="uk-card uk-border-rounded uk-card-small uk-card-secondary uk-card-body uk-grid uk-grid-small uk-flex-middle"
									uk-grid>
									<div class="uk-width-auto">
										<div class="uk-background-muted uk-border-rounded">
											<span class="uk-icon uk-text-warning"
												  uk-icon="icon: cancel-alt;ratio: 3"></span>
										</div>

									</div>
									<div class="uk-width-expand">
										<h5 class="uk-h3 uk-text-bold">
											Free cancellation, at no additional cost.
										</h5>
									</div>
								</div>
							</div>
							<div uk-parallax="x: -60,0;media: @m;easing: -2.5">
								<div
									class="uk-card uk-border-rounded uk-card-small uk-card-secondary uk-card-body uk-grid uk-grid-small uk-flex-middle"
									uk-grid>
									<div class="uk-width-auto">
										<div class="uk-background-muted uk-border-rounded">
											<span class="uk-icon uk-text-warning"
												  uk-icon="icon: dollar;ratio: 3"></span>
										</div>

									</div>
									<div class="uk-width-expand">
										<h5 class="uk-h3 uk-text-bold">
											100% money guarantee.
										</h5>
									</div>
								</div>
							</div>
						</aside>
					</div>
				</div>

				<div uk-parallax="x: 90,0;media: @m;easing: -2.5"
					 class="uk-visible@m uk-background-image uk-background-cover"
					 :data-src="WhyUsSmall"
					 :data-srcset="`${WhyUsSmall} 640w, ${WhyUsMedium} 1280w, ${WhyUsLarge} 1920w`"
					 sizes="(min-width: 650px) 650px, 100vw"
					 uk-img
				></div>
				<div class="uk-hidden@m">
					<div class="uk-cover-container">
						<picture>
							<source type="image/jpeg"
									:srcset="`${WhyUsSmallAlt} 640w, ${WhyUsMediumAlt} 1280w, ${WhyUsLargeAlt} 1440w`"
									sizes="(min-width: 640px) 640px">
							<img decoding="async"
								 :src="WhyUsSmallAlt"
								 alt="Black man wearing white point up" loading="lazy"
								 class="uk-transition-scale-up uk-transition-opaque"
								 width="640" height="427">
						</picture>
					</div>
				</div>
			</article>
		</LargeSectionLayout>

		<LargeSectionLayout
			uk-scrollspy="target: [uk-scrollspy-class]; cls: uk-animation-slide-bottom-medium; delay: 200;">
			<div class="uk-width-1-1 uk-margin-large">
				<h2 class="uk-text-danger uk-h4" uk-scrollspy-class>Omnipresent</h2>
				<hr class="uk-divider-small" uk-scrollspy-class>
				<h3 class="uk-h1 uk-text-bold uk-width-xlarge" uk-scrollspy-class>
					Country-wide coverage, at your <span class="uk-text-background">convenience.</span>
				</h3>
			</div>

			<div class="uk-grid uk-grid-margin" uk-grid>
				<div class="uk-width-1-3@s">
					<div class="uk-margin-large-top@m">
						<div class="uk-inline-clip uk-light uk-margin-large uk-text-center" uk-scrollspy-class>
							<picture>
								<source type="image/jpeg"
										:srcset="`${MombasaSmall} 640w, ${MombasaMedium} 1024w, ${MombasaLarge} 1440w`"
										sizes="(min-width: 640px) 640px">
								<img decoding="async"
									 :src="MombasaSmall"
									 alt="Mombasa Town Image" loading="lazy"
									 class="uk-transition-scale-up uk-transition-opaque"
									 width="640" height="640">
							</picture>
							<div class="uk-position-bottom-left">
								<div class="uk-panel uk-padding-small uk-margin-remove-first-child">
									<h3 class="uk-text-bold uk-margin-top uk-margin-remove-bottom">Mombasa</h3>
								</div>
							</div>

						</div>
					</div>
				</div>
				<div class="uk-width-1-3@s">
					<div class="uk-inline-clip uk-light uk-margin-large uk-text-center" uk-scrollspy-class>
						<picture>
							<source type="image/jpeg"
									:srcset="`${NairobiSmall} 640w, ${NairobiMedium} 1024w, ${NairobiLarge} 1440w`"
									sizes="(min-width: 640px) 640px">
							<img decoding="async"
								 :src="NairobiSmall"
								 alt="Nairobi City Image" loading="lazy"
								 class="uk-transition-scale-up uk-transition-opaque"
								 width="640" height="959">
						</picture>
						<div class="uk-position-bottom-left">
							<div class="uk-panel uk-padding-small uk-margin-remove-first-child">
								<h3 class="uk-text-bold uk-margin-top uk-margin-remove-bottom">Nairobi</h3>
							</div>
						</div>

					</div>
				</div>
				<div class="uk-width-1-3@s">
					<div class="uk-hidden@m uk-inline-clip uk-light uk-margin-large uk-text-center"
						 uk-scrollspy-class>
						<picture>
							<source type="image/jpeg"
									:srcset="`${KisumuSmall} 640w, ${KisumuMedium} 1024w, ${KisumuLarge} 1440w`"
									sizes="(min-width: 640px) 640px">
							<img decoding="async"
								 :src="KisumuSmall"
								 alt="Kisumu City Image" loading="lazy"
								 class="uk-transition-scale-up uk-transition-opaque"
								 width="640" height="427">
						</picture>
						<div class="uk-position-bottom-left">
							<div class="uk-panel uk-padding-small uk-margin-remove-first-child">
								<h3 class="uk-text-bold uk-margin-top uk-margin-remove-bottom">
									Kisumu
								</h3>
							</div>
						</div>
					</div>
					<div class="uk-panel uk-margin-remove-first-child uk-visible@m uk-margin-remove-vertical" uk-scrollspy-class>

						<p class="uk-panel uk-margin-top">
							You can rent a car from major cities and towns country wide. <br>
							<span class="uk-text-emphasis">Mombasa, Nairobi, Kisumu, Nyeri, Kiambu, Nakuru, Eldoret</span> <span class="uk-text-warning">...</span>
						</p>

						<div class="uk-margin-top">
							<a href="#"
							   class="uk-button uk-button-text">
								Start searching.
							</a>
						</div>

					</div>
					<div class="uk-inline-clip uk-light uk-visible@m uk-margin-large uk-text-center" uk-scrollspy-class>
						<picture>
							<source type="image/jpeg"
									:srcset="`${KisumuSmall} 640w, ${KisumuMedium} 1024w, ${KisumuLarge} 1440w`"
									sizes="(min-width: 640px) 640px">
							<img decoding="async"
								 :src="KisumuSmall"
								 alt="Kisumu City Image" loading="lazy"
								 class="uk-transition-scale-up uk-transition-opaque"
								 width="640" height="959">
						</picture>
						<div class="uk-position-bottom-left">
							<div class="uk-panel uk-padding-small uk-margin-remove-first-child">
								<h3 class="uk-text-bold uk-margin-top uk-margin-remove-bottom">
									Kisumu
								</h3>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="uk-width-1-1 uk-hidden@m">
				<div class="uk-panel uk-hidden@m uk-margin" uk-scrollspy-class>
					<p class="uk-panel uk-margin-top">
						You can rent a car from major cities and towns country wide. <br>
						<span class="uk-text-emphasis">Mombasa, Nairobi, Kisumu, Nyeri, Kiambu, Nakuru, Eldoret</span> <span class="uk-text-warning">...</span>
					</p>

					<div class="uk-margin-top">
						<a href="#"
						   class="uk-button uk-button-text">
							Start searching.
						</a>
					</div>

				</div>
			</div>
		</LargeSectionLayout>

		<LargeSectionLayout>
			<div class="uk-background-image uk-background-cover"
				 data-src="data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' version='1.1' xmlns:xlink='http://www.w3.org/1999/xlink' xmlns:svgjs='http://svgjs.com/svgjs' width='1440' height='480' preserveAspectRatio='none' viewBox='0 0 1440 480'%3e%3cg mask='url(%26quot%3b%23SvgjsMask1048%26quot%3b)' fill='none'%3e%3crect width='1440' height='480' x='0' y='0' fill='rgba(26%2c 30%2c 35%2c 1)'%3e%3c/rect%3e%3cpath d='M8 480L488 0L543.5 0L63.5 480z' fill='url(%23SvgjsLinearGradient1049)'%3e%3c/path%3e%3cpath d='M352.8 480L832.8 0L1024.8 0L544.8 480z' fill='url(%23SvgjsLinearGradient1049)'%3e%3c/path%3e%3cpath d='M637.6 480L1117.6 0L1377.1 0L897.1 480z' fill='url(%23SvgjsLinearGradient1049)'%3e%3c/path%3e%3cpath d='M1378 480L898 0L835 0L1315 480z' fill='url(%23SvgjsLinearGradient1050)'%3e%3c/path%3e%3cpath d='M1063.2 480L583.2 0L362.70000000000005 0L842.7 480z' fill='url(%23SvgjsLinearGradient1050)'%3e%3c/path%3e%3cpath d='M752.4 480L272.4 0L-36.60000000000002 0L443.4 480z' fill='url(%23SvgjsLinearGradient1050)'%3e%3c/path%3e%3cpath d='M1080.1732821422352 480L1440 120.17328214223522L1440 480z' fill='url(%23SvgjsLinearGradient1049)'%3e%3c/path%3e%3cpath d='M0 480L359.8267178577648 480L 0 120.17328214223522z' fill='url(%23SvgjsLinearGradient1050)'%3e%3c/path%3e%3c/g%3e%3cdefs%3e%3cmask id='SvgjsMask1048'%3e%3crect width='1440' height='480' fill='white'%3e%3c/rect%3e%3c/mask%3e%3clinearGradient x1='0%25' y1='100%25' x2='100%25' y2='0%25' id='SvgjsLinearGradient1049'%3e%3cstop stop-color='rgba(15%2c 124%2c 185%2c 0.2)' offset='0'%3e%3c/stop%3e%3cstop stop-opacity='0' stop-color='rgba(15%2c 124%2c 185%2c 0.2)' offset='0.66'%3e%3c/stop%3e%3c/linearGradient%3e%3clinearGradient x1='100%25' y1='100%25' x2='0%25' y2='0%25' id='SvgjsLinearGradient1050'%3e%3cstop stop-color='rgba(15%2c 124%2c 185%2c 0.2)' offset='0'%3e%3c/stop%3e%3cstop stop-opacity='0' stop-color='rgba(15%2c 124%2c 185%2c 0.2)' offset='0.66'%3e%3c/stop%3e%3c/linearGradient%3e%3c/defs%3e%3c/svg%3e"
				uk-img="loading: lazy"
			>

				<aside class="uk-tile uk-tile-large uk-light">
					<div class="uk-padding-medium-horizontal@m">
						<div class="uk-width-1-1 uk-width-xlarge@m">
							<h2 class="uk-heading-small uk-text-bold uk-margin-large-bottom">
								<span class="uk-text-success">Custom, tailored</span> arrangements?
							</h2>
							<p class="uk-text-lead uk-margin-large-bottom">
								Looking for <span class="uk-text-secondary">long term hires</span>, ease transportation for your employees or clients,
								executive
								wedding hires, or any other arrangement <span class="uk-text-primary">customized</span> to your liking?
								Don't worry. <span class="uk-text-primary">We've got you covered.</span>
							</p>
							<a href="mailto:info@bonge-inc.co.ke"
							   class="uk-button uk-button-default uk-button-large uk-width-1-1 uk-width-1-3@m">
								<span class="uk-icon" uk-icon="icon: hipchat;ratio: 1.2"></span>
								Talk to us.
							</a>
						</div>
					</div>
				</aside>

			</div>
		</LargeSectionLayout>
	</GuestLayout>
</template>

<style scoped>
@media (min-width: 1200px) {
	.panel-overlay {
		background-color: rgba(248, 248, 248, .08);
		max-height: 53.25rem;
		height: 100%;
		backdrop-filter: blur(16px);
		margin-right: 0;
		padding-right: 0;
	}
}

.filter-actions > * > :first-child {
	background-color: #ededed;
	color: #2c2c2c;
	border-radius: .375rem;
}

.filter-actions > * > :first-child:hover, .filter-actions > .uk-active > a {
	background-color: #564aeb;
	color: #fff;
}

.why-us .uk-text-lead {
	color: #d4cdcd !important;
}


</style>
