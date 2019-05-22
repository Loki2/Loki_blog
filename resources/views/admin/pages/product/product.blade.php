@extends('admin/index')
@section('content')
<div class="wrapper">
<div class="content-wrapper">
    <section class="content">
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">ຈັດການຂໍ້ມູນສິນຄ້າ</h3>
          <div class="box-tools pull-right">
                  <button class="btn btn-success" data-toggle="modal" data-target="#CatModal">ເພີ່ມສິນຄ້າ</button>
                  <button class="btn btn-primary" data-toggle="modal" data-target="#CatModal">Import</button>
          </div>
        </div>
        <div class="box-body">
        <!-- Start here -->
          <table id="example" class="table table-striped table-bordered" style="width:100%">
                <thead>
                <tr>
                    <th>ລະຫັດສິນຄ້າ</th>
                    <th>ຮູບພາບ</th>
                    <th>Bar Code</th>
                    <th>ຊື່ສິນຄ້າ</th>
                    <th>ປະເພດສິນຄ້າ</th>
                    <th>ຍີຫໍ້ສິນຄ້າ</th>
                    <th>ຫົວໜ່ວຍ</th>
                    <th>ລາຄາ/ຫົວໜ່ວຍ</th>
                    <th>ຜູ້ສະໜອງ</th>
                    <th>ສະຖານະ</th>
                    <th>ຕົວເລຶອກ</th>
                  </tr>
                </thead>
                <tbody>
                <tr>
                  <td>aaa</td>
                  <td>aaa</td>
                  <td>aaa</td>
                  <td>aaa</td>
                  <td>aaa</td>
                  <td>aaa</td>
                  <td>aaa</td>
                  <td>aaa</td>
                  <td>-</td>
                  <td>-</td>
                  <td>
                     <a href="#" class="link"><i class="btn fa fa-edit btn-primary"></i></a> 
                     <a href="#" class="link"><i class="btn fa fa-trash btn-danger"></i></a>
                  </td>
                </tr>
                </tbody>
              </table>
            </div>
             <!-- Start Modal Form here  -->
            <div class="modal fade" id="CatModal" tabindex="-1" role="dialog" aria-labelledby="CatModalLabel" aria-hidden="true">
               <div class="modal-dialog modal-dialog-centered" role="document">
                  <div class="modal-content">
                     <div class="modal-header">
                     <h5 class="modal-title" id="CatModalLabel">ສ້າງຂໍ້ມູນສິນຄ້າໃຫມ່</h5>
                     </div>
                     <div class="modal-body">
                     <form role="form">
                    <div class="box-body">
                      <div class="form-group col-md-6">
                        <label for="cat_id">ລະຫັດສິນຄ້າ</label>
                        <input type="text" class="form-control" id="cat_id" placeholder="ລະຫັດສິນຄ້າ">
                      </div>
                      <div class="form-group col-md-6">
                        <label for="cat_id">ລະຫັດບາໂຄດ</label>
                        <input type="text" class="form-control" id="cat_id" placeholder="ລະຫັດບາໂຄດ">
                      </div>
                      <div class="form-group col-md-6">
                        <label for="category">ຊື່ສິນຄ້າ</label>
                        <input type="password" class="form-control" id="category" placeholder="ຊື່ສິນຄ້າ">
                      </div>
                      <div class="form-group col-md-6">
                        <label for="cat_id">ປະເພດສິນຄ້າ</label>
                        <input type="text" class="form-control" id="cat_id" placeholder="ປະເພດສິນຄ້າ">
                      </div>
                      <div class="form-group col-md-6">
                        <label for="category">ຍີຫໍ້ສິນຄ້າ</label>
                        <input type="password" class="form-control" id="category" placeholder="ຍີຫໍ້ສິນຄ້າ">
                      </div>
                      <div class="form-group col-md-6">
                        <label for="cat_id">ລາຄາ/ຫົວໜ່ວຍ</label>
                        <input type="text" class="form-control" id="cat_id" placeholder="ລາຄາ/ຫົວໜ່ວຍ">
                      </div>
                      <div class="form-group col-md-6">
                        <label for="category">ລາຄາລວມ</label>
                        <input type="password" class="form-control" id="category" placeholder="ລາຄາລວມ">
                      </div>
                      <div class="form-group col-md-6">
                        <label for="cat_id">ຈຳນວນໃນສະຕັອກ</label>
                        <input type="text" class="form-control" id="cat_id" placeholder="ຈຳນວນໃນສະຕັອກ">
                      </div>
                      <div class="form-group col-md-6">
                        <label for="category">ຜູ້ສະໜອງ</label>
                        <input type="password" class="form-control" id="category" placeholder="ຜູ້ສະໜອງ">
                      </div>
                      

                      <div class="form-group col-md-12">
                        <label for="cat_desc">ລາຍລະອຽດ</label>
                        <input type="email" class="form-control" id="cat_desc" placeholder="ລາຍລະອຽດ">
                      </div>
                      <div class="form-group col-md-6">
                        <label for="InputFile">ເລຶອກຮູບພາບ</label><br>
                        <a href="{{url('/image_*')}}" class="btn btn-primary">ເພີ່ມຮູບພາບ</a>
                        <!-- <input type="file" id="InputFile"> -->
                        <p class="help-block">file url</p>
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
                     <button type="button" class="btn btn-danger pull-left">ກັບຄຶນ</button>
                     <button type="button" class="btn btn-primary pull-right">ບັນທຶກ</button>
                     </div>
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