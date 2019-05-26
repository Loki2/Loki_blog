@extends('users.index')
@section('content')
<!-- Contact Form -->

<div class="contact_form">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 offset-lg-4">
					<div class="contact_form_container">
						<div class="col-lg-12 contact_form_title">ລົງທະບຽນເພື່ອເຂົາເວັບໄຊ</div>

						<form action="#" id="contact_form">
							<div class="col-lg-12">
								<input type="text" id="first_name" class="form-group col-lg-8 input_field" placeholder="ຊື່ເປັນພາອັງກິດ..." required="required" data-error="Name is required.">
							</div>
                     <div class="col-lg-12">
								<input type="text" id="last_name" class="form-group col-lg-8 input_field" placeholder="ນາມສະກຸນເປັນພາສາອັງກິດ" required="required" data-error="Name is required.">
							</div>
                     <div class="col-lg-12">
								<input type="email" id="email" class="form-group col-lg-8 input_field" placeholder="ອິເມວ..." required="required" data-error="Name is required.">
							</div>
                     <div class="col-lg-12">
								<input type="password" id="password" class="form-group col-lg-8 input_field" placeholder="ລະຫັດເປັນພາສາອັງກິດ..." required="required" data-error="Name is required.">
							</div>

                     <div class="col-lg-12">
								<input type="password" id="confirm_password" class="form-group col-lg-8 input_field" placeholder="ຢຶນຢັນລະຫັດເປັນພາສາອັງອິດ..." required="required" data-error="Name is required.">
							</div>
							<!-- <div class="contact_form_text">
								<textarea id="contact_form_message" class="text_field contact_form_message" name="message" rows="4" placeholder="Message" required="required" data-error="Please, write us a message."></textarea>
							</div> -->
							<div class="col-lg-12">
								<button type="submit" class="btn btn-success">ລົງທະບຽນ</button>
                        <a href="{{URL::to('/login')}}" class="col-lg-8">ຂ້ອຍມີບັນຊີແລ້ວ</a>
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