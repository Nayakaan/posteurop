<div class="u-menu">
	<div class="main-wrapper">
		<div class="u-menu__inner">
			<div class="u-menu__top">
				<div class="u-menu__logo">
					<?php include get_icons_directory('svg/logo.svg') ?>
					<div id="burger-menu" class="u-header__mobile__burger d-flex">
						<div class="burger-menu__content">
							<span class="u-header__mobile__bar"></span>
						</div>
					</div>
				</div>
				<div class="u-menu__control d-flex">
					<div class="u-menu__search">
						<div class="u-header__search">
							<form class="u-form__search__wrapper">
								<input class="u-form__search" type="search" placeholder="Search our website" name="q" />
								<button class="u-form__search__square" type="submit">
									<div class="u-form__search__btn">Search</div>
								</button>
							</form>
						</div>
					</div>
					<div class="u-menu__filters d-flex d-flex-align-c">
						<div class="u-menu__account">
							<a class="js-search-button" href="#">
								<?php include get_icons_directory('icons/magnifying-glass.svg') ?>
							</a>
						</div>
						<div class="u-menu__glass">
							<a href="#">
								<?php include get_icons_directory('icons/account.svg') ?>
							</a>
						</div>
					</div>
					<div class="u-menu__switcher">
						<?php pll_the_languages(array('show_flags' => 1, 'show_names' => 0)); ?>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="u-menu__main p-relative bg-blue-2">
		<div class="main-wrapper">
			<nav>
				<ul class="u-menu__ul list-reset d-flex d-flex-justify-c">
					<li class="u-menu__li u-menu--has-children d-flex d-flex-center">
						<a class="u-menu__cta u-menu__cta--active text-blue" href="#">About us</a>
						<div class="u-menu__sub bg-blue">
							<div class="nav-wrapper">
								<ul class="u-menu__sub__ul text-white list-reset d-flex d-flex-wrap">
									<li class="u-menu__sub__li">
										<div class="u-menu__sub__wrapper">
											<a class="u-menu__sub__cta" href="#">What we do</a>
										</div>
									</li>
									<li class="u-menu__sub__li">
										<div class="u-menu__sub__wrapper">
											<a class="u-menu__sub__cta" href="#">Team</a>
										</div>
									</li>
									<li class="u-menu__sub__li">
										<div class="u-menu__sub__wrapper">
											<a class="u-menu__sub__cta" href="#">Partners</a>
										</div>
									</li>
									<li class="u-menu__sub__li">
										<div class="u-menu__sub__wrapper">
											<a class="u-menu__sub__cta" href="#">Employment</a>
										</div>
									</li>
									<li class="u-menu__sub__li">
										<div class="u-menu__sub__wrapper">
											<a class="u-menu__sub__cta" href="#">Manifesto</a>
										</div>
									</li>
									<li class="u-menu__sub__li">
										<div class="u-menu__sub__wrapper">
											<a class="u-menu__sub__cta" href="/our-members">Members</a>
										</div>
									</li>
									<li class="u-menu__sub__li">
										<div class="u-menu__sub__wrapper">
											<a class="u-menu__sub__cta" href="#">Postal history</a>
										</div>
									</li>
									<li class="u-menu__sub__li">
										<div class="u-menu__sub__wrapper">
											<a class="u-menu__sub__cta" href="#">Contact us</a>
										</div>
									</li>
									<li class="u-menu__sub__li">
										<div class="u-menu__sub__wrapper">
											<a class="u-menu__sub__cta" href="#">Structure and Organisation</a>
										</div>
									</li>
								</ul>
							</div>
						</div>
					</li>
					<li class="u-menu__li u-menu--has-children d-flex d-flex-center">
						<a class="u-menu__cta text-blue" href="#">Activities</a>
						<div class="u-menu__sub bg-blue">
							<div class="nav-wrapper">
								<ul class="u-menu__sub__ul text-white list-reset d-flex d-flex-wrap">
									<li class="u-menu__sub__li">
										<div class="u-menu__sub__wrapper">
											<a class="u-menu__sub__cta" href="#">Policy areas</a>
										</div>
									</li>
									<li class="u-menu__sub__li">
										<div class="u-menu__sub__wrapper">
											<a class="u-menu__sub__cta" href="#">Operational</a>
										</div>
									</li>
									<li class="u-menu__sub__li">
										<div class="u-menu__sub__wrapper">
											<a class="u-menu__sub__cta" href="#">Sustainability Platform</a>
										</div>
									</li>
									<li class="u-menu__sub__li">
										<div class="u-menu__sub__wrapper">
											<a class="u-menu__sub__cta" href="#">RADAR</a>
										</div>
									</li>
									<li class="u-menu__sub__li">
										<div class="u-menu__sub__wrapper">
											<a class="u-menu__sub__cta" href="#">European Union Affairs</a>
										</div>
									</li>
									<li class="u-menu__sub__li">
										<div class="u-menu__sub__wrapper">
											<a class="u-menu__sub__cta" href="#">Markets</a>
										</div>
									</li>
									<li class="u-menu__sub__li">
										<div class="u-menu__sub__wrapper">
											<a class="u-menu__sub__cta" href="#">Best Practices Wider Europe</a>
										</div>
									</li>
									<li class="u-menu__sub__li">
										<div class="u-menu__sub__wrapper">
											<a class="u-menu__sub__cta" href="#">European Projects</a>
										</div>
									</li>
									<li class="u-menu__sub__li">
										<div class="u-menu__sub__wrapper">
											<a class="u-menu__sub__cta" href="#">UPU & RU Affairs</a>
										</div>
									</li>
									<li class="u-menu__sub__li">
										<div class="u-menu__sub__wrapper">
											<a class="u-menu__sub__cta" href="#">Corporate Social Responsibility</a>
										</div>
									</li>
									<li class="u-menu__sub__li">
										<div class="u-menu__sub__wrapper">
											<a class="u-menu__sub__cta" href="#">Security and Customs</a>
										</div>
									</li>
								</ul>
							</div>
						</div>
					</li>
					<li class="u-menu__li d-flex d-flex-center">
						<a class="u-menu__cta text-blue" href="#">Sustainability</a>
					</li>
					<li class="u-menu__li d-flex d-flex-center">
						<a class="u-menu__cta text-blue" href="#">Campaigns</a>
					</li>
					<li class="u-menu__li u-menu--has-children d-flex d-flex-center">
						<a class="u-menu__cta text-blue" href="#">News & Resources</a>
						<div class="u-menu__sub bg-blue">
							<div class="nav-wrapper">
								<ul class="u-menu__sub__ul text-white list-reset d-flex d-flex-wrap">
									<li class="u-menu__sub__li">
										<div class="u-menu__sub__wrapper">
											<a class="u-menu__sub__cta" href="#">Resources</a>
										</div>
									</li>
									<li class="u-menu__sub__li">
										<div class="u-menu__sub__wrapper">
											<a class="u-menu__sub__cta" href="#">News</a>
										</div>
									</li>
									<li class="u-menu__sub__li">
										<div class="u-menu__sub__wrapper">
											<a class="u-menu__sub__cta" href="#">Resources</a>
										</div>
									</li>
								</ul>
							</div>
						</div>
					</li>
				</ul>
			</nav>
		</div>
	</div>
	<?php get_template_part('partials/general/menu-mobile') ?>
</div>