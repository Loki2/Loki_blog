
<header class="header">

<!-- Top Bar -->

<div class="top_bar">
	<div class="container">
		<div class="row">
			<div class="col d-flex flex-row">
				<div class="top_bar_contact_item"><div class="top_bar_icon"><img src="{{URL::to('frontend/images/phone.png')}}" alt=""></div>+85620 28-222-732</div>
				<div class="top_bar_contact_item"><div class="top_bar_icon"><img src="{{URL::to('frontend/images/mail.png')}}" alt=""></div><a href="mailto:fastsales@gmail.com">rixnickl2@gmail.com</a></div>
				<div class="top_bar_content ml-auto">
					<div class="top_bar_user">
						<div class="user_icon"><img src="{{asset('frontend/images/user.svg')}}" alt=""></div>
						<div><a href="{{URL::to('/registration')}}">ສະມັກເພື່ອເຂົາໃຊ້ເວບ</a></div>
						<div><a href="{{URL::to('/login')}}">ລັອກອິນ</a></div>
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
					<div class="logo"><a href="{{URL::to('/')}}">W&W Computer</a></div>
				</div>
			</div>

			<!-- Search -->
			<div class="col-lg-6 col-12 order-lg-2 order-3 text-lg-left text-right">
				<div class="header_search">
					<div class="header_search_content">
						<div class="header_search_form_container">
							<form action="#" class="header_search_form clearfix">
								<input type="search" required="required" class="header_search_input" placeholder="ຄົ້ນຫາຂໍ້ມູນສິນຄ້າ...">
								<div class="custom_dropdown">
									<div class="custom_dropdown_list">
										<span class="custom_dropdown_placeholder clc">ປະເພດສິນຄ້າທັງໝົດ</span>
										<i class="fas fa-chevron-down"></i>
										<ul class="custom_list clc">
										<?php
										$all_publication_categories = DB::table('categories')
													->where('publication_status', 1)
													->get();
														foreach ($all_publication_categories as $v_category) { ?>
											<li><a href="#">{{$v_category->cat_name}} <i class="fas fa-chevron-right ml-auto"></i></a></li>
											<?php } ?>
										</ul>
									</div>
								</div>
								<button type="submit" class="header_search_button trans_300" value="Submit"><img src="{{URL::to('frontend/images/search.png')}}" alt=""></button>
							</form>
						</div>
					</div>
				</div>
			</div>

			<!-- Wishlist -->
			<div class="col-lg-4 col-9 order-lg-3 order-2 text-lg-left text-right">
				<div class="wishlist_cart d-flex flex-row align-items-center justify-content-end">
					<div class="wishlist d-flex flex-row align-items-center justify-content-end">
						<div class="wishlist_icon"><img src="{{URL::to('frontend/images/heart.png')}}" alt=""></div>
						<div class="wishlist_content">
							<div class="wishlist_text"><a href="#">Wishlist</a></div>
							<div class="wishlist_count">115</div>
						</div>
					</div>

					<!-- Cart -->
					<div class="cart">
						<div class="cart_container d-flex flex-row align-items-center justify-content-end">
							<div class="cart_icon">
								<img src="{{URL::to('frontend/images/cart.png')}}" alt="">
								<div class="cart_count"><span>10</span></div>
							</div>
							<div class="cart_content">
								<div class="cart_text"><a href="#">Cart</a></div>
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
							<div class="cat_menu_text">ປະເພດສິນຄ້າທັງໝົດ</div>
						</div>
						<ul class="cat_menu">
						<?php
										$all_publication_categories = DB::table('categories')
													->where('publication_status', 1)
													->get();
										foreach ($all_publication_categories as $v_category) { ?>
							<li><a href="#">{{$v_category->cat_name}} <i class="fas fa-chevron-right ml-auto"></i></a></li>
							<?php } ?>
						</ul>
					</div>

					<!-- Main Nav Menu -->

					<div class="main_nav_menu ml-auto">
						<ul class="standard_dropdown main_nav_dropdown">
							<li><a href="{{URL::to('/')}}">Home<i class="fas fa-chevron-down"></i></a></li>
							

							<!-- Brand release to frontend start Here -->
							<li class="hassubs">
								<a href="#">Brand<i class="fas fa-chevron-down"></i></a>
								<ul>
									<?php
										$all_publication_brand = DB::table('brands')
													->where('publication_status', 1)
													->get();
										foreach ($all_publication_brand as $v_brand) { ?>
										<li><a href="shop.html">{{$v_brand -> brand_name}}<i class="fas fa-chevron-down"></i></a></li>
										<?php } ?>
								</ul>
							</li>
							<!-- Brand release to frontend end Here -->


							<li><a href="{{URL::to('/blog')}}">Blog<i class="fas fa-chevron-down"></i></a></li>
							<li><a href="{{URL::to('/contact')}}">Contact<i class="fas fa-chevron-down"></i></a></li>
						</ul>
					</div>

					<!-- Menu Trigger -->

					<div class="menu_trigger_container ml-auto">
						<div class="menu_trigger d-flex flex-row align-items-center justify-content-end">
							<div class="menu_burger">
								<div class="menu_trigger_text">menu</div>
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
							<input type="search" required="required" class="page_menu_search_input" placeholder="ຄົ້ນຫາຂໍ້ມູນສິນຄ້າ...">
						</form>
					</div>
					<ul class="page_menu_nav">
						
						<li class="page_menu_item">
							<a href="#">Home<i class="fa fa-angle-down"></i></a>
						</li>
						<li class="page_menu_item has-children">
							<a href="#">Super Deals<i class="fa fa-angle-down"></i></a>
							<ul class="page_menu_selection">
								<li><a href="#">Super Deals<i class="fa fa-angle-down"></i></a></li>
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
							<a href="#">Featured Brands<i class="fa fa-angle-down"></i></a>
							<ul class="page_menu_selection">
								<li><a href="#">Featured Brands<i class="fa fa-angle-down"></i></a></li>
								<li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
								<li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
								<li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
							</ul>
						</li>
						<li class="page_menu_item has-children">
							<a href="#">Trending Styles<i class="fa fa-angle-down"></i></a>
							<ul class="page_menu_selection">
								<li><a href="#">Trending Styles<i class="fa fa-angle-down"></i></a></li>
								<li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
								<li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
								<li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
							</ul>
						</li>
						<li class="page_menu_item"><a href="{{URL::to('/blog')}}">blog<i class="fa fa-angle-down"></i></a></li>
						<li class="page_menu_item"><a href="{{URL::to('/contact')}}">contact<i class="fa fa-angle-down"></i></a></li>
					</ul>
					
					<div class="menu_contact">
						<div class="menu_contact_item"><div class="menu_contact_icon"><img src="{{URL::to('frontend/images/phone_white.png')}}" alt=""></div>+38 068 005 3570</div>
						<div class="menu_contact_item"><div class="menu_contact_icon"><img src="{{URL::to('frontend/images/mail_white.png')}}" alt=""></div><a href="mailto:fastsales@gmail.com">fastsales@gmail.com</a></div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

</header>
