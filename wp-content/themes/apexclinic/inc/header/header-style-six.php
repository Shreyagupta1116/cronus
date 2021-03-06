<?php
/**
 * Header Style Six Template
 *
 * @package apexclinic
 */

?>

<!-- wraper_header -->
<?php if ( true == apexclinic_global_var( 'header_six_floating', '', false ) ) { ?>
	<header class="wraper_header style-six floating-header">
<?php } else { ?>
	<header class="wraper_header style-six static-header">
<?php } ?>
	<!-- wraper_header_main -->
	<?php if ( true == apexclinic_global_var( 'header_six_sticky', '', false ) ) { ?>
		<div class="wraper_header_main i-am-sticky">
	<?php } else { ?>
		<div class="wraper_header_main">
	<?php } ?>
		<div class="container">
			<!-- header_main -->
			<div class="header_main">
				<?php if ( apexclinic_global_var( 'header_six_logo', 'url', true ) ) { ?>
					<!-- brand-logo -->
					<div class="brand-logo">
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo esc_url( apexclinic_global_var( 'header_six_logo', 'url', true ) ); ?>" alt="<?php echo esc_attr( apexclinic_global_var( 'header_six_logo', 'alt', true ) ); ?>"></a>
					</div>
					<!-- brand-logo -->
				<?php } ?>
				<!-- header_main_action -->
				<div class="header_main_action">
					<ul>
						<?php if ( ( class_exists( 'WooCommerce' ) ) && ( true == apexclinic_global_var( 'header_cart_display', '', false ) ) ) : ?>
							<li class="header-cart-bar">
								<a class="header-cart-bar-icon" href="<?php echo esc_url( wc_get_cart_url() ); ?>">
									<i class="fa fa-shopping-cart"></i>
									<span class="cart-count"><?php echo esc_html( WC()->cart->get_cart_contents_count() ); ?></span>
								</a>
							</li>
						<?php endif; ?>
						<?php if ( true == apexclinic_global_var( 'header_six_search_display', '', false ) ) : ?>
							<?php if ( 'floating-search' == apexclinic_global_var( 'header_six_search_style', '', false ) ) { ?>
								<li class="floating-searchbar">
									<i class="fa fa-search"></i>
									<i class="fa fa-times"></i>
									<!-- floating-search-bar -->
									<div class="floating-search-bar">
										<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
										<div class="form-row">
											<input type="search" placeholder="<?php echo esc_attr__( 'Search...', 'apexclinic' ); ?>" value="" name="s" required>
											<button type="submit"><i class="fa fa-search"></i></button>
										</div>
										</form>
									</div>
									<!-- floating-search-bar -->
								</li>
							<?php } elseif ( 'flyout-search' == apexclinic_global_var( 'header_six_search_style', '', false ) ) { ?>
								<li class="flyout-searchbar-toggle">
									<i class="fa fa-search"></i>
									<i class="fa fa-times"></i>
								</li>
							<?php } ?>
						<?php endif; ?>
						<?php if ( ( true == apexclinic_global_var( 'header_six_menu', '', false ) ) ) : ?>
							<li class="header-full-width-menu">
								<i class="fa fa-bars"></i>
								<i class="fa fa-times"></i>
							</li>
						<?php endif; ?>
					</ul>
				</div>
				<!-- header_main_action -->
				<?php if ( ( true == apexclinic_global_var( 'header_six_menu', '', false ) ) ) : ?>
					<!-- top-bar-menu -->
					<div class="top-bar-menu">
						<?php
						wp_nav_menu(
							array(
								'theme_location' => 'full-width-menu',
								'fallback_cb'    => false,
							)
						);
						?>
					</div>
					<!-- top-bar-menu -->
				<?php endif; ?>
				<div class="clearfix"></div>
			</div>
			<!-- header_main -->
		</div>
	</div>
	<!-- wraper_header_main -->
</header>
<!-- wraper_header -->

<?php if ( true == apexclinic_global_var( 'header_six_search_display', '', false ) ) : ?>
	<?php if ( 'flyout-search' == apexclinic_global_var( 'header_six_search_style', '', false ) ) : ?>
		<!-- wraper_flyout_search -->
		<div class="wraper_flyout_search header-style-one">
			<div class="table">
				<div class="table-cell">
					<!-- flyout-search-close -->
					<div class="flyout-search-close">
						<i class="fa fa-times"></i>
					</div>
					<!-- flyout-search-close -->
					<!-- flyout_search -->
					<div class="flyout_search">
						<!-- search-form -->
						<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
						<div class="form-row">
							<input type="search" placeholder="<?php echo esc_attr__( 'Search...', 'apexclinic' ); ?>" value="" name="s" required>
							<button type="submit"><i class="fa fa-search"></i></button>
						</div>
						</form>
						<!-- search-form -->
					</div>
					<!-- flyout_search -->
				</div>
			</div>
		</div>
		<!-- wraper_flyout_search -->
	<?php endif; ?>
<?php endif; ?>
