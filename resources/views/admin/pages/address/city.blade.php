@extends('admin/index')
@section('content')
<div class="wrapper">
<div class="content-wrapper">
    <section class="content">

      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">ຂໍ້ມູນຕົວເມີ່ອງ</h3>
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
              <h3 class="box-title">ຈັດການຂໍ້ມູນຕົວເມີ່ອງ</h3>

              <div class="box-tools">
                  <button class="btn btn-success" data-toggle="modal" data-target="#CatModal">ເພີ່ມເມື່ອງ</button>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
                <tbody><tr>
                  <th>ລະຫັດ</th>
                  <th>ຊື່ຕົວເມຶ່ອງ</th>
                  <th>ສະຖານະ</th>
                  <th>ຕົວເລຶອກ</th>
                </tr>
                <tr>
                  <td>183</td>
                  <td>John Doe</td>
                  <td><span class="label label-success">Approved</span></td>
                  <td>
                     <a href="#" class="link"><i class="btn fa fa-edit btn-primary"></i></a> 
                     <a href="#" class="link"><i class="btn fa fa-trash btn-danger"></i></a>
                  </td>
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
                     <h5 class="modal-title" id="CatModalLabel">ສ້າງຂໍ້ມູນປະເພດສິນຄ້າໃຫມ່</h5>
                     </div>
                     <div class="modal-body">


                     <form role="form">
                    <div class="box-body">
                      <div class="form-group col-md-6">
                        <label for="cat_id">ລະຫັດ</label>
                        <input type="text" class="form-control" id="cat_id" placeholder="ລະຫັດ">
                      </div>
                      <div class="form-group col-md-6">
                        <label for="category">ຊື່ເມື່ອງ</label>
                        <input type="password" class="form-control" id="category" placeholder="ຊື່ເມື່ອງ">
                      </div>
                      <div class="checkbox form-group col-md-6">
                        <label>
                          <input type="checkbox">ເປິດເປັນສາທາລະນະ
                        </label>
                      </div>
                    </div>
                    <!-- /.box-body -->
                  </form>



                     </div>
                     <div class="modal-footer">
                     <button type="button" class="btn btn-danger" data-dismiss="modal">ກັບຄຶນ</button>
                     <button type="button" class="btn btn-primary">ບັນທຶກ</button>
                     </div>
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