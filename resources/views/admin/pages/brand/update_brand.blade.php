@extends('admin/index')
@section('content')
<div class="wrapper">
<div class="content-wrapper">
    <section class="content">

      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">ແກ້ໄຂຂໍ້ມູນຍີຫໍ້ສິນຄ້າ</h3>
          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                    title="Collapse">
              <i class="fa fa-minus"></i></button>
          </div>
        </div>
        <div class="box-body">
        <div class="col-md-9">
                 <p> 
                  <?php
                  $message=Session::get('message');
                  if($message){
                    echo $message;
                    Session::put('message',null);
                  }
                  ?>
                </p>
                 </div>
        <form action="{{URL::to('/update-brand',$brand_info->brand_id)}}">
        {{  csrf_field() }}
        <div class="box-body col-md-12">
            <div class="form-group col-md-6">
                 <label for="brand_name">ຍີຫໍ້ສິນຄ້າ</label>
                 <input type="text" class="form-control" name="brand_name" placeholder="ຍີຫໍ້ສິນຄ້າ" value="{{$brand_info->brand_name}}">
            </div>
            <div class="form-group col-md-6">
               <label for="brand_desc">ລາຍລະອຽດ</label><br>
               <div class="controls">
               <textarea class="cleditor" name="brand_desc" cols="71" placeholder="ລາຍລະອຽດ....">{{$brand_info->brand_desc}}</textarea>
               </div>
            </div>
            <div class="form-group col-md-6">
            <label>
                <input type="checkbox" name="publication_status" value="1"> ເປິດເປັນສາທາລະນະ
            </label>
            </div>
        </div>
        <div class="modal-footer">
             <button type="button" class="btn btn-danger pull-left">ກັບຄຶນ</button>
             <button type="submit" class="btn btn-success">ບັນທຶກ</button>
         </div>
        </form>




        </div>
      </div>
    </section>   
  </div>
</div>
@endsection