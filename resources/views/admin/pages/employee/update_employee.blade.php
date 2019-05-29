@extends('admin/index')
@section('content')
<div class="wrapper">
<div class="content-wrapper">
    <section class="content">

    <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">ແກ້ໄຂຂໍ້ມູນປະເພດສິນຄ້າ</h3>
          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                    title="Collapse">
              <i class="fa fa-minus"></i></button>
          </div>
        </div>

    <form role="form" action="{{URL::to('/update-employee',$employee_info->employee_id)}}" method="post" enctype="multipart/form-data">
         {{ csrf_field() }}

        <div class="box-body">
          <div class="form-group col-lg-6">
             <label for="employee_name">ຊື່ພະນັກງານ</label>
                <input type="text" class="form-control" name="employee_name" id="employee_name" placeholder="ຊື່ພະນັກງານ" value="{{$employee_info->employee_name}}" >
                      </div>
                      <div class="form-group col-lg-6">
                        <label for="employee_surname">ນາມສະກຸນ</label>
                        <input type="text" class="form-control" name="employee_surname" id="employee_surname" placeholder="ນາມສະກຸນ" value="{{$employee_info->employee_surname}}">
                      </div>
                      
                      <div class="form-group col-lg-6">
                        <label>ເລຶອກເພດ</label>
                        <select class="form-control select2" style="width: 100%;" name="gender_id">
                          <option selected="selected">ກະລຸນາເລຶອກເພດ</option>
                          <?php
                            $all_publication_gender = DB::table('gender')
                                  ->get();
                            foreach ($all_publication_gender as $v_gender) { ?>
                          <option value="{{$employee_info->gender_id}}">{{$v_gender -> gender_title}}</option>
                          <?php } ?>
                        </select>
                      </div>
                      <div class="form-group col-lg-6">
                        <label>ປະເພດພະນັກງານ</label>
                        <select class="form-control select2" style="width: 100%;" name="type_id">
                          <option selected="selected">ກະລຸນາເລຶອກປະເພດພະນັກງານ</option>
                          <?php
                          $all_publication_typeEmployee = DB::table('type_employees')
													->where('publication_status', 1)
													->get();
														foreach ($all_publication_typeEmployee as $v_typeEmployee) { ?>
                          <option value="{{$employee_info->type_id}}">{{$v_typeEmployee->type_employee}}</option>
                          <?php } ?>
                        </select>
                      </div>
                      
                      <div class="form-group col-lg-6">
                        <label>ສະຖານະ</label>
                        <select class="form-control select2" style="width: 100%;" name="status_id">
                          <option>ກະລຸນາເລຶອກສະຖານະ</option>
                          <?php
                            $all_publication_status = DB::table('employee_status')
                                  ->get();
                            foreach ($all_publication_status as $v_status) { ?>
                          <option  value="{{$employee_info->status_id}}">{{$v_status -> status_title}}</option>
                          
                          <?php } ?>
                        </select>
                      </div>
                      <div class="form-group col-lg-6">
                        <label for="employee_salary">ເງີນເດືອນພື່ນຖານ</label>
                        <input type="text" class="form-control" id="employee_salary" name="employee_salary" placeholder="ເງີນເດືອນພື່ນຖານ" value="{{$employee_info->employee_salary}}">
                      </div>
                      <div class="form-group col-lg-12">
                        <label for="employee_address">ທີຢູ່ປັດຈຸບັນ</label>
                        <input type="text" class="form-control" id="employee_address" name="employee_address" placeholder="ທີຢູ່ປັດຈຸບັນ" value="{{$employee_info->employee_address}}">
                      </div>

                      <div class="form-group col-lg-6">
                        <label>ແຂວງ</label>
                        <select class="form-control select2" style="width: 100%;" name="province_id">
                          <option>ກະລຸນາເລຶອກແຂວງ</option>
                          <?php
                            $all_publication_province = DB::table('provinces')
                                  ->get();
                            foreach ($all_publication_province as $v_province) { ?>
                          <option  value="{{$employee_info->province_id}}">{{$v_province -> province_name}}</option>
                          
                          <?php } ?>
                        </select>
                      </div>
                      
                      <div class="form-group col-lg-6">
                        <label for="city">ເມື່ອງ</label>
                        <input type="text" class="form-control" id="city" name="city" placeholder="ເມື່ອງ" value="{{$employee_info->city}}">
                      </div>
                      <div class="form-group col-lg-6">
                        <label for="employee_email">ທີ່ຢູ່ອີເມວ</label>
                        <input type="email" class="form-control" id="employee_email" name="employee_email" placeholder="ທີຢູ່ອີເມວ" value="{{$employee_info->employee_email}}">
                      </div>

                      <div class="form-group col-lg-6">
                        <label for="employee_phone">ເບີໂທຕິດຕໍ່</label>
                        <input type="text" class="form-control" name="employee_phone" id="employee_phone" placeholder="ເບີໂທຕິດຕໍ່" value="{{$employee_info->employee_phone}}">
                      </div>
                     
                      <div class="form-group col-lg-6">
                        <label for="InputFile">ເລຶອກຮູບພາບ</label><br>
                        <input type="file" class="input-file uniform_on" name="employee_image" id="employee_image" value="{{$employee_info->employee_image}}">
                      </div>
                    </div>
                    <!-- /.box-body -->
                 
                     </div>
                     <div class="modal-footer">
                     <button type="button" class="btn btn-danger pull-left">ກັບຄຶນ</button>
                     <!-- <a href="{{URL::to('add-product')}}" type="button" class="btn btn-primary pull-right">ບັນທຶກ</a> -->
                 <button type="submit" class="btn btn-success">ບັນທຶກ</button>
            </div>
         </form>

        </div>
      </div>
    </section>   
  </div>
</div>
@endsection