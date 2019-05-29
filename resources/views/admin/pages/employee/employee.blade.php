@extends('admin/index')
@section('content')
<div class="wrapper">
<div class="content-wrapper">
    <section class="content">
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">ພະນັກງານທັງໝົດ</h3>
          <div class="box-tools pull-right">
          <button class="btn btn-success" data-toggle="modal" data-target="#CatModal">ເພີ່ມພະນັກງານ</button>
                  <button class="btn btn-primary" data-toggle="modal" data-target="#CatModal">Import</button>
            <!-- <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button> -->
          </div>
        </div>
        <div class="box-body">
        <!-- Start here -->
        <table id="example" class="table table-striped table-bordered" style="width:100%">
                <thead>
                <tr>
                  <th>ລະຫັດພະນັກງານ</th>
                  <th>ຊື່ພະນັກງານ</th>
                  <th>ນາມສະກຸນ</th>
                  <th>ເພດ</th>
                  <th>ຕໍາແໜ່ງ</th>
                  <th>ສະຖານະ</th>
                  <th>ທີຢູ່ປັດຈຸບັນ</th>
                  <th>ແຂວງ</th>
                  <th>ເມືອງ</th>
                  <th>ອິເມວ</th>
                  <th>ເບີໂທ</th>
                  <th>ຕົວເລຶອກ</th>
                </tr>
                </thead>
                <tbody>
                @foreach( $all_employee_info as $v_employee )
                <tr>
                  <td>{{ $v_employee -> employee_id }}</td>
                  <td>{{ $v_employee -> employee_name }}</td>
                  <td>{{ $v_employee -> employee_surname }}</td>
                  <td>{{ $v_employee -> gender_id }}</td>
                  <td>{{ $v_employee -> type_id }}</td>
                  <td>{{ $v_employee -> status_id }}</td>
                  <td>{{ $v_employee -> employee_address }}</td>
                  <td>{{ $v_employee -> province_id }}</td>
                  <td>{{ $v_employee -> city }}</td>
                  <td>{{ $v_employee -> employee_email }}</td>
                  <td>{{ $v_employee -> employee_phone }}</td>
                  <td>
                     <a href="#" class="link"><i class="btn fa fa-edit btn-primary"></i></a> 
                     <a href="#" class="link"><i class="btn fa fa-trash btn-danger"></i></a>
                  </td>
                </tr>
                @endforeach
                </tbody>
              </table>
            </div>
          <!-- End here -->
          <div class="modal fade" id="CatModal" tabindex="-1" role="dialog" aria-labelledby="CatModalLabel" aria-hidden="true">
               <div class="modal-dialog modal-dialog-centered" role="document">
                  <div class="modal-content">
                     <div class="modal-header">
                     <h5 class="modal-title" id="CatModalLabel">ສ້າງຂໍ້ມູນພະນັກງານໃຫມ່</h5>
                     </div>
                     <div class="modal-body">
                     <form role="form" action="{{URL::to('/add-employee')}}" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}

                    <div class="box-body">
                      <div class="form-group col-lg-6">
                        <label for="employee_name">ຊື່ພະນັກງານ</label>
                        <input type="text" class="form-control" name="employee_name" id="employee_name" placeholder="ຊື່ພະນັກງານ" required="required">
                      </div>
                      <div class="form-group col-lg-6">
                        <label for="employee_surname">ນາມສະກຸນ</label>
                        <input type="text" class="form-control" name="employee_surname" id="employee_surname" placeholder="ນາມສະກຸນ" required="required">
                      </div>
                      
                      <div class="form-group col-lg-6">
                        <label>ເລຶອກເພດ</label>
                        <select class="form-control select2" style="width: 100%;" name="gender_id">
                          <option selected="selected">ກະລຸນາເລຶອກເພດ</option>
                          <?php
                            $all_publication_gender = DB::table('gender')
                                  ->get();
                            foreach ($all_publication_gender as $v_gender) { ?>
                          <option value="{{$v_gender->gender_id}}">{{$v_gender -> gender_title}}</option>
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
                          <option value="{{$v_typeEmployee->type_id}}">{{$v_typeEmployee->type_employee}}</option>
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
                          <option  value="{{$v_status->status_id}}">{{$v_status -> status_title}}</option>
                          
                          <?php } ?>
                        </select>
                      </div>
                      <div class="form-group col-lg-6">
                        <label for="employee_salary">ເງີນເດືອນພື່ນຖານ</label>
                        <input type="text" class="form-control" id="employee_salary" name="employee_salary" placeholder="ເງີນເດືອນພື່ນຖານ" required="required">
                      </div>
                      <div class="form-group col-lg-12">
                        <label for="employee_address">ທີຢູ່ປັດຈຸບັນ</label>
                        <input type="text" class="form-control" id="employee_address" name="employee_address" placeholder="ທີຢູ່ປັດຈຸບັນ" required="required">
                      </div>

                      <div class="form-group col-lg-6">
                        <label>ແຂວງ</label>
                        <select class="form-control select2" style="width: 100%;" name="province_id">
                          <option>ກະລຸນາເລຶອກແຂວງ</option>
                          <?php
                            $all_publication_province = DB::table('provinces')
                                  ->get();
                            foreach ($all_publication_province as $v_province) { ?>
                          <option  value="{{$v_province->province_id}}">{{$v_province -> province_name}}</option>
                          
                          <?php } ?>
                        </select>
                      </div>
                      
                      <div class="form-group col-lg-6">
                        <label for="city">ເມື່ອງ</label>
                        <input type="text" class="form-control" id="city" name="city" placeholder="ເມື່ອງ" required="required">
                      </div>
                      <div class="form-group col-lg-6">
                        <label for="employee_email">ທີ່ຢູ່ອີເມວ</label>
                        <input type="email" class="form-control" id="employee_email" name="employee_email" placeholder="ທີຢູ່ອີເມວ" required="required">
                      </div>

                      <div class="form-group col-lg-6">
                        <label for="employee_phone">ເບີໂທຕິດຕໍ່</label>
                        <input type="text" class="form-control" name="employee_phone" id="employee_phone" placeholder="ເບີໂທຕິດຕໍ່" required="required">
                      </div>
                     
                      <div class="form-group col-lg-6">
                        <label for="InputFile">ເລຶອກຮູບພາບ</label><br>
                        <input type="file" class="input-file uniform_on" name="employee_image" id="employee_image">
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
               </div>



        </div>
      </div>
    </section>   
  </div>
</div>
@endsection