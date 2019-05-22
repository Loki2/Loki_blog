@extends('admin/index')
@section('content')
<div class="wrapper">
<div class="content-wrapper">
    <section class="content">
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">ຍີຫໍ້ສິນຄ້າ</h3>
          <div class="box-tools pull-right">
            <button class="btn btn-success" data-toggle="modal" data-target="#CatModal">ເພີ່ມຍີຫໍ້ສິນຄ້າ</button>
            <!-- <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button> -->
          </div>
        </div>
        <p class="col-md-8"> 
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
                  <th>ຍີຫໍ້ສິນຄ້າ</th>
                  <th>ລາຍລະອຽດ</th>
                  <th>ສະຖານະ</th>
                  <th>ຕົວເລຶອກ</th>
                </tr>
              </thead>
              <tbody>
                @foreach( $all_brand_info as $v_brand )
                <tr>
                  <td>{{ $v_brand -> brand_id }}</td>
                  <td>{{ $v_brand -> brand_name }}</td>
                  <td>{{ $v_brand -> brand_desc }}</td>
                  <td>
                  @if($v_brand -> publication_status==1 )
                    <span class="label label-success">Actived</span>
                    @else
                    <span class="label label-warning">Unactive</span>
                    @endif
                  </td>
                  <td>
                  <!-- <a href="#" class="link"><i class="btn fa fa-check btn-success "></i></a>  -->
                  @if($v_brand -> publication_status==1)
                     <a href="{{URL::to('/unactive-brand/'.$v_brand->brand_id)}}" class="link"><i class="btn fa fa-check btn-success "></i></a> 
                  @else
                  <a href="{{URL::to('/active-brand/'.$v_brand->brand_id)}}" class="link"><i class="btn fa fa-times-circle btn-warning "></i></a>
                  @endif
                     <a href="{{URL::to('/edit-brand/'.$v_brand->brand_id)}}" class="link"><i class="btn fa fa-edit btn-primary"></i></a> 
                     <a href="{{URL::to('/delete-brand/'.$v_brand->brand_id)}}" id="delete" class="link"><i class="btn fa fa-trash btn-danger"></i></a>
                  </td>
                  @endforeach
                </tr>
              </tbody>
              </table>
            </div>
              <!-- Start New Modal here -->
              <div class="modal fade" id="CatModal" tabindex="-1" role="dialog" aria-labelledby="CatModalLabel" aria-hidden="true">
               <div class="modal-dialog modal-dialog-centered" role="document">
                  <div class="modal-content">
                     <div class="modal-header">
                     <h5 class="modal-title" id="CatModalLabel">ສ້າງຂໍ້ມູນຍີຫໍ້ສິນຄ້າໃຫມ່</h5>
                     </div>
                     <div class="modal-body">


                     <form role="form" action="{{URL::to('/add-brand')}}" method="post">
                     {{  csrf_field() }}
                    <div class="box-body">
                      <!-- <div class="form-group col-md-6">
                        <label for="brand_id">ລະຫັດ</label>
                        <input type="text" class="form-control" name="brand_id" id="brand_id" placeholder="ລະຫັດ">
                      </div> -->
                      <div class="form-group col-md-8">
                        <label for="brand">ຍີຫໍ້ສິນຄ້າ</label>
                        <input type="text" class="form-control" name="brand_name" id="brand_name" placeholder="ຍີຫໍ້ສິນຄ້າ" required="require">
                      </div>

                      <div class="form-group col-md-12">
                        <label for="cat_desc">ລາຍລະອຽດ</label><br>
                        <div class="controls">
                        <textarea class="cleditor" name="brand_desc" cols="71" placeholder="ລາຍລະອຽດ...." required="require" required="require"></textarea>
                        </div>
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
          <!-- End here -->
        </div>
      </div>
    </section>   
  </div>
</div>
@endsection
