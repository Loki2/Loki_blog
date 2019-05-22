@extends('admin/index')
@section('content')
<div class="wrapper">
<div class="content-wrapper">
    <section class="content">
               
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">ຈັດການຂໍ້ມູນກຽວກັບພະນັກງານ</h3>
          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                    title="Collapse">
              <i class="fa fa-minus"></i></button>
          </div>
        </div>
        <div class="box-body">
        <div class="col-md-3">
         <div class="box box-primary">
               <!--****************************************** box-body **************************************-->
         <div class="box-body box-profile">
          <img class="profile-user-img img-responsive img-circle" src="{{asset('backend/dist/img/user_male.png')}}" alt="User profile picture" withd="200">
            <h3 class="profile-username text-center"> ລະຫັດພະນັກງານ </h3>
               <p class="profile-fullname_lao text-muted text-center">ຊື່ແລະນາມສຸກຖນ</p>
               <p class="profile-fullname_eng text-muted text-center">Name and Surename</p>
            <div class="form-group">
               <button type="button" class="btn btn-block btn-primary btn-file" disabled="">
               <span class="fa fa-fw  fa-cloud-upload"></span> <span data-label="btn_upload_photo">ໃສ່ຮູບພະນັກງານ</span> 
               </button>         
         </div>
      </div>
            <!--*******************************************8 form-Upload *********************************-->
      <div style="display:none">
         <form name="frm_upload" id="frm_upload" enctype="multipart/form-data">
            <div class="form-group">
               <input type="text" class="form-control" id="employee_code" name="employee_code" placeholder="">
                  <label>ເອກະສານຂັດຕິດ</label><br>
                  <span class="btn btn-primary">
                     <span class="fa fa-fw  fa-cloud-upload"></span>  Browse...<input type="file" name="files" class="btn-file1">
                  </span>
                 </div>
               </form>
          </div>
               <!-- /.form-Upload -->
        </div>
      </div>

      <div class="col-md-9">
         <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">ບັນທຶກຂໍ້ມູນພະນັກງານ</h3>
              <span class="btn btn-success pull-right " id="btn_save">
                  <span class="fa fa-fw  fa-plus-square"></span>  <span data-label="btn_save">Import</span> 
               </span>
            </div>
            <div class="box-body">
               <div class="nav-tabs-custom">
               <ul class="nav nav-tabs" id="mytabs">
                  <li class="active"><a href="#tab_1" data-toggle="tab" data-label="info">ຂໍ້ມູນສ່ວນຕົວ...</a></li>
                  <li><a href="#tab_2" data-page="emploment" data-toggle="tab" data-label="working">ການຈ້າງງານ</a></li>
                  <li><a href="#tab_3" data-page="experience" data-toggle="tab" data-label="experience">ປະສົບການຜ່ານມາ</a></li>
                  <li><a href="#tab_4" data-page="education" data-toggle="tab" data-label="education">ການສືກສາ</a></li>
                  <li class="pull-right"><a href="#" class="text-muted"><i class="fa fa-gear"></i></a></li>
               </ul>
               <div class="tab-pane active" id="tab_1">
                  <form name="frm_employee" id="frm_employee" enctype="multipart/form-data" novalidate="novalidate" class="bv-form"><button type="submit" class="bv-hidden-submit" style="display: none; width: 0px; height: 0px;"></button>
                     <div class="row form-row">
                        <div class="form-group col-md-6 has-feedback">
                              <label for="employee_id" data-label="employee_id">ລະຫັດພະນັກງານ</label>
                              <input type="text" class="form-control" id="employee_id" name="employee_id" placeholder="ລະຫັດພະນັກງານ" data-bv-field="employee_id"><i class="form-control-feedback" data-bv-icon-for="employee_id" style="display: none;"></i>
                        <small class="help-block" data-bv-validator="notEmpty" data-bv-for="employee_id" data-bv-result="NOT_VALIDATED" style="display: none;">ກະລຸນາປ້ອນລະຫັດພະນັກງານໃສຫ້ອງນີ້.</small></div>
                     </div>
                     
                     <div class="row form-row">
                           <div class="form-group col-md-6 has-feedback">
                              <input type="hidden" id="photo" name="photo">
                              <label for="first_name_lao" data-label="first_name_lao">ຊື່</label>
                              <input type="text" class="form-control name-surename" id="first_name_lao" name="first_name_lao" placeholder="ຊື່" data-bv-field="first_name_lao"><i class="form-control-feedback" data-bv-icon-for="first_name_lao" style="display: none;"></i>
                              <small class="help-block" data-bv-validator="notEmpty" data-bv-for="first_name_lao" data-bv-result="NOT_VALIDATED" style="display: none;">The name is required and can't be empty</small></div>
                              <div class="form-group col-md-6">
                              <label for="last_name_lao" data-label="last_name_lao">ນາມສະກຸນ</label>
                              <input type="text" class="form-control name-surename" id="last_name_lao" name="last_name_lao" placeholder="ນາມສະກຸນ">
                           </div>
                     </div>
                     
                     <div class="row form-row">
                        <div class="form-group col-md-6 has-feedback">
                        <label for="gender_id" data-label="gender_id">ເພດ</label>
                        <select id="gender_id" name="gender_id" class="form-control" data-bv-field="gender_id">
                        </select><i class="form-control-feedback" data-bv-icon-for="gender_id" style="display: none;"></i>
                        <small class="help-block" data-bv-validator="notEmpty" data-bv-for="gender_id" data-bv-result="NOT_VALIDATED" style="display: none;">The gender is required and can't be empty</small></div>
                        <div class="form-group col-md-6 has-feedback">
                           <label for="birthday" data-label="birthday">ວັນເດືອນປີເກີດ</label>
                           <input type="text" class="form-control" id="datepicker" name="birthday" placeholder="ວ/ດ/ປ" data-bv-field="birthday"><i class="form-control-feedback" data-bv-icon-for="birthday" style="display: none;"></i>
                           <small class="help-block" data-bv-validator="notEmpty" data-bv-for="birthday" data-bv-result="NOT_VALIDATED" style="display: none;">The Date of Birth is required and can't be empty</small></div>
                        </div>
                     
                     <div class="row form-row">
                        <div class="form-group col-md-12">
                        <label for="address1" data-label="address1">ທີ່ຢູ່ 1</label>
                        <input type="text" class="form-control" id="address1" name="address1" placeholder="ຂໍ້ມູນກ່ຽວກັບທີ່ຢູ່ປະຈຸບັນ">
                        </div>
                     </div>
                     
                     <div class="row form-row">
                        <div class="form-group  col-md-12">
                        <label for="address2" data-label="address2">ທີ່ຢູ່ 2</label>
                        <input type="text" class="form-control" id="address2" name="address2" placeholder="Apartment, studio, or floor">
                        </div>
                     </div> 

                     <div class="row form-row">
                        <div class="form-group col-md-6">
                        <label for="province" data-label="province">ແຂວງ</label>
                        <select id="province" name="province" class="form-control">
                        </select>
                        </div>
                        <div class="form-group col-md-6">
                        <label for="inputZip">ເມືອງ</label>
                        <input type="text" class="form-control" id="inputZip">
                        </div>
                     </div>
                     <div class="row  form-row">
                        <div class="form-group col-md-4">
                              <label for="marital_status_id" data-label="marital_status_id">ສະຖານະພາບ</label>
                              <select id="marital_status_id" name="marital_status_id" class="form-control"></select>
                        </div>
                     </div>      
                  
                  </form>
                  <div class="box-footer clearfix">
                           <span class="btn btn-success pull-right " id="btn_save">
                              <span class="fa fa-fw  fa-plus-square"></span>  <span data-label="btn_save">ບັນທຶກ</span> 
                           </span>
                           <span class="btn btn-danger pull-left " id="btn_new">
                              <span class="fa fa-fw  fa-remove"></span>  <span data-label="btn_new">ຍົກເລິກ</span> 
                           </span>
                        </div>
                     </div>
                     </div>
                  </div>
               </div>
            </div>

        </div>
      </div>
    </section>   
  </div>
</div>
@endsection