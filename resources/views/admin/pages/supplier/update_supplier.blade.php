@extends('admin/index')
@section('content')
<div class="wrapper">
<div class="content-wrapper">
    <section class="content">
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">ແກ້ໄຂຂໍ້ມູນຜູ້ສະໜອງ</h3>
          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                    title="Collapse">
              <i class="fa fa-minus"></i></button>
          </div>
        </div>
        <div class="box-body col-md-12">
        <!-- Start here -->
        <form role="form-group" action="{{URL::to('/update-supplier', $supplier_info->supplier_id)}}">
                     {{  csrf_field() }}
                     <fieldset>
                    <div class="box-body">
                      <div class="form-group col-md-6">
                        <label for="supplier_name">ຊື່</label>
                        <input type="text" class="form-control" id="supplier_name" name="supplier_name" placeholder="ຊື່..." value="{{$supplier_info->supplier_name}}">
                      </div>
                      <div class="form-group col-md-6">
                        <label for="supplier_surname">ນາມສະກຸນ</label>
                        <input type="text" class="form-control" id="supplier_surname" name="supplier_surname" placeholder="ນາມສະກຸນ..." value="{{$supplier_info->supplier_surname}}">
                      </div>

                      <div class="form-group col-md-12">
                        <label for="supplier_address">ທີຢູ່ປັດຈຸບັນ</label>
                        <input type="text" class="form-control" id="supplier_address" name="supplier_address" placeholder="ທີຢູ່ປັດຈຸບັນ..." value="{{$supplier_info->supplier_address}}">
                      </div>

                      <div class="form-group col-md-6">
                        <label for="supplier_email">ອິເມວຕິດຕໍ່</label>
                        <input type="email" class="form-control" id="supplier_email" name="supplier_email" placeholder="ອິເມວຕິດຕໍ່..." value="{{$supplier_info->supplier_email}}">
                      </div>

                      <div class="form-group col-md-6">
                        <label for="supplier_phone">ເບິໂທຕິດຕໍ່</label>
                        <input type="text" class="form-control" id="supplier_phone" name="supplier_phone" placeholder="ເບິໂທຕິດຕໍ່..." value="{{$supplier_info->supplier_phone}}">
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
          <!-- End here -->
          </div>
      </div>
    </section>   
  </div>
</div>
@endsection