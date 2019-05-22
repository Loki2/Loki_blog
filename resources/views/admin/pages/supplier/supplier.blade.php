@extends('admin/index')
@section('content')
<div class="wrapper">
<div class="content-wrapper">
    <section class="content">
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">ຜູ້ສະໜອງ</h3>
          <div class="box-tools pull-right">
              <button class="btn btn-success" data-toggle="modal" data-target="#CatModal">ເພີ່ມຜູ້ສະໜອງ</button>
              <button class="btn btn-primary" data-toggle="modal" data-target="#CatModal">Import</button>
               <!-- <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button> -->
          </div>
        </div>
        <p class="col-md-9"> 
                  <?php
                  $message=Session::get('message');
                  if($message){
                    echo $message;
                    Session::put('message',null);
                  }
                  ?>
                </p>
        <div class="box-body">
        <!-- Start here -->
        <table id="example" class="table table-striped table-bordered" style="width:100%">
                <thead>
                <tr>
                    <th>ລະຫັດ</th>
                    <th>ຊື່</td>
                    <td> ນາມສະກຸນ</th>
                    <th>ທິ່ຢູ່</th>
                    <th>ອິເມວ</th>
                    <th>ເບີໂທຕິດຕໍ່</th>
                    <th>ສະຖານະ</th>
                    <th>ຕົວເລຶອກ</th>
                  </tr>
                </thead>
                @foreach($all_supplier_info as $v_supplier)
                <tbody>
                <tr>
                  <td>{{$v_supplier->supplier_id}}</td>
                  <td>{{$v_supplier->supplier_name}}</td>
                  <td>{{$v_supplier->supplier_surname}}</td>
                  <td>{{$v_supplier->supplier_address}}</td>
                  <td>{{$v_supplier->supplier_email}}</td>
                  <td>{{$v_supplier->supplier_phone}}</td>
                  <td>
                  @if($v_supplier -> publication_status==1 )
                    <span class="label label-success">Actived</span>
                    @else
                    <span class="label label-warning">Unactive</span>
                    @endif
                    </td>
                  <td>
                  @if($v_supplier -> publication_status==1)
                     <a href="{{URL::to('/unactive-supplier/'.$v_supplier->supplier_id)}}" class="link"><i class="btn fa fa-check btn-success "></i></a> 
                     @else
                     <a href="{{URL::to('/active-supplier/'.$v_supplier->supplier_id)}}" class="link"><i class="btn fa fa-times-circle btn-warning "></i></a>
                     @endif
                     <a href="{{URL::to('/edit-supplier/'.$v_supplier->supplier_id)}}" class="link"><i class="btn fa fa-edit btn-primary"></i></a> 
                     <a href="{{URL::to('/delete-supplier/'.$v_supplier->supplier_id)}}" id="delete" class="link"><i class="btn fa fa-trash btn-danger"></i></a>
                  </td>
                </tr>
                @endforeach
              </tbody>
              </table>
            </div>

            <div class="modal fade" id="CatModal" tabindex="-1" role="dialog" aria-labelledby="CatModalLabel" aria-hidden="true">
               <div class="modal-dialog modal-dialog-centered" role="document">
                  <div class="modal-content">
                     <div class="modal-header">
                     <h5 class="modal-title" id="CatModalLabel">ສ້າງຂໍ້ມູນຜູ້ສະໜອງໃຫມ່</h5>
                     </div>
                     <div class="modal-body">

                     <form role="form-group" action="{{URL::to('/add-supplier')}}" method="post" >
                     {{  csrf_field() }}
                     <fieldset>
                    <div class="box-body">
                      <div class="form-group col-md-6">
                        <label for="supplier_name">ຊື່</label>
                        <input type="text" class="form-control" id="supplier_name" name="supplier_name" placeholder="ຊື່..." required="required">
                      </div>
                      <div class="form-group col-md-6">
                        <label for="supplier_surname">ນາມສະກຸນ</label>
                        <input type="text" class="form-control" id="supplier_surname" name="supplier_surname" placeholder="ນາມສະກຸນ..." required="required">
                      </div>

                      <div class="form-group col-md-12">
                        <label for="supplier_address">ທີຢູ່ປັດຈຸບັນ</label>
                        <input type="text" class="form-control" id="supplier_address" name="supplier_address" placeholder="ນາມສະກຸນ..." required="required">
                      </div>

                      <div class="form-group col-md-6">
                        <label for="supplier_email">ອິເມວຕິດຕໍ່</label>
                        <input type="email" class="form-control" id="supplier_email" name="supplier_email" placeholder="ອິເມວຕິດຕໍ່..." required="required">
                      </div>

                      <div class="form-group col-md-6">
                        <label for="supplier_phone">ເບິໂທຕິດຕໍ່</label>
                        <input type="text" class="form-control" id="supplier_phone" name="supplier_phone" placeholder="ເບິໂທຕິດຕໍ່..." required="required">
                      </div>

                      <div class="checkbox form-group col-md-6">
                        <label>
                          <input type="checkbox" name="publication_status" value="1">ເປິດເປັນສາທາລະນະ
                        </label>
                      </div>
                    </div>
                    <!-- /.box-body -->
                    </div>
                     <div class="modal-footer">
                     <button type="button" class="btn btn-danger pull-left">ກັບຄຶນ</button>
                     <button type="submit" class="btn btn-success">ບັນທຶກ</button>
                     </div>
                  </form>
                  </div>
               </div>
               </div>
                <!-- End New Modal here -->
          <!-- End here -->
        </div>
      </div>
    </section>   
  </div>
</div>
@endsection
