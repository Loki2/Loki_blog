@extends('admin/index')
@section('content')
<div class="wrapper">
<div class="content-wrapper">
    <section class="content">

      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">ຂໍ້ມູນຫົວໜ່ວຍ</h3>
          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                    title="Collapse">
              <i class="fa fa-minus"></i></button>
          </div>
        </div>
        <div class="box-body">
           <!-- Starting table here -->
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">ຈັດການຫົວໜ່ວຍ</h3>

              <div class="box-tools">
                  <button class="btn btn-success" data-toggle="modal" data-target="#CatModal">ເພີ່ມຫົວໜ່ວຍ</button>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
            <table id="example" class="table table-striped table-bordered" style="width:100%">
                <thead>
                <tr>
                  <th>ລະຫັດ</th>
                  <th>ຊື່ຫົວໜ່ວຍ</th>
                  <th>ສະຖານະ</th>
                  <th>ຕົວເລຶອກ</th>
                </tr>
                </thead>
                <tbody>
                @foreach( $all_unit_info as $v_unit )
                <tr>
                  <td>{{ $v_unit -> unit_id }}</td>
                  <td>{{ $v_unit -> unit_name }}</td>
                  <td>
                  @if($v_unit -> publication_status==1 )
                    <span class="label label-success">Actived</span>
                    @else
                    <span class="label label-warning">Unactive</span>
                    @endif
                  </td>
                  
                  <td>
                  @if($v_unit -> publication_status==1)
                     <a href="{{URL::to('/unactive-unit/'.$v_unit->unit_id)}}" class="link"><i class="btn fa fa-check btn-success "></i></a> 
                  @else
                  <a href="{{URL::to('/active-unit/'.$v_unit->unit_id)}}" class="link"><i class="btn fa fa-times-circle btn-warning "></i></a>
                  @endif


                    <a href="{{URL::to('/edit-unit/'.$v_unit->unit_id)}}" class="link"><i class="btn fa fa-edit btn-primary"></i></a> 
                     <a href="{{URL::to('/delete-unit/'.$v_unit->unit_id)}}" id="delete" class="link"><i class="btn fa fa-trash btn-danger"></i></a>
                  </td>
                  @endforeach
                </tr>
              </tbody></table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
         <!-- End table here -->

            <!-- Start New Modal here -->
               <div class="modal fade" id="CatModal" tabindex="-1" role="dialog" aria-labelledby="CatModalLabel" aria-hidden="true">
               <div class="modal-dialog modal-dialog-centered" role="document">
                  <div class="modal-content">
                     <div class="modal-header">
                     <h5 class="modal-title" id="CatModalLabel">ສ້າງຂໍ້ມູນຫົວໜ່ວຍ</h5>
                     </div>
                     <div class="modal-body">


                     <form role="form" action="{{URL::to('add-unit')}}" method="post">
                     {{  csrf_field() }}
                    <div class="box-body">
                      <!-- <div class="form-group col-md-6">
                        <label for="unit_id">ລະຫັດ</label>
                        <input type="text" class="form-control" id="unit_id" placeholder="ລະຫັດ">
                      </div> -->
                      <div class="form-group col-md-6">
                        <label for="category">ຊື່ຫົວໜ່ວຍ</label>
                        <input type="text" class="form-control" id="unit_name" name="unit_name" placeholder="ຊື່ຫົວໜ່ວຍ">
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
                     <button type="submit" class="btn btn-primary">ບັນທຶກ</button>
                     </div>
                  </form>
   
                  </div>
               </div>
               </div>
                <!-- End New Modal here -->

        
        </div>
      </div>
    </section>   
  </div>
</div>
@endsection