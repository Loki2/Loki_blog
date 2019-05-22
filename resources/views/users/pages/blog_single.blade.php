@extends('users.master')



@section('header')

<title>Advice Laos</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="OneTech shop project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="{{asset('frontend/styles/bootstrap4/bootstrap.min.css')}}">
<link href="{{asset('frontend/plugins/fontawesome-free-5.0.1/css/fontawesome-all.css')}}" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="{{asset('frontend/plugins/OwlCarousel2-2.2.1/owl.carousel.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('frontend/plugins/OwlCarousel2-2.2.1/owl.theme.default.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('frontend/plugins/OwlCarousel2-2.2.1/animate.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('frontend/plugins/slick-1.8.0/slick.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('frontend/styles/main_styles.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('frontend/styles/responsive.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('frontend/styles/blog_styles.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('frontend/styles/blog_responsive.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('frontend/styles/blog_single_styles.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('frontend/styles/blog_single_responsive.css')}}">
@endsection



@section('content')

<!-- Home -->



<div class="home">
		<div class="home_background parallax-window" data-parallax="scroll" style="background-image:url(/storage/{{$posts->featured}})" data-speed="0.8" ></div>
	</div>

	<!-- Single Blog Post -->

	<div class="single_post">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2">
					<div class="single_post_title"><h1>{{$posts->title}}</h1></div>
					<div class="single_post_text">
						
						
						{!!$posts->content!!}
						
						

						
					</div>
				</div>
			</div>
		</div>
	</div>

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
	<script src="{{asset('frontend/plugins/OwlCarousel2-2.2.1/owl.carousel.js')}}"></script>
	<script src="{{asset('frontend/plugins/parallax-js-master/parallax.min.js')}}"></script>
	<script src="{{asset('frontend/plugins/easing/easing.js')}}"></script>
	<script src="{{asset('frontend/js/blog_single_custom.js')}}"></script>
@endsection
