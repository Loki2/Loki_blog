@extends('users.master')

@section('header')

<title>Contact</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="OneTech shop project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="{{asset('frontend/styles/bootstrap4/bootstrap.min.css')}}">
<link href="{{asset('frontend/plugins/fontawesome-free-5.0.1/css/fontawesome-all.css')}}" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="{{asset('frontend/styles/contact_styles.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('frontend/styles/contact_responsive.css')}}">


@endsection

@section('content')

<!-- Contact Info -->

<div class="contact_info">

	<div class="container">@if(session()->has('success'))

<div class="alert alert-success">

	 {{session()->get('success')}}

</div>

@endif
		<div class="row">
			<div class="col-lg-10 offset-lg-1">
				<div class="contact_info_container d-flex flex-lg-row flex-column justify-content-between align-items-between">
					<!-- Contact Item -->
					<div class="contact_info_item d-flex flex-row align-items-center justify-content-start">
						<div class="contact_info_image"><img src="images/contact_1.png" alt=""></div>
						<div class="contact_info_content">
							<div class="contact_info_title">ເບີໂທ</div>
							<div class="contact_info_text">020 23322221</div>
						</div>
					</div>

					<!-- Contact Item -->
					<div class="contact_info_item d-flex flex-row align-items-center justify-content-start">
						<div class="contact_info_image"><img src="images/contact_2.png" alt=""></div>
						<div class="contact_info_content">
							<div class="contact_info_title">ອີເມວ</div>
							<div class="contact_info_text">phongvilai
								@gmail.com</div>
							</div>
						</div>

						<!-- Contact Item -->
						<div class="contact_info_item d-flex flex-row align-items-center justify-content-start">
							<div class="contact_info_image"><img src="images/contact_3.png" alt=""></div>
							<div class="contact_info_content">
								<div class="contact_info_title">ທີ່ຢູ່</div>
								<div class="contact_info_text">ດົງໂດກ, ໄຊທານີ, ນະຄອນຫຼວງວຽງຈັນ</div>
							</div>
						</div>

					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Contact Form -->


	<div class="contact_form">
		<div class="container">
			<div class="row">
				<div class="col-lg-10 offset-lg-1">
					<div class="contact_form_container">
						<div class="contact_form_title">ຕິດຕໍ່ໂດຍ : </div>

						<form action="{{route('contact.save')}}" id="contact_form" method="POST">
						 @csrf
							<div class="contact_form_inputs d-flex flex-md-row flex-column justify-content-between align-items-between">
								<input name="name" type="text" id="contact_form_name" class="contact_form_name input_field" placeholder="ຊື່" required="required" data-error="Name is required.">
								<input name="email"   type="email" id="contact_form_email" class="contact_form_email input_field" placeholder="ອີເມວ" required="required" data-error="Email is required.">
								<input name="phone" type="text" id="phone" class="contact_form_phone input_field" placeholder="ເບີໂທລະສັບ" required="required" data-error="Name is required." >
							</div>
							<div class="contact_form_text">
								<textarea id="contact_form_message" class="text_field contact_form_message" name="content" rows="4" placeholder="ລາຍລະອຽດການຕິດຕໍ່" required="required" data-error="Please, write us a message."></textarea>
							</div>
							<div class="contact_form_button">
								<button type="submit" class="button contact_submit_button">ສົ່ງຂໍ້ຄວາມ</button>
							</div>
						</form>

					</div>
				</div>
			</div>
		</div>
		<div class="panel"></div>
	</div>

	<!-- Map -->
<center><iframe src="https://www.google.com/maps/embed?pb=!1m26!1m12!1m3!1d60711.257591901!2d102.59093142259259!3d18.004140754104373!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m11!3e6!4m3!3m2!1d18.0396032!2d102.6383872!4m5!1s0x3124687c51f96759%3A0xda8e7072c9543fc!2smaps+advice!3m2!1d17.9686809!2d102.61366989999999!5e0!3m2!1sen!2sla!4v1558414244949!5m2!1sen!2sla" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe></center>

	
	<!-- <div class="contact_map">
		<div id="google_map" class="google_map">
			<div class="map_container">
				<div id="map"></div>
			</div>
		</div>
	</div> -->
	@endsection

@section('script')
<script src="{{asset('frontend/js/jquery-3.3.1.min.js')}}"></script>
<script src="{{asset('frontend/styles/bootstrap4/popper.js')}}"></script>
<script src="{{asset('frontend/styles/bootstrap4/bootstrap.min.js')}}"></script>
<script src="{{asset('frontend/plugins/greensock/TweenMax.min.js')}}"></script>
<script src="{{asset('frontend/plugins/greensock/TimelineMax.min.js')}}"></script>
<script src="{{asset('frontend/plugins/scrollmagic/ScrollMagic.min.js')}}"></script>
<script src="{{asset('frontend/plugins/greensock/animation.gsap.min.js')}}"></script>
<script src="{{asset('frontend/plugins/greensock/ScrollToPlugin.min.js')}}"></script>
<script src="{{asset('frontend/plugins/easing/easing.js')}}"></script>
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyCIwF204lFZg1y4kPSIhKaHEXMLYxxuMhA"></script>
<script src="{{asset('frontend/js/contact_custom.js')}}"></script>

@endsection
