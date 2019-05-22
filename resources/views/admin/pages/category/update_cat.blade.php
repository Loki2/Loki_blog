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
        <form action="{{URL::to('/update-category',$category_info->cat_id)}}">
        {{  csrf_field() }}
        <div class="box-body col-md-12">
            <div class="form-group col-md-6">
                 <label for="cat_name">ປະເພດສິນຄ້າ</label>
                 <input type="text" class="form-control" name="cat_name" placeholder="ປະເພສິນຄ້າ" value="{{$category_info->cat_name}}">
            </div>
            <div class="form-group col-md-6">
               <label for="cat_desc">ລາຍລະອຽດ</label><br>
               <div class="controls">
               <textarea class="cleditor" name="cat_desc" cols="71" placeholder="ລາຍລະອຽດ....">{{$category_info->cat_desc}}</textarea>
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