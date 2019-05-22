<!DOCTYPE html>
<html lang="en">

<head>


@yield('header')

</head>

<body>

	<div class="super_container">

		<!-- Header -->

		<header class="header">

			<!-- Top Bar -->

			<div class="top_bar">
				<div class="container">
					<div class="row">
						<div class="col d-flex flex-row">
							<div class="top_bar_contact_item">
								<div class="top_bar_icon"><img src="{{asset('frontend/images/phone.png')}}" alt=""></div>020 23322221
							</div>
							<div class="top_bar_contact_item">
								<div class="top_bar_icon"><img src="{{asset('frontend/images/mail.png')}}" alt=""></div><a href="mailto:fastsales<blade gmail.com">phongvilai
									@gmail.com</a>
							</div>
							<div class="top_bar_content ml-auto">
								<div class="top_bar_menu">
									<ul class="standard_dropdown top_bar_dropdown">
										<li>
											<a href="#">ລາວ<i class="fas fa-chevron-down"></i></a>
											<ul>
												<li><a href="#">EN</a></li>
												<li><a href="#">TH</a></li>

											</ul>
										</li>
										<li>
											<a href="#">K ກີບ<i class="fas fa-chevron-down"></i></a>
											<ul>
												<li><a href="#">$ ດອລລ່າ</a></li>

											</ul>
										</li>
									</ul>
								</div>
								<div class="top_bar_user">
									<div class="user_icon"><img src="{{asset('frontend/images/user.svg')}}" alt=""></div>
									<div><a href="">ສະໝັກສະມາຊິກ</a></div>
									<div><a href="">ລົງຊື່ເຂົ້າໃຊ້</a></div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<!-- Header Main -->

			<div class="header_main">
				<div class="container">
					<div class="row">

						<!-- Logo -->
						<div class="col-lg-2 col-sm-3 col-3 order-1">
							<div class="logo_container">
								<div class="logo"><a href="#">Advice</a></div>
							</div>
						</div>

						<!-- Search -->
						<div class="col-lg-6 col-12 order-lg-2 order-3 text-lg-left text-right">
							<div class="header_search">
								<div class="header_search_content">
									<div class="header_search_form_container">
										<form action="#" class="header_search_form clearfix">
											<input type="search" required="required" class="header_search_input" placeholder="ຄົ້ນຫາ...">
											<div class="custom_dropdown">
												<div class="custom_dropdown_list">
													<span class="custom_dropdown_placeholder clc">ທັງໝົດ</span>
													<i class="fas fa-chevron-down"></i>
													<ul class="custom_list clc">
														<li><a class="clc" href="#">All Categories</a></li>
														<li><a class="clc" href="#">Computers</a></li>
														<li><a class="clc" href="#">Laptops</a></li>
														<li><a class="clc" href="#">Cameras</a></li>
														<li><a class="clc" href="#">Hardware</a></li>
														<li><a class="clc" href="#">Smartphones</a></li>
													</ul>
												</div>
											</div>
											<button type="submit" class="header_search_button trans_300" value="Submit"><img src="{{asset('frontend/images/search.png')}}" alt=""></button>
										</form>
									</div>
								</div>
							</div>
						</div>

						<!-- Wishlist -->
						<div class="col-lg-4 col-9 order-lg-3 order-2 text-lg-left text-right">
							<div class="wishlist_cart d-flex flex-row align-items-center justify-content-end">
								<div class="wishlist d-flex flex-row align-items-center justify-content-end">
									<div class="wishlist_icon"><img src="{{asset('frontend/images/heart.png')}}" alt=""></div>
									<div class="wishlist_content">
										<div class="wishlist_text"><a href="#">ຖືກໃຈ</a></div>
										<div class="wishlist_count">115</div>
									</div>
								</div>

								<!-- Cart -->
								<div class="cart">
									<div class="cart_container d-flex flex-row align-items-center justify-content-end">
										<div class="cart_icon">
											<img src="{{asset('frontend/images/cart.png')}}" alt="">
											<div class="cart_count"><span>10</span></div>
										</div>
										<div class="cart_content">
											<div class="cart_text"><a href="#">ກະຕ່າ</a></div>
											<div class="cart_price">$85</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<!-- Main Navigation -->

			<nav class="main_nav">
				<div class="container">
					<div class="row">
						<div class="col">

							<div class="main_nav_content d-flex flex-row">

								<!-- Categories Menu -->

								<div class="cat_menu_container">
									<div class="cat_menu_title d-flex flex-row align-items-center justify-content-start">
										<div class="cat_burger"><span></span><span></span><span></span></div>
										<div class="cat_menu_text">ປະເພດສິນຄ້າ</div>
									</div>

									<ul class="cat_menu">
										<li><a href="#">Computers & Laptops <i class="fas fa-chevron-right ml-auto"></i></a></li>
										<li><a href="#">Cameras & Photos<i class="fas fa-chevron-right"></i></a></li>
										<li class="hassubs">
											<a href="#">Hardware<i class="fas fa-chevron-right"></i></a>
											<ul>
												<li class="hassubs">
													<a href="#">Menu Item<i class="fas fa-chevron-right"></i></a>
													<ul>
														<li><a href="#">Menu Item<i class="fas fa-chevron-right"></i></a></li>
														<li><a href="#">Menu Item<i class="fas fa-chevron-right"></i></a></li>
														<li><a href="#">Menu Item<i class="fas fa-chevron-right"></i></a></li>
														<li><a href="#">Menu Item<i class="fas fa-chevron-right"></i></a></li>
													</ul>
												</li>
												<li><a href="#">Menu Item<i class="fas fa-chevron-right"></i></a></li>
												<li><a href="#">Menu Item<i class="fas fa-chevron-right"></i></a></li>
												<li><a href="#">Menu Item<i class="fas fa-chevron-right"></i></a></li>
											</ul>
										</li>
										<li><a href="#">Smartphones & Tablets<i class="fas fa-chevron-right"></i></a></li>
										<li><a href="#">TV & Audio<i class="fas fa-chevron-right"></i></a></li>
										<li><a href="#">Gadgets<i class="fas fa-chevron-right"></i></a></li>
										<li><a href="#">Car Electronics<i class="fas fa-chevron-right"></i></a></li>
										<li><a href="#">Video Games & Consoles<i class="fas fa-chevron-right"></i></a></li>
										<li><a href="#">Accessories<i class="fas fa-chevron-right"></i></a></li>
									</ul>
								</div>

								<!-- Main Nav Menu -->

								<div class="main_nav_menu ml-auto">
									<ul class="standard_dropdown main_nav_dropdown">
										<li><a href="{{route('shops.index')}}">ໜ້າຫຼັກ<i class="fas fa-chevron-down"></i></a></li>
										<li class="hassubs">
											<a href="#">ໂປຣໂມຊັນ<i class="fas fa-chevron-down"></i></a>
											<ul>
												<li>
													<a href="#">Menu Item<i class="fas fa-chevron-down"></i></a>
													<ul>
														<li><a href="#">Menu Item<i class="fas fa-chevron-down"></i></a></li>
														<li><a href="#">Menu Item<i class="fas fa-chevron-down"></i></a></li>
														<li><a href="#">Menu Item<i class="fas fa-chevron-down"></i></a></li>
													</ul>
												</li>
												<li><a href="#">Menu Item<i class="fas fa-chevron-down"></i></a></li>
												<li><a href="#">Menu Item<i class="fas fa-chevron-down"></i></a></li>
												<li><a href="#">Menu Item<i class="fas fa-chevron-down"></i></a></li>
											</ul>
										</li>
										<li class="hassubs">
											<a href="#">ສິນຄ້າຂາຍດີ<i class="fas fa-chevron-down"></i></a>
											<ul>
												<li>
													<a href="#">Menu Item<i class="fas fa-chevron-down"></i></a>
													<ul>
														<li><a href="#">Menu Item<i class="fas fa-chevron-down"></i></a></li>
														<li><a href="#">Menu Item<i class="fas fa-chevron-down"></i></a></li>
														<li><a href="#">Menu Item<i class="fas fa-chevron-down"></i></a></li>
													</ul>
												</li>
												<li><a href="#">Menu Item<i class="fas fa-chevron-down"></i></a></li>
												<li><a href="#">Menu Item<i class="fas fa-chevron-down"></i></a></li>
												<li><a href="#">Menu Item<i class="fas fa-chevron-down"></i></a></li>
											</ul>
										</li>

										<li><a href="{{route('blog.index')}}">ບລ໋ອກ<i class="fas fa-chevron-down"></i></a></li>
										<li><a href="contact">ຕິດຕໍ່ພວກເຮົາ<i class="fas fa-chevron-down"></i></a></li>
									</ul>
								</div>

								<!-- Menu Trigger-->

								<div class="menu_trigger_container ml-auto">
									<div class="menu_trigger d-flex flex-row align-items-center justify-content-end">
										<div class="menu_burger">
											<div class="menu_trigger_text">ເມນູ</div>
											<div class="cat_burger menu_burger_inner"><span></span><span></span><span></span></div>

										</div>
									</div>
								</div>


							</div>
						</div>
					</div>
				</div>
			</nav>



			<!-- Menu -->

			<div class="page_menu">
				<div class="container">
					<div class="row">
						<div class="col">

							<div class="page_menu_content">

								<div class="page_menu_search">
									<form action="#">
										<input type="search" required="required" class="page_menu_search_input" placeholder="ຄົ້ນຫາ...">
									</form>
								</div>
								<ul class="page_menu_nav">
									<li class="page_menu_item has-children">
										<a href="#">ພາສາ<i class="fa fa-angle-down"></i></a>
										<ul class="page_menu_selection">
											<li><a href="#">ລາວ<i class="fa fa-angle-down"></i></a></li>
											<li><a href="#">
													<Italian>EN</Italian><i class="fa fa-angle-down"></i>
												</a></li>
											<li><a href="#">TH<i class="fa fa-angle-down"></i></a></li>

										</ul>
									</li>
									<li class="page_menu_item has-children">
										<a href="#">ສະກຸນເງິນ<i class="fa fa-angle-down"></i></a>
										<ul class="page_menu_selection">
											<li><a href="#">ກີບ<i class="fa fa-angle-down"></i></a></li>
											<li><a href="#">$ ດອລລ່າ<i class="fa fa-angle-down"></i></a></li>

										</ul>
									</li>
									<li class="page_menu_item">
										<a href="{{route('shop.index')}}">ໜ້າຫຼັກ<i class="fa fa-angle-down"></i></a>
									</li>
									<li class="page_menu_item has-children">
										<a href="#">ໂປຣໂມຊັນ<i class="fa fa-angle-down"></i></a>
										<ul class="page_menu_selection">
											<li><a href="#">ໂປຣໂມຊັນ<i class="fa fa-angle-down"></i></a></li>
											<li class="page_menu_item has-children">
												<a href="#">Menu Item<i class="fa fa-angle-down"></i></a>
												<ul class="page_menu_selection">
													<li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
													<li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
													<li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
													<li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
												</ul>
											</li>
											<li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
											<li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
											<li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
										</ul>
									</li>
									<li class="page_menu_item has-children">
										<a href="#">ສິນຄ້າຂາຍດີ<i class="fa fa-angle-down"></i></a>
										<ul class="page_menu_selection">
											<li><a href="#">ສິນຄ້າຂາຍດີ<i class="fa fa-angle-down"></i></a></li>
											<li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
											<li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
											<li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
										</ul>
									</li>

									<li class="page_menu_item"><a href="{{route('blog.index')}}">ບລອກ<i class="fa fa-angle-down"></i></a></li>
									<li class="page_menu_item"><a href="{{route('contact.index')}}">ຕິດຕໍ່ພວກເຮົາ<i class="fa fa-angle-down"></i></a></li>
								</ul>

								<div class="menu_contact">
									<div class="menu_contact_item">
										<div class="menu_contact_icon"><img src="{{asset('frontend/images/phone_white.png')}}" alt=""></div>020 23322221
									</div>
									<div class="menu_contact_item">
										<div class="menu_contact_icon"><img src="{{asset('frontend/images/mail_white.png')}}" alt=""></div><a href="mailto:fastsales<blade gmail.com">phongvilai
											@gmail.com</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>


		</header>

		<!-- Cart -->

@yield('content')


		<!-- Footer -->

		<footer class="footer">
			<div class="container">
				<div class="row">

					<div class="col-lg-3 footer_col">
						<div class="footer_column footer_contact">
							<div class="logo_container">
								<div class="logo"><a href="#">Advice</a></div>
							</div>
							<div class="footer_title">ມີຄໍາຖາມ? ຕິດຕໍ່ພວກເຮົາ 24/7</div>
							<div class="footer_phone">020 23322221</div>
							<div class="footer_contact_text">
								<p>ດົງໂດກ, ຕານມີໄຊ</p>
								<p>ໄຊທານີ, ນະຄອນຫຼວງວຽງຈັນ</p>
							</div>
							<div class="footer_social">
								<ul>
									<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
									<li><a href="#"><i class="fab fa-twitter"></i></a></li>
									<li><a href="#"><i class="fab fa-youtube"></i></a></li>
									<li><a href="#"><i class="fab fa-google"></i></a></li>
									<li><a href="#"><i class="fab fa-vimeo-v"></i></a></li>
								</ul>
							</div>
						</div>
					</div>

					<div class="col-lg-2 offset-lg-2">
						<div class="footer_column">
							<div class="footer_title">ເພີ່ມເຕີມ</div>
							<ul class="footer_list">
								<li><a href="#">Computers & Laptops</a></li>
								<li><a href="#">Cameras & Photos</a></li>
								<li><a href="#">Hardware</a></li>
								<li><a href="#">Smartphones & Tablets</a></li>
								<li><a href="#">TV & Audio</a></li>
							</ul>
							<div class="footer_subtitle">Gadgets</div>
							<ul class="footer_list">
								<li><a href="#">Car Electronics</a></li>
							</ul>
						</div>
					</div>

					<div class="col-lg-2">
						<div class="footer_column">
							<ul class="footer_list footer_list_2">
								<li><a href="#">Video Games & Consoles</a></li>
								<li><a href="#">Accessories</a></li>
								<li><a href="#">Cameras & Photos</a></li>
								<li><a href="#">Hardware</a></li>
								<li><a href="#">Computers & Laptops</a></li>
							</ul>
						</div>
					</div>

					<div class="col-lg-2">
						<div class="footer_column">
							<div class="footer_title">ລູກຄ້າ ຄວຍ</div>
							<ul class="footer_list">
								<li><a href="#">ບັນຊີ</a></li>
								<li><a href="#">ກະຕ່າ</a></li>
								<li><a href="#">ຖືກໃຈ</a></li>
								<li><a href="#">Customer Services</a></li>
								<li><a href="#">Returns / Exchange</a></li>
								<li><a href="#">FAQs</a></li>
								<li><a href="#">Product Support</a></li>
							</ul>
						</div>
					</div>

				</div>
			</div>
		</footer>

		<!-- Copyright -->

		<div class="copyright">
			<div class="container">
				<div class="row">
					<div class="col">

						<div class="copyright_container d-flex flex-sm-row flex-column align-items-center justify-content-start">

							<div class="logos ml-sm-auto">
								<ul class="logos_list">
									<li><a href="#"><img src="{{asset('frontend/images/logos_1.png')}}" alt=""></a></li>
									<li><a href="#"><img src="{{asset('frontend/images/logos_2.png')}}" alt=""></a></li>
									<li><a href="#"><img src="{{asset('frontend/images/logos_3.png')}}" alt=""></a></li>
									<li><a href="#"><img src="{{asset('frontend/images/logos_4.png')}}" alt=""></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

@yield('script')

</body>

</html>
