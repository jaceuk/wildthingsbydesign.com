<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php
	if (is_home() || is_front_page()) {
	?>
		<meta name="description" content="Treat someone you love to a rude, funny or sarcastic mug.">
	<?php
	}
	?>

	<?php
	if (is_product()) {
	?>
		<meta name="description" content="<?php echo strip_tags(wc_get_product($post->ID)->get_description()); ?>">
	<?php
	}
	?>

	<?php wp_head(); ?>

	<?php if (!file_exists('c:\windows')) { ?>
		<!-- Google tag (gtag.js) -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=G-WZLPMWB8YG"></script>
		<script>
			window.dataLayer = window.dataLayer || [];

			function gtag() {
				dataLayer.push(arguments);
			}
			gtag('js', new Date());

			gtag('config', 'G-WZLPMWB8YG');
		</script>
	<?php } ?>

	<!-- Meta Pixel Code -->
	<script>
		! function(f, b, e, v, n, t, s) {
			if (f.fbq) return;
			n = f.fbq = function() {
				n.callMethod ?
					n.callMethod.apply(n, arguments) : n.queue.push(arguments)
			};
			if (!f._fbq) f._fbq = n;
			n.push = n;
			n.loaded = !0;
			n.version = '2.0';
			n.queue = [];
			t = b.createElement(e);
			t.async = !0;
			t.src = v;
			s = b.getElementsByTagName(e)[0];
			s.parentNode.insertBefore(t, s)
		}(window, document, 'script',
			'https://connect.facebook.net/en_US/fbevents.js');
		fbq('init', '358964673257456');
		fbq('track', 'PageView');
	</script>
	<noscript><img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=358964673257456&ev=PageView&noscript=1" /></noscript>
	<!-- End Meta Pixel Code -->
</head>



<body <?php body_class(); ?>>
	<?php if (!is_checkout() || !is_wc_endpoint_url('order-received')) { ?>
		<?php get_template_part('components/christmas-cutoff-banner'); ?>
	<?php } ?>

	<header class="header">
		<div class="inner-wrapper grid">
			<a href="<?php echo esc_url(home_url('/')); ?>" rel="home" aria-label="Home">



				<svg class="logo" viewBox="0 0 963 617" xmlns="http://www.w3.org/2000/svg">
					<path d="M693.145 107.478C693.99 105.194 695.961 104.005 699.059 103.911C702.157 103.817 704.238 104.865 705.302 107.056L705.396 124.845C709.777 122.154 715.3 121.497 721.965 122.874C728.63 124.251 733.371 128.585 736.187 135.876C739.004 143.167 738.55 150.567 734.826 158.078C731.134 165.556 725.767 169.64 718.726 170.329C711.717 171.017 707.211 170.016 705.208 167.325C704.082 169.64 701.907 170.688 698.684 170.469C695.492 170.282 693.614 169.124 693.051 166.996L693.145 107.478ZM719.196 134.843C715.19 133.404 710.762 134.045 705.912 136.768V155.261C709.511 158.547 713.328 159.642 717.365 158.547C721.433 157.452 724.03 155.418 725.157 152.445C726.315 149.441 726.612 146.108 726.049 142.447C725.485 138.786 723.201 136.251 719.196 134.843ZM779.887 185.49C776.946 188.369 771.955 189.824 764.914 189.855C757.873 189.886 752.679 188.588 749.33 185.959C744.981 183.894 743.557 181.015 745.059 177.322C746.561 173.661 749.408 172.785 753.602 174.694C756.481 177.229 760.345 178.402 765.195 178.214C770.046 178.058 772.205 175.836 771.673 171.549V167.371C766.979 169.812 762.285 170.798 757.591 170.329C752.929 169.859 749.221 167.997 746.467 164.743C743.745 161.488 742.07 157.233 741.445 151.976C740.819 146.719 741.523 142.087 743.557 138.082C745.591 134.045 746.561 130.556 746.467 127.615C746.404 124.673 748.157 123.171 751.724 123.108C755.291 123.046 757.31 124.282 757.779 126.817C758.28 129.32 757.435 133.341 755.244 138.88C753.085 144.387 752.788 148.94 754.353 152.539C755.917 156.138 759.078 157.952 763.834 157.984C768.622 158.015 771.219 156.372 771.626 153.055L771.673 127.286C771.673 124.407 773.77 122.905 777.963 122.78C782.156 122.655 784.315 124.407 784.44 128.037L784.581 175.257C784.393 179.2 782.829 182.611 779.887 185.49ZM731.165 201.864C734.67 201.926 736.594 203.287 736.938 205.947L737.032 264.996C736.469 267.124 734.576 268.282 731.353 268.469C728.161 268.688 726.002 267.64 724.875 265.325C722.873 268.016 718.085 269.017 710.512 268.329C702.971 267.64 697.682 263.901 694.647 257.11C691.612 250.289 691.424 242.888 694.084 234.908C696.775 226.929 701.453 222.251 708.118 220.874C714.784 219.497 720.307 220.154 724.688 222.845L724.781 205.994C725.532 203.178 727.66 201.801 731.165 201.864ZM724.453 234.298C719.603 231.576 715.175 230.934 711.169 232.374C707.164 233.782 704.879 236.317 704.316 239.978C703.753 243.639 704.035 246.972 705.161 249.976C706.319 252.948 708.916 254.982 712.953 256.078C717.021 257.173 720.854 256.078 724.453 252.792V234.298ZM777.071 266.263C772.033 268.923 765.853 269.549 758.53 268.141C751.208 266.733 746.045 262.837 743.04 256.453C740.068 250.038 739.849 243.091 742.383 235.612C744.918 228.102 749.925 223.346 757.404 221.343C764.883 219.309 771.188 219.434 776.32 221.719C781.452 223.972 783.361 226.944 782.046 230.637C780.732 234.298 778.276 235.331 774.677 233.735C770.296 231.138 765.821 230.34 761.253 231.341C756.715 232.342 754.165 234.674 753.602 238.335L770.077 238.288C772.956 239.008 774.38 240.791 774.348 243.639C774.317 246.455 772.846 248.411 769.936 249.506H753.461C754.431 253.011 757.059 255.452 761.346 256.829C765.665 258.174 770.093 257.204 774.63 253.918C779.48 252.072 782.359 253.011 783.267 256.735C784.174 260.427 782.109 263.603 777.071 266.263ZM795.236 222.141C800.524 219.45 806.517 218.965 813.213 220.686C819.941 222.376 823.039 224.754 822.507 227.821C821.975 230.856 820.52 232.468 818.142 232.655C815.764 232.843 813.041 232.327 809.975 231.106C806.908 229.886 804.342 229.683 802.277 230.496C800.243 231.31 799.68 232.624 800.587 234.439C801.495 236.223 803.56 237.302 806.783 237.678C810.006 238.022 813.104 238.648 816.077 239.555C819.05 240.431 821.756 242.231 824.197 244.953C826.669 247.644 827.154 251.54 825.652 256.641C824.181 261.742 820.88 265.293 815.748 267.296C810.616 269.299 804.358 269.189 796.973 266.967C789.619 264.746 785.739 262.07 785.332 258.941C784.925 255.812 786.036 253.778 788.665 252.839C791.293 251.869 794.36 252.479 797.865 254.669C801.401 256.829 804.874 257.752 808.285 257.439C811.727 257.126 813.542 255.827 813.73 253.543C813.918 251.259 811.633 249.819 806.877 249.225C802.152 248.599 797.646 247.159 793.359 244.906C789.071 242.653 786.991 238.976 787.116 233.876C787.272 228.744 789.979 224.832 795.236 222.141ZM830.299 225.568C830.675 221.938 832.802 220.107 836.683 220.076C840.563 220.013 842.753 221.828 843.254 225.521V263.212C842.566 266.873 840.391 268.704 836.73 268.704C833.068 268.704 830.925 266.78 830.299 262.931V225.568ZM830.111 209.515C830.111 204.351 832.427 201.848 837.058 202.005C841.721 202.161 844.021 204.727 843.958 209.702C843.927 214.678 841.611 217.181 837.011 217.213C832.443 217.213 830.143 214.647 830.111 209.515ZM872.544 287.714C866.004 287.683 860.387 286.369 855.693 283.771C853.158 281.143 852.579 278.467 853.956 275.745C855.333 273.054 857.977 272.35 861.889 273.633C867.709 275.886 872.121 276.699 875.125 276.073C878.161 275.448 879.913 274.008 880.382 271.755L880.429 266.873C876.048 269.565 870.525 270.222 863.86 268.845C857.195 267.468 852.454 263.134 849.638 255.843C846.821 248.552 847.26 241.167 850.952 233.688C854.676 226.178 860.042 222.079 867.052 221.39C874.093 220.702 878.614 221.703 880.617 224.394C881.744 222.079 883.903 221.03 887.095 221.249C890.318 221.437 892.211 222.595 892.774 224.723L892.962 269.971C892.837 276.042 891.037 280.517 887.564 283.396C884.091 286.306 879.084 287.745 872.544 287.714ZM866.911 257.392C870.917 258.8 875.344 258.143 880.195 255.42V236.927C876.596 233.641 872.763 232.546 868.695 233.641C864.658 234.736 862.061 236.786 860.903 239.79C859.776 242.763 859.495 246.08 860.058 249.741C860.621 253.402 862.906 255.952 866.911 257.392ZM897.703 226.225C898.36 223.377 900.566 221.938 904.321 221.906C908.107 221.844 910.204 223.127 910.611 225.755C915.305 223.002 920.139 221.703 925.115 221.859C930.122 222.016 933.986 223.565 936.709 226.506C939.462 229.448 941.152 233.547 941.778 238.804C942.404 244.061 941.246 250.289 938.305 257.486C935.363 264.683 934.111 270.582 934.549 275.182C934.988 279.813 933.329 282.269 929.574 282.551C925.85 282.833 923.535 280.517 922.627 275.604C921.751 270.722 923.018 264.292 926.429 256.312C929.871 248.301 930.747 242.387 929.058 238.57C927.368 234.752 923.973 232.827 918.872 232.796C913.803 232.765 911.065 234.408 910.658 237.725L910.611 263.963C910.611 266.842 908.514 268.344 904.321 268.469C900.128 268.595 897.969 266.842 897.844 263.212L897.703 226.225Z" fill-opacity="0.4" />
					<path d="M10.7485 66.188C3.7388 48.4377 7.30019 36.736 21.4327 31.083C35.5652 25.3169 46.645 30.8003 54.6723 47.5332L128.274 235.778C132.91 253.528 127.709 264.495 112.672 268.678C97.7481 272.861 87.6857 267.039 82.485 251.21L10.7485 66.188ZM167.449 40.58C166.997 29.8393 177.003 20.3988 197.467 12.2585C218.044 4.11819 237.942 4.17472 257.162 12.4281C276.496 20.6815 288.65 35.4358 293.624 56.691C298.712 77.8332 294.246 98.8623 280.227 119.778L213.408 212.205C207.303 227.694 205.833 239.113 208.999 246.462C210.808 256.977 205.438 264.438 192.888 268.848C180.451 273.37 170.785 269.47 163.888 257.146L83.3329 67.5448C75.6449 50.3597 79.0932 38.771 93.6779 32.7789C108.263 26.7867 120.699 32.044 130.988 48.5507L185.765 182.187L228.332 127.919C252.753 98.297 259.706 76.4765 249.192 62.4571C238.677 48.3246 227.823 44.8197 216.63 51.9425C205.551 58.9522 194.697 61.4961 184.069 59.574C173.442 57.652 167.902 51.3207 167.449 40.58ZM312.449 114.691C313.805 101.576 321.494 94.9618 335.513 94.8487C349.532 94.6226 357.447 101.18 359.255 114.521V250.702C356.768 263.93 348.911 270.544 335.683 270.544C322.455 270.544 314.71 263.591 312.449 249.684V114.691ZM311.77 56.691C311.77 38.0361 320.137 28.9914 336.87 29.5567C353.716 30.122 362.025 39.3929 361.799 57.3694C361.686 75.3459 353.32 84.3907 336.7 84.5037C320.193 84.5037 311.883 75.2328 311.77 56.691ZM386.22 49.0595C387.69 35.9445 395.435 29.3305 409.454 29.2175C423.473 28.9914 431.388 35.5488 433.197 48.8899V250.702C430.709 263.93 422.852 270.544 409.624 270.544C396.396 270.544 388.651 263.591 386.39 249.684L386.22 49.0595ZM596.342 29.0479C609.005 29.274 615.958 34.1921 617.202 43.8022L617.541 257.146C615.506 264.834 608.666 269.017 597.02 269.696C585.488 270.487 577.687 266.7 573.617 258.333C566.381 268.056 549.083 271.674 521.722 269.187C494.475 266.7 475.368 253.189 464.401 228.655C453.434 204.008 452.756 177.269 462.366 148.439C472.089 119.609 488.992 102.706 513.073 97.7317C537.155 92.7571 557.11 95.1314 572.939 104.855L573.278 43.9718C575.991 33.7964 583.679 28.8218 596.342 29.0479ZM572.091 146.234C554.566 136.398 538.568 134.08 524.097 139.281C509.625 144.369 501.372 153.527 499.337 166.755C497.302 179.983 498.319 192.024 502.389 202.877C506.572 213.618 515.956 220.967 530.541 224.924C545.239 228.881 559.089 224.924 572.091 213.053V146.234ZM39.918 326.229C40.1441 308.592 47.9452 300.056 63.3213 300.621C78.8105 301.073 85.1984 310.853 82.485 329.96L82.3154 374.732H128.274C141.615 377.332 148.173 385.868 147.947 400.34C147.721 414.698 140.767 422.047 127.087 422.386H80.7891L80.6195 471.907C81.524 486.491 87.8553 495.254 99.6136 498.193C111.485 501.133 121.038 499.38 128.274 492.936C135.623 486.378 143.594 486.661 152.186 493.784C160.779 500.907 162.249 509.556 156.596 519.731C150.943 529.793 139.411 537.651 121.999 543.304C104.701 548.957 86.329 547.205 66.8827 538.047C47.5495 528.889 37.9394 509.782 38.0525 480.725V421.708H23.8069C11.0312 417.977 4.69981 410.063 4.81287 397.966C4.92593 385.755 11.3138 378.293 23.9765 375.58H40.0875L39.918 326.229ZM176.099 321.481C177.342 310.514 185.03 305.143 199.163 305.37C213.408 305.483 221.322 310.74 222.905 321.141L222.736 392.369C241.956 377.897 260.554 371.51 278.531 373.205C296.62 374.901 310.583 381.628 320.419 393.387C330.369 405.145 336.474 420.521 338.735 439.515C340.996 458.509 334.891 481.686 320.419 509.047C306.061 536.294 303.856 556.419 313.805 569.421C323.868 582.536 327.486 593.672 324.659 602.83C321.946 612.101 314.936 616.51 303.63 616.058C292.324 615.719 282.375 607.635 273.782 591.807C265.19 575.978 262.363 558.397 265.303 539.064C268.355 519.731 274.234 502.094 282.94 486.152C291.646 470.098 294.529 454.269 291.589 438.667C288.763 422.952 276.948 415.546 256.145 416.451C235.455 417.242 224.375 423.63 222.905 435.614L222.736 530.415C222.736 540.817 215.161 546.244 200.011 546.696C184.861 547.148 177.06 540.817 176.607 527.702L176.099 321.481ZM358.577 391.691C359.934 378.576 367.622 371.962 381.641 371.849C395.661 371.623 403.575 378.18 405.384 391.521V527.702C402.897 540.93 395.039 547.544 381.811 547.544C368.583 547.544 360.838 540.591 358.577 526.684V391.691ZM357.899 333.691C357.899 315.036 366.265 305.991 382.998 306.557C399.844 307.122 408.154 316.393 407.928 334.369C407.815 352.346 399.448 361.391 382.828 361.504C366.322 361.504 358.012 352.233 357.899 333.691ZM426.413 394.065C428.787 383.777 436.758 378.576 450.325 378.463C464.005 378.237 471.58 382.872 473.05 392.369C490.009 382.42 507.477 377.728 525.453 378.293C543.543 378.858 557.506 384.455 567.342 395.083C577.291 405.71 583.397 420.521 585.658 439.515C587.919 458.509 583.736 481.008 573.108 507.012C562.481 533.016 557.958 554.327 559.541 570.947C561.124 587.68 555.132 596.555 541.565 597.573C528.11 598.59 519.744 590.224 516.465 572.473C513.3 554.836 517.878 531.602 530.202 502.772C542.639 473.829 545.804 452.46 539.699 438.667C533.594 424.874 521.327 417.921 502.898 417.808C484.582 417.694 474.69 423.63 473.22 435.614L473.05 530.415C473.05 540.817 465.475 546.244 450.325 546.696C435.175 547.148 427.374 540.817 426.922 527.702L426.413 394.065ZM684.529 616.228C660.899 616.115 640.605 611.366 623.646 601.982C614.488 592.485 612.396 582.818 617.371 572.982C622.346 563.259 631.899 560.715 646.032 565.351C667.061 573.491 683.002 576.431 693.856 574.169C704.823 571.908 711.154 566.707 712.85 558.567L713.02 540.93C697.191 550.653 677.236 553.027 653.155 548.052C629.073 543.078 611.944 527.419 601.769 501.076C591.593 474.733 593.176 448.051 606.517 421.03C619.972 393.895 639.361 379.085 664.687 376.597C690.125 374.11 706.462 377.728 713.698 387.451C717.768 379.085 725.569 375.297 737.102 376.088C748.747 376.767 755.587 380.95 757.622 388.638L758.3 552.123C757.848 574.056 751.347 590.224 738.797 600.625C726.248 611.14 708.158 616.341 684.529 616.228ZM664.178 506.673C678.65 511.76 694.648 509.386 712.172 499.55V432.731C699.17 420.86 685.32 416.903 670.622 420.86C656.038 424.817 646.654 432.223 642.47 443.076C638.4 453.817 637.383 465.801 639.418 479.029C641.453 492.257 649.706 501.472 664.178 506.673ZM807.142 379.311C826.249 369.588 847.9 367.835 872.095 374.053C896.403 380.159 907.596 388.751 905.674 399.831C903.752 410.798 898.494 416.62 889.902 417.299C881.309 417.977 871.473 416.112 860.393 411.702C849.313 407.293 840.043 406.558 832.581 409.498C825.232 412.437 823.197 417.186 826.475 423.743C829.754 430.188 837.216 434.088 848.861 435.445C860.506 436.689 871.699 438.95 882.44 442.228C893.181 445.394 902.96 451.895 911.779 461.731C920.711 471.454 922.463 485.53 917.036 503.959C911.722 522.388 899.795 535.22 881.253 542.456C862.711 549.692 840.099 549.296 813.417 541.269C786.848 533.242 772.828 523.575 771.359 512.269C769.889 500.963 773.902 493.614 783.4 490.222C792.897 486.718 803.976 488.922 816.639 496.836C829.415 504.638 841.965 507.973 854.288 506.842C866.725 505.712 873.282 501.02 873.96 492.766C874.639 484.513 866.385 479.312 849.2 477.164C832.128 474.903 815.848 469.702 800.358 461.562C784.869 453.421 777.351 440.137 777.803 421.708C778.368 403.166 788.148 389.034 807.142 379.311Z" />
				</svg>
			</a>

			<?php if (!is_checkout() || is_wc_endpoint_url('order-received')) { ?>

				<nav class="account-and-basket">
					<div class="menu">
						<ul>
							<li><a href="/my-account">
									<svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000">
										<path d="M0 0h24v24H0V0z" fill="none" />
										<path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v1c0 .55.45 1 1 1h14c.55 0 1-.45 1-1v-1c0-2.66-5.33-4-8-4z" />
									</svg>
									Account</a></li>
							<li><a href="/basket">
									<svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000">
										<path d="M0 0h24v24H0V0z" fill="none" />
										<path d="M22 9h-4.79l-4.39-6.57c-.4-.59-1.27-.59-1.66 0L6.77 9H2c-.55 0-1 .45-1 1 0 .09.01.18.04.27l2.54 9.27c.23.84 1 1.46 1.92 1.46h13c.92 0 1.69-.62 1.93-1.46l2.54-9.27L23 10c0-.55-.45-1-1-1zM11.99 4.79L14.8 9H9.18l2.81-4.21zM12 17c-1.1 0-2-.9-2-2s.9-2 2-2 2 .9 2 2-.9 2-2 2z" />
									</svg>
									Basket
									<?php if (sizeof(WC()->cart->get_cart()) > 0) {
										echo '<div class="badge">' . WC()->cart->get_cart_contents_count() . '</div>';
									} ?>
								</a></li>
						</ul>
					</div>
				</nav>

				<div class="search">
					<?php
					get_search_form();
					?>
				</div>
		</div>

		<nav class="nav">
			<div class="inner-wrapper">
				<div class="menu">
					<ul>
						<li><a href="/">Home</a></li>
						<li><a href="/product-category/clothing/">Clothing</a></li>
						<li><a href="/product-category/home-living/">Home & Living</a></li>
					</ul>

					<?php
					get_template_part('components/animal-select');
					?>
				</div>
			</div>
		</nav>
	<?php } ?>
	</header>

	<?php
	if (is_home() || is_front_page()) {
		get_template_part('components/strapline');
	}
	?>