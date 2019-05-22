@extends('admin/index')
@section('content')
<div class="wrapper">
<div class="content-wrapper">
    <section class="content">
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">ແກ້ໄຂຂໍ້ມູນປະເພດພະນັກງານ</h3>
          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                    title="Collapse">
              <i class="fa fa-minus"></i></button>
          </div>
        </div>
        <div class="box-body">
        <!-- Start here -->
        <form action="{{URL::to('/update-typeEmployee',$typeEmployee_info->type_id)}}">
        {{  csrf_field() }}
        <div class="box-body">
            <div class="form-group col-md-6">
                 <label for="type_employee">ປະເພດພະນັກງານ</label>
                 <input type="text" class="form-control" name="type_employee" placeholder="" value="{{ $typeEmployee_info -> type_employee}}">
            </div>
            <div class="form-group col-md-6">
               <label for="use_role" >ລາຍລະອຽດຜູ້ໃຊ້</label><br>
               <div class="controls">
               <textarea class="cleditor" name="use_role" id="use_role" cols="71" placeholder="ລາຍລະອຽດ....">{{ $typeEmployee_info -> use_role}}</textarea>
               </div>
            </div>
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
