@extends('admin/index')
@section('content')
<div class="wrapper">
<div class="content-wrapper">
    <section class="content">
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">ປະເພດພະນັກງານ</h3>
          <div class="box-tools pull-right">
            <button class="btn btn-success" data-toggle="modal" data-target="#CatModal">ເພີ່ມປະເພດພະນັກງານ</button>
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
                  <th>ປະເພດພະນັກງານ</th>
                  <th>ລາຍລະອຽດຜູ້ໃຊ້</th>
                  <th>ຕົວເລຶອກ</th>
                </tr>
                </thead>
                @foreach( $all_typeEmployee_info as $v_typeEmployee )
                <tbody>
                <tr>
                  <td>{{$v_typeEmployee->type_id}}</td>
                  <td>{{$v_typeEmployee->type_employee}}</td>
                  <td>{{$v_typeEmployee -> use_role}}</td>
                  <td>

                     <a href="{{URL::to('/edit-typeEmployee/'.$v_typeEmployee -> type_id)}}" class="link"><i class="btn fa fa-edit btn-primary"></i></a> 
                     <a href="{{URL::to('/delete-typeEmployee/'.$v_typeEmployee -> type_id)}}" id="delete" class="link"><i class="btn fa fa-trash btn-danger"></i></a>
                  </td>
                </tr>
              </tbody>
              @endforeach
              </table>


           <!-- Start New Modal here -->
           <div class="modal fade" id="CatModal" tabindex="-1" role="dialog" aria-labelledby="CatModalLabel" aria-hidden="true">
               <div class="modal-dialog modal-dialog-centered" role="document">
                  <div class="modal-content">
                     <div class="modal-header">
                     <h5 class="modal-title" id="CatModalLabel">ສ້າງຂໍ້ມູນປະເພດພະນັກງານ</h5>
                     </div>
                     <div class="modal-body">

                     <form role="form" action="{{URL::to('/add-typeEmployee')}}" method="post" >
                     {{  csrf_field() }}
                     <fieldset>
                    <div class="box-body">
                      <div class="form-group col-md-12">
                        <label for="type_employee">ປະເພດພະນັກງານ</label>
                        <input type="text" class="form-control" id="type_employee" name="type_employee" placeholder="ປະເພດພະນັກງານ" required="required">
                      </div>

                      <div class="form-group col-md-12">
                        <label for="use_role">ລາຍລະອຽດຜູ້ໃຊ້</label><br>
                        <div class="controls">
                        <textarea class="cleditor" name="use_role" id="use_role" cols="71" placeholder="ລາຍລະອຽດຜູ້ໃຊ້...." required="required"></textarea>
                        </div>
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
