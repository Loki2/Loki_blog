@extends('users.index')
@section('content')
<!-- Contact Form -->

<div class="contact_form">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 offset-lg-4">
					<div class="contact_form_container">
						<div class="col-lg-12 contact_form_title">ລັອກອິນເພື່ອເຂົາເວັບໄຊ</div>

						<form action="#" id="contact_form">
							
                     <div class="col-lg-12">
								<input type="email" id="email" class="form-group col-lg-8 input_field" placeholder="ອິເມວ..." required="required" data-error="Name is required.">
							</div>
                     <div class="col-lg-12">
								<input type="password" id="password" class="form-group col-lg-8 input_field" placeholder="ລະຫັດເປັນພາສາອັງກິດ..." required="required" data-error="Name is required.">
							</div>

							<div class="col-lg-12">
								<button type="submit" class="btn btn-success">ລັອກອິນ</button>
                        <a href="{{URL::to('/registration')}}" class="col-lg-8">ສະມັກເພື່ອເຂົາໃຊ້ບໍລິການຂອງເວັບໄຊ</a>
							</div>
                     
						</form>

					</div>
				</div>
			</div>
		</div>
		<div class="panel"></div>
	</div>

	<!-- Map -->
@endsection